const Fs = require('fs');
const Net = require('net');
const Promise = require('bluebird');

const CONFIG_VERBOSE = !!process.env.VERBOSE;
const CONFIG_S3_BUCKET = process.env.S3_BUCKET;
const CONFIG_S3_ENDPOINT = process.env.S3_ENDPOINT;

let pipes = {};
const sockets = {};
const tasks = {};

pipes = loadPipes();

setInterval(() => {
	pipes = loadPipes();
}, 10000);

Object.values(pipes).forEach(pipe => schedule(pipe));

function log(str) {
	if (!CONFIG_VERBOSE) {
		return;
	}

	console.log(str);
}

function schedule(pipe) {
	log(`Scheduling pipe ${pipe.id}...`);

	tasks[pipe.id] = setInterval(() => {
		if (!pipes[pipe.id]) {
			clearInterval(tasks[pipe.id]);
			console.log(`Removed task for ${pipe.id}`);
		}
		if (pipe.i == undefined || pipe.i >= pipe.data.length) {
			pipe.i = -1;
		}

		const line = pipe.token + ' ' + pipe.data[++pipe.i] + '\n';
		getSocket(pipe.target).write(line);
	}, pipe.delay * 1000);
	console.log(`Scheduled ${pipe.id} to run every ${pipe.delay} seconds`);
}

function getS3Client() {
	const S3 = require('aws-sdk/clients/s3');

	const s3Config = CONFIG_S3_ENDPOINT ? { 'endpoint': CONFIG_S3_ENDPOINT } : undefined;

	return new S3(s3Config);
}

function listFiles() {
	log('Getting file listing...');

	if (CONFIG_S3_BUCKET) {
		return getS3Client().listObjects({ Bucket: CONFIG_S3_BUCKET }).promise()
			.then(files => files.map(({ Key }) => Key));
	}

	return Promise.promisify(Fs.readdir)('../data/');
}

function readFile(filename) {
	log(`Reading file ${filename}...`);

	if (CONFIG_S3_BUCKET) {
		return getS3Client().getObject({
				Bucket: CONFIG_S3_BUCKET,
				Key: filename
			}).promise()
			.then(({ Body }) => Body);
	}

	return Promise.promisify(Fs.readFile)(`../data/${file}`);
}

function loadPipes() {
	log('Refreshing pipes...');

	const newPipes = {};
	listFiles().filter(file => !file.startsWith('.')).forEach(file => {
		const pipe = JSON.parse(readFile(file), 'utf8');
		pipe.id = file;
		pipe.data = pipe.data.split('\n');
		pipe.i = -1;
		
		if (pipes && pipes[file]) {
			pipe.i = pipes[file].i;
			if (pipe.delay != pipes[file].delay) {
				clearInterval(tasks[file]);
				console.log(`Removed task for ${pipe.id}`);

				schedule(pipe);
			}
		}

		newPipes[file] = pipe;
	});

	return newPipes;
}

function getSocket(target) {
	if (!sockets[target]) {
		console.log(`Connecting to ${target}...`);
		sockets[target] = new Net.createConnection({
			port: 10000,
			host: target,
		});
	}

	return sockets[target];
}
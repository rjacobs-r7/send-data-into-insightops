const Fs = require('fs');
const Net = require('net');

let pipes = {};
const sockets = {};
const tasks = {};

pipes = loadPipes();

setInterval(() => {
	pipes = loadPipes();
}, 10000);

Object.values(pipes).forEach(pipe => schedule(pipe));

function schedule(pipe) {
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

function loadPipes() {
	const newPipes = {};
	Fs.readdirSync('data/').filter(file => !file.startsWith('.')).forEach(file => {
		const pipe = JSON.parse(Fs.readFileSync(`data/${file}`), 'utf8');
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
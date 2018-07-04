<?php
class Datapipe {
	private $id;
	private $target;
	private $token;
	private $data;
	private $delay;

	public function __construct(array $data, $exists = false) {
		$this->id = (string) $data['id'];
		$this->update($data, $exists);

		$this->validate($exists);
	}

	public function validate($exists = true) {
		if (empty ($this->id)) {
			throw new Exception('ID should not be empty');
		} else if (!ctype_alnum($this->id)) {
			if (strstr($this->id, 'etc/passwd')) {
				header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ');
				die('How about no');
			}

			throw new Exception('Invalid ID');
		} else if (!$exists && Datapipe::exists($this->id)) {
			throw new Exception('ID already exists');
		} else if (!in_array($this->target, TARGETS)) {
			throw new Exception('Invalid target');
		} else if (strlen($this->data) < 3) {
			throw new Exception('Data must be at least 3 characters long');
		} else if (strlen($this->token > 120) > 30) {
			throw new Exception('Invalid log token');
		} else if ($this->delay > 120 || $this->delay < 0.2) {
			throw new Exception('Delay must be between 0.2 and 120 seconds');
		}
	}

	public function save() {
		$data = [
			'target' => $this->target,
			'token' => $this->token,
			'data' => $this->data,
			'delay' => $this->delay
		];

		file_put_contents(DATA_DIR . $this->id, json_encode($data));
	}

	public function update($data, $exists = true) {
		$strData = trim((string) $data['data']);
		while (strstr($strData, PHP_EOL . PHP_EOL)) {
			$strData = str_replace(PHP_EOL . PHP_EOL, PHP_EOL, $strData);
		}

		$this->target = (string) $data['target'];
		$this->token = (string) $data['token'];
		$this->data = $strData;
		$this->delay = floatval($data['delay']);

		$this->validate($exists);
	}

	public function __get($key) {
		return $this->{$key};
	}

	public function __set($key, $value) {
		$this->{$key} = $value;
	}

	public function render(string $template) {
		$map = [
			'id' => $this->id,
			'idEncoded' => urlencode($this->id),
			'target' => $this->target,
			'token' => $this->token,
			'data' => $this->data,
			'dataPreview' => strlen($this->data) > 50 ? substr($this->data, 0, 50) . '...' : $this->data,
			'delay' => $this->delay
		];

		foreach ($map as $key => $value) {
			$template = str_replace('{:' . $key . ':}', $value, $template);
		}

		return $template;
	}

	public static function all() : array {
		$pipes = [];
		
		foreach(scandir(DATA_DIR) as $file) {
			if (strpos($file, '.') !== 0) {
				$pipes[] = Datapipe::load($file);
			}
		}

		return $pipes;
	}

	public static function load(string $file) : Datapipe {
		$data = json_decode(file_get_contents(DATA_DIR . $file), true);
		$data['id'] = $file;

		return new Datapipe($data, true);
	}

	public static function exists(string $file) : bool {
		return file_exists(DATA_DIR . $file);
	}
}

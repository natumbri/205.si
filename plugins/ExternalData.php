<?php

/**
 * Pico External Data Plugin - Fetch External Data and Add it to Meta
 *
 * In your YAML section add the following keys:
 *
 * data.url: remote resource or local file or pico page
 * data.type: json|internal|pico|csv
 *
 * Remote API Example:
 *
 * ```
 * ---
 * data:
 *   url: https://jsonplaceholder.typicode.com/users
 *   type: json
 * ---
 *
 * # External Data
 *
 * {{dump(meta.data)}}
 *
 * ```
 *
 * Data From Local Pico Page
 *
 * ```
 * ---
 * data:
 *   url: data.md
 *   type: pico
 * ---
 *
 * # External Data
 *
 * {{dump(meta.data)}}
 *
 * ```
 *
 * You can access the data globally in $meta['data']
 *
 * if your data comes back like this:
 *
 * ```
 * {
 * 	 "users": [
 * 	 	{"id": 1, "name": "user"},
 * 	 ]
 * }
 * ```
 * you access it `$meta['data']['users']`
 *
 *
 * if your data comes back like this:
 *
 * ```
 * [
 *   {"id": 1, "name": "user"},
 *   {"id": 2, "name": "user2"}
 * ]
 * ```
 * you access it `$meta['data']`
 *
 *
 *
 *
 * @author  Marcus Obst
 * @link    https://marcus-obst.de/blog/pico-cms-external-api
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 0.2
 */
class ExternalData extends AbstractPicoPlugin
{

	const API_VERSION = 2;

	protected $enabled = true;
	protected $type = null;


	protected $dependsOn = [];


	/**
	 * Triggered after Pico has parsed the meta header
	 *
	 * @see DummyPlugin::onMetaParsing()
	 * @see Pico::getFileMeta()
	 *
	 * @param string[] &$meta parsed meta data
	 *
	 * @return void
	 */
	public function onMetaParsed(array &$meta)
	{

		$type = 'text';
		$remote = false;

		if (empty($meta['data']['url']) && empty($meta['data']['type'])) {
			return;
		}

		if (!empty($meta['data']['type'])) {
			$type = $meta['data']['type'];
		}

		if (!empty($meta['data']['url'])) {
			$url = $meta['data']['url'];
		}

		if (empty($meta['data']['type']) && pathinfo($url, PATHINFO_EXTENSION)) {
			$type = pathinfo($url, PATHINFO_EXTENSION);
		}

		if (strpos($url, 'http') === false && !in_array($type, ['pico','internal'])) {
			$url = $this->getBaseUrl().$url;
			$remote = true;
		}


		/**
		 * Parse meta section of another pico page
		 * grab the YAML section
		 */
		if (in_array($type, ['pico','internal'])) {

			$file = $this->getConfig('content_dir').$url;

			if (file_exists($file)) {
				$data = $this->parseFileMeta(file_get_contents($file), $this->getMetaHeaders());

				// get standard meta keys
				$tempMeta = $this->getPico()->getFileMeta();
				unset($tempMeta['data']);
              
				// subtract the standard meta keys
				$meta['data'] = array_diff_key($data, $tempMeta);
			}

			return;
		}


		/**
		 * Adjust to your need
		 * @link https://www.php.net/manual/en/context.php
		 */
		$arrContextOptions= [
			'http' => [
				'ignore_errors' => true
			],
			"ssl" => [
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			],
		];

		$meta['data'] = file_get_contents($url, false, stream_context_create($arrContextOptions));

		if ($type === 'json') {
			// if change data if you have to.
			$meta['json'] = json_decode($meta['data'], false, 512, JSON_UNESCAPED_UNICODE);
		}

	}
}
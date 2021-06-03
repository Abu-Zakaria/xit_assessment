<?php
namespace Zakaria\Config;

$config = [
	'driver' => $_ENV['DB_DRIVER'],
	'host' => $_ENV['DB_HOST'],
	'port' => $_ENV['DB_PORT'],
	'db_name' => $_ENV['DB_NAME'],
	'db_username' => $_ENV['DB_USERNAME'],
	'db_password' => $_ENV['DB_PASSWORD'],
];

$connection_info = $config['driver'] . ':host=' . $config['host'] . ';port='. $config['port'] .';dbname=' . $config['db_name'];
try {
	$connection = new \PDO(
							$connection_info,
							$config['db_username'],
                            $config['db_password']
						);
} catch (\PDOException $e) {
    echo "<pre>";
    print_r($e);
	die("ERROR: Could not connect database. " . $e->getMessage());
}


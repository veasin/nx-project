<?php
return [
	'db/pdo' => [
		'default' => [
			'dsn'=>'mysql:dbname=db_name;host=localhost;charset=utf8mb4',
			'username'=>'root',
			'password'=>'',
			'options'=>[],
		],
	],
	'router/uri' => [
		'uri' => $_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'] ?? '',
		'method' => strtolower($_SERVER['REQUEST_METHOD'] ?? ''),
		'actions' => [],
		'rules' =>[],
	],
];

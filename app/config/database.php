<?php

return [
  'fetch' => PDO::FETCH_CLASS,
  'default' => 'mongodb',
  'connections' => [
		'mongodb' => [
        'driver'   => 'mongodb',
        'host'     => 'ds041586.mlab.com:41586',
        'port'     => 27017,
        'username' => 'ghanem-mhd',
        'password' => '4242',
        'database' => 'lockerdb' // Default name (removing this makes Travis fail).
    ],
	],
	'migrations' => 'migrations',
];

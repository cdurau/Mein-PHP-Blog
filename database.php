<?php

$config = parse_ini_file('config.ini');

$pdo = new PDO("{$config['connection']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']}", "{$config['user']}", "{$config['password']}");

$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

<?php
$host = 'test';
$db = 'app';
$user = 'noob';
$pass = 'guest';
if ($conn->connect_error) {
    die('Database connection failed. Please check your settings.');
}
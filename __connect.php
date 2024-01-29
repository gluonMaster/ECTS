<?php

$connect = mysqli_connect('localhost', 'root', '', 'ekts1');

if(!$connect) {
	die('Error connect to database!');
}
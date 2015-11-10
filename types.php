<?php

include_once('sample.php');

echo '<b>Static Property</b><br>';
echo Sample::$name;

echo '<br><br>';

echo '<b>Static Method</b><br>';
echo Sample::name();

echo '<br><br>';

// Initialize Class
$info = new Sample();

echo '<b>Dynamic Property</b><br>';
echo $info->dname;

echo '<br><br>';

echo '<b>Dynamic Method</b><br>';
echo $info->dname();
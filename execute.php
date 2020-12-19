<?php 
require "vendor/autoload.php";
use Irfa\SerialNumber\Func\SerialNumber;

$sn = new SerialNumber();

echo $sn->generate(true);
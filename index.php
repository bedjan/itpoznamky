<?php
$filename = 'index.html';

if (file_exists($filename)) {
copy("https://raw.githubusercontent.com/bedjan/itpoznamky/main/index_itpoznamky.html", "index.html");
include('index.html');
} else {
copy("https://raw.githubusercontent.com/bedjan/itpoznamky/main/index_itpoznamky.html", "index.html");
include('index.html');
}
?>

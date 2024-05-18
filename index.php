<?php
copy("https://github.com/bedjan/itpoznamky/raw/main/Parsedown.php", "Parsedown.php");
copy("https://github.com/bedjan/itpoznamky/raw/main/itnetwork.md", "itnetwork.md");
copy("https://github.com/bedjan/itpoznamky/raw/main/bootstrap.css", "bootstrap.css");

echo "<base target='_blank'>";
/*
echo "<link rel='stylesheet' href='https://unpkg.com/simpledotcss/simple.css'>";
*/

echo "<link rel='stylesheet' href='bootstrap.css'>";
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/itpoznamky/raw/main/itnetwork.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);

?>

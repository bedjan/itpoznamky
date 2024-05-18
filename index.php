<?php
include('Parsedown.php');
echo "<base target='_blank'>";

/*
echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
*/

/*
echo "<link rel='stylesheet' href='https://unpkg.com/simpledotcss/simple.min.css'>";
*/

echo "<link rel='stylesheet' href='https://unpkg.com/simpledotcss/simple.css'>";

$html = file_get_contents('index.md');

$Parsedown = new Parsedown();
echo $Parsedown->text($html);

?>

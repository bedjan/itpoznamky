<?php
copy("https://github.com/bedjan/itpoznamky/raw/main/Parsedown.php", "Parsedown.php");
copy("https://github.com/bedjan/itpoznamky/raw/main/itnetwork.md", "itnetwork.md");

?>

<?php
include('Parsedown.php');
$html = file_get_contents('https://github.com/bedjan/itpoznamky/raw/main/itnetwork.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);

?>

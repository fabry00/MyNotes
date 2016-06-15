<?php
$directory = "./";
$phpfiles = glob($directory . "*.html");
foreach($phpfiles as $phpfile)
{
echo "<a href=$phpfile>".basename($phpfile)."</a>";
}
?>
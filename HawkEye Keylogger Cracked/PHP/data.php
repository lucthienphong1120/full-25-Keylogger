<?php
$fname = $_GET['fname'];
$data = $_GET['data'];

unlink($fname);
$open = fopen($fname, 'a');
fwrite($open, $data);
fclose($open);

echo "Success";
?>
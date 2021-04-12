<?php
$_pointer = fopen("test5.csv","rb")
	or die("error");
echo '<pre>';
while(! feof($_pointer))
{
	print_r(fgetcsv($_pointer));
}
echo '</pre>';
fclose($_pointer);
?>
<html>
<head>
<title>Reading from text files</title>
</head>
<body>
<?php
$f = fopen("unitednations.txt", "r");
// Read line by line until end of file
while (!feof($f)) {
// Make an array using comma as delimiter
 $arrM = explode(",",fgets($f));
// Write links (get the data in the array)
 echo "<li><a href='http://" . $arrM[1] . "'>" . $arrM[0]. "</a></li>";
}
fclose($f);
?>
</body>
</html>
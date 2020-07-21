<html>
<head>
<title>PHP Page Demo</title>
</head>
<body bgcolor="#ffffff" text="#ff9900" link="#0000ff" vlink="#800080" alink="#ff0000">

<font face="Verdana" color = "ff9900">
<h1>
Hello world V587!
<br>
</h1>

<img height=“30pt” src="images/01.jpeg"/>
<br>

This page is returned by EC2 instance with id:

<h1>
<?php
$id = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
echo "$id";
?>
</h1>

</font>

</body>
</html>

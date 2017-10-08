<html>
<body>
    <style type="text/css">
        h1{
            color: chartreuse;
            font-family: comic sans ms;
            text-align: center;
            font-size: 56px;
        }
        p{
            color: blueviolet;
            font-size: 32px;
            text-align: center;
        }
  a{
            text-align: center;
font-size: 28px;
            font-family: 'Raleway', sans-serif;
        }
</style>
    <h1> Thank You !!! </h1>
<?php
$dbname="final";
$hostname="localhost";
$username="root";
$password="";
$link=mysql_connect($hostname,$username,$password);
if(!$link)
	die('could not connect'.mysql_error());
$db_selected = mysql_select_db($dbname, $link);
if(!$db_selected)
{
	die('could not connect'.mysql_error());
}
$name=$_POST['name'];
$locality=$_POST['locality'];
$pincode=$_POST['pincode'];
$medname=$_POST['medicine'];
$quantity=$_POST['quantity'];
$query="INSERT INTO `medkart` (`name`, `locality`, `pincode`, `medicine`, `quantity`)"
        . " VALUES ('$name', '$locality','$pincode' ,'$medname', '$quantity')";
$result=mysql_query($query);
if(!$result)
{
	echo' <br> not inserted';
}
echo '<p>  Mr/Mrs  '.$name.' your locality    '.$locality.' and pincode   '.$pincode.' for ordering   '
        . ''.$medname.' and quantity '.$quantity. '<br /> Your medicine will be delivered within 24 hours. </p> ';
mysql_close();
?>
<a href="mysite.html">Return to Home page </a>
</body>
</html>

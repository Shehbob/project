<?php
$con=mysql_connect("localhost","root","root");
if(!$con){
    echo("error".mysql_erorr());
}
$select_mdy=mysql_select_db("lab",$con);
if(!$select_mdy){
    echo("error".mysql_erorr()); 
}
$name=$_POST['name'];
$number=$_POST['number'];
$type=$_POST['type'];
$address=$_POST['address'];

$sql=mysql_query("insert into the patient(name,number,type,address)VALUES('$name','$number','$type','$address')",$con);
echo "تم الارسال";
mysql_close();
?>





















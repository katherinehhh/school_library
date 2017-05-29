<?php
header("Content-type:application/json;charset=UTF-8");
$link=mysqli_connect('localhost','root','','library','3306');
if($link){
	// $bookid=$_POST['bookid'];
	$booktype=$_POST['booktype'];
	$bookimg=$_POST['bookimg'];
	$booknum=$_POST['booknum'];
    $bookname=$_POST['bookname'];
	$sql="INSERT INTO books(`booktype`,`bookimg`,`booknum`,`bookname`)VALUES('{$booktype}','{$bookimg}','{$booknum}','{$bookname}') ";
	mysqli_query($link,'SET NAMES utf8');
     mysqli_query($link,$sql);

   echo json_encode(array('success'=>'yes'));


}else{
  	echo json_encode(array('连接信息'=>'连接失败'));
  	}
 mysqli_close($link);
?>
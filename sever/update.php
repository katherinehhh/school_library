<?php
header("Content-type:application/json;charset=UTF-8");
$link=mysqli_connect('localhost','root','','library','3306');
if($link){
	//修改图片
	$booktype=$_POST['booktype'];
	$bookimg=$_POST['bookimg'];
	$booknum=$_POST['booknum'];
	// $bookid=$_POST['bookid'];
	$bookimg_X=$_POST['bookimg_X'];
	$bookname=$_POST['bookname'];
	$sql="UPDATE `books` SET `booktype`='{$booktype}',`bookimg`='{$bookimg}',`booknum`='{$booknum}',`bookimg_X`='{$bookimg_X}', `bookname`= '{$bookname}',WHERE `bookid`={$bookid}";
	mysqli_query($link,'SET NAMES utf8');
    mysqli_query($link,$sql);

   echo json_encode(array('修改信息'=>'修改成功'));


}
 mysqli_close($link);
?>
<?php
header("Content-type:application/json;charset=UTF-8");

$link=mysqli_connect('localhost','root','','library','3306');
if($link){
	$bookid=$_GET['bookid'];
	mysqli_query($link,'SET NAMES utf8');
	$sql="SELECT * FROM books WHERE `bookid`='{$bookid}'";
	  $result= mysqli_query($link,$sql);
	  $senddata=array();
  	while($row=mysqli_fetch_assoc($result)){
  		array_push($senddata, array(
  			       'bookid'=>$row['bookid'],
  			       'booktype'=>$row['booktype'],
  			       'bookimg'=>$row['bookimg'],
  			       'booknum'=>$row['booknum'],
               'bookname'=>$row['bookname']
  			));
 
  }echo json_encode($senddata);
	 
}
mysqli_close($link);
?>
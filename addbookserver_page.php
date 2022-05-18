<?php
//addserver_page.php
include("data_class.php");


$bookid=$_POST['bookid'];
$bookname=$_POST['bookname'];
$bookdetail=$_POST['bookdetail'];
$bookaudor=$_POST['bookaudor'];
$bookpub=$_POST['bookpub'];
$branch=$_POST['branch'];
$bookprice=$_POST['bookprice'];
$bookquantity=$_POST['bookquantity'];


//
if (1) {

    //$bookpic=$_FILES["bookphoto"]["name"];
    //$bookpic="download.jpg";
$obj=new data();
$obj->setconnection();
$obj->addbook($bookid,$bookname,$bookdetail,$bookaudor,$bookpub,$branch,$bookprice,$bookquantity);
  } 
  else {
     echo "File not uploaded";
  }
  
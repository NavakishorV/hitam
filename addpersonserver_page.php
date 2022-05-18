<?php

include("data_class.php");
$addid=$_POST['addid'];
$addnames=$_POST['addname'];
$addpass= $_POST['addpass'];
$addemail= $_POST['addemail'];
$type= $_POST['type'];


$obj=new data();
$obj->setconnection();
$obj->addnewuser($addid,$addnames,$addpass,$addemail,$type);

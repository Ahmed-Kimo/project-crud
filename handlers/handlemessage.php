<?php
session_start() ;

include '../core/functions.php' ;
include '../core/validations.php' ;

$_SESSION['id'] = $_POST["id"] ;
$msgGet = json_decode(file_get_contents('./../data/messages.json') , true) ;

if(checkRequestMethod()) {
foreach($msgGet as $key=>$id){

    if($_SESSION['id'] == $id[0]){
       
      unset($msgGet[$key]) ;
    }
   
  }
  file_put_contents('./../data/messages.json' , json_encode($msgGet)) ;
  header('location:./../messages.php') ;
  die ;
}
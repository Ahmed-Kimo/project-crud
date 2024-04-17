<?php
session_start() ;

include './../core/functions.php' ;
include './../core/validations.php' ;

if(checkRequestMethod()){
    foreach($_POST as $key=>$value){
        $$key = $value ;
    }


   
    $errors = [] ;
if(checkempty($name)){
   $errors[] = 'Name is required' ;
}elseif(minval($name , 4)){
    $errors[] = 'Name must be greater than 3 chars' ;
}elseif(maxval($name , 30)){
    $errors[] = 'Name must be smaller than 30 chars' ;
}

if(checkempty($email)){
    $errors[] = 'Email is required' ;
 }elseif(!emailvalid($email)){
    $errors[] = 'Must enter validate email' ;
 }

if(checkempty($password)){
    $errors[] = 'Password is required' ;
 }elseif(minval($password , 6)){
    $errors[] = 'Password must be greater than 5 chars' ;
}elseif(maxval($password , 20)){
    $errors[] = 'Password must be smaller than 20 chars' ;
}

$file = $_FILES['image'] ;
$f_name = $file['name'] ;
$tmp_name = $file['tmp_name'] ;
$extension = pathinfo($f_name , PATHINFO_EXTENSION);
$newName = uniqid() . '.' . $extension ;
$photo = './upload/' . $newName ;
move_uploaded_file($tmp_name ,  './../upload/' . $newName) ;
$_SESSION['photo'] = $photo ;

 if(checkempty($phone)){
    $errors[] = 'Phone is required' ;
}


$messageErrors = [] ;
$messageSuccess = [] ;

$_SESSION['msg'] = $message ;
if(checkempty($message)){
    $messageErrors[] = 'Message is required' ;
 }elseif(minval($message , 5)){
    $messageErrors[] = 'Message must be greater than or equal 5 chars' ;
}

$_SESSION['messageErrors'] = $messageErrors ;

if(empty($messageErrors)){
 $messageSuccess[] = 'Message Saved Successfully' ;
$_SESSION['messageSuccess'] = $messageSuccess ;
$contentMessage =[uniqid() , $message] ;
$msgGet = json_decode(file_get_contents('./../data/messages.json') , true) ;
$msgGet[] = $contentMessage ;
$msgPut = file_put_contents('./../data/messages.json' , json_encode($msgGet)) ;

}


 $_SESSION['errors'] = $errors ;

 if(empty($errors)){
    $data = [$name , $email , sha1($password) , $phone , $newName] ;
    $getfile = json_decode(file_get_contents('./../data/file.json') , true) ;
    $getfile[] = $data ;
    $putfile = file_put_contents('../data/file.json' , json_encode($getfile)) ;


    $_SESSION['data'] = $data ;
     unset($_SESSION['success']) ;
    
    header('location:../index.php') ;
    die ;
 }else{
    header('location:../contact.php') ;
    die ;
 }
 



}
?>
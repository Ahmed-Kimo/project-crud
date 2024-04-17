<?php

session_start();

include '../core/functions.php' ;
include '../core/validations.php' ;

foreach($_POST as $key=>$value){
    $$key = ($value) ;
}
    $errors = [] ;

    if(checkRequestMethod()){
     
        if(checkempty($name)){
            $errors[] = 'Name is required' ;
        }elseif(minval($name , 3)){
            $errors[] = 'Name must be greater than 3 chars' ;
        } elseif(maxval($name , 25)) {
            $errors[] = 'Name must be smaller than 25 chars' ;
        }
    
    
        if(checkempty($password)){
            $errors[] = 'password is required' ;
        }elseif(minval($password , 6)){
            $errors[] = 'password must be greater than 6 chars' ;
        } elseif(maxval($password , 20)) {
            $errors[] = 'password must be smaller than 20 chars' ;
        }

    }

    $_SESSION['newerrors'] = $errors ;

    
        
        

$file = json_decode(file_get_contents('../data/file.json') , true) ;



foreach($file as $key => $value){
    $title[] = $value[0] ; 
    $emails[] = $value[1] ;
    $secret[] = $value[2] ; 
    $phones[] = $value[3] ;
    $photoLogin[] = $value[4] ;
}

$adminName = ['kimo' , 'mohamed'] ;
$adminPassword = [sha1(123123) , sha1(222222)] ;
$_SESSION['adminName'] = $adminName ;
$_SESSION['adminPassword'] = $adminPassword ;

$_SESSION['emails'] = $emails[array_search($name , $title)] ;
$_SESSION['phones'] = $phones[array_search($name , $title)] ;
$_SESSION['photologin'] = $photoLogin[array_search($name , $title)] ;
 

    if($errors == []){
    $_SESSION['newdata'] = [$name , sha1($password)] ;

  if( in_array($name , $title) && in_array(sha1($password) , $secret)){
    $_SESSION['success'] = 'its ok' ;
    unset($_SESSION['data']) ;
    header('location:../index.php') ;
  }else {
    $_SESSION['mistake'] = 'this is not found' ;
    header('location:./../login.php') ;
    die ;
  
} 
    
}else{
    header('location:./../login.php') ;
    die ;
}


?>
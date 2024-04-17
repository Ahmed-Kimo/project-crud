<?php

include 'layouts/head.php' ;
include 'layouts/nav.php' ;
include 'core/functions.php' ;

?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
    
        <div class="col-6  mx-auto my-5">
        <h1> Contact Us </h1> 
        </div>

             
      <div class="col-8 mx-auto my-5 border p-2">
       
 
  
 <?php  $msgGet = json_decode(file_get_contents('./data/messages.json') , true) ; ?>
   
<?php if(!empty($msgGet)) : ?>
      <?php   foreach($msgGet as $msg) : ?>
                      
<div class="card" style="width: 33rem;">
<div class="card-header bg-success">
                <?php  echo $msg[1] ; ?>
                <form action="./handlers/handlemessage.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $msg[0] ; ?>">
                  <button type="submit" class='btn btn-danger'>delete</button>
                </form> 
      </div>  
       </div>
                <?php echo '<br>'; 
                endforeach ;
                endif ; ?>

        
     
        </div>
    </div>
</div> 

<?php include 'layouts/footer.php' ; ?>
<?php
if(checkRequestMethod()){
$_SESSION['id'] = $_POST["id"] ;
}
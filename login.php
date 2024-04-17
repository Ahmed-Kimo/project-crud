<?php require_once 'layouts/head.php' ?>

<?php require_once 'layouts/nav.php' ?>



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
    
        <div class="col-3  mx-auto my-5">
        <h1> Login </h1> 
        </div>

        <div class="col-3 mx-auto my-5">
          <?php if(isset($_SESSION['newerrors'])) : ?>
          <?php foreach($_SESSION['newerrors'] as $error) : ?>
            <div class="alert alert-danger text-center">
              <?php echo $error ; ?>
            </div>
            <?php endforeach ; ?>
            <?php unset($_SESSION['newerrors']) ; ?>
            <?php endif ; ?>

            <?php if(isset($_SESSION['mistake'])) : ?>
              <div class="alert alert-danger text-center">
                <?php echo $_SESSION['mistake'] ; ?>
              </div>
              <?php unset($_SESSION['mistake']) ; ?>
              <?php endif ; ?>


        </div>


        <form action='handlers/handlelogin.php' method='POST'>
     
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name='name' class="form-control">
    </div>
  </div>


  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name='password' class="form-control">
    </div>
  </div>

  <div class="col-auto">
    <input type="submit" class="btn btn-primary btn-lg" value="Login">
  </div>
  
</form>
        
        </div>
    </div>
</div>


<?php require_once 'layouts/footer.php' ?>
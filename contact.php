<?php require_once 'layouts/head.php' ?>

    <div class="d-flex flex-column bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
           <?php require_once 'layouts/nav.php' ?>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>

                        <div class="col-3 mx-auto my-5">
          <?php if(isset($_SESSION['errors'])) : ?>
          <?php foreach($_SESSION['errors'] as $error) : ?>
            <div class="alert alert-danger text-center">
              <?php echo $error ; ?>
            </div>
            <?php endforeach ; ?>
            <?php unset($_SESSION['errors']) ; ?>
            <?php endif ; ?>

        </div>

         
   <div class="col-3 mx-auto my-5">
        <?php if(isset($_SESSION['messageErrors'])) : ?>
          <?php foreach($_SESSION['messageErrors'] as $msgerror) : ?>
            <div class="alert alert-danger text-center">
              <?php echo $msgerror ; ?>
            </div>
            <?php endforeach ; ?>
            <?php unset($_SESSION['messageErrors'] ) ; ?>
            <?php endif ; ?>
        </div>  


        <div class="col-3 mx-auto my-5">
        <?php if(isset($_SESSION['messageSuccess'])) : ?>
          <?php foreach($_SESSION['messageSuccess'] as $msgsuccess) : ?>
            <div class="alert alert-success text-center">
              <?php echo $msgsuccess ; ?>
            </div>
            <?php endforeach ; ?>
            <?php unset($_SESSION['messageSuccess'] ) ; ?>
            <?php endif ; ?>
        </div> 

        

                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form enctype='multipart/form-data' data-sb-form-api-token="API_TOKEN" method='POST' action='handlers/handleregister.php'>
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name='name' type="text"/>
                                        <label for="name">Full name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name='email' type="email"/>
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                      <!-- password input-->
                                      <div class="form-floating mb-3">
                                        <input class="form-control" name='password' type="password"/>
                                        <label>Password</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Password is required</div>
                                    </div>
                                      <!-- image input-->
                                      <div class="form-floating mb-3">
                                        <input class="form-control" type="file" name='image'/>
                                        <label>choose image</label>
                                        <div class="invalid-feedback" data-sb-feedback="image:required">image is required.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name='phone' type="tel"/>
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    <!-- Message input-->

    

                                    <div class="mb-3 col-8">
                                        <input class="form-control" placeholder='message' name='message' type="text">
                                        
                                    </div> 
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid col-5"><input class="btn btn-primary btn-lg" name="submit" type="submit"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
       <!-- Footer-->
       <?php require_once 'layouts/footer.php' ?>


</div>

 
<?php require_once 'layouts/js.php' ?> 
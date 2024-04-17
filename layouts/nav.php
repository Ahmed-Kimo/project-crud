<?php session_start() ; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Home Page</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <?php  if(isset($_SESSION['success'])) : ?>
           <?php  if(in_array($_SESSION['newdata'][0] , $_SESSION['adminName']) &&
          in_array($_SESSION['newdata'][1] , $_SESSION['adminPassword'])) : ?>
                            <li class="nav-item"><a class="nav-link" href="messages.php">Messages</a></li>
                    <?php endif ; 
                          endif ; ?>
                            <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                            <?php if(!isset($_SESSION['data'])) { ?>
                            <?php if(!isset($_SESSION['success'])) { ?>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                            <?php } } ?>

                            <?php if(isset($_SESSION['data']) || isset($_SESSION['success'])) { ?>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
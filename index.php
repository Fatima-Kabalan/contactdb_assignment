   <?php 
        include("connect.php");
        
        if(isset($_POST['Submit'])){
            $full_name = $_POST["full_name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $message = $_POST["message"];

            //to protect against sql injections
            $query = $mysqli->prepare("INSERT INTO contacts(full_name,email,phone,message) VALUE (?, ?, ?, ?)"); 
            $query->bind_param("ssis", $full_name , $email , $phone , $message); 
            
            if($query->execute()){
                echo '<script>alert("Contact Message Successfully Added.")</script>';
                //https://www.geeksforgeeks.org/how-to-make-a-redirect-in-php/
                header('Location: messages.php');
            }
            else{
                echo '<script>alert("Unsuccessful")</script>';
            }
        }
        
    ?>

   <html lang="en">
    <head>
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <meta name="description" content="" />
         <meta name="author" content="" />
         <title>Freelancer - Start Bootstrap Theme</title>
         <!-- Favicon-->
         <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
         <!-- Font Awesome icons (free version)-->
         <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
         <!-- Google fonts-->
         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
         <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
         <!-- Core theme CSS (includes Bootstrap)-->
         <link href="css/styles.css" rel="stylesheet" />
     </head>
     <body id="page-top">
    <!-- Contact Section-->
    <section class="page-section" id="contact">
             <div class="container">
                 <!-- Contact Section Heading-->
                 <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                 <!-- Icon Divider-->
                 <div class="divider-custom">
                     <div class="divider-custom-line"></div>
                     <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                     <div class="divider-custom-line"></div>
                 </div>
                 <!-- Contact Section Form-->
                 <div class="row justify-content-center">
                     <div class="col-lg-8 col-xl-7">
                         <!-- * * * * * * * * * * * * * * *-->
                         <!-- * * SB Forms Contact Form * *-->
                         <!-- * * * * * * * * * * * * * * *-->
                         <!-- This form is pre-integrated with SB Forms.-->
                         <!-- To make this form functional, sign up at-->
                         <!-- https://startbootstrap.com/solution/contact-forms-->
                         <!-- to get an API token!-->
                         <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="messages.php" method="POST">
                             <!-- Name input-->
                             <div class="form-floating mb-3">
                                 <input class="form-control" id="name" name="full_name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                 <label for="name">Full name</label>
                                 <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                             </div>
                             <!-- Email address input-->
                             <div class="form-floating mb-3">
                                 <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                 <label for="email">Email address</label>
                                 <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                 <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                             </div>
                             <!-- Phone number input-->
                             <div class="form-floating mb-3">
                                 <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                 <label for="phone">Phone number</label>
                                 <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                             </div>
                             <!-- Message input-->
                             <div class="form-floating mb-3">
                                 <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                 <label for="message">Message</label>
                                 <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
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
                             <!-- Submit error message-->
                             <!---->
                             <!-- This is what your users will see when there is-->
                             <!-- an error submitting the form-->
                             <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                             <!-- Submit Button-->
                             <button class="btn btn-primary btn-xl" id="submitButton" type="submit" name="Submit">Send</button>
                         </form>
                     </div>
                 </div>
             </div>
         </section>
     </body>
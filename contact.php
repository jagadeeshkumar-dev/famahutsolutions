<?php


 if(isset($_POST['send']) && isset($_SERVER['REQUEST_URI'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  if(empty($name) || empty($email) || empty($message)) {
    $status = "All fields are compulsory.";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
      $status = "Please enter a valid name";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Please enter a valid email";
    } else {
      
    


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
   
    $to = "kiran@famehutsolutions.com";
   
    $headers = "From:" . $email;
   $sendmail= mail($to,"Quote Request",$message, $headers);
     
     
     
      
    header( 'Location: contact.php?success=1' );
   

    }
  }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title> Contact Us</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.html" type="image/x-icon">
   
    

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/mainstyles.css">
    <link rel="stylesheet" type="text/css" href="css/colors.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    
  
    <script src="js/jquery.min.js"></script>
    

</head>



<body>

    <div id="wrapper">
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a  class="navbar-brand" href="index.html"><img src="images/logo.png" width="160px" height="60px" style="margin-top: -18px;"  alt="#"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li ><a href="index.php">Home</a></li>
                             <li><a href="services.html">Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="about.html">About</a></li>
                            
                            <li class="active"><a href="contact.php">Contact Us</a></li>
                            
                        </ul>
                    </div>
                </div><!-- end container-fluid -->
            </nav><!-- end navbar -->
        </div><!-- end container -->
    </header><!-- end header -->

    
  

    </div>
    <section class="section lb">
        <div class="container">
            <div class="section-title text-center">
                
                <h3>CONTACT US</h3>
                <hr>
            </div><!-- end title -->

            <div class="row">
                
                
                <div class="col-sm-12 col-lg-4 contact">

      <img src="images/new/services/call.png"><label>Phone No:</label>
      <h4 style="margin-left: 10px;">040-40125466</h4>
     <br><hr>
    

    <img src="images/new/services/mail.png"><label style="margin-left: 10px;">Email:</label>
      <h4 style="margin-left: 10px;">info@famehutsolutions.com</h4>
     <br><hr>
    
     <img src="images/new/services/address.png"><label style="margin-left: 10px;">Address:</label>
      <h4 style="margin-left: 10px;">Flat no-GI,International residency,pjr colony,Gangaram,Serilingampally mandal,RR dist,Telangana-500049.</h4>
    <br><hr>
 

</div> 
                
                
                
                
                
                
                <div class="col-lg-8 col-sm-12 formll ">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="POST" data-toggle="validator" data-focus="false">
                            <div class="col-md-12">
                            <input style="margin: 5px;" type="text" name="name"  class="form-control" placeholder="Name"> 
                            <input style="margin: 5px;" type="text" name="email"  class="form-control" placeholder="Email"> 
                             
                           
                            <textarea style="margin: 5px;" class="form-control" name="message" id="comments" rows="6" placeholder="Message Below">

                            </textarea>
                            <button style="margin: 5px; background-color: #224f75 ;color: white;" type="submit" value="SEND" id="submit" name="send" class="btn btn-primary"> Submit</button>
                            </div>
                        </form> 

                        
                            <div class="form-status">
                         <h4 style="color:#224f75;"><?php echo  $status;
                         ?></h4>
                       </div> 
                       
                     <h4 style="color:#224f75;"> <?php if ( isset($_GET['success']) && $_GET['success'] == 1 )
                            {
                       
                                      echo "Thank You";
                                }
                       ?></h4>
                        
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->  
    </section>


    <div class="container">

        <hr>
      
            <div class="container-fluid">
              
                   <div class="col-sm-12">
                        <p style="color: #000000;text-align: left; font-size: 13px;">Website developed by K.Jagadeesh Kumar.</p>
                    
                    </div>
             
            </div>
  

    </div>
  
  
    

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/anim/jquery-plugin-collection.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(   {duration: 1200,});
  </script>

</body>



</html>
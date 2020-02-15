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
     
     
     
      
    header( 'Location: index.php?success=1' );
   

    }
  }
}


?>
<!DOCTYPE html>
<html>
<head>
    
	<title>FHS Home</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>FAMEHUT SOLUTIONS PRIVATE LIMITED.</title>
    <meta name="description" content="We provide Digital marketing and SEO services. ">
    <meta name="author" content="">
    <meta name="keywords" content="famehutsolutions,digital marketing,web devlopment">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.html" type="image/x-icon">
   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/mainstyles.css">
    <link rel="stylesheet" type="text/css" href="css/colors.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156928862-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156928862-1');
</script>

  
    <script src="js/jquery.min.js"></script>
    <style type="text/css">
        .fa {
 
 
 
  padding: 10px;
  font-size: 25px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

        
    </style>

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
                        <a  class="navbar-brand" href="index.php"><img src="images/logo.png" width="160px" height="60px" style="margin-top: -18px;"  alt="#"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="about.html">About</a></li>
                            
                            <li><a href="contact.php">Contact Us</a></li>
                            
                        </ul>
                    </div>
                </div><!-- end container-fluid -->
            </nav><!-- end navbar -->
        </div><!-- end container -->
    </header><!-- end header -->


    <section class="visual" id="grad">
                 <div class="container" id="grad">
            <div class="header-content">
    
                <div class="row">
                  
               
    
    
                 <div class="col-lg-6">
                        
                    <div style="margin-top: 20px; text-align: right;"></div>
                    <h1  data-aos="fade-right"
                         data-aos-delay="50"
                         
                       data-aos-easing="ease-in-out"
                          
                    data-aos-once="true" >Fame hut Solutions</h1>
                 <p style="color: black;" data-aos="fade-left">A  high-performance marketing agency. We are industry-leading search, social media and content marketing specialists that work closely with our in-house imaginative and analytics resources to meet ambitious goals.  </p>
                     <p style="color: black;" data-aos="fade-left"> Our clients are our supporters who enjoy full access to their agency team, face-to-face conversations and crusade reporting at the cadence they prefer.</p>
                      
                         <a href="about.html" class="theme-btn">Read More</a>
                         <a href="#section2" class="theme-btn">Start now</a>
                          
    
                             
    
                </div>

                <div class="col-lg-6">
    
                    
                    <img src="images/new/hero.png" class="img-responsive" style="height: 400px;" data-aos="fade-right" alt="">
                 </div>
              </div>
    
        
    
        
        </div>
    </div>
    </section>


   





    </div><!-- end wrapper -->



    <div class="container" id="section1">

<div class="row">
<h3 style="text-align: center;">Services</h3>


<div class="col-lg-4" style="text-align: center;">

      <img src="images/new/services/seo.jpg" alt="" class="img-responsive">

      <h2 style="text-align: center;font-size: 20px;">Search Engine Optimization</h2>


      <p style="text-align: center;">Get your website on top of search results with our seo services.We provide
      Google,Yahoo and Bing SEO services. </p>

      <a  style="margin-bottom: 8px;" href="services.html" class="btn btn-default">Read more</a>

</div>

<div class="col-lg-4" style="text-align: center;">

    <img src="images/new/services/sm.jpg" alt="" class="img-responsive">

    <h2 style="text-align: center;font-size: 20px;">Social Media Marketing </h2>

<p style="text-align: center;">Promote your brand on various social media platforms,reach your  audience on short time</p>

<a  style="margin-bottom: 8px;" href="services.html" class="btn btn-default">Read more</a>

</div>


<div class="col-lg-4" style="text-align: center;">

    <img src="images/new/services/emm.png" alt="" class="img-responsive">

    <h2 style="text-align: center;font-size: 20px;">Email Marketing</h2>

<p style="text-align: center;">Email Marketing Is An Efficient Way To Stay Connected With Your Clients While Also Promoting Your Business.</p>


<a  style="margin-bottom: 8px;" href="services.html" class="btn btn-default">Read more</a>
</div>

</div>

<hr>

<div class="row">
    
    <div class="col-lg-4" style="text-align: center;">
    
          <img src="images/new/services/wb.jpeg" alt="" class="img-responsive">
    
          <h2 style="text-align: center;font-size: 20px;">Web development </h2>

      <p style="text-align: center;">Get a well designed website for your needs</p>

      <a  style="margin-bottom: 8px;" href="services.html" class="btn btn-default">Read more</a>

    </div>
    
    <div class="col-lg-4" style="text-align: center; ">
    
        <img src="images/new/services/cw.jpg" alt="" class="img-responsive">
    
        <h2 style="text-align: center; font-size: 20px;">Content Writing  </h2>

    <p style="text-align: center;">Content Marketing Is All About Creating And Publishing The Most Relevant Content To Captivate.</p>

    <a  style="margin-bottom: 8px;" href="services.html" class="btn btn-default">Read more</a>

    </div>
    
    
    <div class="col-lg-4" style="text-align: center;">
    
        <img src="images/new/services/afm.jpg" alt="" class="img-responsive">
    
        <h2 style="text-align: center;font-size: 20px;">Affiliate Marketing</h2>
    <p style="text-align: center;">Affiliate Marketing Is An Advertising Model In Which A Company Compensates Third-Party Publishers To Generate Traffic Or Leads To The Company’s Products And Services.</p>

    <a href="services.html" class="btn btn-default">Read more</a>
    </div>
    
    </div>



    </div>
    
    
    <hr>
<div class="container">
    


<div class="container" style="margin-left: 15px; margin-right: 15px;">       
    
        

    
     
          
       <a href="https://www.facebook.com/famehutsolutions/" class="fa fa-facebook"></a>
         <a href="https://www.instagram.com/famehutsolutions/" class="fa fa-instagram"></a>
        <a href="https://twitter.com/FamehutS" class="fa fa-twitter"></a>
        
       <a href="https://www.linkedin.com/in/famehut-solutions-022aba19b" class="fa fa-linkedin"></a>
        
   


      
 </div>
 </div>

    
    
                <hr>
                
    <section class="section lb" id="section2">
        <div class="container">
            <div class="section-title text-center">
              
                <h3>GET A QUOTE</h3>
            
            </div><!-- end title -->

            <div class="row">
                <div class="col-sm-12 col-lg-12 formll">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="index.php" name="contactform" method="POST" data-toggle="validator" data-focus="false">
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(   {duration: 1200,});
  </script>

</body>



</html>
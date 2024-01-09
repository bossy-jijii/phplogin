<?php
include("connection.php");
include("form.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skloding</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="agency.css" rel="stylesheet">
   


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="form.php">
    <link href="login.php">
    <link href="connection.php">
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SKloding</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in text-secondary">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Let them choose the perfect gift.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Welcome to our online shopping haven, where convenience meets style! Explore our meticulously curated selection of products that cater to your every need. From trendy fashion pieces to innovative gadgets, we've handpicked items that seamlessly blend quality and affordability.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Experience seamless browsing across devices with our website's responsive design. Whether you're on a desktop, tablet, or smartphone, our site adapts effortlessly to deliver a consistent and visually appealing experience.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Your security is our top priority. Shop with confidence on our website, fortified with state-of-the-art web security measures. We employ robust encryption protocols to safeguard your personal and financial information, ensuring a secure and private shopping experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="container-fluid bg-danger text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Products</h2>
                    <h3 class="section-subheading text-muted">Welcome to our digital portfolio of products ! we offer Modern shirts/blouses, a visual narrative of our passion and proficiency.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item" >
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/Lwomen.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Women</h4>
                        <p class="text-muted"> Women Shirts </p>
                        <a href="womencat.html"> Check Options </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/Hommes.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Men</h4>
                        <p class="text-muted">Men Shirts</p>
                        <a href="mencat.html"> Check Options </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img\girll.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Girls</h4>
                        <p class="text-muted"> Girls Shirts </p>
                        <a href="girls.html"> Check Options </a>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center text-left">
                  <div class="col-md-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                       
                        <img src="img/Boys.jpeg" class="img-responsive" alt="">
                    </a>

                    <div class="col-md-12 portfolio-caption">
                        <h4>Boys</h4>
                        <p class="text-muted">Boys Shirts</p>
                        <a href="boys.html"> Check Options </a>
                    </div>
                </div>
                
                
                    
            </div>
        </div>
        <div id="form">
            <h1 id="titre">Login form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label> Username : </label>
                <input type="text" id="user" name="user"></br></br>
                <label> Password : </label>
                <input type="password" id="pass" name="pass"></br></br>
                <label for="gender">Gender:</label></br>
                    <select id="gender" name="gender">
                       <option value="girl">girl</option>
                       <option value="boy">boy</option>
                       <option value="man">man</option>
                       <option value="woman">woman</option>
                    </select></br>
                    </br>
                <input type="submit" id="btn" value="Login" name="submit">
                
            </form>
                    
        </div>
         <script>
            function isvalid(){
                var user=document.form.user.value;
                var pass=document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert("username and password field are empty !");
                    return false;
                }
                else {
                    if(user.length==""){
                        alert("username is empty , please fill out this field");
                        return false;
                    }
                    if(pass.length==""){
                        alert("password is empty , please fill out this field");
                        return false;
                    }
                }
    
            }
        </script>

    <!-- About Section -->
    <section id="about" class="bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Histoire de SKLODING</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4> December 2023</h4>
                                    <h4 class="subheading">SKloding Brand</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Inspired by the initials of founders Khettou and Sadik, brings you a curated collection of quality clothing. Each piece reflects our commitment to style and individuality.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>January 2024</h4>
                                    <h4 class="subheading">Logistic & Transport</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> Fast, reliable shipping. Transparent pricing, secure packaging.Stay updated with automated notifications for a seamless shipping experience.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>June 2024</h4>
                                    <h4 class="subheading"> System informations & Digital Transformation Bachelor at FST Settat</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This Bachelor is focusing in the combinaison of web developement and E-Commerce. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2024</h4>
                                    <h4 class="subheading"> Start-Up</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> We're willing to make the idea of SKloding become true in July 2024 .</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Two Developers Students From FST SETTAT</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member1">
                        <img src="img/team/ME11.jpg" class="img-responsive img-circle" alt="">
                        <h4>Hajar Khettou</h4>
                        <p class="text-muted">Lead Manager</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member2">
                        <img src="img/team/othman.jpeg" class="img-responsive img-circle" alt="">
                        <h4>Othman Sadik</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="largetext">SKLODIN pour les chemises modernes est l'un de nos projet qu'on souhaite développer d'ici en futur</p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">If you have any questions about our products and tissu don't hesitate to contact us.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="index.php" method="POST" name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" id="submit" onclick="PrintMessage()">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
        <script>
       function PrintMessage() {
    var message = "Your request is submitted. Thanks for your visit!";
    var result = window.confirm(message);

    if (result) {
    
        window.location.href = "form.php";
    } else {
        // User clicked "Cancel" (annuler)
        // You can handle this case as needed
        // For example, display another message or perform some other action
        console.log("User clicked Cancel");
    }
}

  </script>
    </section>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website December 2023</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

   
   

</body>

</html>

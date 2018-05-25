<!DOCTYPE html>
<html lang="ru">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web Developer, Programmer, Software Developer, Freelancer, Portfolio">
        <meta name="author" content="Nikita Sumahers">

        <title>Web Developer</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylesheet.css" rel="stylesheet">

    </head>

    <body id="page-top">
        <!-- Navigation -->
        <a class="menu-toggle rounded" href="#">
            <i class="fa fa-bars"></i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#page-top">Home</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#skills">Skills</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#contact">Contact</a>
                </li>
                <hr>
                <li class="col-sm-2 list-inline-item">
                    <a class="flags" href='?ln=en'>
                        <img class="flags-en" src="flags/flag_united_kingdom.png">
                    </a>
                </li>
                <li class="col-sm-2 list-inline-item">
                    <a class="flags" href="?ln=no">
                        <img class="flags-no" src="flags/flag_norway.png">
                    </a>
                </li>
                <li class="col-sm-2 list-inline-item">
                    <a class="flags" href="?ln=ru">
                        <img class="flags-ru" src="flags/flag_russia.png">
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Header -->
        <header class="masthead d-flex">
            <div class="container text-center my-auto">
                <h1 class="mb-1">Stylish Portfolio</h1>
                <h3 class="mb-5">
                    <em>A Free Bootstrap Theme by Start Bootstrap</em>
                </h3>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
            <div class="overlay"></div>
        </header>

        <!-- About -->
        <section class="content-section bg-light" id="about">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h2>{Photo}?</h2>
                        <label>Nikita Sumahers</label>
                        <p class="lead mb-5">I am currently studying Computer Engineering at NTNU, the Norwegian University of Science and Technology and I have an Advanced craft certificate in ICT Service Operations. I am passionate about programming and developing. Therefore i wish to dedicate my time to those things. Currently I am located in Norway, Ålesund.</p>
                        <a class="btn btn-dark btn-xl js-scroll-trigger" href="#skills">What Can I Offer</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class="content-section bg-primary text-white text-center" id="skills">
            <div class="container">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Skills</h3>
                    <h2 class="mb-5">What Can I Offer</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                            <i class="icon-pencil"></i>
                        </span>
                        <h4>
                            <strong>Redesigned</strong>
                        </h4>
                        <p class="text-faded mb-0">Web and software developing. HTML/PHP/CSS/JavaScript and Java applications!</p>
                    </div>
                    <div class="col-lg-6">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                            <i class="icon-screen-smartphone"></i>
                        </span>
                        <h4>
                            <strong>Responsive</strong>
                        </h4>
                        <p class="text-faded mb-0">Responsive web design will allow your site to look great on any device!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Callout -->
        <section class="callout">
            <div class="container text-center">
                <h2 class="mx-auto mb-5"><em>Hire</em> Me</h2>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#contact">Contact Me</a>
            </div>
        </section>

        <!-- Map -->
        <section id="contact" class="map">
            <div class="row contact">
                <div class='col-lg-6'>
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d236207.0550622712!2d6.343469512513542!3d62.45021262869383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sno!2sno!4v1527273996331"></iframe>
                    <br/>
                    <small>
                        <a href="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d236207.0550622712!2d6.343469512513542!3d62.45021262869383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sno!2sno!4v1527273996331"></a>
                    </small>
                </div>
                <div class='col-lg-6'>
                    <form action="/send_message.php">
                        <label for="fname">Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">   
                        <label for="subject">Message</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/nikita.sumahers" target="_blank">
                            <i class="icon-social-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="www.linkedin.com/in/nsumahers" target="_blank">
                            <i class="icon-social-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="https://github.com/nikitashum" target="_blank">
                            <i class="icon-social-github"></i>
                        </a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Nikita Sumahers 2018</p>
            </div>
        </footer>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/javascript.js"></script>

    </body>

</html>


<!-- ceci n'est pas un commentaire -->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="./bootstrap.css">
  <!-- normalize CSS by necolas https://github.com/necolas/normalize.css/ -->
  <link rel="stylesheet" type="text/css" href="./normalize.css">
  <!-- custom CSS -->
  <link rel="stylesheet" type="text/css" href="./main.css">
  <!-- Open Sans font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Font Awesome Web Application Icons -->
  <script src="https://use.fontawesome.com/275ae55494.js"></script>
  <title>Hello world, Bootstrap!</title>
</head>

<body id="pageTop" data-spy="scroll" data-target="#navbarResponsive" data-offset="100">

  <nav id="navbarSection" class="navbar navbar-expand-md bg-dark navbar-dark border border-white fixed-top">
    <div class="container">
      <!-- brand -->
      <a class="navbar-brand text-center" href="#pageTop">Landscaper</a>
      <!-- toggler/collapsible button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar links -->
      <div id="navbarResponsive" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto text-uppercase">
          <li class="nav-item pr-2">
            <a class="nav-link" href="#headerSection">Home</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#aboutSection">About</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#serviceSection">Services</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#gallerySection">Gallery</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href="#testimonialSection">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactSection">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION -->
  <header id="headerSection" class="" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="masking">
        <div class="headerPresentation">
          <h1 class="">Landscaping Services</h1>
          <h6 class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
          <h6 class="">Duis sed dapibus leo nec ornare diam.</h6>
          <a class="btn-custom" href="#aboutSection">More Info</a>
      </div>
    </div>
  </header>

  <!-- ABOUT SECTION -->
  <section id="aboutSection" class="" data-spy="scroll" data-target="#navbarSection" data-offset="0">

      <div class="aboutContent">
        <div class="aboutText">
          <h3>Welcome to <span>Landscaper</span></h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam
            commodo nibh.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo
            nibh.</p>
          <a class="btn-custom" href="#serviceSection">View All Services</a>
        </div>
        <div class="aboutImage">
          <img src="./img/about-1.jpg" class="">
          <h6>Garden Care</h6>
          <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.</p>
        </div>
        <div class="aboutImage">
          <img src="./img/about-2.jpg" class="">
          <h6>Lawn Care</h6>
          <p class="image-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante.</p>
        </div>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="serviceSection" class="" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div id="serviceContent">
      <div id="serviceTitle">
        <h1>Our Services</h1>
        <hr>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</h6>
      </div>
      <!-- services photos -->
      <div id="serviceImage">
        <div class="boxImage">
          <img src="./img/services/service-1.jpg">
          <h3>Lawn Care</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
        <div class="boxImage">
          <img src="./img/services/service-2.jpg">
          <h3>Landscape Design</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
        <div class="boxImage">
          <img src="./img/services/service-3.jpg">
          <h3>Tree Care</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
        <div class="boxImage">
          <img src="./img/services/service-4.jpg">
          <h3>Spring & Fall Cleanup</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY SECTION -->
  <section id="gallerySection" class="" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div id="galleryContent">
      <div id="galleryNav">
        <h1>Project Gallery</h1>
        <hr>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</h6>
        <!-- buttons -->
        <div class="btnBox">
          <div id="btnContainer" class="galleryBtn">
            <button id="all" class="btn-gallery btn-custom active" data-rel>All</button>
          </div>
          <div class="galleryBtn">
            <button id="lawnCare" class="btn-gallery btn-custom">Lawn Care</button>
          </div>
          <div class="galleryBtn">
            <button id="gardenCare" class="btn-gallery btn-custom">Garden Care</button>
          </div>
          <div class="galleryBtn">
            <button id="planting" class="btn-gallery btn-custom">Planting</button>
          </div>
        </div>
      </div>
      <div id="thumbnailGallery">
        <div class="filterDiv lawnCare">
          <div id="0" class="overlay cursor">
            <img src="./img/portfolio/01-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv planting">
          <div id="1" class="overlay cursor">
            <img src="./img/portfolio/02-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv lawnCare">
          <div id="2" class="overlay cursor">
            <img src="./img/portfolio/03-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv lawnCare">
          <div id="3" class="overlay cursor">
            <img src="./img/portfolio/04-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv planting">
          <div id="4" class="overlay cursor">
            <img src="./img/portfolio/05-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv gardenCare">
          <div id="5" class="overlay cursor">
            <img src="./img/portfolio/06-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv gardenCare">
          <div id="6" class="overlay cursor">
            <img src="./img/portfolio/07-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv lawnCare">
          <div id="7" class="overlay cursor">
            <img src="./img/portfolio/08-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
        <div class="filterDiv planting">
          <div id="8" class="overlay cursor">
            <img src="./img/portfolio/09-small.jpg" class="thumbnail img-fluid rounded">
            <div class="masking">
              <p class="text">Lorem ipsum.</p>
            </div>
          </div>
        </div>
      </div>

      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
          <div class="mySlides">
            <img src="./img/portfolio/01-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/02-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/03-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/04-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/05-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/06-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/07-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/08-large.jpg" class=" ">
          </div>
          <div class="mySlides">
            <img src="./img/portfolio/09-large.jpg" class=" ">
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section id="testimonialSection" class="" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div class="masking">
        <div class="testimonialTitle">
          <h1 class="">Testimonials</h1>
          <hr class="">
        </div>
        <div id="testimonials" class="carousel slide" data-ride="carousel" data-interval="1500">
          <ul class="carousel-indicators">
            <li class="" data-target="#testimonials" data-slide-to="0" class="active"></li>
            <li class="" data-target="#testimonials" data-slide-to="1"></li>
            <li class="" data-target="#testimonials" data-slide-to="2"></li>
            <li class="" data-target="#testimonials" data-slide-to="3"></li>
          </ul>
          <div class="carousel-inner">
            <!-- adds slides to the carousel -->
            <div class="carousel-item active">
              <!-- specifies the content of each slide -->
              <div class="carousel-caption">
                <!-- create a caption for each slide -->
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- John DOE, Parker County, TX</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- Jenny DOE, Parker County, TX</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- John POE, Parker County, TX</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
                <p>- Jane BOE, Parker County, TX</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contactSection" class="" data-spy="scroll" data-target="#navbarSection" data-offset="0">
    <div id="contactContent">
      <div class="contactInfo">
        <h1>Contact Us</h1>
        <hr class="">
        <h6 class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</h6>
        <div class="infoBox">
          <div class="address contact-item">
            <h3>Address</h3>
            <hr>
            <p>4321 California St,</p>
            <p class="contact-information">San Francisco, CA 12345</p>
          </div>
          <div class="contact-item hours">
            <h3>Working Hours</h3>
            <hr>
            <p class="horaire">Monday-Saturday: 07:00 - 18:00</p>
            <p class="contact-information">Sunday: <span class="cferme"> Closed</span></p>
          </div>
          <div class="phone contact-item">
            <h3 >Contact Info</h3>
            <hr>
            <p>Phone: +1 123 456 1234</p>
            <p class="contact-information">Email: info@company.com</p>
          </div>
        </div>
      </div>
      <form action="mail.php" method="post" enctype="application/x-www-form-urlencoded">
        <div class="leaveUsMessage">
          <h3>Leave us a message</h3>
        </div>
        <div class="formInfo">
          <div class="formName">
            <input id="myName" type="text" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="formMail">
            <input id="myEmail" type="email" class="form-control" placeholder="Email" name="email">
          </div>
        </div>
        <div class="formMessage">
          <div class="messageContent">
            <textarea id="myMessage" class="form-control" rows="5" placeholder="Write something..." name="message"></textarea>
          </div>
        </div>
        <div class="formBtn">
          <button type="button" class="btn-custom btn" data-toggle="modal" name="submit" data-target="#contactModal">Send Message</button>
        </div>
      </form>
    </div>
    <!-- CONTACT MODAL -->
    <div id="contactModal" class="modal modalBox fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <h6 id="exampleModalLabel" class="modal-title">Message successfully sent</h6>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <!-- modal body -->
          <div class="modal-body">
            <h6>Thank you for contacting <span class="brandNameModal">Landscaper.</span><br>We will be in touch with you soon!</h6>
          </div>
          <!-- modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn-custom btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <footer id="footerSection" class="border border-white">
    <div class="footContainer">
      <div class="footContent">
        <div class="social-media fbIconBox">
          <a href="https://www.facebook.com/">
            <i class="fa fa-facebook fbIcon"></i>
          </a>
        </div>
        <div class="social-media twIconBox">
          <a href="https://twitter.com/explore">
            <i class="fa fa-twitter twIcon"></i>
          </a>
        </div>
        <div class="social-media gpIconBox">
          <a href="https://plus.google.com/">
            <i class="fa fa-google-plus-official gpIcon"></i>
          </a>
        </div>
      </div>
      <div class="bottom">
        <p>© 2020 Landscaper. Designed by <span><a href="http://www.templatewire.com/">TemplateWire</a></span>. Web Integration by <span><a href="https://github.com/sergio-nunez-meneses">Sergio Núñez Meneses</a></span> and <span><a href="https://github.com/RDemarch">Robin De March</a></span></p>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <!--
  <script type="text/javascript" src="./jquery-3.5.0.js"></script>
  -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./bootstrap.js"></script>
  <!-- custom JS -->
  <script type="text/javascript" src="./script.js"></script>
</body>

</html>

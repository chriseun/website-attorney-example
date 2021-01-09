<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--using-FontAwesome-->
    <script src="https://kit.fontawesome.com/df38232220.js" crossorigin="anonymous"></script>
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="style-contact.css">
    <title>Ryul Kim | Contact</title>
    <link rel="shortcut icon" type="image/png" href="./images/favion-2.jpg">
</head>

<section class="contact-info">
    <div class="container contact-container contact-container-1 animate-bottom">
        <h1></h1>
        <h1 class="phone-number"><i class="fas fa-phone-alt"></i> [949]-430-6338</h1>

    </div>
</section>


<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.html" class="logo">
                    <p class="logo-ryul-kim">Ryul Kim</p>
                </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <!--<li class="nav-item">
                        <a href="menu.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="drink.html" class="nav-link">Publication</a>
                    </li>-->
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active">Contact</a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <!--Header Ends-->

    <section class="hero" id="hero">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">C</span>ontact
            </h2>
            <!--<h1 class="headline">ATTORNEY AT LAW</h1>-->
            <div class="headline-description">
                <!--<div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                -->
                <div class="single-animation">
                    <a href="index.html" class="logo">
                        <p class="logo-ryul-kim">Ryul Kim</p>
                    </a>
                    <h5 class="h5">ATTORNEY AT LAW</h5>
                </div>
            </div>

            <div class="back-to-bottom single-animation">
                <i class="fas fa-arrow-circle-down"></i>
            </div>
        </div>


    </section>

    <section class="contact-info">
        <div class="container contact-container animate-bottom">
            <h1 class="office-location"><a
                    href="https://www.google.com/maps/place/8+Corporate+Park+%23300,+Irvine,+CA+92606/@33.6909522,-117.8314227,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcdc273d9e7a11:0x3bd3c02b4e22c2c9!8m2!3d33.6909522!4d-117.829234"
                    target="blank"> 8 CORPORATE PARK, SUITE 300, IRVINE, CA 92606</a></h1>
            <h1 class="email-address"><i class="far fa-envelope"></i> kimryul@pacbell.net</h1>

        </div>
    </section>


    <!--Contact Page-->
    <section class="hero-2">
        <!--contact-btn-->
        <div class="contact-btn">
            <h1>Location & Contact</h1>
            <!--btn-->
            <p>8 Corporate Park, Suite 300, Irvine, CA 92606</p>
            <p class="telephone">T. 949.430.6338</p>
            <p>KakaoTalk ID: ryulkimesq</p>
            <ul class="circle">
                <li>To get in touch with us, simply fill out the contact form below or send us an email to
                    kimryul@pacbell.net.</li>
                <!--<div class="hour-container">
                    <h3>Hours:</h3>
                    <div class="hours">
                        <p>Sunday - Thursday: 12 PM-9:30 PM</p>
                        <p>Friday - Saturday: 12PM-10:30PM</p>
                    </div>
                </div>
                <li class="holiday-hours">The restaurant will be closed on <span class="holidays">the Fourth of
                        July,</span>
                    <span class="holidays">Thanksgiving</span>,
                    &
                    <span class="holidays">Christmas Day</span></li>
                <li class="holiday-hours">We will be open the <span class="holidays">Day after Thanksgiving</span> [From
                    4:00 pm - Closing]</li>-->
        </div>
        </div>



        <section id="contact-form">
            <form action="contactform.php" method="post">
                <!--left-->
                <div class="contact-left">
                    <!--heading-->
                    <h1 class="c-l-heading">Contact Us</h1>
                    <!--form-name-->
                    <div class="f-name">
                        <!--name-->
                        <font>Name</font>
                        <!--input-->
                        <input type="text" placeholder="Full Name" name="name">
                    </div>

                    <!--form-email-->
                    <div class="f-email">
                        <!--email-->
                        <font>Email</font>
                        <!--input-->
                        <input type="text" placeholder="Email" name="mail">
                    </div>

                    <!--form-Mobile-number-->
                    <div class="f-mobile">
                        <!--email-->
                        <font>Mobile</font>
                        <!--input-->
                        <input type="text" placeholder="Mobile" name="subject">
                    </div>
                </div>




                <!--right-->
                <div class="contact-right">
                    <!--message-->
                    <div class="message">
                        <font>Message</font>
                        <textarea name="message" id="textarea" cols="20" rows="5"
                            placeholder="Type Message..."></textarea>
                    </div>
                    <!--submit-->
                    <button type="submit" name="submit">Submit</button>


                </div>

            </form>
        </section>

        <ul class="last-message">
            <li>
                Due to COVID-19,
                we will not be accepting any in-person appointments at the moment.
                Thank you for your understanding.</li>
        </ul>
    </section>


    <footer>
        <div class="container">
            <div class="back-to-top">
                <a href="#hero"><i class="fas fa-arrow-circle-up"></i></a>
            </div>

            <div class="contact-left-right">
                <!--left-->
                <div class="contact-left-1 animate-bottom">
                    <h1 class="contact-h1 h1-left">Location</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.695163601384!2d-117.83142268411052!3d33.690956644128484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcdc273d9e7a11%3A0x3bd3c02b4e22c2c9!2s8%20Corporate%20Park%20%23300%2C%20Irvine%2C%20CA%2092606!5e0!3m2!1sen!2sus!4v1604383402371!5m2!1sen!2sus"
                        width="500" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>

                <!--right-->
                <div class="contact-right-1 animate-bottom">
                    <h1 class="contact-h1">Contact</h1>
                    <h5>8 Corporate Park, Suite 300, Irvine, CA 92606</h5>
                    <p><i class="fas fa-phone-alt"></i> (949)-430-6338</p>
                    <p><i class="far fa-envelope"></i> kimryul@pacbell.net</p>
                    <p><i class="fas fa-sms"></i> KakaoTalk ID: ryulkimesq</p>
                    <p><i class="fas fa-globe-americas"></i> See Map</p>
                </div>

            </div>


        </div>
    </footer>

    <footer>
        <p>&copy; 2020 Ryul Kim. All Rights Reserved</p>
    </footer>


    <script src="main.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>

        <link rel="stylesheet" type="text/css" href="style.css?v=2">
        <script src="https://kit.fontawesome.com/0e499a8891.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="header">
            <div class="container">
                <nav>
                    <img src="images/logo.png" class="logo">
                    <ul id="sidemenu">
                        <li><a href="#header">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#contact">Contact Me</a></li>
                        <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                    </ul>
                    <i class="fa-sharp fa-solid fa-bars" onclick="openmenu()"></i>
                </nav>
                <div class="header-text">
                    <p>Software Engineer</p>
                    <h1>Hi, I'm <span>Bryan Tristan Manuel </span><br> from Philippines</h1>
                </div>
            </div>
        </div>
      <!--   -----------------About----------------- -->
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="about-col-1">
                        <img src="images/about_pic.jpg">
                    </div>
                    <div class="about-col-2">
                        <h1 class="subtitle">About Me</h1>
                        <p>
                            A Software Engineer who is eager to continue a career in an environment that offers a greater challenge and growth opportunities and where I can apply and enhance my skills while achieving the company goals.
                        </p> <br>
                        <p>
                            Highly adaptable, always willing to learn new things and open to criticism for self-improvement as well as growth of the organization that will allow me to put my best foot forward.
                        </p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links " onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div>
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>Web Development</span><br> Building and maintenance of websites</li>
                                <li><span>Web Development</span><br> Building and maintenance of websites</li>
                                <li><span>Web Development</span><br> Building and maintenance of websites</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>2019 - 2022</span><br> Software Engineer at SEEK</li>

                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2019</span><br>BS Information & Communications Technology at Rizal Technological University</li>
                                <li><span>2014</span><br> Gen. Pio Del Pilar National High School</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------Services------------------ -->
        <div id="services">
            <div class="container">
                <h1 class="subtitle">My Services</h1>
                <div class="services-list">
                    <div>
                        <i class="fa-solid fa-code"></i>
                        <h2>Web Development</h2>
                        <p>Building and maintenance of websites</p>
                        <a href="#">Learn more</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-crop"></i>
                        <h2>Web Development</h2>
                        <p>Building and maintenance of websites</p>
                        <a href="#">Learn more</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-cloud"></i>
                        <h2>Web Development</h2>
                        <p>Building and maintenance of websites</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------- My Portfolio----------------------- -->
        <div id="portfolio">
            <div class="container">
                <h1 class="subtitle">My Work</h1>
                <div class="work-list">
                    <div class="work">
                        <img src="<?php echo base_url() . ?>assetsimages/work1.JPG">
                        <div class="layer">
                            <h3>Seamanjobsite.com</h3>
                            <p>Seaman Jobsite provides the latest job openings for seafarers worldwide. All maritime jobs are posted by licensed manning agencies and maritime companies.</p>
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/work2.JPG">
                        <div class="layer">
                            <h3>Seamanjobsite.com</h3>
                            <p>Seaman Jobsite provides the latest job openings for seafarers worldwide. All maritime jobs are posted by licensed manning agencies and maritime companies.</p>
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/work3.JPG">
                        <div class="layer">
                            <h3>Seamanjobsite.com</h3>
                            <p>Seaman Jobsite provides the latest job openings for seafarers worldwide. All maritime jobs are posted by licensed manning agencies and maritime companies.</p>
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn">See More </a>
            </div>
        </div>
        <!-- -----------------------Contact--------------------- -->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="subtitle">Contact Me</h1>
                        <p><i class="fa-solid fa-paper-plane"></i> bryantristanmanuel@gmail.com</p>
                        <p><i class="fa-solid fa-phone"></i> +63-916-3839-255</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/bryantristanmanuel/"><i class="fa-brands fa-linkedin"></i> </a>
                            <a href="https://github.com/bryantristanmanuel/"><i class="fa-brands fa-square-github"></i></a>
                            <a href="https://www.facebook.com/imbryanmanuel/"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="https://www.instagram.com/imbryanmanuel/"><i class="fa-brands fa-square-instagram"></i></a>
                        </div>
                        <a href="document/Manuel_Bryan_Tristan.pdf" class="btn btn2" download> Download CV </a>
                    </div>
                    <div class="contact-right">
                        <form method="post" >
                            <input type="text" name="name" placeholder="Enter your name...">
                            <input type="email" name="email" placeholder="Enter your email...">
                            <textarea name="message" rows="6" placeholder="Your message...."></textarea>
                            <button type="submit" class="btn btn2">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="copyright">
            <p>Bryan © 2022</p>
        </div>
        </div>

        <script type="text/javascript">

            var tablinks = document.getElementsByClassName('tab-links');
            var tabcontents = document.getElementsByClassName('tab-contents');

            function opentab(tabname) {
                for(tablink of tablinks) {
                    tablink.classList.remove('active-link');
                }

                for(tabcontent of tabcontents) {
                    tabcontent.classList.remove('active-tab');
                }

                event.currentTarget.classList.add('active-link');
                document.getElementById(tabname).classList.add('active-tab');
            }
        </script>
        <script type="text/javascript">
            var sidemenu =  document.getElementById('sidemenu');

            function openmenu() {
                sidemenu.style.right = '0';
            }

            function closemenu() {
                sidemenu.style.right = '-200px';
            }
        </script>
    </body>
</html>

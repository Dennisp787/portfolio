<?php
  $message_sent = false;
  if( isset($_POST['send']) ){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      //submit the form
      $userEmail = $_POST['email'];
      $userSubject = $_POST['subject'];
      $userMessage = $_POST['message'];
      //where to send Email
      $to = 'dennisp787@gmail.com';

      //whos it from
      $headers .= "From: " .$userEmail ."\r\n";


      mail($to, $userSubject, $userMessage, $headers);
      $message_sent = true;
      }
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dennis P</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/1d9b3dbf03.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </head>
    <body>
        <header>
            <div class="flex container">
                <h1 id="logo">DPhillips</h1>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu">
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li id="close"><span class="fas fa-times"></span></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="introduction">
        <div class=" flex container">
            <div class="intro">
                <h4>Hello, my name is Dennis Phillips.</h4>
                <h1>Frontend Web Developer</h1>
                <p class="large-p">
                    I'm a self taught front end web developer from New York City. Currently seeking career opprotunities in web development.
                </p>
                <button class="button">Resume</button>
            </div>
            <div>
                <img id="me" src="imgs/dennis.png" alt="">
            </div>
        </div>
        </section>
        <section id="skills">
            <div class=" container flex">
                <div>
                    <img src="imgs/dennis2.png" alt="">
                </div>
                <div class="skills_c">
                    <h1>Skills</h1>
                    
                    <div class="bar">
                        <p>Html 5</p>
                        <div class="progress" style="border: 1px solid #f35b04">
                            <div class="skill html">80%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>CSS 3</p>
                        <div class="progress" style="border: 1px solid #33658a">
                            <div class="skill css">60%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>Javascript</p>
                        <div class="progress" style="border: 1px solid #f7b801">
                            <div class="skill javascript">50%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>Bootstrap</p>
                        <div class="progress" style="border: 1px solid #3c096c">
                            <div class="skill bootstrap">80%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>JQuery</p>
                        <div class="progress" style="border: 1px solid #000">
                            <div class="skill jquery">45%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>PHP</p>
                        <div class="progress" style="border: 1px solid #7678ed">
                            <div class="skill php">30%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>React</p>
                        <div class="progress" style="border: 1px solid #1be7ff">
                            <div class="skill react">10%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <p>SQL</p>
                        <div class="progress" style="border: 1px solid #f6ae2d">
                            <div class="skill sql">75%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects">
            <h1>Projects</h1>
            <div class=" container flex">
                <div class="project">
                    <div class="box img1"></div>
                    <div class="box img-text">
                        <div class="text-area">
                            <h2>FitLog</h2>
                            <h5>Built with: HTML5, CSS3, Python, Django, Bootstrap, SQLite</h5>
                            <p>Fully functioning web app for logging workouts.</p>
                            <a target="_blank" href="https://github.com/Dennisp787/CS50-Final-A-Django-web-app"><button class="button-p">Code</button></a>
                            <a target="_blank" href="https://www.fitlog.online/"><button class="button-p">Demo</button></a>
                        </div>
                  
                    </div> 
                </div>
                <div class="project">
                    <div class="box img2"></div>
                    <div class="box img-text">
                        <div class="text-area">
                            <h2>HostingHost</h2>
                            <h5>Built with: HTML5, CSS3, Javascript, JQuery</h5>
                            <p>Hosting service website</p>
                            <a target="_blank" href="https://github.com/Dennisp787/portfolio/tree/main/hostinghost"><button class="button-p">Code</button></a>
                            <a target="_blank"href="https://dphillips.co/hostinghost/" ><button class="button-p">Demo</button></a>
                        </div>
                
                    </div>
                </div>
            </div>
            
        </section>
        <section id="contact">
            <h1>Contact Me</h1>
            <div class="flex container">
                <fieldset>
                    <form action="index.php" method="POST">
                        <label for="email"><h4>Email</h4></label>
                        <input type="email" name="email"id="email" required placeholder="JohnDoe@email.com">
                        <label for="subject"><h4>Subject</h4></label>
                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                    <label for="message"><h4>Message</h4></label>
                        <textarea type="text" name="message" id="message" placeholder="Your message here." required></textarea>
                        <button type="submit" name="send" class="button-f">Send Message</button>
                    </form>
                </fieldset>
            </div>
        </section>
        <footer>
        <div class="flex container">
            <div>
            <a  href="#logo"><span class="fas fa-angle-double-up"></span></a>
            </div>
            <div>
            <small>&copy; Dennis Phillips 2021</small>
            <a href="https://www.linkedin.com/in/dennis-phillips-aa03ba169/" target="_blank"><span class="fab fa-linkedin lin"></span></a>
            <a href="https://github.com/Dennisp787" target="_blank"><span class="fab fa-github-square lin"></span></a>
            </div>
        </div>
        </footer>
     <script type="text/javascript" src="js/script.js"></script>       
    </body>
</html>


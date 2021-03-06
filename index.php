<?php include('function.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mukhammadamin Abdullaev</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&family=Russo+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="default.css">

    <link id="theme-style" rel="stylesheet" href="default.css">
</head>

<body>
    
    <section class="s1">
        <div class="main-container">
            <div class="greeting-wrapper">
                <h1>Hi, I'm Abdullaev</h1>
            </div>

            <div class="intro-wrapper">
                <div class="nav-wrapper">
                    <div class="dots-wrapper">
                        <div id="dot-1" class="browser-dot"></div>
                        <div id="dot-2" class="browser-dot"></div>
                        <div id="dot-3" class="browser-dot"></div>
                    </div>

                    <ul id="navigation">
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="left-column">
                    <img id="profile_pic" src="images/photo.jpg" alt="">
                    <h5 style="text-align: center; line-height: 0;">Personalize Theme</h5>
                    
                    <div id="theme-options-wrapper">
                        <div data-mode="light" id="light-mode" class="theme-dot"></div>
                        <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
                        <div data-mode="purple" id="purple-mode" class="theme-dot"></div>
                    </div>

                    <p id="settings-note">*Theme settings will be saved <br> for
                        your next vist</p>
                </div>
                <div class="right-column">
                    <div id="preview-shadow">
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>
                            <h3>Who am I!</h3>
                            <p>Junior Web Developer specializing
                                <br> in Beckend Developer.</p>
                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <div class="about-wrapper">
                <div class="about-me">
                    <h4>More About Me</h4>

                    <p>High passion to learn New Technology. I have <br>
                        variety of skills depending on Web Development</p>
                    <p>I can build different project according to field that I have learned. Currently, I am making projects that improve my knowladge in this sphere</p>
                    
                    <hr>

                    <h4>TOP EXPERTISE</h4>
                        <p>Here is my Resume:
                        <a target="_blank" href="resume.pdf">Download Resume</a> </p>
                        <br>
                        <p>Skills that I have:</p>
                        

                    <div id="skills">
                        <ul>
                            <li><i style="color: orange; margin-right: 5px;" class="fab fa-html5"></i>Html</li>
                            <li><i style="color: #17b5ce; margin-right: 5px;" class="fab fa-css3-alt"></i>Css3</li>
                            <li><i style="color: #24192e; margin-right: 5px;" class="fab fa-bootstrap"></i>Bootstrap</li>
                        </ul>

                        <ul>
                            <li><i style="color: #17a2b8; margin-right: 5px;"  class="fab fa-php"></i>PHP</li>
                            <li><i style="color: #FC6058; margin-right: 5px;" class="fab fa-laravel"></i>Laravel</li>
                            <li><i style="color: rgb(209, 140, 10); margin-right: 5px;" class="fas fa-database"></i>MySQL</li>
                        </ul>
                    </div>
                </div>

                <div class="social-links">
                    <img id="social_img" src="images/follow.jpg" alt="">
                    <h3>Find Me on <i style="color: #17a2b8;" class="fab fa-twitter"></i> &  <i style="color: royalblue" class="fab fa-facebook"></i> & <i style="color: steelblue;" class="fab fa-linkedin"></i> & <i style="color: rgba(0,0,0,0.75);" class="fab fa-github"></i></h3>
                    <a target="_blank" href="#"><i style="color: #17a2b8;" class="fab fa-twitter"></i> @abdullaev_dev</a>
                    <br>
                    <a target="_blank" href="https://www.facebook.com/mukhammadamin.abdullaev.02"><i style="color: royalblue" class="fab fa-facebook"></i> @mukhammadamin.abdullaev.02</a>
                    <br>
                    <a target="_blank" href="https://www.linkedin.com/in/mukhammadamin-abdullaev-3a0193203"><i style="color: steelblue;" class="fab fa-linkedin"></i> @mukhammadamin-abdullaev</a>
                    <br>
                    <a target="_blank" href="https://github.com/Mukhammadamin2002"><i style="color: rgba(0,0,0,0.75);" class="fab fa-github"></i> @Mukhammadamin2002</a>
                </div>
            </div>
        </div>
    </section>

    <section class="s1">
        <div class="main-container">

            <h3 class="text-align: center">Some Of My Projects</h3>

            <div class="post-wrapper">

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/registration.webp" alt="">
                        <div class="post-preview">
                            <h6 class="post-title">Registration System</h6>
                            <p class="post-intro">This Is registration system that you can sign up and there is sign in page that you can use easily with full validation!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

               <div>
                    <div class="post">
                        <img class="thumbnail" src="images/ecommerce.png" alt="">
                        <div class="post-preview">
                            <h6 class="post-title">Ecommerce</h6>
                            <p class="post-intro">Ecommerce Project made with Laravel. All functionalities are there you can use this system easily for any type of product that you want to sale online</p>
                            <a href="post.html">Read More</a>
                        </div>
                    </div>
               </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/realtime.png" alt="">
                        <div class="post-preview">
                            <h6 class="post-title">LiveChat System</h6>
                            <p class="post-intro">LiveChat System has made with Laravel & Vue. You can easily use this application. You can connect and chat with active user in this app</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <h3 style="text-align: center;">Get in Touch</h3>
            <h4 style="background-color: #17a2b8; text-align: center;" class="sent-notification"></h4>
            <form  id="contact-form" method="post">

                <label for="">Name</label>
                <input id="name" type="text" class="input-field" required>

                <label for="">Email</label>
                <input id="email" type="text" class="input-field" required>
                
                <label for="">Subject</label>
                <input id="subject" type="text" class="input-field" required>

                <label for="">Message</label>
                <textarea id="body" class="input-field" required></textarea>

                <button style="cursor: pointer;" onclick="sendEmail()" type="button" id="submit-btn" value="Send">Send</button>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendEmail(){
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $('#body');

            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
                $.ajax({
                    url: 'function.php',
                    method: 'POST',
                    dataType: 'json',   
                    data:{
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, success: function(response){
                        $('#contact-form')[0].reset();
                        $('.sent-notification').text("Message sent Successfully");
                    }
                });
            }
        }
        function isNotEmpty(caller){
            if(caller.val()==""){
                caller.css('border, 1px solid red');
                return false;
            }else{
                caller.css('border', '');
                return true;
            }
        }
    </script>
    <script src="script.js"></script>

</body>

</html>
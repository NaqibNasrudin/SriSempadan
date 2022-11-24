<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/dev.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Edu+SA+Beginner&display=swap" rel="stylesheet">
    <title>Naqib Nasrudin</title>
    <link rel="icon" href="{{asset('img/profile_icon.png')}}">
</head>
<body>
    <nav>
        <ul class="navigation">
            <a href="/">Seri Sempadan Page</a>
            <a href="#about-me">About Me</a>
            <a href="#skill">Skills</a>
            <a href="mailto:naqibnas1012@gmail.com">Contact Me</a>
        </ul>
    </nav>
    <div class="c1">
        <div class="intro">
            <div class="image">
                <img class="image-title" src="{{asset('img/dev/naqib2.jpg')}}" alt="">
            </div>
            <div class="text">
                <h1>Hey there!</h1>
                <h1>I'm <span>Naqib Nasrudin</span></h1>
                <h1>I am a <span>Web Developer</span></h1>
            </div>

        </div>
    </div>
    <div class="about-me" id="about-me">
        <h2 class="about_me_h2">About Me</h2>
        <div class="background">
            <div>
                <h3>Background</h3>
                <p>I'm Naqib Nasrudin and I am a web developer. I'm a student from International Islamic University Malaysia (IIUM) located in gombak
                    majoring in Information Technology and specialised in Information Assurance and Security (IAS).
                    I've been developing websites for one year and still looking for opportunity to gain more experience in web development.
                    Most of my developments are using Laravel Framework which is a PHP language based framework.
                    I love developing a website as it gives me challenge and it can improve my problem solving skill.
                </p>
            </div>
            <div class="image_background">
                <img class="image_aboutme" src="{{asset('img/dev/profile.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="skill" id="skill">
        <h2 class="skill_h2">Skills</h2>
        <div class="skill_content">
            <div class="skill_text">
                <p class="skill_text_p">
                    Since I started developing websites one year ago as a freelance developer, I learn many new things in development field that can help boost my skills.
                    Of course I started from zero but experiences is the best teacher as it help me to make a beter websites.
                    However, I am still looking for more expriences to gain as a web developer.
                </p>

                <p class="skill_text_p">
                    In previous year, I created some responsive websites that are fast, easy to use and user friendly.
                    The main area of my expertise are frontend and a little bit of backend.
                    Frontend is where I deal with the website interface or general user interface(GUI) to proveide the best experience to users.
                    While backend, I am dealing with the database that will be used in the websites I creted.
                </p>
            </div>
            <div class="skill_bar">
                <div class="bar">
                    <div class="skill_title">
                        <h4>CSS</h4>
                    </div>
                    <div class="progress_bar">
                        <div class="css"></div>
                    </div>
                </div>
                <div class="bar">
                    <h4>HTML</h4>
                    <div class="progress_bar">
                        <div class="html"></div>
                    </div>
                </div>
                <div class="bar">
                    <h4>JavaScript</h4>
                    <div class="progress_bar">
                        <div class="js"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

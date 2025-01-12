<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, query: "SELECT * FROM `contact_form` WHERE name = '$name' AND email ='$email' AND number='$number' AND message= '$msg'") or die('query failed');


    
    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- aos css link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

     <!-- custom css file link  -->
      <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if (isset($message)) {
    foreach ($message as $msg) {
        echo '
        <div class="message" data-aos="zoom-out">
        <span>' . $msg . '</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<!-- headerv section starts here  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portfolio.</a>

    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#projects">projects</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="https://www.facebook.com/profile.php?id=100012219918977" class="fab fa-facebook-f"></a>
        <a href="https://www.linkedin.com/in/zaiba-anam-37738a16a" class="fab fa-linkedin"></a>
        <a href="https://github.com/Zaiba-Anam" class="fab fa-github"></a>
    </div>

</header>

<!-- headerv section ends here  -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image" data-aos="fade-right">
        <img src="officepic.jpg" alt="">
    </div>

    <div class="content">
        <h3 data-aos="fade-up">hi, i am zaiba anam</h3>
        <span data-aos="fade-up">programmer</span>
        <p data-aos="fade-up">Hardworking, highly motivated professional eager to lend combined
        knowledge and skills to enhance business performance. Operates well in
        both individual and team capacities, leveraging seasoned work ethic to
        quickly adapt to different processes and drive company objectives.
        Resourceful and results-driven with a passion for growth and efficiency
        to meet company needs and increase service value.</p>
        <a data-aos="fade-up" href="#about" class="btn">about me</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts here  -->

<section class="about" id="about">

    <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
    
    <div class="biography">
        <p data-aos="fade-up"></p>

        <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Zaiba Anam </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> zaibaanam18@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Sharjah, United Arab Emirates </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> +91-888-057-5736, +971-55-861-3243 </h3>     
            <h3 data-aos="zoom-in"> <span>age : </span> 26 years </h3>     
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>     
        </div>

        <a href="#" class="btn"  data-aos="fade-up">download CV</a>

    </div>

    <div class="skills" data-aos="fade-up">

      <h1 class="heading"><span>skills</span></h1>
      <div class="progress">
        <div class="bar"><h3><span>HTML5</span><span> 95%</span></h3></div>
        <div class="bar"><h3><span>CSS3</span><span> 90%</span></h3></div>
        <div class="bar"><h3><span>Javascript ES6</span><span> 75%</span></h3></div>
        <div class="bar"><h3><span>PHP</span><span> 70%</span></h3></div>
        <div class="bar"><h3><span>C#</span><span> 65%</span></h3></div>
        <div class="bar"><h3><span>VB.NET</span><span> 85%</span></h3></div>
        <div class="bar"><h3><span>MySQL</span><span> 50%</span></h3></div>
      </div>

    </div>

    <div class="edu-exp" data-aos="fade-up">
        <h1 class="heading"> <span>education & experience</span></h1>

        <div class="row">

            <div class="box-container">

                <h3 class="title">education</h3>

                <div class="box">
                    <span>( Aug 2016 - Aug 2021 )</span>
                    <h3>Bachelor of Engineering</h3>
                    <p>Telecommunication Engineering</p>
                </div>

            </div>

            <div class="box-container">

                <h3 class="title">experience</h3>

                <div class="box">
                    <span>( July 2023 - Present )</span>
                    <h3>programmer</h3>
                    <p>Aims Group LLC - Govt. of Ajman, United Arab Emirates</p>
                </div>

                <div class="box">
                    <span>( Sept 2021 - Sept 2022 )</span>
                    <h3>programmer</h3>
                    <p>Atlantec Quest Pvt Ltd, India</p>
                </div>

            </div>

        </div>
    </div>

</section>

<!-- about section ends here  -->

<!-- services section starts here  -->

<section class="projects" id="projects" data-aos="fade-up">

    <h1 class="heading"> <span>Projects</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3 class="topic">official website -Aims Group</h3>
            <h3>PHP & MySQL</h3>
            <span class="company-date">
            <h4 class="left-side">Aims Group (L.L.C.)</h4>
            <h4 class="right-side">Oct 2024 – Dec 2024 </h4>
            </span>
            <p>To create the official Aims Group LLC website, I used PHP, HTML, CSS, JavaScript, and MySQL. With its adaptable design, dynamic content management, and interactive features, the website offers a captivating user experience on all platforms. JavaScript improved user interactions, whereas PHP and MySQL handled backend functionality.</p>
        </div>

        <div class="box">
            <i class="fab fa-wordpress"></i>
            <h3 class="topic">WindowsUI Style App</h3>
            <h3>C# and WPF</h3>
            <span class="company-date">
            <h4 class="left-side">Aims Group (L.L.C.)</h4>
            <h4 class="right-side">July 2024 - Aug 2024 </h4>
            </span>
            <p>Using C# and WPF, I created a contemporary Windows UI-style application with an emphasis on designing a user experience that is both responsive and aesthetically pleasing. The application's streamlined style, contemporary buttons, and rounded corners made for a seamless and simple user experience.</p>
        </div>

        <div class="box">
            <i class="fa-brands fa-php"></i>
            <h3 class="topic">ERP-IT Support Ticketing System using PHP & MySQL</h3>
            <h3>PHP & MySQL</h3>
            <span class="company-date">
            <h4 class="left-side">Aims Group (L.L.C.)</h4>
            <h4 class="right-side">April 2024 - June 2024</h4>
            </span>
            <p>I developed and maintained responsive web applications using PHP, MySQL, and JavaScript to streamline ERP request logging, reducing logging time by 80%, while enhancing user interfaces with modern JavaScript frameworks, HTML5, and CSS3, resulting in a 35% increase in user satisfaction.</p>
        </div>

        <div class="box">
            <i class="fab fa-wordpress"></i>
            <h3 class="topic">Website Using WordPress</h3>
            <h3>WordPress</h3>
            <span class="company-date">
            <h4 class="left-side">Aims Group (L.L.C.)</h4>
            <h4 class="right-side">Aug 2023 – Feb 2024</h4>
            </span>
            <p>I designed and developed the official website using WordPress, integrating custom themes, plugins, and essential functionalities tailored to enhance user interaction and drive conversions while aligning with the company's branding and business objectives.</p>
        </div>

        <div class="box">
            <i class="fas fa-code"></i>
            <h3 class="topic">Employee Task Management System</h3>
            <h3>VB.NET & MySQL</h3>
            <span class="company-date">
            <h4 class="left-side">Aims Group (L.L.C.)</h4>
            <h4 class="right-side"> Oct 2023 – Dec 2023 </h4>
            </span>
            <p>I developed a Task Management System using VB.NET and MySQL, increasing task completion by 20% and reducing completion time by 40%. Custom reports provided actionable insights, boosting productivity by 50%.</p>
        </div>

        <div class="box">
            <i class="fab fa-wordpress"></i>
            <h3 class="topic">JavaScript March Madness </h3>
            <h3>HTML5, CSS3, JAVASCRIPT, and BOOTSTRAP4</h3>
            <span class="company-date">
            <h4 class="left-side">Atlantec Quest Pvt. Ltd</h4>
            <h4 class="right-side">Dec 2021 - Feb 2022</h4>
            </span>
            <p>My March Madness application is interactive and was created with HTML, CSS, JavaScript, and Bootstrap.The project helped enhance my skills in front-end web development and integrating dynamic elements with clean, user-friendly design.</p>
        </div>
    </div>

    <div class="sub-container">
    <div class="box">
            <i class="fab fa-wordpress"></i>
            <h3 class="topic">Lineman Safety using ARM Microcontroller</h3>
            <h4>Final Year Project</h4>
            <span class="company-date">
            <h4 class="left-side"> KS Institute of Technology</h4>
            <h4 class="right-side">Sept 2020 - Aug 2021</h4>
            </span>
            <p>The Linean Safety System, controlled by an ATMEGA328 microcontroller, uses RFID and Fingerprint sensors for secure access. Line men can authenticate using either a Fingerprint sensor or keypad to control the circuit breaker, ensuring safety during maintenance.</p>
        </div>
    </div>

</section>

<!-- services section ends here  -->


<!-- contact section starts here  -->

<div class="contact" id="contact" >

    <h1 class="heading"> <span>contact me</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
        <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" name="send" class="btn">
    </form>

</div>

<!-- contact section ends here  -->
 

<!-- credits section  -->
<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>miss.zaiba anam</span></div>


















<!-- custom js file link  -->
 <script src="script.js"></script>

 <!-- aos js link  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>  
 
 <script>

    AOS.init({
        duration:800,
        delay:300
    });

 </script>

</body>

</html>

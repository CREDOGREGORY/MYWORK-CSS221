<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $userMessage = htmlspecialchars($_POST["message"]);

    $message = "Thank you, $name! Your message has been received.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MR.UHAKIKA</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f4f4;
    color:#333;
}

header{
    background:#111;
    color:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 50px;
}

.logo{
    font-size:30px;
    font-weight:bold;
    color:#00c3ff;
}

nav ul{
    list-style:none;
    display:flex;
}

nav ul li{
    margin-left:20px;
}

nav ul li a{
    color:white;
    text-decoration:none;
}

.hero{
    background:linear-gradient(to right,#000428,#004e92);
    color:white;
    text-align:center;
    padding:80px 20px;
}

.profile-photo{
    width:220px;
    height:220px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid #00c3ff;
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:#00c3ff;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

section{
    padding:60px 10%;
}

h2{
    text-align:center;
    margin-bottom:30px;
}

.about-container{
    display:flex;
    gap:30px;
    align-items:center;
    flex-wrap:wrap;
}

.about-photo{
    width:400px;
    max-width:100%;
    border-radius:15px;
}

.services{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.gallery{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
}

.gallery img{
    width:100%;
    border-radius:15px;
}

form{
    max-width:600px;
    margin:auto;
}

input,textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    background:#004e92;
    color:white;
    cursor:pointer;
}

.success{
    background:#d4edda;
    color:#155724;
    padding:15px;
    margin-bottom:20px;
    border-radius:5px;
}

footer{
    background:#111;
    color:white;
    text-align:center;
    padding:20px;
}
</style>

</head>
<body>

<header>
    <div class="logo">MR.UHAKIKA</div>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="hero">

    <!-- Replace with your image -->
    <img src="images/MATAI_1456.jpg" class="profile-photo" alt="MR.UHAKIKA">

    <h1>MR.UHAKIKA</h1>

    <p>
        Professional Videographer, Photographer,
        Content Creator & Social Media Manager
    </p>

    <a href="#contact" class="btn">Hire Me</a>

</section>

<section id="about">

    <h2>About Me</h2>

    <div class="about-container">

        <img src="images/MATAI_1097.jpg" class="about-photo" alt="About Me">

        <div>
            <p>
                My name is MR.UHAKIKA. I specialize in photography,
                videography, content creation, social media management,
                and digital branding. I help businesses and individuals
                grow their online presence through creative visual content.
            </p>
        </div>

    </div>

</section>

<section id="services">

    <h2>My Services</h2>

    <div class="services">

        <div class="card">
            <h3>📷 Photography</h3>
            <p>Professional event and portrait photography.</p>
        </div>

        <div class="card">
            <h3>🎥 Videography</h3>
            <p>High-quality video production and editing.</p>
        </div>

        <div class="card">
            <h3>🎨 Content Creation</h3>
            <p>Creative content for brands and businesses.</p>
        </div>

        <div class="card">
            <h3>📱 Social Media Management</h3>
            <p>Managing and growing social media accounts.</p>
        </div>

        <div class="card">
            <h3>🔒 System Security</h3>
            <p>Helping clients maintain secure digital systems.</p>
        </div>

    </div>

</section>

<section id="portfolio">

    <h2>Portfolio</h2>

    <div class="gallery">
        <img src="images/MATAI_1456.jpg" alt="">
        <img src="images/MATAI_1097.jpg" alt="">
    </div>

</section>

<section id="contact">

    <h2>Contact Me</h2>

    <?php if($message): ?>
        <div class="success"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>

    </form>

</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> MR.UHAKIKA | All Rights Reserved</p>
</footer>

</body>
</html>x
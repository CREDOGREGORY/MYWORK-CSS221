<?php
session_start();

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (
        isset($_POST['token']) &&
        hash_equals($_SESSION['token'], $_POST['token'])
    ) {

        $name = htmlspecialchars(trim($_POST['name']));
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $userMessage = htmlspecialchars(trim($_POST['message']));

        $message = "Thank you $name! Your message has been received.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mr.Uhakika | Creative Media Professional</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI,sans-serif;
}

html{
    scroll-behavior:smooth;
}

body{
    background:#0d1117;
    color:#fff;
    overflow-x:hidden;
}

header{
    position:fixed;
    width:100%;
    top:0;
    z-index:1000;
    background:rgba(0,0,0,.8);
    backdrop-filter:blur(10px);
}

nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 8%;
}

.logo{
    font-size:28px;
    font-weight:bold;
    color:#00d4ff;
}

nav ul{
    display:flex;
    gap:25px;
    list-style:none;
}

nav a{
    text-decoration:none;
    color:white;
    transition:.3s;
}

nav a:hover{
    color:#00d4ff;
}

.hero{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    background:
    linear-gradient(
        135deg,
        #00d4ff,
        #5f27cd
    );
    position:relative;
}

.hero-content{
    z-index:2;
}

.hero h1{
    font-size:4rem;
    margin-bottom:20px;
}

.hero p{
    font-size:1.3rem;
    margin-bottom:30px;
}

.btn{
    display:inline-block;
    padding:15px 35px;
    background:white;
    color:black;
    border-radius:50px;
    text-decoration:none;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    transform:scale(1.05);
}

section{
    padding:100px 8%;
}

.section-title{
    text-align:center;
    margin-bottom:50px;
    font-size:2.5rem;
    color:#00d4ff;
}

.about{
    text-align:center;
    max-width:900px;
    margin:auto;
}

.services{
    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.card{
    background:#161b22;
    padding:30px;
    border-radius:20px;
    text-align:center;
    transition:.4s;
    opacity:0;
    transform:translateY(40px);
}

.card.show{
    opacity:1;
    transform:translateY(0);
}

.card:hover{
    transform:translateY(-10px);
}

.card span{
    font-size:50px;
}

.gallery{
    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
}

.gallery img{
    width:100%;
    height:250px;
    object-fit:cover;
    border-radius:15px;
    transition:.4s;
}

.gallery img:hover{
    transform:scale(1.05);
}

.contact-form{
    max-width:700px;
    margin:auto;
}

input,
textarea{
    width:100%;
    padding:15px;
    margin-bottom:15px;
    border:none;
    border-radius:10px;
}

button{
    background:#00d4ff;
    border:none;
    padding:15px 30px;
    border-radius:10px;
    cursor:pointer;
    font-weight:bold;
}

.success{
    background:#0f5132;
    color:white;
    padding:15px;
    margin-bottom:20px;
    border-radius:10px;
}

footer{
    text-align:center;
    padding:30px;
    background:#111827;
}

.particle{
    position:absolute;
    width:6px;
    height:6px;
    background:white;
    border-radius:50%;
    opacity:.6;
    animation:float 10s linear infinite;
}

@keyframes float{
    from{
        transform:translateY(100vh);
    }
    to{
        transform:translateY(-100vh);
    }
}

@media(max-width:768px){

.hero h1{
    font-size:2.5rem;
}

nav{
    flex-direction:column;
    gap:15px;
}

}
</style>
</head>

<body>

<header>
<nav>

<div class="logo">Mr.Uhakika</div>

<ul>
<li><a href="#about">About</a></li>
<li><a href="#services">Services</a></li>
<li><a href="#portfolio">Portfolio</a></li>
<li><a href="#contact">Contact</a></li>
</ul>

</nav>
</header>

<section class="hero">

<div class="hero-content">
<h1>Mr.Uhakika</h1>

<p>
Photographer • Videographer • Content Creator •
Social Media Manager
</p>

<a href="#portfolio" class="btn">
View Portfolio
</a>
</div>

</section>

<section id="about">

<h2 class="section-title">About Me</h2>

<div class="about">

<p>
I help businesses, brands and individuals tell powerful stories
through photography, videography, creative content production and
professional social media management. My mission is to transform
ideas into engaging visual experiences that connect with audiences.
</p>

</div>

</section>

<section id="services">

<h2 class="section-title">Services</h2>

<div class="services">

<div class="card">
<span>📸</span>
<h3>Photography</h3>
<p>Professional portraits, events and branding photography.</p>
</div>

<div class="card">
<span>🎥</span>
<h3>Videography</h3>
<p>High-quality cinematic video production and editing.</p>
</div>

<div class="card">
<span>✨</span>
<h3>Content Creation</h3>
<p>Creative content tailored for digital platforms.</p>
</div>

<div class="card">
<span>📱</span>
<h3>Social Media Management</h3>
<p>Strategy, growth and engagement management.</p>
</div>

</div>

</section>

<section id="portfolio">

<h2 class="section-title">Portfolio</h2>

<div class="gallery">

<img src="https://picsum.photos/600/400?1" alt="">
<img src="https://picsum.photos/600/400?2" alt="">
<img src="https://picsum.photos/600/400?3" alt="">
<img src="https://picsum.photos/600/400?4" alt="">

</div>

</section>

<section id="contact">

<h2 class="section-title">Contact Me</h2>

<div class="contact-form">

<?php if($message): ?>
<div class="success">
<?= $message ?>
</div>
<?php endif; ?>

<form method="POST">

<input
type="hidden"
name="token"
value="<?= $_SESSION['token']; ?>"
>

<input
type="text"
name="name"
placeholder="Your Name"
required>

<input
type="email"
name="email"
placeholder="Your Email"
required>

<textarea
name="message"
rows="5"
placeholder="Your Message"
required></textarea>

<button type="submit">
Send Message
</button>

</form>

</div>

</section>

<footer>
<p>
© <?php echo date("Y"); ?>
Mr.Uhakika. All Rights Reserved.
</p>
</footer>

<script>

const cards = document.querySelectorAll('.card');

const observer = new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){
entry.target.classList.add('show');
}

});

});

cards.forEach(card=>{
observer.observe(card);
});

for(let i=0;i<40;i++){

const particle=document.createElement('div');

particle.classList.add('particle');

particle.style.left=Math.random()*100+'%';
particle.style.animationDuration=
(Math.random()*8+5)+'s';

document.querySelector('.hero')
.appendChild(particle);

}

</script>

</body>
</html>
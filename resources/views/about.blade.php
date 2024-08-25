<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mingkay's Life (About)</title>
<link rel="stylesheet" type="text/css" href="/css/about.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="/css/assets/logo.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('homepage') }}" class="button">Home</a></li>
            <li><a href="{{ route('about') }}" class="button">About</a></li>
            <li><a href="{{ route('content') }}" class="button">Content</a></li>
        </ul>
    </nav>
</header>

<section id="hero">
    <div class="hero-content">
       <br><br>
        <a href="#mingkai_and_friends" class="cta-button">Meet the Fam</a>
    </div>
</section>

<section id="mingkai_and_friends"> <br>
    <h4 style="background-color: #ff9fbf; color: white; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">Meet the Fam</h4>
    <div class="profile-grid">
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/mk1.jfif" alt="Member 1">
            </div>
            <h3>Mingkai</h3>
        </div>
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/nimb.jpg" alt="Member 1">
            </div>
            <h3>Nimble</h3>
        </div>
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/7.jpg" alt="Member 1">
            </div>
            <h3>Sevenleven</h3>
        </div>
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/potpot1.jfif" alt="Member 2">
            </div>
            <h3>Potpot</h3>
        </div>
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/ruff0.jpg" alt="Member 3">
            </div>
            <h3>Ruff</h3>
        </div>
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/luna1.jfif" alt="Member 4">
            </div>
            <h3>Luna</h3>
        </div>
        <div class="profile-card">
            <div class="image-container">
                <img src="/css/assets/cindy0.jpg" alt="Member 5">
            </div>
            <h3>Cindy</h3>
        </div>
    </div>
</section>

<section id="carousel">
    <h4 style="margin-right: 300px; margin-left: 300px; background-color: #ffe6f3; color: #d470a4; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 10px;">♡♡ Mingkai ♡♡</h4>
    <div class="carousel-container">
        <button class="carousel-button prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="carousel-slide">
            <div class="carousel-content">
                <img src="/css/assets/mkbby0.jpg" alt="Slide 1">
                <p><b>˚ʚ♡ɞ˚ Baby Mingkai (2019) ˚ʚ♡ɞ˚: </b><br> A Glimpse into Her Early Years</p>
            </div>
            <div class="carousel-content">
                <img src="/css/assets/mkdrama.jfif" alt="Slide 2">
                <p><b> ˚ʚ♡ɞ˚ Mingkai watching kdrama ˚ʚ♡ɞ˚ </b></p> 
            </div>
            <div class="carousel-content">
                <img src="/css/assets/bg.jfif" alt="Slide 3">
                <p><b>Spay Day ˚ʚ♡ɞ˚:</b> <br> April 05 2024: Spay Neuter Project</p>
            </div>
            <div class="carousel-content">
                <img src="/css/assets/mkpotpot1.jfif" alt="Slide 4">
                <p><b>Mingkai with Potpot˚ʚ♡ɞ˚:</b> <br>A tender moment between mother and son.</p>
            </div>
            <div class="carousel-content">
                <img src="/css/assets/cindymk.jfif" alt="Slide 5">
                <p><b>Mingkai with Cindy ˚ʚ♡ɞ˚:</b> <br>Sharing love and happiness in every cuddle. </p>
            </div>
            <div class="carousel-content">
                <img src="/css/assets/sevmk.jfif" alt="Slide 5">
                <p><b>Mingkai with Sevenleven ˚ʚ♡ɞ˚:</b> <br>Sissy </p>
            </div>
            <div class="carousel-content">
                <img src="/css/assets/mingkaiwithsnoopy.jpg" alt="Slide 5"> 
                <p><b>Mingkai with Snoopy ˚ʚ♡ɞ˚:</b> <br>Nap time buddies </p>
            </div>
            <!-- Add more slides as needed -->
        </div>
        <button class="carousel-button next" onclick="changeSlide(1)">&#10095;</button>
    </div>
</section>

<footer>
    <p>&copy; Mingkai's Life Website.</p>
</footer>

<script>
    let slideIndex = 0;
    showSlides(slideIndex);

    function changeSlide(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        let slides = document.getElementsByClassName("carousel-content");
        if (n >= slides.length) { slideIndex = 0; }
        if (n < 0) { slideIndex = slides.length - 1; }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
    }
</script>

</body>
</html>

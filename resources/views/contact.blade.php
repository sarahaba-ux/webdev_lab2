<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mingkai's Life (Contact)</title>

        <!-- Google Font link here -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/contact.css">
    </head>

    <body>

        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="/css/assets/images/logo.png" alt="Logo">
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('homepage', ['username' => request('username', 'guest')]) }}" class="button">Home</a></li>
                    <li><a href="{{ route('about', ['username' => request('username', 'guest')]) }}" class="button">About</a></li>
                    <li><a href="{{ route('content', ['username' => request('username', 'guest')]) }}" class="button">Content</a></li>
                    <li><a href="{{ route('contact', ['username' => request('username', 'guest')]) }}" class="button">Contact</a></li>
                </ul>
            </nav>

            <div class="welcome-message">
                <h1>{{ $message }}</h1>
            </div>
        </header>
         <!-- END OF HEADER -->

         <!--SECTION OF FORM  -->

         @if(session('flash')) 
            <p style="color: #ff80aa">{{ session('flash')}}</p>
         @endif
            <h1>CONTACT MINGKAI</h1>
            <p>If you want to pet me or have a little chat, just reach out to Mingkai!!!</p>
                <form class="contact" action="/contact" method="post">
                    @csrf
                    <div class="half left cf">
                        <input type="text" id="input-name" placeholder="Name" name="name" required>
                        <input type="email" id="input-email" placeholder="Email Address" name="email">
                        <input type="text" id="input-subject" placeholder="Subject" name="subject" required>
                        <textarea name="message" type="text" id="input-message" placeholder="Message" name="message" required></textarea>
                        <input type="submit" class="submit-button" value="Submit" id="input-submit">
                    </div>
                    <div class="image-container right">
                        <img src="/css/assets/images/contactmingkai.png" alt="Contact Mingkai">
                    </div>
                </form>         
         <!--END OF SECTION OF FORM  -->


        <!-- FOOTER -->
        <footer>
            <p>&copy; Mingkai's Life Website.</p>
        </footer>
        <!-- END OF FOOTER -->

         <!-- BACKGROUND MUSIC -->
        <audio id="background-music" src="/css/assets/audio/Cats_sped_up.mp3" preload="auto" loop></audio>

         <!-- JAVASCRIPT for (Background Music and Contact form) -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var audio = document.getElementById('background-music');
                audio.play();
            });

            document.getElementById('contact-form').addEventListener('submit', function(event) {
                var name = document.querySelector('input[name="name"]').value;
                var email = document.querySelector('input[name="email"]').value;
                var subject = document.querySelector('input[name="subject"]').value;
                var message = document.querySelector('input[name="message"]').value;
  
                if (!name || !email || !subject || !message) {
                    alert('Please fill out all required fields.');
                    event.preventDefault(); // Prevent form submission
                }
            });
        </script>

    </body>
</html>

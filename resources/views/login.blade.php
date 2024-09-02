<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mingkai's Life (Home)</title>
    
        <!-- Google Font link here -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/login.css">
    </head>

    <body>

        <!-- HEADER -->
        <header>
    
            <div class="logo">
                <img src="/css/assets/images/logo.png" alt="Mingkai's Life Logo">
            </div>
    
        </header>
        <!-- END OF HEADER -->

        <main>
            <div class="cat-container-wrapper">
                <!-- Login Form Container -->
                <div class="login-container">
                    <div class="cat-holder">
                        <img src="/css/assets/images/kit.png" alt="Cat holding the login container" class="cat-image">
                    </div>
                    <h2>Login</h2>
            
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" 
                            pattern="[A-Za-z]*" 
                            title="Only alphabetic characters (a-z, A-Z) are allowed." 
                            placeholder="Enter username (optional)">
                            <button type="submit">Login</button>
                    </form>
                <!-- End of Login Form Container -->
                </div>
            </div>
        </main>

    </body>
</html>

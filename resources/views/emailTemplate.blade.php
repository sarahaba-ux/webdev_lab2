<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mingkai's Life (Email Template)</title>
        <!-- Add Google Font link here -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    </head>

    <body>
         <!--SECTION OF FORM  -->
              <p><b>Name: </b>{{ $dataReceived['name'] }}</p>
              <p><b>Email: </b>{{ $dataReceived['email'] }}</p>
              <p><b>Subject: </b>{{ $dataReceived['subject'] }}</p>
              <p><b>Message: </b>{{ $dataReceived['message'] }}</p>
         <!--END OF SECTION OF FORM  -->
    </body>

</html>

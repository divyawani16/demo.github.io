<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="contact.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700">
  <title>Contact Form - Day 1</title>
</head>

<body>
    
    <nav class="navbar" id="nr">
    
        <img src="img/bg1.jpg" width="40%">
    
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div>
      <div class="contact-form-wrapper d-flex justify-content-center">
        <form  method="post" class="contact-form">
          <h5 class="title">Contact us</h5>
          <p class="description">Feel free to contact us if you need any assistance, any help or another question.
          </p>
          <div>
            <input type="text" name="name" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
          </div>
          <div>
            <input type="email" name="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
          </div>
          <div>
            <textarea id="message" name="msg" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Message" required></textarea>
          </div>
          <div class="submit-button-wrapper">
            <input type="submit" name="contact" value="Send">
          </div>

          <?php
          include("contact_us.php");
          ?>

        </form>
      </div>
    </div>
</body>

</html>
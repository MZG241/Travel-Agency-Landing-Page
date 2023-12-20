<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL AGENCY</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Domine&family=Ephesis&family=Kalnia:wght@100;300;400&family=Libre+Baskerville:wght@400;700&family=Lobster&family=Lora:ital,wght@0,400;0,500;1,400&family=Noto+Sans+Symbols+2&family=Roboto:ital,wght@1,300&family=Rubik+Bubbles&family=Shizuru&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
 *{
margin:0;
 }
 html{
scroll-behavior: smooth;
 }
 body{
font-family:Lora ;
background-color:#9BC1EE;
color:white;
 }
 .P1{
background-image: url(images/Gorille.jpeg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;
height:600px;
display:flex;
justify-content: center;
align-items: center;
 }
 
form{
padding:20px;
border:1px solid;
box-shadow: 0 0 10px white;

}

#Info{
    padding:20px;
border:1px solid;
box-shadow: 0 0 10px white;   
}


input{
padding:5px;
}
#title{
text-decoration: underline;
text-underline-offset: 30px;
}
  </style>
</head>
<body>  
<header>
    <nav class="navbar p-4  navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#"><i class="fa-solid fa-plane-departure"></i>  TRAVEL AGENCY</a>
          <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.php" id="Home">Home</a>
              <a class="nav-link text-white" href="#">About</a>
              <a class="nav-link text-white" href="#">Packages</a>
              <a class="nav-link text-white" href="Contact.html">Contact</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </div>
          </div>
        </div>
      </nav>
</header>
<div class="containfer-fluid mt-5  " id="P3">
    <div class="row text-center p-3 text-white">
    
    <h1 id="title">Contact</h1>
    </div>
    </div>
    <br>
    <br>
<div class="P1">
<!---TEXT ILLUSTRATIVE-->
</div>
<div class="container mt-5">
    <h3 class="text-center" data-aos="fade-right">Our Social Media</h3>
<br>
<br>
<br>
    <div class="row text-center justify-content-between">
        <div class="col-md-3"  data-aos="fade-up-left">
        <p>Facebook</p>
       <a href=""><img height="50"  src="images/Fa.png" alt="Facebook"></a>
        </div>
        <div class="col-md-3" data-aos="fade-up-left">
            <p>Whatsapp</p>
          <a href=""><img height="50" src="images/whatsapp_PNG21.png" alt="Whatsapp"></a>    
        </div>
        <div class="col-md-3" data-aos="fade-up-left">
            <p>Instagram</p>
       <a href=""><img height="50"  src="images/Insta.png" alt="Instagram"></a> 
        </div>
    </div>
</div>

<br>
<br>
<br>
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6" data-aos="zoom-in-up">
<form action="" method="post">
<h3 class="text-center">Contact Form</h3>
<br>
<label for="formControlInput" class="form-label">Full Name</label>
<input type="text" class="form-control" id="formControlInput" placeholder="Enter Your Name">
<label for="formControlInput" class="form-label">Email</label>
<input type="email" class="form-control" id="formControlInput" placeholder="Enter Your Email">
<label for="formControlInput" class="form-label">Phone</label>
<input type="tel" class="form-control" id="formControlInput" placeholder=" Example: +250...">
<label for="formControlInput" class="form-label">Message</label>
<div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
    <label for="floatingTextarea">Comments</label> <br>
    <button type="submit" class="btn btn-primary p-2">Submit</button>
  </div>
</form>
        </div>

</div>



<div class="containfer-fluid mt-5   bg-primary" id="P3">
<div class="row text-center p-3 text-white">

<p>Copyright © Travel Agency - All Rights Reserved.</p>
</div>
</div>




<script src="js/bootstrap.min.js" ></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>
</html>
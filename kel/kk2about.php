<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<style>
body
  {
    font-family: Arial;
    margin: 0;
  }

.header
  {
    padding: 1px;
    text-align: center;
    background: #70cce3;
    color: white;
    font-size: 25px;
  }

footer
  {
  text-align: center;
  padding: 3px;
  background-color: lightgrey;
  color: white;
  }

.button
{
  background-color: #d8e2ec;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  transition-duration: 0.4s;
  cursor: pointer;
  width:  160px;
}

.button1
{
  background-color: white; 
  color: black; 
  border: 2px solid #1010D4;
}

.button1:hover
{
  background-color: #1010D4;
  color: white;
}

.produk
{
  background-color: #d8e2ec;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  transition-duration: 0.4s;
  cursor: pointer;
  width:  160px;
}

.produk1
{
  background-color: white; 
  color: black; 
  border: 2px solid #10D41E;
}

.produk1:hover
{
  background-color: #10D41E;
  color: white;
}

.box
{
  background-color: lightgrey;
  width: 200px;
  height: 250px;
  padding: 10px;
  margin: 20px;
}

.resize
{
    width: auto;
    height: 150px;
}

div.a
{
  text-align: center;
}

.center
{
  margin-left: auto;
  margin-right: auto;
}

.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
</head>
<body style="background-color:  #fff7bd;">

<div class="header">
  <p>Website Apel Kegigit</p>
  <a href="kk2home.php"><button class="button button1">Home Page</button></a>
  <a href="kk2products.php"><button class="button button1">Products</button></a>
  <a href="kk2contact.php"><button class="button button1">Contact</button></a>
  <a href="kk2about.php"><button class="button button1">About</button></a>
  <a href="kk2login.php"><button class="button button1">Log In</button></a>
</div>

<div class="a">
<h2>About Us</h2>
<p>Anda telah mengetahui siapa kami dan apa yang kami buat, sekarang waktunya anda mengetahui kenapa semua ini terjadi
<br>
We work in the dark to serve the light</p>
</div>

<br>

<center>
<h2>Our Vision</h2>
<div class="row">
  <div class="column">
    <div class="container">
      <img src="game.png" alt="Vision" class="image">
      <div class="overlay">
        <div class="text">Bagi kami video game adalah hak bagi semua orang untuk melepas stress dari seharian bekerja</div>
      </div>
    </div>
  </div>
  <br><br>
  <h2>Our Mission</h2>
  <div class="column">
    <div class="container">
      <img src="mission.jpg" alt="Mission" class="image">
      <div class="overlay">
        <div class="text">Oleh karena itu, misi kami adalah memudahkan banyak orang supaya bisa mendapatkan fasilitas video game yang layak</div>
      </div>
    </div>
  </div>
  <br><br>
  <h2>And We Are</h2>
  <div class="column">
    <div class="container">
      <img src="ngawur.png" alt="Identity" class="image">
      <div class="overlay">
        <div class="text">Apel Kegigit</div>
      </div>
    </div>
  </div>
</div>  
</center>

<footer>
  <p>
    &copy Author: Apel Kegigit
    <br>
    <img src="telegram.png">
    Apel_Kegigit_Indo
  </p>
</footer>

</body>
</html>

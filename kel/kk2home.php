<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
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
<h2>Selamat datang di website merchandise kami</h2>
<p>
Kami adalah sebuah kelompok yang menyediakan jasa untuk jual beli merchandise seperti acton figure, poster, dan game disc dari game dan anime terkenal.
<br>
Untuk tau lebih lanjut mengenai kami silahkan klik gambar-gambar yang ada di bawah ini</p>
</div>

<table class="center">
  <tr>
    <td>
      <div class="box">
      <table class="center">
        <tr>
          <td style="text-align: center;"><img class="resize" src="merchandise.jpg"></td>
        </tr>
        <tr>
          <td><a href="kk2products.php"><button class="produk produk1">Products</button></td></a>
        </tr>
      </table>
      </div>
    </td>

    <td>
      <div class="box">
      <table class="center">
        <tr>
          <td style="text-align: center;"><img class="resize" src="inspiration.jpg"></td>
        </tr>
        <tr>
          <td><a href="kk2about.php"><button class="produk produk1">About Us</button></td></a>
        </tr>
      </table>
      </div>
    </td>

    <td>
      <div class="box">
      <table class="center">
        <tr>
          <td style="text-align: center;"><img class="resize" src="soon.jpg"></td>
        </tr>
        <tr>
          <td><a href="kk2comingsoon.php"><button class="produk produk1">Coming Soon</button></td></a>
        </tr>
      </table>
      </div>
    </td>
  </tr>
</table>

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

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="shortcut icon" href="C.png" type="image/x-icon">
    <link rel="stylesheet" href="beranda.css">
</head>
<body>
    <ul>
        <li><a class="active" href="Beranda.php">O-Book</a></li>
        <div class="nav">

            <div class="dropdown">
                <button class="dropbtn">Menu
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="./struktur organisasi.html">Struktur Organisasi</a>
                  <a href="./pengumuman.html">Pengumuman</a>
                  <a href="./tata tertib.html">Tata Tertib</a>
                  <a href="./galery.html">Galery</a>
                  <a href="./faq.html">FAQ</a>
                  <a href="./berita.html">Berita</a>
                </div>
              </div>

        <li><a href="login.php">Log out</a></li>
        
        
        <a href="profile.html"> <img src="profile-pic-yogi-modified.png" ></a>
        </div>
    </ul>
      
    <div class="kategoribuku">
        <h1>category</h1>
        <br>
        <h5 class="menu_h5"> 
            biography
            <div class="btns">
                
            <button class="btn-pinjam1"><a href="peminjaman.html">borrow</a></button>
                
            </div>
        
            <img class="img1" src="book2.png" >
            
        </h5>
        <h5 class="menu_h5">
            lesson
            
            <button class="btn-pinjam2"><a href="peminjaman.html">borrow</a></button>
            
            <img class="img2" src="./book3.png" >
        </h5>        
        <h5 class="menu_h5">
            fiction
            
            <button class="btn-pinjam3"><a href="peminjaman.html">borrow</a></button>
            
            <img class="img3" src="./book1.png" > 

        </h5>

   </div>
    

   
</body>
</html>
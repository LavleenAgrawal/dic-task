<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIC-GTU</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <?php
      include "dbConn.php"; // Using database connection file here

      if(isset($_POST['submit']))
      {   
          $fullname = $_POST['fullname'];
          $enrollment = $_POST['enrollment'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];

          $insert = mysqli_query($db,"INSERT INTO `registeration`(`fullname`, `enrollment`, `email`, `password`, `cpassword`) VALUES ('$fullname','$enrollment','$email','$password','$cpassword')");

          if(!$insert)
          {
              echo mysqli_error();
          }
      }

      mysqli_close($db); // Close connection
    ?>

    <!--Header-->
    <header class="header" id="header">
      <img src="gtu.png" alt="GTU logo" class="gtulogo">
      <div class="gd">
        <p class="gtu" id="gtu">GUJARAT TECHNOLOGICAL UNIVERSITY</p>
        <p class="dic" id="dic">Design Innovation Centre (DIC)</p>
        <p class="mhrd">MHRD Funded Project - Hub & Spoke Model</p>
      </div>
      <img src="dic.jpg" alt="DIC logo" class="diclogo">
    </header>

    <!--Navigation-->
    <nav class="nav" id="nav">
      <div>
        <ul class="navbar" id="navbar">
          <li id="ho"><a class="a" href="#home">HOME</a></li>
          <li id="ab"><a class="a" href="#about">ABOUT</a></li>
          <li id="con"><a class="a" href="#contact">CONTACT</a></li>
        </ul>
      </div>
      <div>
        <a href="#register"><button class="login" id="login">REGISTER</button></a>
      </div>
    </nav>

    <!--Home-->
    <section class="home" id="home">
      <div class="slides">
        <img class="mySlides" src="pic1.jpg" style="width:100%">
        <img class="mySlides" src="pic2.jpg" style="width:100%">
        <img class="mySlides" src="pic3.jpg" style="width:100%">
        <img class="mySlides" src="pic4.jpg" style="width:100%">
      </div>
    </section>

    <!--Registration-->
    <section class="register" id="register">
      <div class="reg">
        <div class="photo">
          <img src="https://images.unsplash.com/photo-1537202108838-e7072bad1927?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=385&q=80" alt="pic" class="regpic">
        </div>
        <div class="data">
          <h3>REGISTER HERE</h3>
          <form action="index.php" method="POST">
            <input type="text" id="fullname" name="fullname" placeholder="Your Name"></br>
            <input type="tel" id="enrollment" name="enrollment" placeholder="Enrollment Number"></br>
            <input type="email" id="email" name="email" placeholder="xyz@mail.com"></br>
            <input type="password" id="password" name="password" placeholder="Password"></br>
            <input type="password" id="password" name="cpassword" placeholder="Confirm Password"></br>
            <button type="submit" name="submit">Register</button>
          </form>
        </div>
      </div>
    </section>
    
    <!--About Us-->
    <section class="about" id="about">
      <h1>ABOUT - TEAM DIC</h1>
      <div class="sec" id="sec1">
        <div class="card" id="card1">
          <h3 class="title">Ms. Kavita Kripalani</h3>
          <p class="post">Dy. Director</p>
        </div>
        <div class="card" id="card2">
          <h3 class="title">Mr. Raj Hakani</h3>
          <p class="post">Assistant Professor</p>
        </div>
        <div class="card" id="card3">
          <h3 class="title">Mr. Parth Sejpal</h3>
          <p class="post">Assistant Professor</p>
        </div>
        <div class="card" id="card4">
          <h3 class="title">Mr. Harshil Patel</h3>
          <p class="post">Project Assistant</p>
        </div>
        <div class="card" id="card5">
          <h3 class="title">Mr. Dilip Chaubisa</h3>
          <p class="post">Project Assistant</p>
        </div>
        <div class="card" id="card6">
          <h3 class="title">Mr. Nirav Patel</h3>
          <p class="post">Research Assistant</p>
        </div>
      </div>
    </section>

    <!--Contact Us-->
    <section class="contact" id="contact">
      <div class="in">
          <table>
            <tr>
              <th colspan="2">CONNECT WITH US</th>
            </tr>
            <tr class="tr">
              <td>
                <i class="fas fa-map-marker-alt"></i>
              </td>
              <td>
                Gujarat Technological University
                Nr.Vishwakarma Government Engineering College
                Nr.Visat Three Roads, Visat - Gandhinagar Highway
                Chandkheda, Ahmedabad – 382424 - Gujarat
              </td>
            </tr>
            <tr class="tr">
              <td>
                <i class="fas fa-envelope"></i>              
              </td>
              <td>
                <a href="mailto:dic@gtu.ac.in">dic@gtu.ac.in</a>
              </td>
            </tr>
            <tr class="tr">
              <td>
                <i class="fas fa-phone-square-alt"></i>
              </td>
              <td rowspan="2">
                <a href="tel:079-23267531">079-23267531</a>
                <a href="tel:079-23267593">079-23267593</a>
              </td>
            </tr>
          </table>
      </div>  
    </section>
    
    <!--Footer-->
    <footer>
      <strong>&copy; Copyright 2021 All Rights Reserved.</strong></br>
      <strong>Lavleen Agrawal.</strong>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
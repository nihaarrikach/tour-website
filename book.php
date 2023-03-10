<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about</title>
    <!-- swiper css link -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <!-- font awesome css link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- custom css file -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section -->

    <section class="header">
      <a href="home.php" class="logo">travel.</a>

      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background: url(images/book.jpeg)">
      <h1>book now</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">
      <h1 class="heading-title">book your trip</h1>
      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>name :</span>
            <input
              type="text"
              name="name"
              placeholder="enter your name"
              id=""
            />
          </div>
          <div class="inputBox">
            <span>email :</span>
            <input
              type="email"
              name="email"
              placeholder="enter your email"
              id=""
            />
          </div>
          <div class="inputBox">
            <span>phone :</span>
            <input
              type="number"
              name="phone"
              placeholder="enter your number"
              id=""
            />
          </div>
          <div class="inputBox">
            <span>address :</span>
            <input
              type="text"
              name="address"
              placeholder="enter your address"
              id=""
            />
          </div>
          <div class="inputBox">
            <span>where to :</span>
            <input
              type="text"
              name="location"
              placeholder="enter your destination"
              id=""
            />
          </div>
          <div class="inputBox">
            <span>how many :</span>
            <input
              type="number"
              name="guests"
              placeholder="number of guests"
              id=""
            />
          </div>
          <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" id="">
          </div>
          <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" id="">
          </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
      </form>
    </section>

    <!-- footer starts -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>
        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
          <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
          <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i>+91-9625645839</a>
          <a href="#"> <i class="fas fa-phone"></i>+91-999069669</a>
          <a href="#">
            <i class="fas fa-envelope"></i>niharikach1208@gmail.com</a
          >
          <a href="#"> <i class="fas fa-map"></i>delhi, india-400104</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#"><i class="fab fa-facebook"></i>facebook </a>
          <a href="#"><i class="fab fa-twitter"></i>twitter </a>
          <a href="#"><i class="fab fa-instagram"></i>instagram </a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin </a>
        </div>
      </div>

      <div class="credit">
        created by <span>Niharika Chaudhary</span> |all rights reserved!
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>

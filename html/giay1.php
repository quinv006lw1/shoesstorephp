
<?php 
include('../connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Giầy Dép</title>
  <link rel="stylesheet" href="../css/giay1.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="nav">
    <div class="logo">
      <img src="../img/logo6.jpg" width="80px" alt="">
    </div>
    <div class="navnar">
      <ul>
        <li><a href="./nut.php">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>

          </a></li>
        <li><a href="#"> Liên hệ </a></li>
        <li><a href="./giay1.php"> Giày </a></li>
        <li><a href="#"> Tin tức </a></li>
        <li><a href="./intro.php"> Giới thiệu </a></li>
        <li><a href="../index.php"> Trang chủ</a></li>
      </ul>
    </div>
  </div>
  <header>
    <img src="../img/logo.gif" alt="">
  </header>
  <div class="container">
    <h1>
      SẢN PHẨM
    </h1>
    <aside>
      <div class="aside_left">
      <?php

          $query = "Select * from sanpham limit 0,9";

          $kq = mysqli_query($connect,$query);
          while($row = mysqli_fetch_array($kq))
          {
      ?>
        <div>
          <a href="#sp1"><img src='<?php 
          $a = '../'.$row['hinh']; echo $a; ?>' width="90px" height="90px" alt=""></a>
          <p> <a href="#"><b> <?php echo $row['gia'] ?> </b></a></p>
        </div>
        <hr>


        <?php } ?>

      </div>
    </aside>

    <article>
      <div class="content-right">

      <?php

        $query1 = "Select * from sanpham limit 0,9";
        $count =1;
        $kq1 = mysqli_query($connect,$query1);
        while($row1 = mysqli_fetch_array($kq1))
        {
        ?>


        
        <div class="top1">

          <div class="product<?php echo $count ?>">
            <div class="item<?php echo $count ?>">
              <div class="img">
                <a href="#" id="sp<?php echo $count ?>"><img
                    src='<?php 
          $a = '../'.$row1['hinh']; echo $a; ?>' width="250px" height="250px"></a>
              </div>
              <div class="section">
                <h2> Giày <?php echo $count ?> </h2>
                <p> Gía <span><?php echo $row1['gia'] ?> vnđ</span> </p>
                
              </div>
            </div>
          </div>
          
        </div>
        <?php if($count%3==0) echo "<div style='clear:both'></div>" ?>
        <?php $count++;} ?>
        
      </div>
    </article>
  </div>
  <footer>
    <div class="main-content">
      <div class="left box">
        <h2> About us </h2>
        <div class="content">
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>

          </div>
        </div>
      </div>
      <div class="center box">
        <h2> Address </h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text"> Tan Phu, HCM </span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text"> +84-868 295 640 </span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text"> nqui678@gmail.com </span>
          </div>
        </div>
      </div>
      <div class="right box">
        <h2> Contact us</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text"> Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text"> Message *</div>
              <textarea rows="2" cols="25" required></textarea>
            </div>
            <div class="btn">
              <button type="submit" style="background-color: red"> Send </button>
            </div>
          </form>

        </div>

      </div>
    </div>
  </footer>

</body>

</html>
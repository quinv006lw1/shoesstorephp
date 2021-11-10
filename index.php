<?php
  include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Shop giày của Osi </title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <base href="./">
</head>


<body ng-app="myapp">
  <div class="nav">
    <div class="logo">
      <img src="./img/logo6.jpg" width="80px" alt="">
    </div>
    <div class="navnar">
      <ul>
        <li>
          <a href="./html/nut.php">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>

          </a>
        </li>
        
        <li><a href="#"> Liên hệ </a></li>
        <li><a href="./html/giay1.php"> Giày </a></li>
        <li><a href="#"> Tin tức </a></li>
        <li><a href="./html/intro.php"> Giới thiệu </a></li>
        <li><a href="./index.php"> Trang chủ</a></li>

      </ul>
    </div>
  </div>
  <header>
    <img src="./img/logo.gif" alt="">
  </header>
  <!-- <label style="margin-left:300px">Loại giầy cần tìm :</br> <input ng-model="name" class="form-control"></label> -->
  <!-- <button style="margin-left:300px" type="button" class="btn btn-warning"> Giỏ Hàng: {{id}}</button> -->

  <div class="container">
    <h2 style="size: 3; color: red; text-align: center"> SẢN PHẨM BÁN CHẠY NHẤT </h2>
    <div class="content-top" ng-controller="ctrl1">
      <div class="top1">
        <div class="product1">
          <div class="item1">
            <div class="img">
              <a href="#" id="sp1"><img src="./img/luuy1.jpg" height="435px" width="500px"></a>
            </div>
            <div class="section">
              <h2>
                <font color="yellow"> Giày SNEAKER 001 </font>
              </h2>
              <p>
                <font size="5px"> Giá </font><span>
                  <font color="red" size="3px"> 500.000 VND </font>
                </span>
              </p>
            </div>
          </div>
        </div>
        <?php

          $query = "Select * from sanpham limit 0,2";

          $kq = mysqli_query($connect,$query);
          $count = 1;

          while($row = mysqli_fetch_array($kq))
          {
        ?>
        <div class="card-deck" style="margin-left: 5px">
          <div class="card c2" style="background-color: rgb(179, 230, 230)">
            <div class="product2">
              <div class="item2">
                <div class="img">
                  <a href="#" id="sp3">
                    <img src='<?php echo $row['hinh'] ?>' ng-click="my(<?php echo $count; ?>)" class="card-img-top" width="200px" height="255px" data-toggle="modal"
                      data-target="#myModal_<?php echo $count ?>" class="btn btn-info">
                  </a>
                </div>
                <div class="section">
                  <h2>
                    <font size="3px" color="red"> <?php echo $row['name'] ?> </font>
                  </h2>
                  <p>
                    <font size="4px"> Giá </font><span>
                      <font color="yellow" size="3px"> <?php echo $row['gia'] ?> VND </font>
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                <font size="4px" color="blue"> Giày <?php echo $row['name'] ?> </font>
              </h5>
              <p class="card-text"> <?php echo $row['title'] ?> </p>
            </div>
            <div class="card-footer" style="background-color: rgb(253, 195, 87)">
              <small class="text-muted"></small>
            </div>
          </div>
        </div>
        
        <div class="modal" id="myModal_<?php echo $count ?>" tabIndex={-1} role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Chi tiết Sản Phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="card bg-light text-dark">
                  <div class="imgs">
                    <img src='<?php echo $row['hinh'] ?>' class="float-left" width="350px" height="300px">

                  </div>
                  <p>Giá bán : <i><?php echo $row['gia'] ?>  VND</i> </p>
                  <h4><?php echo $row['name'] ?> </h4>
                  <p> <?php echo $row['title'] ?> </p>
                  <p> Phản hồi khách hàng: <?php echo $row['title'] ?></p>
                  </i>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
        <?php $count++;} ?>


      </div>
    </div>
    <div style="clear:both"></div>




    <h2 style="size: 3; color: red; text-align: center; margin-top:50px"> SẢN PHẨM BIG SALE </h2>
    <div class="content-bot" ng-controller="ctrl2">
      <div class="top1">
      <?php 
        $query1 = "Select * from sanpham limit 2,3";
        $kq2 = mysqli_query($connect,$query1);
        $count = 3;
        while ($row2 = mysqli_fetch_array($kq2)) 
        {

      ?>
        <div class="card-deck" style="margin-right: 2px" >
          <div class="card c2" style="background-color: rgb(179, 230, 230)">
            <div class="product2">
              <div class="item2">
                <div class="img">
                  <a href="#" id="sp2">
                    <img src='<?php echo $row2['hinh'] ?>' class="card-img-top" width="200px" height="240px" data-toggle="modal"
                      data-target="#myModal_<?php echo $count ?>" class="btn btn-info">
                  </a>
                </div>
                <div class="section">
                  <h2>
                    <font size="3px" color="red"> <?php echo $row2['name'] ?> </font>
                  </h2>
                  <p>
                    <font size="4px"> Giá </font><span>
                      <font color="yellow" size="3px"> <?php echo $row2['gia'] ?> VND </font>
                    </span>
                  </p>

                </div>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                <font size="4px" color="blue"> Giày <?php echo $row2['name'] ?> </font>
              </h5>
              <p class="card-text"> <?php echo $row2['title'] ?> </p>
            </div>
            <div class="card-footer" style="background-color: rgb(253, 195, 87)">
              <small class="text-muted"></small>
            </div>
          </div>
        </div>


        <div class="modal" id="myModal_<?php echo $count ?>" tabIndex={-1} role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Chi tiết Sản Phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="card bg-light text-dark">
                  <div class="imgs">
                    <img src='<?php echo $row2['hinh'] ?>' class="float-left" width="350px" height="300px">

                  </div>
                  <p>Giá bán : <i><?php echo $row2['gia'] ?>  VND</i> </p>
                  <h4><?php echo $row2['name'] ?> </h4>
                  <p> <?php echo $row2['title'] ?> </p>
                  <p> Phản hồi khách hàng: <?php echo $row2['title'] ?></p>
                  </i>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

        <?php
         $count++;}
        ?>
        <div class="product4">
          <div class="item1" style="margin-right: -15px">
            <div class="img1">
              <a href="#" id="sp1"><img src="./img/chon7.jpg" height="400px" width="250px"></a>
            </div>
            <div class="section">
              <h2>
                <font color="yellow"> Giày THỂ THAO 007 </font>
              </h2>
              <p>
                <font color="black"> Gía </font>
                <span>
                  <font color="red"> 500.000 VND </font>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <header style="margin-top:100px">
    <div class="top2">
      <div class="product1 prs">
        <div class="item1">
          <div class="img">
            <a href="#" id="sp1"><img src="./img/furniture1_img3.jpg" width="1350px"></a>
          </div>
          <div class="section">
            <h3> CREATIVE DECOR</h3>
            <h2>Because The Life Is Better</h2>
            <button type="button" class="btn btn-outline-warning"> Quảng cáo
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>


  </header>


  <div class="container">

    <div ng-controller="ctrl3">
      <div class="container-fluid p-0 my-2 rong"  style="margin-bottom: 100px; margin-top: 100px">
            <button class="btn btn-danger" data-toggle="modal" data-target="#modelId">
              <i class="fa fa-shopping-cart"></i>
              Giỏ hàng ( {{sumGioHang()}} )
            </button>
      
            <div class="modal fade " id="modelId" tabIndex={-1} role="dialog" aria-labelledby="modelTitleId"
              aria-hidden="true" >
              <div class="modal-dialog" style="max-width: 1200px" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Giỏ hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Mã sản phẩm</th>
                          <th>Tên sản phẩm</th>
                          <th>Hình ảnh</th>
                          <th>Số lượng</th>
                          <th>Giá bán</th>
                          <th>Thành tiền</th>
      
                        </tr>
                      </thead>
                      <tbody ng-if="listCart" >
                        <tr ng-repeat="cart in listCart">
                          <td>{{cart.id}}</td>
                          <td>{{cart.name}}</td>
                          <td style="width: 100px">
                            <img src="{{cart.hinh}}" width="50px" height="50px" alt="" />
                          </td>
                          <td style="width: 100px">
                            <button class="btn btn-secondary" ng-click="handleTangGiamSL(false, cart)">-</button>
                            {{cart.soLuong}}
                            <button class="btn btn-secondary" ng-click="handleTangGiamSL(true, cart)">+</button>
                          </td>
                          <td style="width: 100px">{{cart.gia}}</td>
                          <td>{{cart.gia * cart.soLuong}}.000 VND </td>
                          <td>
                            <button class="btn btn-danger" ng-click="handleDeleteCart(cart)">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="5">Tổng tiền</td>
                          <td colspan="2">{{sumTien()}}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      Close
                    </button>
                    <button type="button" class="btn btn-primary">
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

      
        <?php 
          $query2 = "Select * from sanpham";
          $kq3 = mysqli_query($connect,$query2);
          while ($row3 = mysqli_fetch_array($kq3)) 
          {

      ?>
      <div class="card mb-3" style="width: 25em; height: 250px; margin: 10px; float: left;" ng-init="u=
      {
        id:<?php echo $row3['id'] ?>,
        name:'<?php echo $row3['name'] ?>',
        hinh:'<?php echo $row3['hinh'] ?>',
        gia:<?php echo $row3['gia'] ?>,
      }
      ">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src='<?php echo $row3['hinh'] ?>' class="card-img" alt="..." height="248px" width="100px" data-toggle="modal2"
              data-target="#myModal2" class="btn btn-info">
              
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <font color="red" size="3"><b><?php echo $row3['name'] ?></b></font>
              </h5>
              <p class="card-text"><?php echo $row3['title'] ?></p>
              <p class="card-text"><small class="text-muted">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-week" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                    <path
                      d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                  </svg> <?php echo $row3['date'] ?>

                </small></p>
                
              <button class="btn btn-warning" ng-click="handleAddCart(<?php echo $row3['id'] ?>,'<?php echo $row3['name'] ?>','<?php echo $row3['hinh'] ?>',<?php echo $row3['gia'] ?>)">
                <i class="fa fa-cart-plus mr-1"></i>Mua Hàng
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <?php $count++;} ?>




    </div>
    <div style="clear:both"></div>

    <div class="chu">
      <h1> BÀI VIẾT MỚI </h1>
    </div>

    

    <div class="card-deck" ng-controller="ctrl4" style="width: 1100px; height: 500px; margin: 10px; float: left;">
    <?php 
      $query3 = "Select * from lienket";
      $kq4 = mysqli_query($connect,$query3);
      while ($row4=mysqli_fetch_array($kq4))
      {


    
    ?>
      <div class="card" style="background-color: rgb(233, 233, 156)">
        <a href="<?php echo $row4['link'] ?>">
          <img src="<?php echo $row4['hinhTin'] ?>" class="card-img-top" alt="..." style="height: 300px; width: 335px">
        </a>

        <div class="card-body">
          <h5 class="card-title" style="color: red; text-align: center; font-style: italic"><b><?php echo $row4['nameTin'] ?></b></h5>
          <p class="card-text">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-week" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
              <path
                d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
            </svg> <?php echo $row4['dateTin'] ?>
          </p>
          
          <p class="card-text"><small class="text-muted">"<?php echo $row4['detail'] ?></small></p>
        </div>
      </div>


      <?php } ?>

    </div>

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


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./js/angular.min.js"></script>
  <script src=".//js/product.js"></script>


</body>

</html>

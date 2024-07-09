<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VivaSport</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="<?= BASE_URL?>view/css/style.css">
    <style>
      .user{
        text-decoration: none;
        color: red;
      }
      .thoat{
        text-decoration: none;
        color: #000;
      }
      .cart{
        color: #000;
      }
    </style>
  </head>
  <body>
    <div class="boxcenter">
      <div class="topnav">
        <a href="index.php" class="logo"><img src="./img/logo.png" alt="" height="150px" width="200px"></a>
        <div class="searchbox">
          <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tìm kiếm...">
            <button type="submit" name="timkiem"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <?php
          if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
            echo '<a href="index.php?act=edit_taikhoan" class="user">'.$_SESSION['user'].'</a>';
            echo '<a href="index.php?act=thoat" class="thoat">Đăng xuất</a>';
          }else{
        ?>
        <div class="dndk">
          <a href="index.php?act=dangnhap">Đăng nhập</a> / <a href="index.php?act=dangky">Đăng ký</a>
        </div>
        <?php } ?>
        <a href="index.php?act=viewcart" class="cart"><i class="fa-solid fa-bag-shopping"></i></a>
        <p>Tư vấn miễn phí: <span style="color: #088178; font-weight: bold">039.913.1006</span></p>
      </div>
      <div>
        <ul id="navbar">
          <li><a href="index.php?act=sphot">Sản phẩm hot</a></li>
          <li><a href="index.php?act=nu">Nữ</a></li>
          <li><a href="index.php?act=lienhe">Liên hệ</a></li>
          <li><a href="index.php?act=tintuc">Tin tức</a></li>
        </ul>
      </div>
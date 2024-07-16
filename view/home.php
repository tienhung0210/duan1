  <img src="img/banner1.png" alt="" width="100%" height="500px">
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="./img/free.png" alt="" width="90%" height="90%" />
      <h6>Miễn phí vận chuyển</h6>
    </div>
    <div class="fe-box">
      <img src="./img/oder2.jpg" alt="" width="90%" height="90%" />
      <h6>Đặt hàng trực tuyến</h6>
    </div>
    <div class="fe-box">
      <img src="./img/sale.jpg" alt="" width="90%" height="90%" />
      <h6>Tiết kiệm chi phí</h6>
    </div>
    <div class="fe-box">
      <img src="./img/big.jpg" alt="" width="90%" height="90%" />
      <h6>Mua bán thuận tiện</h6>
    </div>
  </section>
  <section id="product1" class="section-p1">
    <h2>DANH SÁCH SẢN PHẨM</h2>
    <p style="color: gray">Với những mẫu mã luôn được cập nhật liên tục</p>
    <div class="pro-container">
      <div class="pro">
        <?php
          $i = 0;
          foreach ($spnew as $sp) {
              extract($sp);
              $linksp = "index.php?act=sanphamct&idsp=".$idpro;
              $hinh = $img_path.$img;
              echo '<div class="boxsp">
                      <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                      <a href="'.$linksp.'" class="name">'.$name.'</a>
                      <del><p>Giá: '.$price.'đ</p></del>
                      <span class="uudai">Giá ưu đãi: '.$priceud.'đ</span>
                      <div class="btnaddtocart">
                      <form action="index.php?act=addtocart" method="post">
                          <input type="hidden" name="id" value="'.$idpro.'">
                          <input type="hidden" name="name" value="'.$name.'">
                          <input type="hidden" name="img" value="'.$img.'">
                          <input type="hidden" name="price" value="'.$price.'">
                          <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                      </form>
                      </div>
                  </div>';
              $i+=1;
          }
        ?>
      </div>
    </div>
  </section>
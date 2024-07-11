<div class="boxcenter">
  <section id="product1" class="section-p1">
    <h2>SẢN PHẨM HOT</h2>
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
                      <p>'.$price.' đ</p>
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
  <section id="pagination" class="section-p1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">></i></a>
  </section>
</div>


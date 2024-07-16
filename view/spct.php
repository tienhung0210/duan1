<div class="row mb">
    <?php
        extract($onesp);
    ?>
    <div class="ctsptong">
        <div class="row boxcontent">
            <?php
                $img = $img_path.$img;
                echo '<div class="row spct"><img src="'.$img.'"></div>';
            ?>
        </div>
        <div class="single-pro-details">
            <h6></h6>
            <div class="title"><?=$name?></div>
            <del><h3>Giá: <?=$price?>đ</h3></del>
            <h2>Giá ưu đãi: <?=$priceud?>đ</h2>
            <div class="color">
                <a href=""><img src="./img/red.jpg" alt="" width="40px" height="40px" ></a>
                <a href=""><img src="./img/blue.jpg" alt="" width="40px" height="40px"></a>
                <a href=""><img src="./img/green.jpg" alt="" width="40px" height="40px"></a>
                <a href=""><img src="./img/pink.jpg" alt="" width="40px" height="40px"></a>
            </div>
            <select>
                <option>Chọn kích cỡ</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>
            <input type="number" value="1">
            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
            <h4>Chi tiết sản phẩm</h4>
            <?php
                echo $mota;
            ?>
        </div>    
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
    });
</script>
<div class="row" id="binhluan">
    
</div>
<div class="row mb">
    <div class="boxtitle">GỢI Ý CHO BẠN</div>
    <div class="row boxcontent">
        <?php
            foreach ($sp_cung_loai as $sp_cung_loai) {
                extract($sp_cung_loai);
                $linksp = "index.php?act=sanphamct&idsp=".$idpro;
                echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
            }
        ?>
    </div>
</div>
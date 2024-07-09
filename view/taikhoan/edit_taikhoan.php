<div class="row mb">
    <h4 class="updatetk">CẬP NHẬT TÀI KHOẢN</h4>
    <div class="formtaikhoan">
        <?php
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
        ?>
        <form action="index.php?act=edit_taikhoan" method="post">
            <div class="row mb10">
                Email <br>
                <input type="email" name="email" value="<?=$email?>">
            </div>
            <div class="row mb10">
                Tên đăng nhập <br>
                <input type="text" name="user" value="<?=$user?>">
            </div>
            <div class="row mb10">
                Mật khẩu <br>
                <input type="password" name="pass" value="<?=$pass?>">
            </div>
            <div class="row mb10">
                Địa chỉ <br>
                <input type="text" name="address" value="<?=$address?>">
            </div>
            <div class="row mb10">
                Điện thoại <br>
                <input type="text" name="tel" value="<?=$tel?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
            </div>
        </form>
        <h2 class="thongbao">
            <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
        </h2>
    </div>
</div>
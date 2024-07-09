<div class="row mb">
    <h4 class="dangnhap">QUÊN MẬT KHẨU</h4>
    <div class="formtaikhoan">
        <form action="index.php?act=quenmk" method="post">
            <div class="row mb10">
                Email
                <input type="email" name="email">
            </div>
            <div class="row mb10">
                <input type="submit" value="Gửi" name="guiemail">
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
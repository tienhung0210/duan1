<h2>THÊM MỚI SẢN PHẨM NAM</h2>
    <div class="formcontent">
        <form action="index.php?act=addspnam" method="post" enctype="multipart/form-data">
            <div class="mb10">
                Danh mục <br>
                <select name="iddm">
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value='.$id.'>'.$name.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp">
            </div>
            <div class="mb10">
                Giá <br>
                <input type="text" name="giasp">
            </div>
            <div class="mb10">
                Hình ảnh <br>
                <input type="file" name="hinh">
            </div>
            <div class="mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listspnam"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
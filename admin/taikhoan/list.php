<div class="row">
    <div class="row formtitle">
        <h2>DANH SÁCH TÀI KHOẢN</h2>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdslh">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listtaikhoan as $taikhoan){
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=".$iduser;
                        $xoatk = "index.php?act=xoatk&id=".$iduser;
                        echo '<tr align="center">
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$iduser.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xoá"></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>
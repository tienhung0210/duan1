<div class="row">
    <div class="row formtitle">
        <h2>DANH SÁCH BÌNH LUẬN</h2>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdslh">
            <table>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Idpro</th>
                    <th>Iduser</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                    foreach($listbinhluan as $binhluan){
                        extract($binhluan);
                        $suabl = "index.php?act=suabl&id=".$id;
                        $xoabl = "index.php?act=xoabl&id=".$id;
                        echo '<tr align="center">
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a> <a href="'.$xoabl.'"><input type="button" value="Xoá"></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
        </div>
    </div>
</div>
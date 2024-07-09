<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            
            <div class="boxtitle">SẢN PHẨM <strong><?=$tendm?></strong></div>
            <div class="row boxcontent">
                <?php
                    $i = 0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$idpro;
                        $hinh = $img_path.$img;
                        echo '<div class="boxsp">
                                <div class="row img">
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                </div>
                                <p>$'.$price.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                        $i+=1;
                    }
                ?>
            </div>
        </div>
    </div>
</div>
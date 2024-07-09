<?php
    function insert_sanpham_nu($tensp,$giasp,$hinh,$mota,$iddm){
        $sql = "insert into nu(name,price,img,mota,iddm) values ('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham_nu($id){
        $sql = "delete from nu where id=".$id;
        pdo_execute($sql);
    }
    function loadall_nu_home(){
        $sql= "select * from nu where 1 order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_nu($kyw="",$iddm=0){
        $sql= "select * from nu where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id";
        $listsanphamnu = pdo_query($sql);
        return $listsanphamnu;
    }
    function load_ten_dm_nu($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham_nu($id){
        $sql = "select * from nu where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai_nu($id,$iddm){
        $sql = "select * from nu where iddm=".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham_nu($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!="")
            $sql = "update nu set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        else
        $sql = "update nu set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }
?>
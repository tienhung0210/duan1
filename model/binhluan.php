<?php
    function insert_binhluan($iduser,$idpro,$noidung,$ngaybinhluan){
        $sql = "insert into binhluan(iduser,idpro,noidung,ngaybinhluan) values ('$iduser','$idpro','$noidung','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        $sql = "select * from binhluan where idpro='".$idpro."' order by id desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }
?>
<?php
    session_start();
    include "global.php";
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/nu.php";
    include "model/taikhoan.php";
    include "view/header.php";
    
    $spnew = loadall_sanpham_home();
    $spnu = loadall_nu_home();
    $dsdm = loadall_danhmuc();

    // /* controller sản phẩm */
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                    
                }else{
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case 'nu':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm = $_GET['iddm'];
                    
                }else{
                    $iddm = 0;
                }
                $dsspnu = loadall_sanpham_nu($kyw,$iddm);
                $tendm = load_ten_dm_nu($iddm);
                include "view/nu.php";
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id,$iddm);
                    include "view/spct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'spctnu':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onespnu = loadone_sanpham_nu($id);
                    extract($onespnu);
                    $sp_cung_loai_nu = load_sanpham_cungloai_nu($id,$iddm);
                    include "view/spctnu.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'sphot':
                include "view/sphot.php";
                break;
            
            /* controller đăng ký/đăng nhập */
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao = "Đăng ký thành công!";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'login':
                if(isset($_POST['login'])&&($_POST['login'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $kq = getuserinfo($user,$pass);
                    $role = $kq[0]['role'];
                    if($role==1){
                        $_SESSION['role'] = $role;
                        header('Location: admin/index.php');
                    }else{
                        $_SESSION['role'] = $role;
                        $_SESSION['iduser'] = $kq[0]['id'];
                        $_SESSION['user'] = $kq[0]['user'];
                        header('Location: index.php');
                        break;
                    }
                }
            case 'dangnhap':
                include "view/dangnhap.php";
                break;  
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_taikhoan($iduser,$user,$pass,$email,$address,$tel);
                    $_SESSION['user'] = checkuser($user,$pass);
                    header('Location: index.php?act=edit_taikhoan');
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao = "Email này không tồn tại!";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>
<?php
    //goi thu vien
    include('mail/class.smtp.php');
    include "mail/class.phpmailer.php"; 
    $nFrom = "Vinsofts.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'mrbjkut0@gmail.com';  //dia chi email cua ban 
    $mPass = 'loveyouandloveme';       //mat khau email cua ban
    $nTo = 'HoangHiep'; //Ten nguoi nhan
    $mTo = 'mr.bjn102@gmail.com';   //dia chi nhan mail
    $mail             = new PHPMailer();
    $body             = $_REQUEST['message'];   // Noi dung email
    $title = $_REQUEST['name'].' - '.$_REQUEST['email'];   //Tieu de gui mail
    $mail->IsSMTP();             
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen
    // xong phan cau hinh bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('mrbjkut0@gmail.com', 'Vinsofts.com'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email 
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    // thuc thi lenh gui mail 
    if(!$mail->Send()) {
        echo "<script>";
        echo "alert('Không thể gửi mail, vui lòng xem lại!');";
        echo "window.location.assign('http://new-waffle.yez.vn/vinsofts/')";
        echo "</script>";
         
    } else {
         echo "<script>";
        echo "alert('Mail của bạn đã được gửi!');";
        echo "window.location.assign('http://new-waffle.yez.vn/vinsofts/')";
        echo "</script>";
    }
?>
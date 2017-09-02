<?php
  require_once '../database/connector.php';

    $user = isset($_POST["username"]) ? $_POST["username"] : null;
    if ($user != null) {
      $sql = "SELECT * FROM user WHERE username = '$user' ";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      $data = [];
      if (mysqli_num_rows($query) > 0) {
        $strTo = $row["email"];
        $strSubject = "Addword System";
        $strHeader = "From: preeyakamon1515@gmail.com";
        $strMessage = "username : " . $user . " \npassword : " . $row["password"];
        $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
        $data["result"] = true;
        $data["message"] = "ระบบทำการส่งรหัสผ่านไปยัง E-mail ของคุณเรียบร้อยแล้ว กรุณาตรวจสอบ";
        //$data["message"] = "ระบบทำการส่งรหัสผ่านไปยัง " . $row["email"] . " แล้ว กรุณาตรวจสอบอีเมล์ของท่าน (อีเมล์อาจจะอยู่ในไฟล์ขยะ)";
      } else {
        $data["result"] = false;
        $data["message"] = "username นี้ไม่มีในระบบ กรุณาตรวจสอบอีกครั้ง";
      }
      echo json_encode($data);
    }
?>

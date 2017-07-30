<?php
session_start();
session_destroy();
echo "<script language=\"JavaScript\">";
echo"if(confirm('คุณต้องการออกจากระบบ หรือไม่ ??') )window.location='../index.php';</script>";
echo"</script>";
exit();


 ?>

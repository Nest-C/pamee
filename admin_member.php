<?php
   session_start();
   include('server.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pamee Shop</title>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<?php include "resource.php" ?>
</head>

<body bgcolor="#f8f8f8">
	<?php include "header.php" ?>
    <div style="min-height: 100vh">
        <div class="container" style="margin: 20px auto; background: white;">
                <div align="center" class="divider">
                	<div class="right btn red" onclick="go('')">เพิ่ม</div>
                  <h2>ผู้ใช้งาน</h2>
                </div>
                <div align="center">
                	<table width="70%" border="1" cellspacing="0" cellpadding="5">
                          <tr>
                            <th scope="col">รหัส</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">เบอร์ติดต่อ</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                          </tr>
                          <?php
						  	$sql = "SELECT * FROM user";
							$ex = mysqli_query($conn, $sql);
							while ($rs = mysqli_fetch_array($ex)) {
						  ?>
                              <tr align="center">
                                <td><?=sprintf("%05d", $rs['Emp_id'])?></td>
                                <td align="left"><?=$rs['Emp_Name']?></td>
                                <td align="left"><?=$rs['Emp_Phone']?></td>
                                <td class="btn teal" style="border-radius: 0px;" onclick="go('admin_member.php?modal=register&mbid=<?=$rs['Emp_id']?>');">แก้ไข</td>
                               <td class="btn red" style="border-radius: 0px;" onclick="confirm('Are you sure to remove this member?') ? go('admin_delete_member.php?mbid=<?=$rs['Emp_id']?>'):null">ลบ</td>
                              </tr>
                          <?php
							}
							?>
                        </table>
                </div>
        </div>
    </div>
</body>
</html>
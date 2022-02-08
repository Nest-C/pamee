<?php
	  session_start();
    include('server.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eCART | Online Shopping</title>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<?php include "resource.php" ?>
</head>

<body>
  
	<?php
    include "header.php" 
  ?>
    <div>
        <div class="container" style="margin: 20px auto; background: white;">
				
                <div align="center" class="divider">
                	<div class="right btn red" onclick="go('admin_category.php?modal=category')">เพิ่ม</div>
                	<h2>ประเภทสินค้า</h2>
                    <div class="clear"></div>
                </div>
                <div align="center">
                	<table width="70%" border="1" cellspacing="0" cellpadding="5">
                          <tr>
                            <th scope="col">รหัส</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                          </tr>
                          <?php
						  	$sql = "SELECT * FROM category";
							$ex = mysqli_query($conn, $sql);
							while ($rs = mysqli_fetch_array($ex)) {
						  ?>
                              <tr align="center">
                                <td><?=sprintf("%05d", $rs['ct_id'])?></td>
                                <td align="left"><?=$rs['ct_name']?></td>
                                <td class="btn teal" style="border-radius: 0px;" onclick="go('admin_category.php?modal=category&ctid=<?=$rs['ct_id']?>');">แก้ไข</td>
                               <td class="btn red" style="border-radius: 0px;" onclick="confirm('Are you sure to remove this category?') ? go('admin_delete_category.php?ctid=<?=$rs['ct_id']?>'):null">ลบ</td>
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
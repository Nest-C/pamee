<?php
	 session_start();
   include('server.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eCART | Online Shopping</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link href="css1.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
</head>

<body bgcolor="#f8f8f8">
	<?php include "header.php" ?>
    <div style="min-height: 100vh">
        <div class="container" style="margin: 20px auto; background: white;">
				
                <div align="center" class="divider">
                	<div class="right btn red" onclick="go('admin_product.php?modal=product')">เพิ่ม</div>
                	<h2>สินค้า</h2>
                    <div class="clear"></div>
                </div>
                <div align="center">
                	<table width="70%" border="1" cellspacing="0" cellpadding="5">
                          <tr>
                            <th scope="col">รหัส</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">ประเภทสินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">คงคลัง</th>
                            <th scope="col">รูปภาพ</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                          </tr>
                          <?php
						  	$sql = "SELECT * FROM product INNER JOIN category ON product.ct_id = category.ct_id INNER JOIN images ON images.pd_id = product.pd_id GROUP BY images.pd_id";
							$ex = mysqli_query($conn, $sql);
							while ($rs = mysqli_fetch_array($ex)) {
						  ?>
                              <tr align="center">
                                <td><?=sprintf("%05d", $rs['pd_id'])?></td>
                                <td align="left"><?=$rs['pd_name']?></td>
                                <td align="left"><?=$rs['ct_name']?></td>
                                <td><?=number_format($rs['pd_price'])?></td>
                                <td><?=number_format($rs['pd_onhand'])?></td>
                                <td><img src="images/<?=$rs['img_name']?>" width="100" /></td>
                                <td class="btn teal" style="border-radius: 0px;" onclick="go('admin_product.php?modal=product&pdid=<?=$rs['pd_id']?>');">แก้ไข</td>
                               <td class="btn red" style="border-radius: 0px;" onclick="confirm('Are you sure to remove this product?') ? go('admin_delete_product.php?pdid=<?=$rs['pd_id']?>'):null">ลบ</td>
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
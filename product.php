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
</head>

<body bgcolor="#f8f8f8">
	<?php include "header.php" ?>
    <?php include "left.php" ?>
    <div style="min-height: 100vh;">
    <div class="container" style="margin: 20px auto; background: white;">
    <div class="container_product">
    	<?php
			$sql = "SELECT * FROM product INNER JOIN images ON images.pd_id = product.pd_id";
			if (isset($_GET['q']) || isset($_GET['min']) || isset($_GET['max']) || isset($_GET['ctid'])) {
				$sql .= " WHERE ";
				if (isset($_GET['ctid'])) {
					$sql .= "ct_id = " . $_GET['ctid'];
				}
				if (isset($_GET['q'])) {
					$sql .= "LOWER(pd_name) LIKE '%" . $_GET['q'] . "%' ";
					if (isset($_GET['min'])) {
						$sql .= "AND ";
					}
				}
				if (isset($_GET['min'])) {
					$sql .= "pd_price >= ".$_GET['min']." AND pd_price <=" . $_GET['max'];
				}
			}
			$sql .= " GROUP BY images.pd_id";
			$ex = mysqli_query($conn, $sql);
			while ($rs = mysqli_fetch_array($ex)) {
				include "item_product.php";
			}
		?>
          </div>
    </div>
</div>
    <div class="clear"></div>

</body>
</html>
<?php
	 session_start();
   include('server.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pamee Shop</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link href="css1.css" rel="stylesheet" type="text/css" />
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<?php include "resource.php" ?>
</head>

<body bgcolor="#f8f8f8">
	<?php include "header.php" ?>
    <div style="min-height: 100vh">
        <div class="container" style="margin: 20px auto; background: white;">
				
                         <div align="center" class="divider">
                            <h2>ออเดอร์</h2>
                            <!-- <div class="form-group">
        <div class="col-sm-2" align="right"รหัสออเดอร์</div>
          <div class="col-sm-1" align="left">
             <input type="text" readonly value="<?php echo $row_lastid['Or_id']+1; ?>" class="form-control">
          </div>
      </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2" align="right">ชื่อ-นามสกุล</div>
          <div class="col-sm-4" align="left">
            <input  name="Or_name" id="or_name" type="text" required class="form-control"  placeholder="ชื่อ-นามสกุล"   
            minlength="2" />
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2" align="right">ที่อยู่</div>
          <div class="col-sm-5" align="left">
            <textarea name="or_add" id="or_add" class="form-control" required></textarea>
          </div>
      </div>
      </div>
       <div class="form-group">
        <div class="col-sm-2" align="right">เบอร์โทรศัพท์</div>
          <div class="col-sm-4" align="left">
            <input  name="or_tel" id="or_tel" type="text" required class="form-control"   
            placeholder="เบอร์โทรศัพท์"  pattern="^[0-9]+$" minlength="2" maxlength="10"/>
          </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-2" align="right">ราคารวม</div>
          <div class="col-sm-4" align="left">
            <input  name="Or_total" id="Or_total" type="text" required class="form-control"  placeholder="ราคารวม"   
            minlength="2" />
          </div>
      </div>
        
    
       <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-info"  id="btn">
          <span class="glyphicon glyphicon-plus"></span> ยืนยัน
           </button>
           &nbsp;
           <a href="index.php" class="btn btn-danger"> ยกเลิก </a>
          </div> -->
                            
</body>
</html>
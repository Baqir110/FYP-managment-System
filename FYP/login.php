<?php
session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] == 'admin'){
		header("Location: admin/admin.php");
	}
	else {
		header("Location: user/userlogin.php");
	}
}
?>
<?php 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      header('location:supervisor/userlogin.php');
}

?>

<?php 
if(isset($_POST['username'])){

	$us= $_POST['username'];
$pas = $_POST['password'];
include 'connection.php';
$sql = "select * from  `tbl_student` where  username='".$us."' and pass ='".$pas."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
			if( $row['approve'] == 0){
		$error ='User is not approved yet!';
	$kusername = $_POST['username'];
		}
		else if( $row['active'] == 0){
		$error ='User is no longer active!';
	$kusername = $_POST['username'];
		}
		else{
			$_SESSION['name'] = $us;
			$_SESSION['fullname'] = $row['fname'].' '.$row['lname'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['img'] = $row['img'];
		$_SESSION['university'] = $row['university'];
		header('Location: user/userlogin.php');
		exit();	
		}
		  }}
		else {
		
	$us= $_POST['username'];
$pas = $_POST['password'];
include 'connection.php';
$sql = "select * from  `tbl_admin` where  username='".$us."' and pass ='".$pas."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	$_SESSION['name'] = $us;
		
		header('Location: admin/admin.php');
		exit();	
}
else{
	
	$sql = "select * from `tbl_supervisor` where  username='".$us."' and pass ='".$pas."'";
$result = $con->query($sql) or die($con->error);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
			if( $row['approve'] == 0){
		$error ='User is not approved yet!';
	$kusername = $_POST['username'];
		}
		else if( $row['active'] == 0){
		$error ='User is no longer active!';
	$kusername = $_POST['username'];
		}
		else{
			$_SESSION['name'] = $us;
			$_SESSION['fullname'] = $row['fname'].' '.$row['lname'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['img'] = $row['img'];
		$_SESSION['university'] = $row['university'];
		$_SESSION['isSupervisor'] = true;
			
		header('Location: supervisor/userlogin.php');
		exit();	
		}
		  }}
		else {
			
	$error ='Username or password is incorrect!';
	$kusername = $_POST['username'];	
		$_SESSION['logged_in']= true;
		
	}
}
}}
	
	?>
    <?php
include 'temp_nav.php';
?>
<!--  page banner -->
  <section id="page-banner" class="page-banner-main-block ran" style="background-image: url('images/bg/page-banner.jpg')"> 
    <h1 class="page-banner-heading text-center">Log In</h1>
  </section> 
<!--  end page banner  -->
<div class="row">
<div class="col-sm-4"></div>
<form action="#" method="post">
	
<div class="col-sm-3 " style=" background-color:#fff; padding: 30px 10px 20px 10px; border-radius: 10px; margin:20px 0px 30px 90px; box-shadow: 0px 0px 10px #000;">
              <div class="form-group">
                <input type="text" class="form-control"  required name="username" placeholder="Enter Your Username" value="<?php if(isset($kusername)) echo $kusername;?>"/>
              </div>
              <div class="form-group">
                <input  class="form-control" id="email"  required type= "password" name="password" placeholder="Enter Your Password"/>
              </div>
              
               <div class="form-group">             
              <input type="submit" class="btn btn-default"/><a href="register1.php" style="float:right; margin-top:10px; margin-right:5px; font-size:16px; color:#000; border-bottom: 3px solid black;">Register Now</a><p style="color:red; font-size:24px;"><?php if(isset($error)) echo $error;?></p></div>
	          
          </div>  </form></div>
            <div class="col-sm-3"></div></div>

<?php
include 'temp_footer.php';
?>
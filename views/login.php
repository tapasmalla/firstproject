<?php 
    session_start();
  if(isset($_SESSION['username'])){
    header("location:index.php");
  }

	require_once 'header.php';
 ?>

 	<div class="content-wrapper">
  	  <div class="container-fluid">
  	  	<h2>Login Form</h2>
  	  	<div class="card card-register mx-auto mt-5">
      <div class="card-header">Login an Account</div>
      <div class="card-body">
        <form id="login_form">
          
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="uemail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="upass">
              </div>
              
            </div>
          </div>

          <button type="button" class="btn btn-primary btn-block btn_login">Login</button>
        </form>
        <div class="errordiv">
          
        </div>
      </div>
    </div>
  	  </div>
  	</div>

 <?php 
	require_once 'footer.php';
 ?>
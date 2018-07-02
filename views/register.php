<?php 
  session_start();
  if(isset($_SESSION['username'])){
    header("location:index.php");
  }
	require_once 'header.php';
 ?>

 	<div class="content-wrapper">
  	  <div class="container-fluid">
  	  	<h2>Register Form</h2>
  	  	<div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form id="register_form">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="uname">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Mobile</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter Mobile No" name="umobile">
              </div>
            </div>
          </div>
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
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" name="ucpass">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">User Type</label>
                <select class="form-control" name="usertype">
                  <option value="0">Please Select User Type</option>
                  <option value="2">Hotel Woner</option>
                  <option value="1">Customer</option>
                </select>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-primary btn-block btn_register">Register</button>
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
<?php
    session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
	require_once 'header.php';
 ?>

 	<div class="content-wrapper">
  	  <div class="container-fluid">
  	  	<h2>Change Password Form</h2>
  	  	<div class="card card-register mx-auto mt-5">
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form id="changepass_form">
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Current Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="cpass">
              </div>
              
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">New Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="npass">
              </div>
              
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="cnpass">
              </div>
              
            </div>
          </div>

          <button type="button" class="btn btn-primary btn-block btn_changepass">Submit</button>
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
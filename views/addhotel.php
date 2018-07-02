<?php
    session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
	require_once 'header.php';
 ?>

 	<div class="content-wrapper">
  	  <div class="container-fluid">
  	  	<h2>Hotel Form</h2>
  	  	<div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Hotel</div>
      <div class="card-body">
        <form id="addhotel_form">
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Hotel Name</label>
                <input class="form-control" id="exampleInputPassword1" type="text" placeholder="Hotel Shilver Inn" name="hotel">
              </div>
              
            </div>
          </div>

          

          <button type="button" class="btn btn-primary btn-block btn_addhotel">Add Hotel</button>
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
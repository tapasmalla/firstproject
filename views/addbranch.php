<?php
    session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
	require_once 'header.php';
 ?>

 	<div class="content-wrapper">
  	  <div class="container-fluid">
  	  	<h2>Bra Form</h2>
  	  	<div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Branch</div>
      <div class="card-body">
        <form id="branch_form">

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Hotel Name </label>
                <?php
                  $userid = $_SESSION['userid'];
                  $result = $obj->get_hotel_userwise($userid);
                  // pre($result);
                 ?>

                <select class="form-control" name="hotelid">
                  <option value="">Please Select Hotel Name</option>
                  <?php 
                    if(isset($result)){
                      foreach($result as $val){
                        $id = $val['ho_id'];
                       echo "<option value='$id'>";
                       echo $val['ho_name'];
                       echo "</option>";
                      }
                    }
                   ?>
                  
                </select>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Branch Name</label>
                <input class="form-control" id="exampleInputPassword1" type="text" placeholder="Mumbai" name="branch">
              </div>
              
            </div>
          </div>

                    

          <button type="button" class="btn btn-primary btn-block btn_addbranch">Add Branch</button>
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
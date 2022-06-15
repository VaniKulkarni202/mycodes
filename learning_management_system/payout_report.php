<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payout Report</title>
    <?php include './links.php'?>
</head>

<body>

<div class="row row-cols-1 row-cols-md-3" style="margin-left:15px;margin-top:10px;width:1330px;">
  
  <div class="col mb-4">
    <div class="card"style="border:transparent;background-color:rgb(255, 77, 77);height:130px;" >
      <div class="card-body text-left text-white font-weight-bold">
        <small>Pending amount</small><button style="background-color:LightGrey;color:Red;border:transparent;margin-left:240px;">$</button><br>
        <b><i class='fas fa-arrow-down'></i><big> $2772</big></b>
      </div>
    </div>
  </div>
  
  <div class="col mb-4">
    <div class="card" style="margin-left:5px;border:transparent;background-color:rgb(133, 224, 133);height:130px;" >
      <div class="card-body text-left text-white font-weight-bold">
        <small>Total payout amount</small><button style="background-color:LightGrey;color:Green;border:transparent;margin-left:200px;">$</button><br>
        <b><i class='fas fa-arrow-down'></i><big> $115</big></b>
      </div>
    </div>
  </div>
  

  <div class="col mb-4">
    <div class="card" style="border:transparent;margin-left:5px;background-color:rgb(128, 223, 255);height:130px;" >
      <div class="card-body text-left text-white font-weight-bold">
        <small>Requested withdrawal amount</small><button style="background-color:LightGrey;color:Blue;border:transparent;margin-left:160px;">$</button><br>
        <b><i class='fas fa-arrow-down'></i><big> $255</big></b><br>
        <button style="background-color:Red;color:White;border:transparent;margin-left:165px;"><i class="fa fa-trash-o" style="font-size:18px;color:white;"></i>
        <small>Delete requested withdrawal</small></button> 
      </div>
    </div>
  </div>

</div>




<div style="margin-left:30px;margin-top:6px;"><b >PAYOUT REPORT</b></div>
<br>
<form class="form-inline">
  <label class="my-1 mr-2"  style="margin-left:30px;"for="inlineFormCustomSelectPref">Show</label>
    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
      <option selected>10</option>
      <option value="1">11</option>
      <option value="2">12</option>
      <option value="3">13</option>
    </select>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">entries</label>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="margin-left:780px;">Search:</label>
    <input type="text" placeholder="" name="Search" style="width:250px;">
</form>
<hr>

<select class="custom-select border-light" style="width:200px;margin-left:30px;">
  <option selected><b>#</b></option>
</select>
<select class="custom-select border-light" style="width:380px;margin-left:0px;margin-top:0px;">
  <option selected><small>Payout amount</small></option>
</select>
<select class="custom-select border-light" style="width:370px;margin-left:0px;">
    <option selected><small>Payment type</small></option>
</select>
<select class="custom-select border-light" style="width:340px;margin-left:0px;">
  <option selected><small>Date processed</small></option>
</select>
  <div class="card" style="height:90px;width:1300px;margin-left:30px;background-color:rgb(204, 230, 255);">
    
    <div class="card-body">
      <small style="color:Blue">1</small><label style="margin-left:200px;">$255</label>
      <button style="background-color:rgb(255, 163, 26);color:Black;border:transparent;margin-left:330px;"><small><b>pending</b></small></button><br>
      <button style="background-color:rgb(153, 187, 255);color:Black;border:transparent;margin-left:200px;"><small><b>Requested at:Wed,17 Jun 2020. </b></small></button>
    </div>
  </div> 
  
  <div class="card" style="height:90px;width:1300px;margin-left:30px;">
    <div class="card-body ">
      <small>2</small><label style="margin-left:200px;">$15</label>
      <button style="background-color:white;border:transparent;margin-left:340px;"><small><b>Paypal</b></small></button>
      <small style="margin-left:310px;">Fri, 12 Jun 2020</small>
    </div>
  </div> 


  <div class="card" style="height:90px;width:1300px;margin-left:30px;background-color:rgb(204, 230, 255);">
    <div class="card-body">
      <small>3</small><label style="margin-left:200px;">$100</label>
      <button style="background-color:rgb(204, 230, 255);border:transparent;margin-left:334px;"><small><b>Paypal</b></small></button>
      <small style="margin-left:310px;">Fri, 12 Jun 2020</small>
    </div>
  </div><br>
  <small style="margin-left:30px"><b>Showing 1 to 3 of 3 entries</b></small>
  <i class='fas fa-angle-left' style='font-size:15px;margin-left:900px;'></i>&nbsp;
  <button style="background-color:rgb(153, 51, 255);border-radius:10px;font-size:12px;border:transparent;color:white;">1</button>&nbsp;<i class='fas fa-angle-right' style='font-size:15px'></i>
</body>
</html>
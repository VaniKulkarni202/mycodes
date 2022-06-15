<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
    <?php include './links.php'?>

</head>

<body>

<div style="margin-left:30px;margin-top:30px;"><b >SALES REPORT</b></div><br><br>
    
  <div class="card" style="height:30px;width:400px;margin-left:400px;">
    <div class="card-body "style="margin-top:-15px;">
      <small><i class='far fa-calendar-alt' style='font-size:16px'></i>&nbsp;June,01 2020 - june,30 2020&nbsp;&nbsp;&nbsp;
      <i class='fas fa-caret-down' style='font-size:16px'></small></i>
      <button type="button" class="btn btn-primary" style="width:70px;margin-left:400px;margin-top:-50px;">Filter</button>
    </div> 
  </div>

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
<!-- report starts -->
  <select class="custom-select border-light" style="width:800px;margin-left:30px;">
    <option selected><small>Course Name</small></option>
  </select>
  <select class="custom-select border-light" style="width:500px;margin-left:830px;margin-top:-60px;">
    <option selected><small>Instructor Revenue</small></option>
  </select>
    
    <div class="card" style="height:90px;width:1300px;margin-left:30px;background-color:rgb(204, 230, 255)">
      <div class="card-body "style="margin-top:-15px;">
        <small style="color:Blue">How To Shoot B-Roll Footage with Peter McKinnon</small><label style="margin-left:500px;">$1260</label><br>
        <small>Enrolled student : Naomi Hill<label style="margin-left:630px;">Total amount:$1800</label></small><br>
        <small>Enrollment date : Wed 17-Jun-2020 12:00:00</small>
      </div>
    </div> 
  
    <div class="card" style="height:90px;width:1300px;margin-left:30px;">
      <div class="card-body "style="margin-top:-15px;">
        <small style="color:Blue">How To Shoot B-Roll Footage with Peter McKinnon</small><label style="margin-left:500px;">$1260</label><br>
        <small>Enrolled student : Signe Thompson<label style="margin-left:590px;">Total amount:$1800</label></small><br>
        <small>Enrollment date : Wed 17-Jun-2020 12:00:00</small>
      </div>
    </div> 


    <div class="card" style="height:90px;width:1300px;margin-left:30px;background-color:rgb(204, 230, 255)">
      <div class="card-body "style="margin-top:-15px;">
        <small style="color:Blue">How To Shoot B-Roll Footage with Peter McKinnon</small><label style="margin-left:500px;">$367</label><br>
        <small>Enrolled student : Naomi Hill<label style="margin-left:630px;">Total amount:$524</label></small><br>
        <small>Enrollment date : Wed 17-Jun-2020 12:00:00</small>
      </div>
    </div><br>
    <small style="margin-left:30px"><b>Showing 1 to 3 of 3 entries</b></small><i class='fas fa-angle-left' style='font-size:15px;margin-left:900px;'></i>&nbsp;
    <button style="background-color:rgb(153, 51, 255);border-radius:10px;font-size:12px;border:transparent;color:white;">1</button>&nbsp;<i class='fas fa-angle-right' style='font-size:15px'></i>
</body>
</html>
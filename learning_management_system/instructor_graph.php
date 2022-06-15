<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include './links.php'?>
    <title>Instructor Graph</title>
  </head>
  <style>
    

   
  #backButton {
  border-radius: 4px;
  padding: 8px;
  border: none;
  font-size: 16px;
  background-color: #2eacd1;
  color: white;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  }
  .invisible {
    display: none;
  }
</style>
  
  <body style="background-color:rgb(245, 242, 240);">
  <!-- side bar -->
    <div class="card" style="width:250px;height:810px;">
      <div class="card-body" style="">
        <img src="./media/imgp3.jpg" style="height:70px;width:75px;border-radius:40px;margin-left:70px;">
        <h5 class="card-title font-weight-bold text-center">Jane Doe</h5><br>
        <p class="card-text" style="margin-left:10px;">NAVIGATION</p>
        <div style="margin-left:25px;">
          <label style="color:Blue"><i class="fa fa-th" style="font-size:14px;"></i>&nbsp;Dashboard</label>
          <label><i class="fas fa-user-tie" style="font-size:15px;color:black"></i>&nbsp;Course Manager</label>
          <label><i class="fa fa-file-text" style="font-size:15px;color:black"></i>&nbsp;Sales Report</label>
          <label><i class="fa fa-file-text-o" style="font-size:15px;color:black"></i>&nbsp;Payout Report</label>
          <label><i class="far fa-sun" style="font-size:15px;color:black"></i>&nbsp;Payout Settings</label>
          <label><i class="far fa-envelope" style="font-size:15px;color:black"></i>&nbsp;Message</label><br>
          <label><i class="far fa-user" style="font-size:15px;color:black"></i>&nbsp;Manage profile</label></div>
        </div>
      </div>
    </div>
    
    
    <div class="card" style="width:1060px;height:80px;margin-left:280px;margin-top:-805px;">
      <div class="card-body">
        <h5 class="card-title"><i class="fab fa-asymmetrik" style="font-size:21px;color:black"></i>&nbsp;&nbsp;<big>Dashboard</big></h5>
      </div>
    </div>
    <!-- Revenue graph -->
    <div class="container">
      <div class=" card card-body" style="height: 400px; width:1060px;margin-top:20px;margin-left:160px;">
        <b class="card-title">INSTRUCTOR REVENUE</b>
        <div id="chartContainer1" style="height: 500px; width:1000px;margin-top:40px;">
        </div>
      </div>
    </div>

  <div class="row row-cols-1 row-cols-md-4" style="margin-left:265px;margin-top:10px;width:900">
        
    <div class="col mb-4">
      <div class="card"style="border:transparent;" >
            <div class="card-body text-center">
              <big><b>2</b></big><br><small>Number of courses</small>
            </div>
          </div>
      </div>

    <div class="col mb-4">
      <div class="card" style="margin-left:-18px;border:transparent;" >
        <div class="card-body text-center">
          <big><b>3</b></big><br><small>Number of enrollment</small>  
        </div>
      </div>
    </div>
  
    <div class="col mb-4">
      <div class="card" style="border:transparent;margin-left:-18px;" >
       <div class="card-body text-center bg-cream">
          <big><b>$2772</b></big><br><small>Pending balance</small> 
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div class="card" style="border:transparent;margin-left:-18px;">
        <div class="card-body text-center">
          <big><b>$255</b></big><br><small>Requested withdrawal amount</small> 
        </div>
      </div>
    <div>
</div>

      
  <div class="container">
    <div class=" card card-body" style="height: 200px; width:1060px;margin-top:10px;margin-left:-837px;">
      <b class="card-title">COURSE OVERVIEW</b>
        <div id="chartContainer" style="height: 200px; width: 100%;">
        </div>
    </div>
  </div>

     
     
<!-- Graph drawing start -->

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<script>
window.onload = function () {

var totalVisitors = 883000;
var visitorsData = {
  "New vs Returning Visitors": [{
    click: visitorsChartDrilldownHandler,
    cursor: "pointer",
    explodeOnClick: false,
    innerRadius: "75%",
    legendMarkerType: "square",
    name: "New vs Returning Visitors",
    radius: "100%",
    showInLegend: true,
    startAngle: 90,
    type: "doughnut",
    dataPoints: [
      { y: 519960, name: "Courses Completed", color: "#546BC1" },{y: 0000, name: "Courses Pending", color: "#ff9900"}
   
    ]
  }],
};

var newVSReturningVisitorsOptions = {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: ""
  },
 data: []
};



var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
chart.options.data = visitorsData["New vs Returning Visitors"];
chart.render();

function visitorsChartDrilldownHandler(e) {
  // chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
  // chart.options.data = visitorsData[e.dataPoint.name];
  // chart.options.title = { text: e.dataPoint.name }
  // chart.render();
  //$("#backButton").toggleClass("invisible");
}


//area charts---------------------

var chart = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,  
  title:{
    text: ""
  },
  axisY: {
    title: "",
    valueFormatString: "",
    suffix: "",
    prefix: ""
  },
  data: [{
    type: "splineArea",
    color: "rgb(204, 204, 255)",
    markerSize: 0,
    xValueFormatString: "",
    yValueFormatString: "",
    dataPoints: [
      { label: "January",  y: 0  },
				{ label: "February", y: 0  },
				{ label: "March", y: 0  },
				{ label: "April",  y: 0  },
				{ label: "May",  y: 0  },
        { label: "June",  y: 40  },
				{ label: "July", y: 0  },
				{ label: "August", y: 0  },
				{ label: "September",  y: 0  },
				{ label: "October",  y: 0  },
				{ label: "November", y: 0  },
				{ label: "December", y: 0  }
				
    ]
  }]
  });
chart.render();

}
</script>
</body>
</html>
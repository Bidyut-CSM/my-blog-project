<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">

    <title>Map</title>

    
</head>
<body>

     <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type='text/javascript'>

 
function drawMap() {
 var data = google.visualization.arrayToDataTable([
    ['State Code', 'State', 'AQI PM2.5'], 
    ['IN-UP', 'Uttar Pradesh', 780.1],
    ['IN-MH', 'Maharashtra', 920.2],
    ['IN-BR', 'Bihar', 510.3],
    ['IN-WB', 'West Bengal', 620.4], 
    ['IN-MP', 'Madhya Pradesh', 700.5], 
    ['IN-TN', 'Tamil Nadu', 930.6],
    ['IN-RJ', 'Rajasthan', 1030.7],
    ['IN-KA', 'Karnataka', 1290.8],
    ['IN-GJ', 'Gujarat', 1304.9],
    ['IN-AP', 'Andhra Pradesh', 320.10],
    ['IN-OR', 'Odisha', 133.11],
    ['IN-TG', 'Telangana', 233.12],
    ['IN-KL', 'Kerala', 311.13],
    ['IN-JH', 'Jharkhand', 290.14],
    ['IN-AS', 'Assam', 280.15], 
    ['IN-PB', 'Punjab', 300.16],
    ['IN-CT', 'Chhattisgarh', 330.17], 
    ['IN-HR', 'Haryana', 300.18],
    ['IN-JK', 'Jammu and Kashmir', 200.19], 
    ['IN-UT', 'Uttarakhand', 208.20], 
    ['IN-HP', 'Himachal Pradesh', 107.21],
    ['IN-TR', 'Tripura', 301.22],
    ['IN-ML', 'Meghalaya', 210.23],
    ['IN-MN', 'Manipur', 220.24],
    ['IN-NL', 'Nagaland', 201.25],
    ['IN-GA', 'Goa', 1121.26],
    ['IN-AR', 'Arunachal Pradesh', 343.27],
    ['IN-MZ', 'Mizoram', 423.28],
    ['IN-SK', 'Sikkim', 724.29],
    ['IN-DL', 'Delhi', 231.30], 
    ['IN-PY', 'Puducherry', 233.31],
    ['IN-CH', 'Chandigarh', 230.32],
    ['IN-AN', 'Andaman and Nicobar Islands', 230.33], 
    ['IN-DN', 'Dadra and Nagar Haveli', 230.34],
    ['IN-DD', 'Daman and Diu', 229.35],
    ['IN-LD', 'Lakshadweep', 231.36],
    ]); 
    var options = {
      region:'IN',
      domain: 'IN',
      displayMode: 'regions',
      resolution: 'provinces',
      colorAxis: {colors: ['#008000', '#FFFF00', '#0000FF']},
      backgroundColor: '#81d4fa',
      datalessRegionColor: '#ffc801',//'#ffc801'
      width:940, 
      height:680,
    };
    var container = document.getElementById('mapcontainer');
    var chart = new google.visualization.GeoChart(container);

     function myClickHandler(){
          var selection = chart.getSelection();
          console.clear();
         console.log(selection);
         if (selection.length > 0) {
          console.log(data.getValue(selection[0].row, 0),data.getValue(selection[0].row, 1),data.getValue(selection[0].row, 2));
        }
     }
     google.visualization.events.addListener(chart, 'select', myClickHandler);
     chart.draw(data, options);
}
google.load('visualization', '1', {packages: ['geochart'], callback: drawMap});

     </script>

<div id="wrapper">




<div class="main">

<div id="my_wrapper">

<div id="mapcontainer"></div>

{{-- <div id="gads" style="clear:both">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- frontpagebelowmap -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-7211665888260307"
     data-ad-slot="3839303791"></ins>
</div> --}}

</div>




</div>



</body>
</html>
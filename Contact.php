<!DOCTYPE html>
<style>
#sddm
{	margin: 0;
	padding: 0;
	z-index: 30
 
}



.white-box {
    background-color: #f8f9d3;
    width: 1200px;
    border: 5px solid darkbrown;
    padding: 25px;
    margin-left: 10px;
	margin-right: 10px;
	position: relative;
	top:45%;
    left:6%;
	-moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    border-radius: 40px;
	text-align: justify;
    text-justify: inter-word;
	
}

#sddm li
{	margin: 0;
	padding: 0;
	list-style: none;
	float: left;
	
	font: bold 11px arial}

#sddm li a
{	
	display: block;
	margin: 0 1px 0 0;
	padding: 6px 10px;
	width: 150px;	
	background: #5970B2;
	color: #FFF;
	text-align: center;
	text-decoration:none;
	font: 15px Arial bolder;}

#sddm li a:hover
{	background: #49A3FF
	 font: 180px Arial;
}

#sddm div a:hover
{	background: #49A3FF;
	color: #FFF
}

body  {
    background-image: url('Background/fundal.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
}

</style>

<html lang="en">

<head>

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact ASMV</title>

<link rel="icon" type="image/png" href="Logo/blklogo.png" sizes="16x16" />

    <link href="css/butoaneverzi.css" rel="stylesheet" type="text/css" />

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">


</head>

<body>

<br><br><br><br>

<table width="1367" height="50"  align="center" id="tbl">
<tr>
<td width="765" align="left">
<br /><br />
<center><a href="index.php"><img src="Title/1.png" width="200" height="50" ><img src="Title/2.png" width="460" height="50" hspace="9"><img src="Title/3.png" width="185" height="50"></a>
</center>
</td>
</tr>
</table>


<table width="1367" height="50"  align="center" id="tbl">
<tr>
<td width="765" align="left">
<!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                  <img src="Logo/Logo1.png" width="200" height="30" >
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Noutati</a>
                    </li>
                    <li>
                        <a href="Despre.php">Despre noi</a>
                    </li>
                    <li>
                        <a href="Portofoliu.php">Portofoliu</a>
                    </li>
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membri <span class="caret"></span></a>
      <ul class="dropdown-menu" aria-labelledby="about-us">
       <li><a href="#">Engage</a></li>
       <li><a href="http://www.google.ro/">Pontificate</a></li>
       <li><a href="#">Synergize</a></li>
      </ul>
     </li>
     <li>
                        <a href="#">Parteneri</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

</td>
</tr>
</table>


<table width="1367" height="100"  align="center" id="tbl">
<tr>
<td width="1367" align="center">
    
    <div id="map" style="height: 400px; width: 1200px;">
</div>
<script type="text/javascript">
    var locations = [
      ['Restaurant Fratello', 44.205042, 28.645337],
      ['Carrefour', 44.212862, 28.604137, 2],
      ['GMB Computers', 44.187397, 28.637275, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(44.203911, 28.627328),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>

</td>
</tr>
</table>


    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
   

 
    
    
    
    

</body>













</html>

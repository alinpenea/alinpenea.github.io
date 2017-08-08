<!DOCTYPE html>
<style>
.image-container {
    position: relative;
    display: inline-block;
	box-shadow: 10px 10px 5px black;
}
.image-container img {display: block;}
.image-container .after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    color: #FF6600;
}
.image-container:hover .after {
    display: block;
    background: rgba(0, 0, 0, .8);
}
.image-container .after .content {
    position: absolute;
    bottom: 0;
    font-family: Arial;
    text-align: center;
    width: 100%;
	margin-bottom: 50px;
    box-sizing: border-box;
    padding: 5px;
}
.image-container .after .zoom {
    color: #DDD;
    font-size: 48px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -30px 0 0 -19px;
    height: 50px;
    width: 45px;
    cursor: pointer;
}
.image-container .after .zoom:hover {
    color: #FFF;
}



body  {
    background-image: url('Background/fundal.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
}


.white-box {
    background-image: url('Background/implica-te.jpg');
    width: 1280px;
    border: 5px solid darkbrown;
    padding: 25px;
    margin-left: 10px;
	margin-right: 10px;
	position: relative;
	top:45%;
    left:2%;
	-moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    border-radius: 40px;
	text-align: justify;
    text-justify: inter-word;
	
}



</style>

<html lang="en">

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fii corect si responsabil!</title>

<link rel="icon" type="image/png" href="Logo/blklogo.png" sizes="16x16" />

    <link href="css/butoaneverzi.css" rel="stylesheet" type="text/css" />

 <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
   
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <link href="css/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="js/tooltip.js" type="text/javascript"></script>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">

<script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/Corect/thumb" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
    </script>

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
                        <a href="Contact.php">Contact</a>
                    </li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

</td>
</tr>
</table>
    
    
    <table width="1100" height="350"  align="center" >
<tr>
<td width="1367" >

<div class="image-container">
    <img src="images/banner2.png" width="1100" height="300" align="center"/>
    <div class="after">
        <span class="content"><b><font size="10">Fii corect! Fii responsabil!</font></b></span>
        <span class="zoom">
            <i class="fa fa-search"></i>
        </span>
    </div>
</div>


</td>
</tr>
</table> 

<br><br>

<table width="1367" height="200"  align="center" >
<tr>
<td width="1367" >
 <div class="white-box">
 <br><br>
    <center><b><u><font size="5">De ce acest program?</font></u></b></center><br>

In fiecare zi are loc un incident medical, la care sunt prezente persoane care nu au studii medicale (asistent, medic) si care trec mai departe, fotografiaza, filmeaza sau isi da cu parerea despre victima, dar nu ia nici o masura corecta care sa ajute pacientul sau sa nu ii faca rau.<br>
De fiecare data mare majoritate a persoanelor care asista la asemenea incidente acuza personalul medical, ca nu ajunge la timp, ca a intarziat ca nu au facut nimic pentru victima, DAR oare s-au intrebat daca nu cumva si ei poarta o vina? Stiti ca in salvarea unei victime exista cele <b><font color="#BA0D0D">"10 minute de platina"</font></b>? Platina cel mai pretios metal, deci cel mai pretios numar, masurat in minute pentru o victima este 10. 
Stiati ca si legea 95 din 11.04.2006, articolul 87 statueaza <b>obligatia</b> cetateanului prin art 87 <b>de a acorda primul ajutor</b> cat si <b>de a anunta imediat serviciul 112</b>?

<br><br><br>

<center><b><u><font size="5">Scopul</font></u></b></center><br>

Acest program este de cresterea nivelului de educatie medicala in ceea ce priveste cunoasterea notiunilor de prim ajutor de catre orice persoana, fara pregatire medicala prin realizarea de cursuri performate de prim ajutor.

<br><br><br>

<center><b><u><font size="5">Obiective</font></u></b></center><br>

<b>1.</b> Realizarea de cursuri de prim ajutor care constau in 30h de pregatire teoretica si practica pentru tineri (elevi, studenti)<br>
<b>2.</b> Realizarea unei echipe de prim ajutor alcatuita din voluntari ASMV, care sa fie pregatiti sa intervina in caz de situatii speciale, situatii de urgenta si dezastre in care sunt implicate victime<br>
<b>3.</b> Realizarea de echipe de prim ajutor pentru fiecare liceu din judetul Constanta formate din elevi de liceu, care au urmat si absolvit cursul de prim ajutor si a unui training special de formare a unei echipe de prim ajutor.<br>
<b>4.</b> Realizarea unui sistem informatic de alerta urgenta medicala in cadrul liceelor, care va consta in alertarea de catre elevii liceeului a echipei de prim ajutor si in acelasi timp a medicului coordonator din cadrul ASMV asupra incidentului medical.<br>
<b>5.</b> Realizarea de sesiuni de comunicare care sa se adreseze in special tinerilor, din care sa reiasa importantanta cunoasterii notiunilor de prim ajutor.<br>
<b>6.</b> Realizarea de spoturi si documentare din care sa reiasa importanta cunoasterii notiunilor de prim ajutor.<br>
<b>7.</b> Realizarea regulata de scenarii cu situatii de urgenta medicala in locuri publice, licee.
 

<br><br><br>

</div>
</td>
</tr>
</table> 
    
    
    <br><br>
    
    <table width="1367" height="600"  align="center" >
<tr>
<td width="1367" >
 <div class="white-box">
 <br><br>
    <center><b><u><font size="5">Rezultate obtinute pana in Septembrie 2016</font></u></b></center><br>

Pana in acest moment prin intermediul programului pe care l-am inceput au fost instruiti in acordarea primului ajutor 850 de tineri, care au urmat 30h de pregatire teoretica si practica si au absolvit cu nota peste 7 examenul de final de curs.<br><br>
Tot pana in acest moment au fost informati peste 50.000 de persoane, distribuite aproximativ 50.000 de pliante si flayere prin campanii de informare desfasurate in: centrul comercial Carrefour (TOM), Centrul Medical Provita 2000, Centrul Comercial Baneasa Bucuresti, Centrul Comercial Maritimo, licee din Constanta, licee din orasul Medgidia. In cadrul liceelor au fost desfasurate peste 300 de sesiuni de comunicare in care s-au realizat proiectii, simulari din care sa reiasa importanta cunoasterii notiunilor de prim ajutor.<br><br>
S-au realizat peste 10 simulari la care au participat membrii echipei de prim ajutor ASMV, tineri care au participat la cursurile de prim ajutor, parteneri care au sustinut cursul de prim ajutor.<br><br>
A fost acordat primul ajutor, asistenta medicala avansata cu participarea membrilor din echipa de prim ajutor si medicala ASMV la peste 15 manifestari.<br><br><br>



<div id="sliderFrame">
  <div id="slider"><img src="photos/Corect/1-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/2-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/3-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/4-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/5-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/6-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/7-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/8-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/9-ASMV.jpg" alt="Descriere" />
            <img src="photos/Corect/10-ASMV.jpg" alt="Descriere" />
        </div>
        <div style="display: none;">
            <div id="cap1">
                Spacecraft external view
          </div>
            <div id="cap2">
                Spacecraft section view
            </div>
        </div>
    </div>
 


<br><br><br>

</td>
</tr>
</table> 

<br><br>
    
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
   

 
    
    
    
    

</body>













</html>

<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta name="Description" content="Hvem siger at kvalitets hundefoder skal være dyrt? Hos TheDogHouse har vi alle de kendte mærker og til en god pris.">
<meta name="Keywords" content="foder, vådt, frost, racer, alder, pris, bio, gans,bio gans, øko, økologisk hundefoder.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hundefoder</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images/myicon.png"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include 'header.php'?>
	<div class="container-fluid">
<a class="hist" href="index.php">Hjem</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="hist" href="mprodukter.php">Produkter</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="hist2" href="hundefoder.php">Hundefoder</a>
<h1 class="h1t">Hundefoder</h1>
<div class="toplinje"></div>
<a class="link" href="#">Pris</a>
<a class="link1" href="#">Nyeste</a>
<a class="link2" href="#">Alfabetisk</a>
<div class="col-xs-0 col-sm-3 col-md-3">
<img id="shund" src="images/sidhund1.png" alt="siddende hund"/>
	<aside class="sidebox">
		<form class="form">
			<h3 class="h3">Pris</h3>
			<p class="form">10 --------------- 1.000</p>
			<h3 class="h3">Konsistens</h3>
			<input type="checkbox" name="konsistens" value="frost">Frost
			<br>
			<br>
			<input type="checkbox" name="konsistens" value="vådt">Vådt
			<br>
			<br>
			<input type="checkbox" name="konsistens" value="tørt">Tørt
			<h3 class="h3">Alder</h3>
			<input type="checkbox" name="alder" value="hvalp">Hvalp
			<br>
			<br>
			<input type="checkbox" name="alder" value="voksen">Voksen
			<br>
			<br>
			<input type="checkbox" name="alder" value="senior">Senior
			<h3 class="h3">Race</h3>
			<input type="checkbox" name="race" value="mopse">Mopse
			<br>
			<br>
			<input type="checkbox" name="race" value="bulldog">Bulldog
			<br>
			<br>
			<input type="checkbox" name="race" value="gravhund">Gravhund
			<br>
			<br>
			<input type="checkbox" name="race" value="term terrier">Term Terrier
			<br>
			<br>
		</form>
		
	</aside>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-3">
		<img id="mad1" src="images/foder1.png" alt="Acana foder"/>
		<p class="navnf">ACANA</p>
		<div class="prisbox">
			<p class="pris">Fra 50,00 DKK</p>
		</div>
		<a class="mmere" href="#">Læs mere</a>
		<br>
		<img id="mad5" src="images/foder5.png" alt="hundefoder"/>
		<p class="navnf">Grav</p>
		<div class="prisbox">
			<p class="pris">Fra 159,00 DKK</p>
		</div>
		<a class="mmere" href="#">Læs mere</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-3">
		<img id="mad2" src="images/foder2.png" alt="hundefoder"/>
		<p class="navnf">Orijen</p>
		<div class="prisbox">
			<p class="pris">59,00 DKK</p>
		</div>
		<a class="mmere" href="#">Læs mere</a>
		<br>
		<img id="mad4" src="images/foder4.png" alt="hundefoder"/>
		<p class="navnf">M.U.S.H</p>
		<div class="prisbox">
			<p class="pris">149,00 DKK</p>
		</div>
		<a class="mmere" href="#">Læs mere</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-3">
		<a href="biogans.php"><img id="mad3" src="images/foder3.png" alt="vådt hundefoder"/></a>
		<p class="navnf">BIO GANS</p>
		<div class="prisbox">
			<p class="pris">23,00 DKK</p>
		</div>
		<a class="mmere" href="#">Læs mere</a>
		<br>
		<img id="mad6" src="images/foder6.png" alt="hundefoder"/>
		<p class="navnf">ViTA Petz</p>
		<div class="prisbox">
			<p class="pris">Fra 179,00 DKK</p>
		</div>
		<a class="mmere" href="#">Læs mere</a>
	</div>
	<div class="container2 text-center">
	<div class="row">
        <div class="round hollow text-center">
        <a href="#" id="addClass"><span class="glyphicon glyphicon-comment"></span> Brug for hjælp? </a>
        </div>
	</div>
</div>
<div class="popup-box chat-popup" id="qnimate">
    		 <div class="popup-head">
						<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
			 </div>
			<div class="popup-messages-footer">
			<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
			</div>
		</div>	
	 <script>
		  $(function(){
$("#addClass").click(function () {
          $('#qnimate').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
            });
  });</script> 
	<img id="sthund" src="images/hundstar.png" alt="billede af en stående hund"/>
	<img id="gras" src="images/gras.png" alt="billede af gras"/>
	<img id="madskol" src="images/madskol.png" alt="billede af en madskål"/>

</div>
<?php include 'footer.php'?>
</body>
</html>
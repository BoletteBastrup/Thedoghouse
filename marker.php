<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta name="Description" content="Vi køre med alle de kendte hundemærker og her kan du søge efter lige det mærke som passer til dig og din hund.">
<meta name="Keywords" content="hundemærker, foder, dog activity, acana, orijen, m.u.s.h, petz, pet.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mærker</title>
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
<a class="hist" href="#">Hjem</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="hist1" href="#">Tilbud</a>
<div class="container-fluid">
<h1 class="h1t">Mærker</h1>
<div class="toplinje"></div>
<img class="hundbold1" src="images/hundbold.png" alt="hund med bold"/>
<br>
<div class="col-xs-4 col-sm-2 col-md-3">
<img class="tilbud" src="images/marker1.png" alt="hunde produkt"/>
<h3 class="tekstpb">Dog<br>Activity</h3>
<br>
<img class="tilbud1" src="images/marker4.png" alt="madskål til hunde"/>
<h3 class="tekstpb">Royal</h3>
<br>
<img class="tilbud1" src="images/marker7.png" alt="hundepleje produkt"/>
<h3 class="tekstpb">Grav</h3>
</div>
<div class="col-xs-4 col-sm-2 col-md-3">
<img class="tilbud" src="images/marker11.png" alt="hundefoder"/>
<h3 class="tekstpb">ACANA</h3>
<br>
<img class="tilbud1" src="images/marker8.png" alt="hundespand"/>
<h3 class="tekstpb">United<br>Pets</h3>
<br>
<img class="tilbud1" src="images/marker10.png" alt="hunde kosttilskud"/>
<h3 class="tekstpb">Vita<br>Petz</h3>
</div>
<div class="col-xs-4 col-sm-2 col-md-3">
<img class="tilbud" src="images/marker12.png" alt="hundefoder"/>
<h3 class="tekstpb">Orijen</h3>
<br>
<img class="tilbud1" src="images/marker3.png" alt="hundebakke"/>
<h3 class="tekstpb">Hunter</h3>
<br>
<img class="tilbud1" src="images/marker2.png" alt="legetøj til hund"/>
<h3 class="tekstpb">Fet<br>Enigma</h3>
</div>

<div class="col-xs-4 col-sm-2 col-md-3">
<img class="tilbud2" src="images/marker6.png" alt="hundemad"/>
<h3 class="tekstpb1">M.U.S.H</h3>
<br>
<img class="tilbud3" src="images/marker9.png" alt="vådt hundefoder"/>
<h3 class="tekstpb1" id="herr">Herremann</h3>
<br>
<img class="tilbud3" src="images/marker5.png" alt="hunde legetøj"/>
<h3 class="tekstpb1">Trixie</h3>
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
		<div>	
	 <script>
		  $(function(){
$("#addClass").click(function () {
          $('#qnimate').addClass('popup-box-on');
            });
          
            $("#removeClass").click(function () {
          $('#qnimate').removeClass('popup-box-on');
            });
  });</script>
  </div>	
<img class="gras" src="images/gras.png" alt="billede af gras"/>
<img id="gul" src="images/hundgulbold.png" alt="hund med gul bold"/>
<img class="sthund" src="images/hundstar.png" alt="billede af stående hund"/>
<img id="rod" src="images/Brandhane-01.png" alt="billede af en brandhane"/>
	</div>
	<?php include 'footer.php'?>
</body>
</html>
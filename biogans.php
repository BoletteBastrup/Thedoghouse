<!doctype html>
<html lang="da">
<head>
<meta charset="utf-8">
<meta name="Description" content="Hos TheDogHouse finder du de bedste økologiske kvalitets produkter til din hund. Vi laver hjemmelavede snacks til din hund, med friske økologiske råvare.">
<meta name="Keywords" content="hundefoder, hundemad, dåse, bio gans, øko, økologi, økologisk">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bio Gans</title>
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
<a class="hist" href="index.php">Hjem</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="hist1" href="mprodukter.php">Produkter</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="hist2" href="hundefoder.php">Hundefoder</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="hist3" href="biogans.php">BIO GANS</a>
<div class="container-fluid">
	<div class="col-xs-6 col-sm-4 col-md-6">
		<img class="bio" src="images/foder3.png" alt="vådt hundefoder"/>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<h1 class="h1">Hermann's</h1>
		<p class="oko">Økologiske vådfoder<br>
		med gås &amp; boghevde. 400 G<br>
		100% økologisk og naturligt.</p>
		
	<p class="beskr">Ingredienser: 50% Økologisk gås med boghvede,<br>
	æbler, kokosmælk og hørfrøolie. </p>
	<p class="beskr">Analytiske bestanddele: Råprotein 8,4% - Råfedt<br>
	7,2% - Råaske 1,6% - Træstof 1,2% - Fugtighed 71%.</p>
	
	<h4 class="h4">Produktbeskrivelse <button>+</button></h4>
	</div>
	<div class="col-xs-6 col-sm-2 col-md-2">
     <h2 class="h2">23,00 DKK</h2> 
      <div class="kasse">  
        <input id="qty" value="0" />
        <button id="down" onclick="modify_qty(-1)">-</button>
        <button id="up" onclick="modify_qty(+1)">+</button>
       </div>
    </div>
	<div class="col-xs-6 col-sm-2 col-md-4">
       <div class="leg">
       	<img class="lkurv" src="images/kurv.png" alt="indkøbsvogn"/>
       	<p class="ikurv">Læg i kurv</p>
       </div>
	</div>
       <div class="col-xs-6 col-sm-2 col-md-3">
       <img class="hundmbold" src="images/hundbold.png" alt="hund med bold"/>
       <img class="talkurv" src="images/talebobblegronop.png" alt="talebobble"/>
       </div>
      <div class="col-xs-0 col-sm-6 col-md-6">
      	<p class="bestor">God smag med god samvittighed - alt er 100% økologisk! 

		Alt kødet i Herrmann’s produkter stammer fra kontrolleret økologiske dyrehold, direkte fra gården til slagteriet (Bio Kreis certifikatet).
		Friske grøntsager fra kontrolleret økologisk dyrkning. Olierne er alle økologiske og indeholder et afbalanceret forhold af Omega-3 og -6 fedtsyrer. 
		Herrmann’s hundefoder bliver ekstra skånsomt forarbejdet for at bibeholde naturlige vitaminer og mineralstoffer og hele produktionen bærer Bio Kreis certifikatet. Den høje kvalitet af Herrmann’s hundefoder bliver kontrolleret af Biokreis’ testinstitut og certificeringsinstituttet Lakon. </p>
      </div>
      <div class="col-xs-0 col-sm-6 col-md-6">
      	<p class="bestor">Herrmann’s hundefoder indeholder ingen konserveringsmidler eller andre kemiske tilsætningsstoffer. 
		Produkterne har en “grødet” konsistens, og er gode til at fordele på foderpiller,<br> hvis du skal bruge en smagsforstærker.
		Da<br> Herrmann’s kun består af naturlige ingredienser af<br> høj kvalitet (ingen fyld-, smags- eller aromastoffer),<br> vil du opleve det er meget drøjere end konventionelt foder. Et oplagt valg hvis din hund lider af lagermide-allergi eller andre foder intolerancer.</p>
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
     
       <script>function modify_qty(val) {
    var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('qty').value = new_qty;
    return new_qty;
}
</script>
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
   <img class="hhund" src="images/sidhund.png" alt="en hund der sidder"/>
</div>
<?php include 'footer.php'?>
</body>
</html>
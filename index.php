<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Velox</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans|Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="http://allfont.ru/allfont.css?fonts=open-sans-semibold" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php require 'header.php'; ?>
	<!--Commit-->
	<main class="main">

		<?php require 'section/our-services.php'; ?>
		
		<?php require 'section/portfolio.php'; ?>

		<?php require 'section/brands.php'; ?>

		<?php require 'section/about-us.php'; ?>

		<?php require 'section/contacts.php'; ?>
	</main>

	<?php require 'footer.php'; ?>

	<script>
		var hideCards = document.getElementsByClassName('portfolio__card-hide');
		var firstCards = document.getElementsByClassName('portfolio__card-header');
		var flag = true;

		function toogleCards(){
			if(flag){
				for(var i = 0; i < 6; i++){
					hideCards[i].style.display = "block";
				}
				flag = false;
			}
			else{
				for(var i = 0; i < 6; i++){
					hideCards[i].style.display = "none";
				}	
				flag = true;
			}
		}

		/*var hideCards = document.getElementsByClassName('portfolio__card-hide');
		var firstCards = document.getElementsByClassName('portfolio__card-header');
		var time = 1000;

		button.onclick = show;
		function show(){
			if(hideCards[0].style.display == "block") {
				closehere();
			}
			for(var i = 0; i < 6; i++){
				hideCards[i].style.display = "block";
			}
			button.onclick = closehere;
		}
		function closehere(){
			for(var i = 0; i < 6; i++){
				hideCards[i].style.display = "none";
			}
			button.onclick = show;
		}*/

		allCard.onclick = funcAll;
		illustrationCard.onclick = funcIllustration;
		logoCard.onclick = funcLogo;
		brandingCard.onclick = funcBranding;
		designCard.onclick = funcDesign;

		function funcAll(){
			closeAllCard();
			for(var i = 0; i < 6; i++){
				hideCards[i].style.display = "block";
				firstCards[i].style.display = "block";
			}
			flag = false;
		}
		function funcIllustration(){
			closeAllCard();
			hideCards[1].style.display = "block";
			firstCards[2].style.display = "block";
			firstCards[3].style.display = "block";
		}
		function funcLogo(){
			closeAllCard();
			hideCards[0].style.display = "block";
			firstCards[4].style.display = "block";
			firstCards[5].style.display = "block";
			firstCards[1].style.display = "block";
		}
		function funcBranding(){
			closeAllCard();
			hideCards[3].style.display = "block";
			hideCards[2].style.display = "block";
			hideCards[4].style.display = "block";
			hideCards[5].style.display = "block";
		}
		function funcDesign(){
			closeAllCard();
			hideCards[1].style.display = "block";
		}
		
		function closeAllCard(){
			for(var i = 0; i < 6; i++){
				hideCards[i].style.display = "none";
				firstCards[i].style.display = "none";
			}
		}


		var rightArrow = document.getElementsByClassName("text-about-us__button-right");
		var leftArrow = document.getElementsByClassName("text-about-us__button-left");
		var subscriber = document.getElementsByClassName("about-us__subscriber");
		var link = document.getElementsByClassName("about-us__link");
		var dotes = document.getElementsByClassName("about-us-dotes__img");
		var Mark = document.getElementById("Mark");
		var Linda = document.getElementById("Linda");
		var Carl = document.getElementById("Carl");
		var comment = document.getElementsByClassName("text-about-us__comment");
		var numOfAnswer = 1;

		var objSubscriber = [];
		objSubscriber[0] = {
			subName: "Linda",
			message: '"I have already 3 times appeal to this company. Flawless work that will not leave anyone indifferent!"'};
		objSubscriber[1] = {
			subName: "Mark",
			message: '"I was very pleased with this company. I will definitely return to them."'};
		objSubscriber[2] = {
			subName: "Carl",
			message: '"Remarkable work. Not found any cons, great!"'};
	

		function rightSlide(){
			if(numOfAnswer == '3'){
				Mark.style.width = "130px";
				Mark.style.opacity = "1";
				Carl.style.width = "110px";
				Carl.style.opacity = "0.5";
				numOfAnswer = 2;
				comment[0].innerHTML = objSubscriber[1].message;
				subscriber[0].innerHTML = objSubscriber[1].subName;
				dotes[2].src = "images/dote2.png";
				dotes[1].src = "images/dote3.png";
			}
			else if(numOfAnswer == '2'){
				Linda.style.width = "130px";
				Linda.style.opacity = "1";
				Mark.style.width = "110px";
				Mark.style.opacity = "0.5";
				numOfAnswer = 1;
				comment[0].innerHTML = objSubscriber[0].message;
				subscriber[0].innerHTML = objSubscriber[0].subName;
				dotes[1].src = "images/dote2.png";
				dotes[0].src = "images/dote3.png";
			}
		}
		function leftSlide(){
			if(numOfAnswer == '1'){
				Mark.style.width = "130px";
				Mark.style.opacity = "1";
				Linda.style.width = "110px";
				Linda.style.opacity = "0.5";
				numOfAnswer = 2;
				comment[0].innerHTML = objSubscriber[1].message;
				subscriber[0].innerHTML = objSubscriber[1].subName;
				dotes[0].src = "images/dote2.png";
				dotes[1].src = "images/dote3.png";
			}
			else if(numOfAnswer == '2'){
				Carl.style.width = "130px";
				Carl.style.opacity = "1";
				Mark.style.width = "110px";
				Mark.style.opacity = "0.5";
				numOfAnswer = 3;
				comment[0].innerHTML = objSubscriber[2].message;
				subscriber[0].innerHTML = objSubscriber[2].subName;
				dotes[1].src = "images/dote2.png";
				dotes[2].src = "images/dote3.png";
			}
		}



	</script>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<!-- <script src="script.js"></script> -->
</body>
</html>

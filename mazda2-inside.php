<?php 

if ( !isset( $_GET['data'] ) ||  !isset( $_GET['lang'] ) )  {
	die();
}
	
if ( !is_numeric( $_GET['data'] ) || !strlen(trim( $_GET['lang'] ) ) ) {
	die();
} 
	
$strLang = trim( $_GET['lang'] );
$html = '';

/* LANGUAGE DUTCH - START */
if($strLang == 'nl') {	
	switch ( $_GET['data'] ) {
		case 0: 
			$html = '
				<h2>INSIDE</h2>
				<h3>Make it your stage</h3>
				<h3>feature: <span>inleg dashboard in witte hoogglans</span></h3>
				<p>Elke keer je instapt denk je aan het Tomorrowland-motto. Vergeet het nooit: life is beautiful..</p>
				';
			break;
		case 1: 
			$html = '
				<h2>INSIDE</h2>
				<h3>Make it your stage</h3>
				<h3>feature: <span>gegraveerde plaatjes</span></h3>
				<p>Elke generatie wil opvallen – maar die van jou doet dat in stijl. Een geraffineerd detail in ongerept wit.</p>
				';
			break;
			/*
		case 2: 
			$html = '
				<h2>INSIDE</h2>
				<h3>Make it your stage</h3>
				<h3>feature: <span>vloermatten met rood accent</span></h3>
				<p>Bijna te mooi om je voeten aan te vegen (dus klop die maar buiten af).</p>
				';
			break;*/
		case 2: 
			$html = '
				<h2>INSIDE</h2>
				<h3>Make it your stage</h3>
				<h3>feature: <span>zetelbekleding in rode stof met contrasterende stiknaad</span></h3>
				<p>Premium vinden wij geen lelijk woord. En contrasterend ook niet.</p>
				';
			break;
			/*
		case 3: 
			$html = '
				<h2>INSIDE</h2>
				<h3>Make it your stage</h3>
				<h3>feature: <span>LED-sfeerverlichting</span></h3>
				<p>spectaculaire lightshows. Maar binnen zorg jij voor de ambiance.</p>
				';
			break;*/
		case 3: 
			$html = '
				<h2>INSIDE</h2>
				<h3>Make it your stage</h3>
				<h3>feature: <span>7” aanraakscherm</span></h3>
				<p>Riep iemand infotainment? Here you go: HMI Commander & MZD Connectivity-systeem.</p>
				';
			break;
	}
}
/* LANGUAGE DUTCH - ENDS */


/* LANGUAGE FRENCH - START */
elseif($strLang == 'fr') {	
	switch ( $_GET['data'] ) {
		case 0: 
			$html = '
				<h2>INTÉRIEUR</h2>
				<h3>La scène est à vous Caractéristique :</h3>
				<h3>Caractéristique : <span>insert du tableau de bord en blanc brillant</span></h3>
				<p>Si toute génération cherche à sortir du lot, la vôtre le fait avec classe. Un détail racé décliné dans un blanc immaculé.</p>
				';
			break;
		case 1: 
			$html = '
				<h2>INTÉRIEUR</h2>
				<h3>La scène est à vous Caractéristique :</h3>
				<h3>Caractéristique : <span>plaques gravées</span></h3>
				<p>Entrez dans votre voiture et remémorez-vous la devise de Tomorrowland : life is beautiful. Ne l’oubliez jamais.</p>
				';
			break;
		/*
		case 2: 
			$html = '
				<h2>INTÉRIEUR</h2>
				<h3>La scène est à vous Caractéristique :</h3>
				<h3>Caractéristique : <span>tapis de sol avec accent rouge</span></h3>
				<p>Presque trop beaux pour y poser les pieds (on les décrasse avant de monter).</p>
				';
			break;*/
		case 2: 
			$html = '
				<h2>INTÉRIEUR</h2>
				<h3>La scène est à vous Caractéristique :</h3>
				<h3>Caractéristique : <span>revêtement des sièges en tissu rouge avec surpiqûre contrastante</span></h3>
				<p>Premium et contraste… Deux mots qui vont très bien ensemble.</p>
				';
			break;
			/*
		case 3: 
			$html = '
				<h2>INTÉRIEUR</h2>
				<h3>La scène est à vous Caractéristique :</h3>
				<h3>Caractéristique : <span>éclairage d’ambiance LED</span></h3>
				<p>Son et lumière à l’extérieur ; même ambiance à l’intérieur.</p>
				';
			break;*/
		case 3: 
			$html = '
				<h2>INTÉRIEUR</h2>
				<h3>La scène est à vous Caractéristique :</h3>
				<h3>Caractéristique : <span>écran tactile 7”</span></h3>
				<p>Des envies d’infodivertissement ? Aucun problème : HMI Commander & système de connectivité MZD.</p>
				';
			break;
	}
}	
/* LANGUAGE FRENCH - ENDS */
	
	
	
	
echo $html;
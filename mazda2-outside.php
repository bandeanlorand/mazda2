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
		case 1: 
			$html = '
				<h2>Outside</h2>
				<h3>Make every mile legendary Feature: <em>15” lichtmetalen velgen ‘gunmetal’</em></h3>
				<p>Omdat het net iets blitser mag. Check it.</p>
				<a href="assets/images/outside/outsice_1_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_1_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 2: 
			$html = '
				<h2>Outside</h2>
				<h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="assets/images/outside/outsice_2_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_2_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 3: 
			$html = '
				<h2></h2>
				<h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="assets/images/mazdacar.jpg" data-lightbox="car">
					<img src="assets/images/thumb.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 4: 
			$html = '
				<h2></h2>
				<h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="assets/images/mazdacar.jpg" data-lightbox="car">
					<img src="assets/images/thumb.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 5: 
			$html = '
				<h2>Outside</h2>
				<h3>Make every mile legendary feature: <em>KIES JE KLEUR</em></h3>
				<p>&nbsp;</p>
				<a href="assets/images/outside/outsice_5_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_5_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 6: 
			$html = '
				<h2>Outside</h2>
				<h3>Make every mile legendary feature: <em>mistlampen vooraan</em></h3>
				<p>Zo zie je beter waar de volgende trip naartoe leidt.</p>
				<a href="assets/images//outside/outsice_6_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_6_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 7: 
			$html = '
				<h2>Outside</h2>
				<h3>Make every mile legendary feature: <em>rijstrookassistent (LDWS)</em></h3>
				<p>Safety first, op en naast de festivalweide.</p>
				<a href="javascript:void(0);" data-lightbox="car" style="cursor:default;">
					<img src="assets/images/outside/outsice_7_t.jpg" alt="Mazda" />
					<!--<span class="opencar"></span>-->
				</a>
				';
			break;
	}
}
/* LANGUAGE DUTCH - ENDS */


/* LANGUAGE FRENCH - START */
elseif($strLang == 'fr') {	
	switch ( $_GET['data'] ) {
		case 1: 
			$html = '
				<h2>EXTÉRIEUR</h2>
				<h3>Pour que chaque kilomètre soit légendaire Caractéristique : <em>jantes en alliage « Gunmetal » 15”</em></h3>
				<p>Ne passez pas inaperçu.</p>
				<a href="assets/images/outside/outsice_1_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_1_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 2: 
			$html = '
				<h2>EXTÉRIEUR</h2>
				<h3>Pour que chaque kilomètre soit légendaire Caractéristique : <em>vitres surteintées</em></h3>
				<p>Un peu d’intimité pour les passagers à l’arrière, s.v.p. !</p>
				<a href="assets/images/outside/outsice_2_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_2_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 3: 
			$html = '
				<h2></h2>
				<h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="assets/images/mazdacar.jpg" data-lightbox="car">
					<img src="assets/images/thumb.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 4: 
			$html = '
				<h2></h2>
				<h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="assets/images/mazdacar.jpg" data-lightbox="car">
					<img src="assets/images/thumb.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 5: 
			$html = '
				<h2></h2>
				<h3>Pour que chaque kilomètre soit légendaire Caractéristique : <em>CHOISISSEZ VOTRE COULEUR</em></h3>
				<p>&nbsp;</p>
				<a href="assets/images/outside/outsice_5_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_5_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 6: 
			$html = '
				<h2>EXTÉRIEUR</h2>
				<h3>Pour que chaque kilomètre soit légendaire Caractéristique :<em>phares antibrouillard avant</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="assets/images/outside/outsice_6_n.jpg" data-lightbox="car">
					<img src="assets/images/outside/outsice_6_t.jpg" alt="Mazda" />
					<span class="opencar"></span>
				</a>
				';
			break;
		case 7: 
			$html = '
				<h2>EXTÉRIEUR</h2>
				<h3>Pour que chaque kilomètre soit légendaire Caractéristique :<em>système de suivi de voie (LDWS)</em></h3>
				<p>Een beetje privacy voor je crew achterin - mag het?</p>
				<a href="javascript:void(0);" data-lightbox="car" style="cursor:default;">
					<img src="assets/images/outside/outsice_7_t.jpg" alt="Mazda" />
					<!--<span class="opencar"></span>-->
				</a>
				';
			break;
	}
}	
/* LANGUAGE FRENCH - ENDS */
	
	
	
	
echo $html;
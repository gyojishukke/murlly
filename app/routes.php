<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'home'],
		// Attention à la gloutonnerie = ordre des routes
		['GET', '/liste', 'Default#liste', 'liste'],
		// ['GET', '/contact', 'Default#contact', 'contact'],
		// ['POST', '/murl', 'Default#murl', 'murl'],
		['GET', '/[:code]', 'Default#go', 'redirection'],

	);
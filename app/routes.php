<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'home'],
		// ['GET', '/contact', 'Default#contact', 'contact'],
		// ['POST', '/murl', 'Default#murl', 'murl'],
		['GET', '/[:code]', 'Default#go', 'redirection'],
		['GET', '/liste', 'Default#liste', 'liste'],
	);
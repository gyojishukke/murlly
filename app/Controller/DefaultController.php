<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

	
		if(isset($_POST['submit'])) {

			$dateCreation = date('Y-m-d' );
			$m = new \Manager\UrlManager();
			$code = $m ->genererUnCodeUnique($_POST['url']);
			$m->insert(['urlshort'=>$code, 'urllong'=>$_POST['url'], 'date'=>$dateCreation, 'pseudo'=>$_POST['pseudo'], 'nbacces'=>1]);

			// $this->show('default/home');
		}

	$this->show('default/home');

	}

	public function contact()
	{
		$this->show('default/contact');
	}

	// public function find($id)
	public function liste()
	{
		// $user = $this->getUser();
		// $manager = new PostManager();
		$urlliste = $m->findAll();
		$this->show('default/liste', ['urlshort', 'urllong']);
		// public function findAll($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null)

		// public function find($id)
		
		// $this->show('default/liste');
	}


	public function go($code)
	{
		// $this->redirect($url);
		}

}
<?php

namespace Controller;

use \W\Controller\Controller;

use \W\Manager\UserManager;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		if(isset($_POST['submit']))
		{

			// verifier que l'url longue n'existe pas déjà dans la BDD
			$m = new \Manager\UrlManager();
			$url= $m->findByUrl(($_POST['url']));
			
			// si l'url longue existe dèja on l'affiche 

		
			if(!empty($url))
			{
				//mise à jour du nombre de vues
				$nbacces = intval($url['nbacces']) + 1;

				// print_r($url['nbacces']);
				// print_r($vues);
				$m->updateNbVues($url['id'], $nbacces);

				$this->show('default/home', ['urlAll' => $url]);

			}
			// sinon on crer l'url dans la base
			else
			{
				// on vérifie que l'url courte n'existe pas, sinon on le regenere 
				do{
					$code = $m->genererUnCodeUnique($_POST['url']);
					$url= $m->findByRandom($code);
				} while (!empty($url));
			
				// insertion tables
				$dateCreation   = date('Y-m-d') ;
				// $m = new \Manager\UrlManager();
				$m->insert(['urlshort'=>$code , 'urllong'=>$_POST['url'], 'date'=>$dateCreation, 'pseudo'=>$_POST['pseudo'] , 'nbacces'=>1]);
			}
		}
		$this->show('default/home', ['urlAll' => $url]);	
	}



	public function liste()
	{
		// afficher la liste
		$m = new \Manager\UrlManager();
		// $m = new ListeManager();
		$urlAll = $m->findAll();

		$this->show('default/liste', ['urlAll' => $urlAll]);
	}

	public function go($code)
	{
		$this->redirect($code);
	}

}
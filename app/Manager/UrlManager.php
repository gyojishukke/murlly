<?php
namespace Manager;

class UrlManager extends \W\Manager\Manager 
{



	public function genererUnCodeUnique($url){
		return $code = \W\Security\StringUtils::randomString(6);
	}

}


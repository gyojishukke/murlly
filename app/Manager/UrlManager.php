<?php
namespace Manager;


class UrlManager extends \W\Manager\Manager {

	public function genererUnCodeUnique($url){
		return $code = \W\Security\StringUtils::randomString(6);
	
	}

	public function findByUrl($url)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE urllong = :url LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":url", $url);
		$sth->execute();

		return $sth->fetch();
	}
	

	public function findByRandom($url)
	{

		$sql = "SELECT * FROM " . $this->table . " WHERE urlshort = :url LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":url", $url);
		$sth->execute();

		return $sth->fetch();
	}



	
	public function updateNbVues($id, $nbacces)
	{
		if (!is_numeric($id)){
			return false;
		}
		
		$sql = "UPDATE " . $this->table . " SET nbacces = :nbacces  ";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":nbacces", $nbacces);
		$sth->execute();
		// return $this->find($id);
	}

}

 
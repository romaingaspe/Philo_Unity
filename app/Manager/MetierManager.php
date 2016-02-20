<?php

namespace Manager;

class MetierManager extends \W\Manager\UserManager {

  public function findAllUsers($orderBy = "", $orderDir = "ASC", $limit = null, $offset = null, $section)
  {

  	$sql = "SELECT * FROM metiers, users WHERE metiers.id = users.id_metier ";
  	if (!empty($orderBy)){
  		//sécurisation des paramètres, pour éviter les injections SQL
  		if(!preg_match("#^[a-zA-Z0-9_$]+$#", $orderBy)){
  			die("invalid orderBy param");
  		}
  		$orderDir = strtoupper($orderDir);
  		if($orderDir != "ASC" && $orderDir != "DESC"){
  			die("invalid orderDir param");
  		}
  		if ($limit && !is_int($limit)){
  			die("invalid limit param");
  		}
  		if ($offset && !is_int($offset)){
  			die("invalid offset param");
  		}

  		$sql .= " ORDER BY $orderBy $orderDir";
  		if ($limit){
  			$sql .= " LIMIT $limit";
  			if ($offset){
  				$sql .= " OFFSET $offset";
  			}
  		}
  	}
  	$sth = $this->dbh->prepare($sql);
  	$sth->execute();

  	return $sth->fetchAll();
  }
  }

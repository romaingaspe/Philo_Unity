<?php

namespace Manager;

class RechercheManager extends \W\Manager\UserManager {


    public function rechercheGlobale($search){

		$sql = ("SELECT * FROM users WHERE nom  LIKE :search OR prenom LIKE :search COLLATE utf8_bin");
        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":search", '%'.$search.'%');
		if($sth->execute()){
			return $sth->fetchAll();
    	}
    	else {
    		$err[] = "Une erreur est survenue.";

    	}
    }
}

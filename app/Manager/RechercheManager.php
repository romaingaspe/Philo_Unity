<?php

namespace Manager;

class MetierManager extends \W\Manager\UserManager {

    public function rechercheGlobale(){
        
        $search = strip_tags($_GET["search"]);
		$req = $bdd->prepare("SELECT * FROM users WHERE nom  LIKE :search OR prenom LIKE :search COLLATE utf8_bin");
		$req->bindValue(":search", '%'.$search.'%', PDO::PARAM_STR);
		if($req->execute()){
			$users = $req->fetchAll();
    	}
    	else {
    		$err[] = "Une erreur est survenue.";

    	}
    }
}

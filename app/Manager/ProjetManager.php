<?php

namespace Manager;

class ProjetManager extends \W\Manager\UserManager {

	public function ProjectManager($id){

		$sql = "SELECT * FROM projets WHERE id_projet = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":id", $id);
        $sth->execute();

        $projets = $sth->fetchAll();
        return $projets;
   
        /*foreach ($projets as $projet) {
			$sql = "SELECT * FROM photos WHERE id_projet = :id";
			$sth->bindValue(":id", $projet['id']);
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			$projet['photos'] = $sth->fetchAll();

			return $projet['photos'];

		} */

	}

		
    public function getProjectPhotos($id){

        $sql = "SELECT * FROM photos WHERE id_projet = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":id", $id);
        $sth->execute();

        return $sth->fetchAll();

    }
    
}

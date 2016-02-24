<?php  

namespace Manager;

class CommentaireManager extends \W\Manager\Manager{

    public function getProjectCommentaires($id){
        $sql = "SELECT * FROM commentaires WHERE idprojet = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":id", $id);
        $sth->execute();

        return $sth->fetchAll();

    }
  
}

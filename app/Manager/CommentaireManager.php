<?php  

namespace Manager;

class CommentaireManager extends \W\Manager\Manager{

    public function getProjectCommentaires($id){
        $sql = "SELECT c.*, u.prenom as prenomUser, u.nom as nomUser FROM commentaires c left join users u on c.iduserspost = u.id WHERE c.idprojet = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":id", $id);
        $sth->execute();

        return $sth->fetchAll();

    }
  
}

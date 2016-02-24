<?php  

namespace Manager;

class CommentaireManager extends extends \W\Manager\Manager{
  /*public function insert(array $commentaires, $stripTags = true)
  {

    $colNames = array_keys($commentaires);
    $colNamesString = implode(", ", $colNames);

    $sql = "INSERT INTO commentaires (titre,comments,date) VALUES (";
    foreach($commentaires as $key => $value){
      $sql .= ":$key, ";
    }
    $sql = substr($sql, 0, -2);
    $sql .= ")";

    $sth = $this->dbh->prepare($sql);
    foreach($commentaires as $key => $value){
      $value = ($stripTags) ? strip_tags($value) : $value;
      $sth->bindValue(":".$key, $value);
    }

    if (!$sth->execute()){
      return false;
    }
    return $this->find($this->lastInsertId());
  }*/
}

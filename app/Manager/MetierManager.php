<?php

namespace Manager;

class MetierManager extends \W\Manager\UserManager {

  public function findMetier($section)
  {

  	$sql = "SELECT * FROM metiers WHERE alias = '$section' ";
  	$sth = $this->dbh->prepare($sql);
  	$sth->execute();
  	$met = $sth->fetchAll();
    $idmetier = $met[0]['id'];
    $sql2 = 'SELECT * FROM users WHERE id_metier ="'.$idmetier.'"';
    $sth = $this->dbh->prepare($sql2);
  	$sth->execute();
  	return $sth->fetchAll();

  }
  public function findSection($section){

    $sql = "SELECT section FROM metiers WHERE alias = '$section' ";
  	$sth = $this->dbh->prepare($sql);
  	$sth->execute();
  	return $sth->fetchAll();
  }
  public function ajaxprofils(){
    
  }
}

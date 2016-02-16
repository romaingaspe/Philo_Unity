<?php

namespace Classes;

class FormValidator {

	protected $errors = array();


	/*****
		$verif = new FormValidator();
		$verif->verifEmail($_POST['login']);
		$params['erreurs'] = $verif->getErrors();

	public function verifEmail($mail){

		if(!filter_var($mail, FILTER_VALIDATE_URL) !== false){
			$this->errors[] = 'Le lien est invalide';
		}
	}
	****/

    /**
     * Get the value of Basic fix for UserManager. Extends UserManager & Manager
     *
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set the value of Basic fix for UserManager. Extends UserManager & Manager
     *
     * @param mixed errors
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;

        return $this;
    }

}

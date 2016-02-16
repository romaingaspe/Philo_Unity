<?php
/**
 * Basic fix for UserManager. Extends UserManager & Manager
 *
 * How-to :
 * 	- Place-it in \app\Manager
 * 	- In your controller add in header :
 *		use \Manager\FixUserManager;
 *
 * @author Axel Wargnier <axel@axessweb.fr>
 * @copyright WebForce3 2016
 */
namespace Manager;

class VerifManager {

	protected $errors = array();

	public function verifEmail($mail){

		if(!filter_var($mail, FILTER_VALIDATE_URL) !== false){
			$errors[] = 'Le lien est invalide';
		}
	}


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

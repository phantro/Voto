<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user= Usuario::model()->find("LOWER(username)=?",array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			
                        $this->_id=$user->id;
                        //echo Yii::app()->user->id;
			
                        if($user->acceso=='admin'){
                           $this->username=$user->acceso;
                           $this->setState('isAdmin','1');
                           
                        }else{
                           $this->username=$user->username;  
                           $this->setState('isAdmin','0');
                        }
			//echo Yii::app()->user->getState('tipo');
                        
                        $this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function getId()
	{
		return $this->_id;
	}
}
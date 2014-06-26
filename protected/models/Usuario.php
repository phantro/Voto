<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $session
 * @property string $profile
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 * @property string $celular
 * @property string $acceso
 * @property string $estado
 * @property string $fecha
 * @property string $grupo
 * @property string $verficado
 * @property string $ip
 * @property string $modificado
 */
class Usuario extends GActiveRecord {

    public $verifyCode;
    public static $privilegio = array('Cliente' => 'Cliente', 'admin' => 'Administrador');
    public static $veri = array('SI' => 'SI', 'NO' => 'NO');

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'usuario';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('acceso, verficado, username, password, nombre, apellido', 'required'),
            array('verficado', 'length', 'max' => 2),
            array('username, nombre, apellido, grupo', 'length', 'max' => 128),
            array('username','unique','attributeName'=>'username','className'=>'Usuario','allowEmpty'=>false),
            array('password', 'length', 'max' => 128, 'min' => 5),
            array('telefono, celular', 'length', 'max' => 8),
            array('estado', 'length', 'max' => 10),
            array('acceso, ip', 'length', 'max' => 15),
            array('email', 'email'),
            array('session, profile, fecha, modificado', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, password, email, session, profile, nombre, apellido, telefono, celular, acceso, estado, fecha, grupo, verficado, ip, modificado', 'safe', 'on' => 'search'),
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'session' => 'Session',
            'profile' => 'Profile',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'acceso' => 'Acceso',
            'estado' => 'Estado',
            'fecha' => 'Fecha',
            'grupo' => 'Grupo',
            'verficado' => 'Verficado',
            'ip' => 'Ip',
            'modificado' => 'Modificado',
            'verifyCode' => 'Verification Code',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('session', $this->session, true);
        $criteria->compare('profile', $this->profile, true);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('apellido', $this->apellido, true);
        $criteria->compare('telefono', $this->telefono, true);
        $criteria->compare('celular', $this->celular, true);
        $criteria->compare('acceso', $this->acceso, true);
        $criteria->compare('estado', $this->estado, true);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('grupo', $this->grupo, true);
        $criteria->compare('verficado', $this->verficado);
        $criteria->compare('ip', $this->ip, true);
        $criteria->compare('modificado', $this->modificado, true);

        $session = new CHttpSession;

        $session->open();

        $session['productos_records'] = $criteria;

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Usuario the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function validatePassword($password) {
        return $this->hashPassword($password, $this->session) === $this->password;
    }

    public function hashPassword($password, $salt) {
        return md5($salt . $password);
    }

    public function generateSalt() {
        return uniqid('', true);
    }

    public static function getprivilegio($key = null) {

        return self::$privilegio;
    }

    public static function getverifi($key = null) {

        return self::$veri;
    }

}

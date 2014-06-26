<?php

/**
 * This is the model class for table "voto".
 *
 * The followings are the available columns in table 'voto':
 * @property string $Id
 * @property string $Fecha
 * @property string $Ip
 * @property string $Navegador
 * @property string $IdEdad
 * @property string $IdProvincia
 * @property string $IdFormacion
 * @property string $IdSexo
 * @property string $IdOcupacion
 * @property string $IdCandidato
 */
class Voto extends GActiveRecord {

    public $IdDepartamento;
    public $codigoVerificacion;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'voto';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('IdCandidato, IdEdad, IdSexo, IdProvincia, IdOcupacion , IdFormacion', 'required'),
            array('Ip', 'length', 'max' => 12),
            array('Navegador', 'length', 'max' => 300),
            array('IdEdad, IdFormacion, IdOcupacion, IdCandidato', 'length', 'max' => 2),
            array('IdProvincia', 'length', 'max' => 5),
            array('IdSexo', 'length', 'max' => 10),
            array('Fecha', 'safe'),
            array('codigoVerificacion', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('Id, Fecha, Ip, Navegador, IdEdad, IdProvincia, IdFormacion, IdSexo, IdOcupacion, IdCandidato', 'safe', 'on' => 'search'),
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
            'Id' => 'ID',
            'Fecha' => 'Fecha',
            'Ip' => 'Ip',
            'Navegador' => 'Navegador',
            'IdCandidato' => '1.- Elija un Candidato a la Presidencia',
            'IdEdad' => '2.- Seleccione su Rango de Edad',
            'IdSexo' => '3.- Seleccione su sexo',
            'IdProvincia' => 'Provincia',
            'IdOcupacion' => '5.- Seleccione su Ocupación',
            'IdFormacion' => '6.- Seleccione su Formación',
            'IdDepartamento' => 'Departamento',
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

        $criteria->compare('Id', $this->Id, true);
        $criteria->compare('Fecha', $this->Fecha, true);
        $criteria->compare('Ip', $this->Ip, true);
        $criteria->compare('Navegador', $this->Navegador, true);
        $criteria->compare('IdEdad', $this->IdEdad, true);
        $criteria->compare('IdProvincia', $this->IdProvincia, true);
        $criteria->compare('IdFormacion', $this->IdFormacion, true);
        $criteria->compare('IdSexo', $this->IdSexo, true);
        $criteria->compare('IdOcupacion', $this->IdOcupacion, true);
        $criteria->compare('IdCandidato', $this->IdCandidato, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Voto the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return array $listData class Departamento.
     */
    public function getDepartamento() {
        $departamento = Departamento::model()->findAll();
        return CHtml::listData($departamento, "Id", "NombreDepartamento");
    }

    /**
     * @param string $defaultDeparatamento.
     * @return array $listData class Provincia.
     */
    public function getProvincia($defaultDeparatamento = 1) {
        $provincia = Provincia::model()->findAll("IdDepartamento=?", array($defaultDeparatamento));
        return CHtml::listData($provincia, "Id", "NombreProvincia");
    }

}

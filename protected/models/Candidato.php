<?php

/**
 * This is the model class for table "candidato".
 *
 * The followings are the available columns in table 'candidato':
 * @property string $Id
 * @property string $Sigla
 * @property string $NombreCandidato
 * @property string $Foto
 * @property string $LogoPartido
 * @property string $SloganPartido
 */
class Candidato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'candidato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Sigla', 'length', 'max'=>20),
			array('NombreCandidato', 'length', 'max'=>50),
			array('Foto, LogoPartido, SloganPartido', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Sigla, NombreCandidato, Foto, LogoPartido, SloganPartido', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Sigla' => 'Sigla',
			'NombreCandidato' => 'Nombre Candidato',
			'Foto' => 'Foto',
			'LogoPartido' => 'Logo Partido',
			'SloganPartido' => 'Slogan Partido',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id,true);
		$criteria->compare('Sigla',$this->Sigla,true);
		$criteria->compare('NombreCandidato',$this->NombreCandidato,true);
		$criteria->compare('Foto',$this->Foto,true);
		$criteria->compare('LogoPartido',$this->LogoPartido,true);
		$criteria->compare('SloganPartido',$this->SloganPartido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Candidato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

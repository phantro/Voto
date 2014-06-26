<?php

/**
 * This is the model class for table "ensayos".
 *
 * The followings are the available columns in table 'ensayos':
 * @property string $id
 * @property string $empleado_id
 * @property string $usuario_id
 * @property string $fecha
 * @property string $inicio
 * @property string $fin
 * @property string $costo
 * @property string $reserva
 * @property string $cantidadHoras
 * @property string $tipo
 * @property string $ip
 * @property string $modificacion
 */
class Ensayos extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'ensayos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fecha, inicio, fin, reserva', 'required'),
            array('empleado_id, usuario_id, reserva, tipo', 'length', 'max' => 10),
            array('costo', 'length', 'max' => 6),
            array('cantidadHoras', 'length', 'max' => 2),
            array('ip', 'length', 'max' => 15),
            array('fecha, inicio, fin, modificacion', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, empleado_id, usuario_id, fecha, inicio, fin, costo, reserva, cantidadHoras, tipo, ip, modificacion', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'usuarios' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'empleado_id' => 'Empleado',
            'usuario_id' => 'Usuario',
            'fecha' => 'Fecha',
            'inicio' => 'Inicio',
            'fin' => 'Fin',
            'costo' => 'Costo',
            'reserva' => 'Reserva',
            'cantidadHoras' => 'Cantidad Horas',
            'tipo' => 'Tipo',
            'ip' => 'Ip',
            'modificacion' => 'Modificacion',
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

        $criteria->compare('t.id', $this->id, true);
        $criteria->compare('empleado_id', $this->empleado_id, true);
        $criteria->compare('usuario_id', $this->usuario_id, true);
        $criteria->compare('t.fecha', $this->fecha, true);
        $criteria->compare('inicio', $this->inicio, true);
        $criteria->compare('fin', $this->fin, true);
        $criteria->compare('costo', $this->costo, true);
        $criteria->compare('reserva', $this->reserva, true);
        $criteria->compare('cantidadHoras', $this->cantidadHoras, true);
        $criteria->compare('t.tipo', $this->tipo, true);
        $criteria->compare('ip', $this->ip, true);
        $criteria->compare('modificacion', $this->modificacion, true);
        $criteria->with = array('usuarios');
        
        $session = new CHttpSession;
        $session->open();
        $session['ensayos'] = $criteria;
        $session['nombre_ensayos']='id ['.$this->id.'] fecha['.$this->fecha.'] inicio['.$this->inicio.'] fin['.$this->fin.'] costo['.$this->costo.']';

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Ensayos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

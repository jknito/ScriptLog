<?php

/**
 * This is the model class for table "Servicios".
 *
 * The followings are the available columns in table 'Servicios':
 * @property integer $id
 * @property string $nombre
 * @property string $tipo_servicio
 * @property string $tipo_motor
 * @property string $ambiente
 * @property string $nombre_servicio
 * @property string $ip_publica
 * @property string $ip_privada
 * @property string $puerto_publico
 * @property string $puerto_privado
 * @property string $registro
 * @property string $estado
 * @property string $comentarios
 */
class Servicios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Servicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, ip_publica, ip_privada, puerto_publico, puerto_privado, registro', 'required'),
			array('nombre', 'length', 'max'=>50),
			array('nombre_servicio, tipo_servicio, tipo_motor, ambiente', 'length', 'max'=>20),
			array('ip_publica, ip_privada', 'length', 'max'=>100),
			array('puerto_publico, puerto_privado', 'length', 'max'=>10),
			array('estado', 'length', 'max'=>1),
			array('comentarios', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, tipo_servicio, tipo_motor, ambiente, nombre_servicio, ip_publica, ip_privada, puerto_publico, puerto_privado, registro, estado, comentarios', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nombre' => 'Nombre',
			'tipo_servicio' => 'Tipo Servicio',
			'tipo_motor' => 'Tipo Motor',
			'ambiente' => 'Ambiente',
			'nombre_servicio' => 'Nombre del Servicio',
			'ip_publica' => 'Ip Publica',
			'ip_privada' => 'Ip Privada',
			'puerto_publico' => 'Puerto Publico',
			'puerto_privado' => 'Puerto Privado',
			'registro' => 'Registro',
			'estado' => 'Estado',
			'comentarios' => 'Comentarios',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo_servicio',$this->tipo_servicio,true);
		$criteria->compare('tipo_motor',$this->tipo_motor,true);
		$criteria->compare('ambiente',$this->ambiente,true);
		$criteria->compare('nombre_servicio',$this->nombre_servicio,true);
		$criteria->compare('ip_publica',$this->ip_publica,true);
		$criteria->compare('ip_privada',$this->ip_privada,true);
		$criteria->compare('puerto_publico',$this->puerto_publico,true);
		$criteria->compare('puerto_privado',$this->puerto_privado,true);
		$criteria->compare('registro',$this->registro,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('comentarios',$this->comentarios,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}

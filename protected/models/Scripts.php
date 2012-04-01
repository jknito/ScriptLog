<?php

/**
 * This is the model class for table "Scripts".
 *
 * The followings are the available columns in table 'Scripts':
 * @property integer $id
 * @property integer $id_user
 * @property string $registro
 * @property string $tipo_servicio
 * @property string $nombre_archivo
 * @property string $contenido_archivo
 * @property string $observacion
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Users $idUser
 */
class Scripts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Scripts the static model class
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
		return 'Scripts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, registro, nombre_archivo, contenido_archivo, observacion', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('tipo_servicio', 'length', 'max'=>20),
			array('nombre_archivo', 'length', 'max'=>2048),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_user, registro, tipo_servicio, nombre_archivo, contenido_archivo, observacion, estado', 'safe', 'on'=>'search'),
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
			//'user' => array(self::BELONGS_TO, 'Users', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_user' => 'Id User',
			'registro' => 'Registro',
			'tipo_servicio' => 'Tipo Servicio',
			'nombre_archivo' => 'Nombre Archivo',
			'contenido_archivo' => 'Contenido Archivo',
			'observacion' => 'Observacion',
			'estado' => 'Estado',
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
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('registro',$this->registro,true);
		$criteria->compare('tipo_servicio',$this->tipo_servicio,true);
		$criteria->compare('nombre_archivo',$this->nombre_archivo,true);
		$criteria->compare('contenido_archivo',$this->contenido_archivo,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
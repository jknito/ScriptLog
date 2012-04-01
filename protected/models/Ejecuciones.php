<?php

/**
 * This is the model class for table "Ejecuciones".
 *
 * The followings are the available columns in table 'Ejecuciones':
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_script
 * @property string $registro
 * @property string $estado
 * @property string $observacion
 */
class Ejecuciones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ejecuciones the static model class
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
		return 'Ejecuciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_script, id_servicio, registro, observacion', 'required'),
			array('id_user, id_script, id_servicio', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_user, id_script, id_servicio, registro, estado, observacion', 'safe', 'on'=>'search'),
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
			'script'=>array(self::BELONGS_TO, 'Scripts', 'id_script'),
			'servicio'=>array(self::BELONGS_TO, 'Servicios', 'id_servicio'),
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
			'id_script' => 'Id Script',
			'id_servicio' => 'Id Servicio',
			'registro' => 'Registro',
			'estado' => 'Estado',
			'observacion' => 'Observacion',
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
		$criteria->compare('id_script',$this->id_script);
		$criteria->compare('registro',$this->registro,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
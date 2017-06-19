<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $user
 * @property integer $id_teachers
 * @property integer $id_kurs
 * @property integer $udovlet_obuch
 * @property integer $udovlet_service
 * @property integer $competence_teac
 * @property integer $availability_material
 * @property integer $teacher_responses
 * @property integer $practical_focus
 * @property integer $current_nformation
 * @property integer $disclosure_training
 * @property string $date
 *
 * @property Teachers $idTeachers
 * @property Kurs $idKurs
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'id_teachers', 'id_kurs', 'udovlet_obuch', 'udovlet_service', 'competence_teac', 'availability_material', 'teacher_responses', 'practical_focus', 'current_nformation', 'disclosure_training', 'date'], 'required'],
            [['id_teachers', 'id_kurs', 'udovlet_obuch', 'udovlet_service', 'competence_teac', 'availability_material', 'teacher_responses', 'practical_focus', 'current_nformation', 'disclosure_training'], 'integer'],
            [['date'], 'safe'],
            [['user'], 'string', 'max' => 200],
            [['id_teachers'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['id_teachers' => 'id']],
            [['id_kurs'], 'exist', 'skipOnError' => true, 'targetClass' => Kurs::className(), 'targetAttribute' => ['id_kurs' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'id_teachers' => 'Id Teachers',
            'id_kurs' => 'Id Kurs',
            'udovlet_obuch' => 'Udovlet Obuch',
            'udovlet_service' => 'Udovlet Service',
            'competence_teac' => 'Competence Teac',
            'availability_material' => 'Availability Material',
            'teacher_responses' => 'Teacher Responses',
            'practical_focus' => 'Practical Focus',
            'current_nformation' => 'Current Nformation',
            'disclosure_training' => 'Disclosure Training',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTeachers()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'id_teachers']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKurs()
    {
        return $this->hasOne(Kurs::className(), ['id' => 'id_kurs']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property integer $id
 * @property string $FIO
 * @property string $mobile
 * @property string $place_of_work
 * @property string $position
 * @property string $direction
 * @property string $price_sem1
 * @property string $price_kurs1
 * @property string $email
 * @property string $city
 * @property string $note
 * @property string $date_contact
 *
 * @property Comments[] $comments
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FIO', 'mobile', 'email', 'city'], 'required'],
            [['date_contact'], 'safe'],
            [['FIO'], 'string', 'max' => 200],
            [['mobile', 'price_sem1', 'price_kurs1'], 'string', 'max' => 15],
            [['place_of_work'], 'string', 'max' => 400],
            [['position'], 'string', 'max' => 150],
            [['direction', 'note'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 50],
            [['city'], 'string', 'max' => 70],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FIO' => 'Fio',
            'mobile' => 'Mobile',
            'place_of_work' => 'Place Of Work',
            'position' => 'Position',
            'direction' => 'Direction',
            'price_sem1' => 'Price Sem1',
            'price_kurs1' => 'Price Kurs1',
            'email' => 'Email',
            'city' => 'City',
            'note' => 'Note',
            'date_contact' => 'Date Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['id_teachers' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foot".
 *
 * @property integer $id
 * @property string $adress
 * @property string $phone
 * @property string $email
 */
class Foot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }

    public static function getAll()
    {
        return Foot::find()->all();
    }
}

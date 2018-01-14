<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otzyv".
 *
 * @property integer $id
 * @property string $description
 * @property string $content
 * @property string $image
 */
class Otzyv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otzyv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'content'], 'string'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'Image',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cena".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class Cena extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cena';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    public static function getAll()
    {
        return Cena::find()->all();
    }
}

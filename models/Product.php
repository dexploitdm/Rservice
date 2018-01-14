<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property string $image
 * @property string $icon
 * @property integer $catalog_id
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['catalog_id'], 'integer'],
            [['name', 'description', 'image', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'Image',
            'icon' => 'Icon',
            'catalog_id' => 'Catalog ID',
        ];
    }

    public function getCatalogs()
    {
        return $this->hasOne(Catalog::className(), ['id' => 'category_id']);
    }
}

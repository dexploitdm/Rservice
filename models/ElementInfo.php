<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "element_info".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property string $icon
 */
class ElementInfo extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    public static function tableName()
    {
        return 'element_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['image'],'file','extensions'=> 'png, jpg'],
            [['gallery'],'file','extensions'=> 'png, jpg','maxFiles'=>4],
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
            'content' => 'Content',
            'image' => 'image',
            'gallery' => 'Слайдер категории',
        ];
    }


    public static function getAll()
    {
        return Elementinfo::find()->All();
    }

    public function upload(){
        if ($this->validate()){
            $path = 'uploads/store/' . $this->image->baseName . '.'  . $this->
                image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);// Загрузка картинки
            @unlink($path);//Удаление оригинала
            return true;
        }else{
            return false;
        }
    }

    public function uploadGallery(){
        if ($this->validate()){
            foreach ($this->gallery as $file){
                $path = 'uploads/store/' . $file->baseName . '.'  . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);// Загрузка картинки
                @unlink($path);//Удаление оригинала
            }
        }else{
            return false;
        }
    }

}

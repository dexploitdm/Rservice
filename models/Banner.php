<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $title
 */
class Banner extends \yii\db\ActiveRecord
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
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['ab','cen','usl'],'string'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'cen'=>'Расположить на странице Цены',
            'ab'=>'Расположить на странице О компании',
            'usl'=>'Расположить на странице Услуги',
        ];
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

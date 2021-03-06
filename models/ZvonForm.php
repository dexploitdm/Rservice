<?php

namespace app\models;

use Yii;
use yii\base\Model;


class ZvonForm extends Model
{
    public $name;
    public $email;
    public $phone;


    public function rules()
    {
        return [

            [['name', 'email', 'phone'], 'required'],
            [['phone'],'number'],
            ['email', 'email','message'=>'Некоректный e-mail адрес'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email'=>'E-mail',
            'phone'=>'Номер телефона',
        ];
    }

    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setCharset('utf-8')
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setTextBody($this->phone)
                ->send();

            return true;
        }
        return false;
    }
}
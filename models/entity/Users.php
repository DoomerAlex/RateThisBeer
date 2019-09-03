<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function getBeerRating()
    {
        return $this->hasMany(BeerRating::className(), ['user_id' => 'user_id']);
    }

    public function getUsersRole()
    {
        return $this->hasOne(UsersRole::className(), ['role_id' => 'role_id']);
    }
}
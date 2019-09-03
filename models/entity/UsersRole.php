<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class UsersRole extends ActiveRecord
{
    public static function tableName()
    {
        return 'users_role';
    }

    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['role_id' => 'role_id']);
    }
}
<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class BeerRating extends ActiveRecord
{
    public static function tableName()
    {
        return 'beer_rating';
    }

    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }

    public function getBeer()
    {
        return $this->hasOne(Beer::className(), ['beer_id' => 'beer_id']);
    }
}
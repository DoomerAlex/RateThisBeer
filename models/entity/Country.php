<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }

    public function getBeers()
    {
        return $this->hasMany(Beer::className(), ['country_id' => 'country_id']);
    }
}
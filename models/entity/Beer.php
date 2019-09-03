<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class Beer extends ActiveRecord
{
    public static function tableName()
    {
        return 'beer';
    }

    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'country_id']);
    }

    public function getBeerRating()
    {
        return $this->hasOne(BeerRating::className(), ['beer_id' => 'beer_id']);
    }

    public function getBeerTagConnect()
    {
        return $this->hasMany(BeerTagConnect::className(), ['beer_id' => 'beer_id']);
    }

    public function getBeerTags()
    {
        return $this->hasMany(BeerTagConnect::className(), ['beer_id' => 'beer_id'])
            ->viaTable(BeerTags::tableName(), ['beer_tag_id' => 'beer_id']);
    }
}
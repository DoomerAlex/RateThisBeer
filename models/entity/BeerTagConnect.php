<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class BeerTagConnect extends ActiveRecord
{
    public static function tableName()
    {
        return 'beer_tags_connect';
    }

    public function getBeer()
    {
        return $this->hasMany(Beer::className(), ['beer_id' => 'beer_id']);
    }

    public function getBeerTags()
    {
        return $this->hasMany(BeerTags::className(), ['beer_tag_id' => 'beer_tag_id']);
    }
}
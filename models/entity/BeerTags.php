<?php


namespace app\models\entity;


use yii\db\ActiveRecord;

class BeerTags extends ActiveRecord
{
    public static function tableName()
    {
        return 'beer_tags';
    }

    public function getBeerTagConnect()
    {
        return $this->hasMany(BeerTagConnect::className(), ['beer_tag_id' => 'beer_tag_id']);
    }

    public function getBeer()
    {
        return $this->hasMany(BeerTagConnect::className(), ['beer_tag_id' => 'beer_tag_id'])
            ->viaTable(Beer::className(), ['beer_id' => 'beer_id']);
    }
}
<?php
namespace common\models;

use yii\db\ActiveRecord;

class Discount extends ActiveRecord
{
//    public $name;
//    public $price;
//    public $imageUrl;
//    public $description;

    public static function tableName()
    {
        return "{{discounts}}";
    }
}
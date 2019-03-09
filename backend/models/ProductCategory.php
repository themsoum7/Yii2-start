<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "productcategory".
 *
 * @property int $categoryID
 * @property string $name
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'categoryID' => 'Category ID',
            'name' => 'Name',
        ];
    }
}

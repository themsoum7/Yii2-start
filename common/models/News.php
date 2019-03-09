<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $categoryID
 * @property string $title
 * @property string $content
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['title', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'categoryID' => 'Category ID',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }
}

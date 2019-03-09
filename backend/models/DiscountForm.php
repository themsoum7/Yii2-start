<?php

namespace backend\models;

class DiscountForm extends \yii\base\Model
{
    public $productID;
    public $title;
    public $imageFile;

    public function rules()
    {
        return [
            [['productID'], 'required', 'message' => 'Поле обов\'язкове'],
            ['title', 'default'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    public function upload()
    {
        if ($this->validate("productID, title")) {
            $this->imageFile->saveAs($this->imagePath());
            return true;
        } else {
            return false;
        }
    }

    public function imagePath()
    {
        return '../../uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
    }
}

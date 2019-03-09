<?php

namespace backend\models;

class ProductForm extends \yii\base\Model
{
    public $name;
    public $price;
    public $description;
    public $imageFile;

    public function rules()
    {
        return [
            [['name', 'price'], 'required', 'message' => 'Поле обов\'язкове'],
            ['price', 'double'],
            ['description', 'default'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
        // return ['name', 'required'], ['price', 'required'];
    }

    public function upload()
    {
        if ($this->validate("name, price, description")) {
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

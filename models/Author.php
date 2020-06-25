<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Author extends ActiveRecord {
    public static function tableName()
    {
        return '{{author}}';
    }

    public function getBooks(){
        return $this->hasMany(Books::className(), ['author_id' => 'id']);
    }
}

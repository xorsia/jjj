<?php

namespace app\models;

use yii\db\ActiveRecord;


class Books extends ActiveRecord
{
    public static function tableName()
    {
        return '{{books}}';
    }

    public function rules()
    {
        return [
            // ...
            'name' => [['name'], 'string', 'max' => 60],
            'author_id' => [['author_id'], 'integer', 'max' => 60],
        ];
    }
}

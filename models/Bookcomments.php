<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bookcomments".
 *
 * @property int $id
 * @property int $book_id
 * @property string $admin_name
 * @property string $text
 * @property string $date
 */
class Bookcomments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookcomments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_id', 'admin_name', 'text'], 'required'],
            [['book_id'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['admin_name'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => 'Book ID',
            'admin_name' => 'Admin Name',
            'text' => 'Ваш Отзыв',
            'date' => 'Date',
        ];
    }
}

<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "shops".
 *
 * @property int $id
 * @property string $title
 */
class Shop extends ActiveRecord
{

    public static function tableName()
    {
        return 'shops';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 40],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rollings".
 *
 * @property integer $id
 * @property string $name
 */
class Rollings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rollings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'name' => 'Тело качения',
        ];
    }
}

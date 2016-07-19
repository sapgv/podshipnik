<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "bearings".
 *
 * @property integer $id
 * @property integer $name
 * @property double $inner_d
 * @property double $outer_d
 * @property double $B
 * @property string $prefix
 * @property string $suffix
 */
class Bearings extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bearings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'inner_d', 'outer_d', 'B', 'weight', 'brand', 'rolling', 'row', 'loading'], 'required'],
            [['name','brand'], 'string'],
            [['inner_d', 'outer_d', 'B'], 'number'],
            [['prefix', 'suffix'], 'string', 'max' => 255],

            [['name', 'description', 'inner_d', 'outer_d', 'B', 'prefix', 'suffix', 'weight', 'brand', 'rolling', 'row', 'loading'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'description' => 'Описание',
            'inner_d' => 'Диаметр внутренний',
            'outer_d' => 'Димаетр наружный',
            'B' => 'Ширина',
            'prefix' => 'Префикс',
            'suffix' => 'Суффикс',
            'weight' => 'Вес',
            'brand' => 'Производитель',
            'rolling' => 'Тело качения',
            'row' => 'Количество рядов',
            'loading' => 'Нагрузка',
            'self_install' => 'Самоустанавливающийся',
        ];
    }
}

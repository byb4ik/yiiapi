<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "currency".
 *
 * @property int $id
 * @property string $name
 * @property string $rate
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'rate'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'rate' => 'Rate',
        ];
    }

    public function importValute()
    {
        $result = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp');
        foreach ($result->Valute as $value) {
            $newvalute = new Currency();
            $newvalute->name = strval($value->Name);
            $newvalute->rate = strval($value->Value);
            $newvalute->save();
        }

        return true;
    }

    public function updateValute()
    {
        $result = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp');
        foreach ($result->Valute as $value) {
            $valute = Currency::find()->where(['name' => $value->Name])->one();
            $valute->rate = strval($value->Value);
            $valute->save();
        }

        return true;
    }
}

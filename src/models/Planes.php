<?php

namespace gngstyle\finalproject\models;

use Yii;

/**
 * This is the model class for table "planes".
 *
 * @property int $plane_id
 * @property int $countries_country_id
 * @property string|null $plane_model
 * @property int $plane_adet
 *
 * @property Countries $countriesCountry
 */
class Planes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countries_country_id', 'plane_adet'], 'required'],
            [['countries_country_id', 'plane_adet'], 'integer'],
            [['plane_model'], 'string', 'max' => 255],
            [['countries_country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['countries_country_id' => 'country_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'plane_id' => 'Kayit ID',
            'countries_country_id' => 'Ait Oldugu Ulke ID',
            'plane_model' => 'Ucagin Modeli',
            'plane_adet' => 'Ucagin Adedi',
        ];
    }

    /**
     * Gets query for [[CountriesCountry]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountriesCountry()
    {
        return $this->hasOne(Countries::className(), ['country_id' => 'countries_country_id']);
    }
}

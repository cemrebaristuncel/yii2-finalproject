<?php

namespace gngstyle\finalproject\models;

use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property int $country_id
 * @property string $country_adi
 * @property int|null $abGirisYili
 * @property string|null $paraBirimi
 *
 * @property Planes[] $planes
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_adi'], 'required'],
            [['abGirisYili'], 'integer'],
            [['country_adi', 'paraBirimi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Ulke ID',
            'country_adi' => 'Ulke Adi',
            'abGirisYili' => 'AB Giris Yili',
            'paraBirimi' => 'Para Birimi',
        ];
    }

    /**
     * Gets query for [[Planes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Planes::className(), ['countries_country_id' => 'country_id']);
    }
}

<?php

use yii\db\Migration;


class m210115_185739_envanter extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('planes', [
            'plane_id' => $this->primaryKey(),
            'countries_country_id' => $this->integer()->notNull(),
            'plane_model' => $this->string(),
            'plane_adet' => $this->integer()->notNull(),
        ]);

        //Departmanlar
        $this->createTable('countries', [
            'country_id' => $this->primaryKey(),
            'country_adi' => $this->string()->notNull(),
            'abGirisYili' =>  $this->integer(),
            'paraBirimi' =>  $this->string(),
        ]);



        $this->createIndex(
            'idx-planes-countries_country_id',
            'planes',
            'countries_country_id'
        );

        $this->addForeignKey(
            'fk-planes-countries_country_id',
            'planes',
            'countries_country_id',
            'countries',
            'country_id',
            'CASCADE'
        );



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {


        $this->dropForeignKey(
            'fk-planes-countries_country_id',
            'planes'
        );

        $this->dropIndex(
            'idx-planes-countries_country_id',
            'planes'
        );

        $this->dropTable('planes');
        $this->dropTable('countries');


    }


}
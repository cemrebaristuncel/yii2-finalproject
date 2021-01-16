<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel gngstyle\finalproject\models\CountriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ulkeler';
$this->params['breadcrumbs'][] = $this->title;
?>
<body style="background-image: url(https://i.imgur.com/ipHTQ6R.jpg);background-repeat: no-repeat;background-position: center;">

</body>
<div class="countries-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ulke Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country_id',
            'country_adi',
            'abGirisYili',
            'paraBirimi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

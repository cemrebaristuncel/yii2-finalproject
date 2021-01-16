<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel gngstyle\finalproject\models\PlanesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ucaklar';
$this->params['breadcrumbs'][] = $this->title;
?>
<body style="background-image: url(https://i.imgur.com/ipHTQ6R.jpg);background-repeat: no-repeat;background-position: center;">

</body>
<div class="planes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ucak Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'countries_country_id',
            'plane_model',
            'plane_adet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

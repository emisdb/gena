<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcademProduct */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Academ Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academ-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'base',
            'id_out:ntext',
            'name:ntext',
            'number',
            'sum',
        ],
    ]) ?>

</div>

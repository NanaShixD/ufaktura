<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use app\models\InvoicesSearch;


/* @var $this yii\web\View */
/* @var $searchModel app\models\InvoicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invoices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoices-index">

    <h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(['method'=>'get', 'action' => '?r=invoices/index']); ?>
    <?= $form->field($searchModel, 'search') ?>
    <div class="form-group">
        <?= Html::submitButton('Szukaj', ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Pokaż wszystkich', ['index'], ['class' => 'btn btn-info']) ?>
    &nbsp;
    <?= Html::a('Nowa faktura', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>
    <br/>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'ivc_number',
            'ivcCln.cln_name_1',
            'ivc_date_create',
             'ivc_name',
             'ivc_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\db\ActiveRecord;
use app\models\Words;
use yii\web\Controller;
use yii\data\Pagination;

$this->title = 'Library';
// $this->params['breadcrumbs'][] = $this->title;
?>

<h1>Words</h1>
<ul>
<?php foreach ($word as $words): ?>
    <li>
        <?= Html::encode("{$words->word} ({$words->trans})") ?>:
        <?= $words->id ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

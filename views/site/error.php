<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center"></div>
        <div class="section-title text-center">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

    </div>
</div>

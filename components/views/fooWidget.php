<?php

use yii\helpers\Html;


?>

<?php foreach($model as $foo): ?>
<h4 class="widget-title">Наш адрес</h4>
<address>
    <strong><?= $foo->adress; ?></strong><br>
    <abbr title="Phone">P:</abbr><?= $foo->phone; ?><br>
    <abbr title="Email">E:</abbr> <a href="mailto:#"><?= $foo->email; ?></a>
</address>
<?php endforeach; ?>



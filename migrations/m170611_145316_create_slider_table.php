<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 */
class m170611_145316_create_slider_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'title'=>$this->text(),
            'content'=>$this->text(),
            'image'=>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('slider');
    }
}

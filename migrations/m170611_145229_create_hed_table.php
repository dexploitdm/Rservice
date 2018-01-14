<?php

use yii\db\Migration;

/**
 * Handles the creation of table `hed`.
 */
class m170611_145229_create_hed_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('hed', [
            'id' => $this->primaryKey(),
            'phone'=>$this->string(),
            'email'=>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('hed');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot`.
 */
class m170611_145236_create_foot_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('foot', [
            'id' => $this->primaryKey(),
            'adress'=>$this->string(),
            'phone'=>$this->string(),
            'email'=>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('foot');
    }
}

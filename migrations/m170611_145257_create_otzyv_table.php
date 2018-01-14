<?php

use yii\db\Migration;

/**
 * Handles the creation of table `otzyv`.
 */
class m170611_145257_create_otzyv_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('otzyv', [
            'id' => $this->primaryKey(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'image'=>$this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('otzyv');
    }
}

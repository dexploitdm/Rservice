<?php

use yii\db\Migration;

/**
 * Handles the creation of table `info`.
 */
class m170611_145307_create_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('info', [
            'id' => $this->primaryKey(),
            'title'=>$this->text(),
            'description'=>$this->text(),
            'name'=>$this->text(),
            'content'=>$this->text(),
            'image'=>$this->string(),
            'banner'=>$this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('info');
    }
}

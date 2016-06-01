<?php

use yii\db\Migration;

/**
 * Handles the creation for table `post_table`.
 */
class m160601_135929_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'post' => 'text',
            'user_id' => 'int',
        ]);
        $this->addForeignKey('post_user_id','post', 'user_id','user','id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('post');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `post`.
 */
class m160601_142054_drop_post extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('post');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
        ]);
    }
}

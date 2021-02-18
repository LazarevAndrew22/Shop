<?php

use yii\db\Expression;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m210208_225630_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(100)->notNull(),
            'lastName' => $this->string(100)->notNull(),
            'email' => $this->string(255)->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(false),
            'created_at' => $this->timestamp()->notNull()->defaultValue(new Expression('CURRENT_TIMESTAMP')),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}

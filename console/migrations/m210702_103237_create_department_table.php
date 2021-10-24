<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%department}}`.
 */
class m210702_103237_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%department}}', [
            'id' => $this->primaryKey(),
            'title_kz' => $this->string(),
            'title_ru' => $this->string(),
            'content_kz' => $this->text(),
            'content_ru' => $this->text(),
            'group' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%department}}');
    }
}

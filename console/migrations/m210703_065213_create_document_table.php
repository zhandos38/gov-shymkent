<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 */
class m210703_065213_create_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'title_kz' => $this->string(),
            'title_ru' => $this->string(),
            'file' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%document}}');
    }
}

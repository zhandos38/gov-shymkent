<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%post}}`.
 */
class m210505_150319_add_lang_columns_to_post_table extends Migration
{
    public $tableName = '{{%post}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn($this->tableName, 'title', 'title_ru');
        $this->addColumn($this->tableName, 'title_kz', $this->string());

        $this->renameColumn($this->tableName, 'content', 'content_ru');
        $this->addColumn($this->tableName, 'content_kz', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210505_150319_add_lang_columns_to_post_table can not be reverted";
    }
}

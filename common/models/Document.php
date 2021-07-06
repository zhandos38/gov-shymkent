<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property string|null $title_kz
 * @property string|null $title_ru
 * @property string|null $file
 */
class Document extends \yii\db\ActiveRecord
{
    public $tempFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_kz', 'title_ru', 'file'], 'string', 'max' => 255],

            [['tempFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_kz' => 'Наименование KZ',
            'title_ru' => 'Наименование RU',
            'file' => 'Файл',
        ];
    }

    public function getTitle()
    {
        return Yii::$app->language === 'ru' ? $this->title_ru : $this->title_kz;
    }

    public function getFile()
    {
        return Yii::$app->params['staticDomain'] . '/document/' . $this->file;
    }

    public function upload()
    {
        if ($this->validate()) {
            $folderPath = Yii::getAlias('@static') . '/document';
            if (!file_exists($folderPath) && !mkdir($folderPath, 0777, true) && !is_dir($folderPath)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $folderPath));
            }

            if ($this->tempFile) {
                $filePath = $folderPath . '/' . $this->tempFile->baseName . '.' . $this->tempFile->extension;
                $this->tempFile->saveAs($filePath);
            }

            return true;
        }

        return false;
    }
}

<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $title_kz
 * @property string|null $title_ru
 * @property string|null $content_kz
 * @property string|null $content_ru
 * @property integer|null $group
 */
class Department extends \yii\db\ActiveRecord
{
    const GROUP_CLINIC = 0;
    const GROUP_DIAGNOSTIC = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['group', 'integer'],
            [['content_kz', 'content_ru'], 'string'],
            [['title_kz', 'title_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_kz' => 'Наименование Kz',
            'title_ru' => 'Наименование Ru',
            'content_kz' => 'Контент Kz',
            'content_ru' => 'Контент Ru',
            'group' => 'Группа'
        ];
    }

    public static function getGroupLabels()
    {
        return [
            self::GROUP_CLINIC => Yii::t('site', 'Клинические отделения'),
            self::GROUP_DIAGNOSTIC => Yii::t('site', 'Отделение диагностики'),
        ];
    }

    public function getGroupLabel()
    {
        return ArrayHelper::getValue(self::getGroupLabels(), $this->group);
    }

    public function getTitle()
    {
        return Yii::$app->language === 'ru' ? $this->title_ru : $this->title_kz;
    }

    public function getContent()
    {
        return Yii::$app->language === 'ru' ? $this->content_ru : $this->content_kz;
    }
}

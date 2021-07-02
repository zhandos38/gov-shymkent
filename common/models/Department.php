<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property int|null $department_group_id
 * @property string|null $name
 * @property string|null $content
 *
 * @property DepartmentGroup $departmentGroup
 */
class Department extends \yii\db\ActiveRecord
{
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
            [['department_group_id'], 'integer'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['department_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => DepartmentGroup::className(), 'targetAttribute' => ['department_group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_group_id' => 'Department Group ID',
            'name' => 'Name',
            'content' => 'Content',
        ];
    }

    /**
     * Gets query for [[DepartmentGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmentGroup()
    {
        return $this->hasOne(DepartmentGroup::className(), ['id' => 'department_group_id']);
    }
}

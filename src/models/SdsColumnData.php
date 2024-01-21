<?php

namespace umbalaconmeogia\simpledatasystem\models;

use Yii;

/**
 * This is the model class for table "sds_column_data".
 *
 * @property int $id
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property int|null $object_data_id
 * @property string $column_definition_code
 * @property string|null $value
 */
class SdsColumnData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sds_column_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'object_data_id'], 'integer'],
            [['column_definition_code'], 'required'],
            [['column_definition_code', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('simpledatasystem', 'ID'),
            'created_at' => Yii::t('simpledatasystem', 'Created At'),
            'created_by' => Yii::t('simpledatasystem', 'Created By'),
            'updated_at' => Yii::t('simpledatasystem', 'Updated At'),
            'updated_by' => Yii::t('simpledatasystem', 'Updated By'),
            'object_data_id' => Yii::t('simpledatasystem', 'Object Data ID'),
            'column_definition_code' => Yii::t('simpledatasystem', 'Column Definition Code'),
            'value' => Yii::t('simpledatasystem', 'Value'),
        ];
    }
}

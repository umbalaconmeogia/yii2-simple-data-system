<?php

namespace umbalaconmeogia\simpledatasystem\models;

use Yii;

/**
 * This is the model class for table "sds_column_definition".
 *
 * @property int $id
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property string $object_definition_code
 * @property string $name
 * @property string $code
 * @property string $type
 * @property string|null $description
 * @property int|null $i18n
 * @property string|null $value_format
 */
class SdsColumnDefinition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sds_column_definition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'i18n'], 'integer'],
            [['object_definition_code', 'name', 'code', 'type'], 'required'],
            [['description'], 'string'],
            [['object_definition_code', 'name', 'code', 'type', 'value_format'], 'string', 'max' => 255],
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
            'object_definition_code' => Yii::t('simpledatasystem', 'Object Definition Code'),
            'name' => Yii::t('simpledatasystem', 'Name'),
            'code' => Yii::t('simpledatasystem', 'Code'),
            'type' => Yii::t('simpledatasystem', 'Type'),
            'description' => Yii::t('simpledatasystem', 'Description'),
            'i18n' => Yii::t('simpledatasystem', 'I18n'),
            'value_format' => Yii::t('simpledatasystem', 'Value Format'),
        ];
    }
}

<?php

namespace umbalaconmeogia\simpledatasystem\models;

use Yii;

/**
 * This is the model class for table "sds_object_data".
 *
 * @property int $id
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property string $object_definition_code
 */
class SdsObjectData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sds_object_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['object_definition_code'], 'required'],
            [['object_definition_code'], 'string', 'max' => 255],
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
        ];
    }
}

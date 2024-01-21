<?php

namespace umbalaconmeogia\simpledatasystem\models;

use Yii;

/**
 * This is the model class for table "sds_object_definition".
 *
 * @property int $id
 * @property int|null $created_at
 * @property int|null $created_by
 * @property int|null $updated_at
 * @property int|null $updated_by
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property int|null $i18n
 */
class SdsObjectDefinition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sds_object_definition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'i18n'], 'integer'],
            [['name', 'code'], 'required'],
            [['description'], 'string'],
            [['name', 'code'], 'string', 'max' => 255],
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
            'name' => Yii::t('simpledatasystem', 'Name'),
            'code' => Yii::t('simpledatasystem', 'Code'),
            'description' => Yii::t('simpledatasystem', 'Description'),
            'i18n' => Yii::t('simpledatasystem', 'I18n'),
        ];
    }
}

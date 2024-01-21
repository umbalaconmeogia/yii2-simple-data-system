<?php
namespace umbalaconmeogia\simpledatasystem\migrations;

/**
 * Initializes simple data system tables.
 *
 * @author Tran Trung Thanh <umbalaconmeogia@gmail.com>
 */
class m230120_193700_sysple_data_system_init extends \yii\db\Migration
{
    private $tableObjectDefinition = 'sds_object_definition';

    private $tableColumnDefinition = 'sds_column_definition';

    private $tableObjectData = 'sds_object_data';

    private $tableColumnData = 'sds_column_data';

    private function createTableEx($tableName, $options, $tableOptions)
    {
        $optionsEx = array_merge(
            [
                'id' => $this->primaryKey(),
                'created_at' => $this->integer(),
                'created_by' => $this->integer(),
                'updated_at' => $this->integer(),
                'updated_by' => $this->integer(),
            ],
            $options,
        );
        $this->createTable($tableName, $optionsEx, $tableOptions);
    }
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTableEx($this->tableObjectDefinition, [
            'name' => $this->string()->notNull(),
            'code' => $this->string()->notNull(),
            'description' => $this->text(),
            'i18n' => $this->tinyInteger()->defaultValue(0),
        ], $tableOptions);

        $this->createTableEx($this->tableColumnDefinition, [
            'object_definition_code' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'code' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'description' => $this->text(),
            'i18n' => $this->tinyInteger()->defaultValue(0),
            'value_format' => $this->string(),
        ], $tableOptions);

        $this->createTableEx($this->tableObjectData, [
            'object_definition_code' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTableEx($this->tableColumnData, [
            'object_data_id' => $this->integer(),
            'column_definition_code' => $this->string()->notNull(),
            'value' => $this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable($this->tableColumnData);
        $this->dropTable($this->tableObjectData);
        $this->dropTable($this->tableColumnDefinition);
        $this->dropTable($this->tableObjectDefinition);
    }
}

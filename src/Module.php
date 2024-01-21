<?php
namespace umbalaconmeogia\simpledatasystem;

use Yii;
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    /**
     * Message categories.
     * @var string[]
     */
    public $messageCategories = ['app'];

    /**
     * Message category for translation of this module.
     * @var string
     */
    public $moduleCategory = 'simpledatasystem';

    /**
     * Add configuration for command line.
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->registerTranslations();

        // Config for command line.
        if (Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'umbalaconmeogia\simpledatasystem\commands';
        }
    }

    public function behaviors()
    {
        $behaviors = [];
        if (! Yii::$app instanceof \yii\console\Application) {
            $behaviors = [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['set-language'],
                            'roles' => ['?'],
                        ],
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ];
        }

        return $behaviors;
    }

    /**
     * Registeration translation files.
     */
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['simpledatasystem'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en',
            'forceTranslation' => true,
            'basePath' => '@umbalaconmeogia/simpledatasystem/messages',
            'fileMap' => [
                'simpledatasystem' => 'simpledatasystem.php',
            ],
        ];
    }
}
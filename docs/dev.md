# yii2-simple-data-system dev note

## Add library to devmyext

* In devmyext's yii2/composer.json, add into "repositories"
  ```json
    {
        "type": "path",
        "url": "../../../yii2-simple-data-system",
        "symlink": true
    },
  ```
* Run
  ```shell
    composer require umbalaconmeogia/yii2-simple-data-system
  ```
* Add to common/config/main.php
  ```php
      'modules' => [
        'simpledatasystem' => [
            'class' => 'umbalaconmeogia\simpledatasystem\Module',
        ],
        // Other module settings.
    ],
  ```
* Define translation
  This setting does not need for using this module. But need when use gii to generate code for this module itself.
  ```php
    'components' => [
        'i18n' => [
            'translations' => [
                'simpledatasystem' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en',
                    'forceTranslation' => true,
                    'basePath' => '@umbalaconmeogia/simpledatasystem/messages',
                    'fileMap' => [
                        'simpledatasystem' => 'simpledatasystem.php',
                    ],
                ],
                // Other translation settings.
            ],
        ],
    ],
  ```
## Run migration

To run with namespace (the migration class should decrlare namespace)
```shell
yii migrate --migrationNamespaces=umbalaconmeogia\\simpledatasystem\\migrations
```

To run without namespace (the migration class should not decrlare namespace)
```shell
yii migrate/down --migrationPath=@vendor/umbalaconmeogia/yii2-simple-data-system/src/migrations
```

## Start local web server

```shell
./yii serve --docroot="frontend/web/"
```
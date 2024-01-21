# Yii2-Simple-Data-System design

## Database definition

### ERD

```plantuml
' avoid problems with angled crows feet
skinparam linetype ortho

entity "sds_object_definition" as obj_def {
    * id : number <<generated>>
    * name : string
    * code : string
    --
    i18n : tinyint
    description : text
}

entity "sds_column_definition" as col_def {
    * id : number <<generated>>
    * object_definition_code: string
    * name : string
    * code : string
    * type : string
    --
    i18n : tinyint
    description : text
    value_format : string
}

entity "sds_object_data" as obj_data {
    * id : number <<generated>>
    * object_definition_code: string
}

entity "sds_column_data" as col_data {
    * id : number <<generated>>
    * object_data_id : nunber <<FK>>
    * column_definition_code : string
    --
    value : string
}

obj_def ||..|{ col_def
obj_def ||..|{ obj_data
col_def ||..|{ col_data
obj_data ||..|{ col_data
```

### Table "sds_object_definition"

|column|description|
|----|----|
|id|Record id|
|name|Name of the object. Just for displaying in management page|
|code|To be used in functions and development|
|description|Description about the object|
|i18n|If true, name should be display using Yii::t() function|

### Table "sds_column_definition"

|column|description|
|----|----|
|id|Record id|
|sds_object_code|To be used in functions and development|
|name|Name of the column. Just for displaying in management page|
|code|To be used in functions and development|
|type|To be used in functions and development|
|description|Description about the column|
|i18n|If true, name should be display using Yii::t() function|

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cathedra".
 *
 * @property integer $id
 * @property integer $id_department
 * @property string $name
 */
class Cathedra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cathedra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_department'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_department' => Yii::t('app', 'Id Department'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}

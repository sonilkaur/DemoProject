<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "makes".
 *
 * @property int $id
 * @property string $name
 *
 * @property MakeYears[] $makeYears
 */
class Makes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'makes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[MakeYears]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMakeYears()
    {
        return $this->hasMany(MakeYears::className(), ['make_id' => 'id']);
    }
}

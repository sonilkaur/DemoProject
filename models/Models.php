<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "models".
 *
 * @property int $id
 * @property string $name
 * @property int|null $makeyear_id
 *
 * @property MakeYears $makeyear
 */
class Models extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'models';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['makeyear_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name', 'makeyear_id'], 'unique', 'targetAttribute' => ['name', 'makeyear_id']],
            [['makeyear_id'], 'exist', 'skipOnError' => true, 'targetClass' => MakeYears::className(), 'targetAttribute' => ['makeyear_id' => 'id']],
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
            'makeyear_id' => 'Makeyear ID',
        ];
    }

    /**
     * Gets query for [[Makeyear]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMakeyear()
    {
        return $this->hasOne(MakeYears::className(), ['id' => 'makeyear_id']);
    }
}

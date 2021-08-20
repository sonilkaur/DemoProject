<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "make_years".
 *
 * @property int $id
 * @property int $year
 * @property int|null $make_id
 *
 * @property Makes $make
 * @property Models[] $models
 */
class MakeYears extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'make_years';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'required'],
            [['year', 'make_id'], 'integer'],
            [['year', 'make_id'], 'unique', 'targetAttribute' => ['year', 'make_id']],
            [['make_id'], 'exist', 'skipOnError' => true, 'targetClass' => Makes::className(), 'targetAttribute' => ['make_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
            'make_id' => 'Make ID',
        ];
    }

    /**
     * Gets query for [[Make]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMake()
    {
        return $this->hasOne(Makes::className(), ['id' => 'make_id']);
    }

    /**
     * Gets query for [[Models]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModels()
    {
        return $this->hasMany(Models::className(), ['makeyear_id' => 'id']);
    }
}

<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class
 *
 * @property string $id
 */
class CsvForm extends Model
{
    public $id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['id'], 'required']
        ];
    }
}

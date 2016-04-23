<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $videoid
 * @property string $title
 * @property string $videodesc
 * @property string $url
 * @property integer $catid
 * @property string $thumb
 * @property string $price
 * @property integer $uploadate
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'url', 'catid', 'thumb', 'uploadate'], 'required'],
            [['videodesc'], 'string'],
            [['catid', 'uploadate'], 'integer'],
            [['price'], 'number'],
            [['title'], 'string', 'max' => 50],
            [['url', 'thumb'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'videoid' => '视频id',
            'title' => '标题',
            'videodesc' => '视频描述',
            'url' => 'Url',
            'catid' => 'Catid',
            'thumb' => 'Thumb',
            'price' => 'Price',
            'uploadate' => 'Uploadate',
        ];
    }
}

<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Userprofile extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    public static function getUserprofile()
	{
		$userprofile = Userprofile::findOne(1);
		return $userprofile;
	}
	
}

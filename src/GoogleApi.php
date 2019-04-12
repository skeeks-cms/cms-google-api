<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\cms\googleApi;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class GoogleApi extends \skeeks\yii2\googleApi\GoogleApi
{

    /**
     *
     */
    public function init()
    {
        if (\Yii::$app->googleApiSettings->key) {
            $this->key = \Yii::$app->googleApiSettings->key;
        }

        return parent::init();
    }
}
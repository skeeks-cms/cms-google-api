<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\cms\googleApi;

use skeeks\cms\base\Component;
use yii\helpers\ArrayHelper;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class GoogleApiSettings extends Component {

    /**
     * @var string
     */
    public $key = '';

    /**
     * Можно задать название и описание компонента
     * @return array
     */
    static public function descriptorConfig()
    {
        return array_merge(parent::descriptorConfig(), [
            'name' => 'Google Api',
        ]);
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            [
                [
                    'key',
                ],
                'string',
            ],

        ]);
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return ArrayHelper::merge(parent::attributeLabels(), [
            'key'    => "Google Api Key",
        ]);
    }

    /**
     * @return array
     */
    public function attributeHints()
    {
        return ArrayHelper::merge(parent::attributeHints(), [
            'key'                => "https://console.developers.google.com/apis/credentials?project=api-project-1091876680684",
        ]);
    }

    /**
     * @return array
     */
    public function getConfigFormFields()
    {
        return [
            'key',
        ];
    }
}
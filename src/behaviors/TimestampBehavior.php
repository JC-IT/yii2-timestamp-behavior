<?php

namespace JCIT\behaviors;

use yii\behaviors\TimestampBehavior as YiiTimestampBehavior;
use yii\db\BaseActiveRecord;
use yii\db\Expression;

/**
 * Class TimestampBehavior
 * @package JCIT\behaviors;
 */
class TimestampBehavior extends YiiTimestampBehavior
{
    /**
     * @var string
     */
    public $deletedAtAttribute = 'deleted_at';

    public function init()
    {
        parent::init();

        $this->value = $this->value ?? new Expression('NOW()');

        if (empty($this->attributes[BaseActiveRecord::EVENT_BEFORE_DELETE])) {
            $this->attributes[BaseActiveRecord::EVENT_BEFORE_DELETE] = $this->deletedAtAttribute;
        }
    }
}

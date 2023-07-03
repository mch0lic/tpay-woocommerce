<?php
namespace tpaySDK\Model\Fields\Address;

use tpaySDK\Model\Fields\Field;

class IsInvoice extends Field
{
    protected $name = __CLASS__;

    protected $type = self::BOOL;

    protected $value = true;

}

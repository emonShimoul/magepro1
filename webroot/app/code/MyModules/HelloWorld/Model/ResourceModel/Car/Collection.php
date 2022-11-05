<?php

namespace MyModules\HelloWorld\Model\ResourceModel\Car;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MyModules\HelloWorld\Model\Car as Model;
use MyModules\HelloWorld\Model\ResourceModel\Car as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}

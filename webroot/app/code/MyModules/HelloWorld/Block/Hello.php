<?php

namespace MyModules\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use MyModules\HelloWorld\Model\ResourceModel\Car\Collection;

class Hello extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllCars() {
        return $this->collection;
    }

    public function getAddCarPostUrl() {
        return $this->getUrl('helloworld/car/add');
    }
}

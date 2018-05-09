<?php

namespace Mastering\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * Hello constructor.
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data=[]
    ){
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context,$data);
    }

    /**
     * @return collection
     */
    public function getItems(){
        $item=$this->collectionFactory->create()->getItems();
        return $item;
    }
    /*commit on sprint    
    /*commit from pf0sprint into master
    /* commit 2 into sprint0
    /* test commit
}
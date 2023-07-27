<?php
/*
 * @author <Yoan And Bertrand> yoan.matchrpro@gmail.com
 * @copyright Copyright (c) 2023  Materiel-chr-pro (https://materiel-chr-pro.com)
 *
 */

namespace Mcp\Practice\Block;


use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;

class Topsell extends Template
{
    private ProductCollectionFactory $productCollectionFactory;
    public function __construct(Template\Context $context, ProductCollectionFactory $productCollectionFactory,  array $data = [])
    {

        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;

    }

    public function getTopSellProduct()
    {
        $pdtCollection = $this->_productCollectionFactory->create();

        return $pdtCollection->addFieldToSelect('name')
            ->addFieldToFilter('top_sell', ['eq' => 1]);
//         return $pdtCollection->addAttributeToFilter('top_sell', ['eq' => 'yes']);
    }
}

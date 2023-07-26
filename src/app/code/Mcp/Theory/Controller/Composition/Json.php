<?php
/*
 * @author <Yoan And Bertrand> yoan.matchrpro@gmail.com
 * @copyright Copyright (c) 2023  Materiel-chr-pro (https://materiel-chr-pro.com)
 *
 */

namespace Mcp\Theory\Controller\Composition;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Json implements HttpGetActionInterface
{
    public function __construct(protected ResultFactory $resultFactory)
    {
    }

    public function execute(): ResultInterface
    {
        $json = json_encode(['method' => __METHOD__]);

        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setJsonData($json);
    }
}


<?php
/*
 * @author <Yoan And Bertrand> yoan.matchrpro@gmail.com
 * @copyright Copyright (c) 2023  Materiel-chr-pro (https://materiel-chr-pro.com)
 *
 */

namespace Mcp\Practice\Controller\Topsell;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Index implements HttpGetActionInterface
{
    public function __construct(protected ResultFactory $resultFactory)
    {
    }

    public function execute(): ResultInterface
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

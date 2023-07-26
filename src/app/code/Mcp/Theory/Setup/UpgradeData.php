<?php
/*
 * @author <Yoan And Bertrand> yoan.matchrpro@gmail.com
 * @copyright Copyright (c) 2023  Materiel-chr-pro (https://materiel-chr-pro.com)
 *
 */

namespace Mcp\Theory\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{

    /**
     * @inheritDoc
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        echo __METHOD__.PHP_EOL;

    }
}

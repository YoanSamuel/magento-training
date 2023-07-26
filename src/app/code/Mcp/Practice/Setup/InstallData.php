<?php
/*
 * @author <Yoan And Bertrand> yoan.matchrpro@gmail.com
 * @copyright Copyright (c) 2023  Materiel-chr-pro (https://materiel-chr-pro.com)
 *
 */

namespace Mcp\Practice\Setup;

use Magento\Catalog\Api\Data\ProductAttributeInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean;
use Magento\Framework\Validator\ValidateException;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    public function __construct(private EavSetupFactory $eavSetupFactory)
    {
    }

    /**
     * @throws LocalizedException
     * @throws ValidateException
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context) : void
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $attributeCode = 'top_sell';

        $entityTypeCode = ProductAttributeInterface::ENTITY_TYPE_CODE;
        $setId = $eavSetup->getDefaultAttributeSetId($entityTypeCode);
        $groupId = $eavSetup->getDefaultAttributeGroupId($entityTypeCode, $setId);
        $groupName = $eavSetup->getAttributeGroup($entityTypeCode, $setId, $groupId, 'attribute_group_name');


            $eavSetup->addAttribute($entityTypeCode, $attributeCode, [
                'type' => 'int',
                'sort_order' => 10,
                'user_defined' => 1, // Allow to manage attribute from backend, 0 is system attribute VERY IMPORTANT
                'label' => 'Top sell',
                'input' => 'boolean',
                'source' => Boolean::class,
                'default' => 0,
                'filterable' => 1, // Can be used as a filter axis on side layout navigation
                'visible_on_front' => 1, // Displayed in frontend product attribute list
                'used_in_product_listing' => 1, // Available in frontend product listing page
                'is_used_in_grid' => 1, // For admin grid
                'is_filterable_in_grid' => 1,
                'is_visible_in_grid' => 1,
                'group' => $groupName, //Added to every attribute set in default attribute group
            ]);
    }






}

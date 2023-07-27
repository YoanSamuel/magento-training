<?php
/*
 * @author <Yoan And Bertrand> yoan.matchrpro@gmail.com
 * @copyright Copyright (c) 2023  Materiel-chr-pro (https://materiel-chr-pro.com)
 *
 */

namespace Mcp\Theory\Block;

use Magento\Framework\View\Element\Template;

class MyBlock extends Template
{

    public function __construct(Template\Context $context, array $data = [])
    {
        $data['my_data'] = 'test';
        parent::__construct($context, $data);
    }

    public function getTemplateData(): string
    {
        return 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum cupiditate deserunt dolor dolorem dolores eaque eos eveniet harum illum natus neque non numquam, porro praesentium saepe soluta tempora vero!';
    }

}

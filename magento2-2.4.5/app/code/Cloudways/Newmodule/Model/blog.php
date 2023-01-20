<?php
/**
* Copyright © 2015 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Cloudways\Newmodule\Model;
class Blog extends \Magento\Framework\Model\AbstractModel {
protected function _construct() {
$this->_init('Cloudways\Newmodule\Model\ResourceModel\Blog');
}
}
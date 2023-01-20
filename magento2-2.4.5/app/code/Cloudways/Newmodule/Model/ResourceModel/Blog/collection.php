<?php
/**
* Copyright © 2015 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Cloudways\Newmodule\Model\ResourceModel\Blog;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection {
protected function _construct() {
$this->_init('Cloudways\Newmodule\Model\Blog', 'Cloudways\Newmodule\Model\ResourceModel\Blog');
}
}
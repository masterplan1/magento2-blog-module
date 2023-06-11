<?php

namespace MageMastery\Blog\Model;

use MageMastery\Blog\Model\ResourceModel\Post as ResourceModelPost;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModelPost::class);
        parent::_construct();
    }
}
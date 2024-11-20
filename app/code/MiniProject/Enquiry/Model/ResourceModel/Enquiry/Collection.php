<?php declare(strict_types=1);

namespace MiniProject\Enquiry\Model\ResourceModel\Enquiry;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MiniProject\Enquiry\Model\EnquiryModel;
use MiniProject\Enquiry\Model\ResourceModel\EnquiryResourceModel;

class Collection extends AbstractCollection {

    protected function _construct()
    {
        $this->_init(
            EnquiryModel::class,
            EnquiryResourceModel::class
        );
    }
}

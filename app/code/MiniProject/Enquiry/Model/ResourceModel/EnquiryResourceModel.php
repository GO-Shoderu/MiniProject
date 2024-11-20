<?php declare(strict_types=1);

namespace MiniProject\Enquiry\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class EnquiryResourceModel extends AbstractDb {

    private const TABLE_NAME = 'intern_enquiry';
    private const PRIMARY_KEY_FIELD_NAME = 'enquiry_id';

    protected function _construct()
    {
        $this->_init(
            self::TABLE_NAME,
            self::PRIMARY_KEY_FIELD_NAME
        );
    }
}

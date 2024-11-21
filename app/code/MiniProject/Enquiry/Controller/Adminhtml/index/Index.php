<?php

namespace MiniProject\Enquiry\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;

class Index extends Action {
    public function execute(): ResultInterface {
        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $page->setActiveMenu('MiniProject_Enquiry::enquiry');
        $page->addBreadcrumb(__('Enquiries'), __('Enquiries'));
        $page->addBreadcrumb(__('Manage Enquiries'), __('Manage Enquiries'));
        $page->getConfig()->getTitle()->prepend(__('Enquiries'));

        return $page;
    }
}

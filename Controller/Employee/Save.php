<?php

namespace Hummingbird\Module\Controller\Employee;

use Hummingbird\Module\Model\View;
use Hummingbird\Module\Model\ResourceModel\View as EmployeeResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Save extends Action
{

    private $employee;

    private $employeeResourceModel;


    public function __construct(
        Context $context,
        View $employee,
        EmployeeResourceModel $employeeResourceModel
    ) {
        $this->employee = $employee;
        $this->employeeResourceModel = $employeeResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $employee = $this->employee->setData($params);
        try {
            $this->employeeResourceModel->save($employee);
            $this->messageManager->addSuccessMessage(__("Successfully added the Employee %1", $params['first_name']));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('helloworld/employee/index');
        return $redirect;
    }
}
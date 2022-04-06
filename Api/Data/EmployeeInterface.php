<?php
namespace Hummingbird\Module\Api\Data;

interface EmployeeInterface
{
	const EMPLOYEE_ID = 'employee_id';
	const FIRST_NAME  = 'first_name';
	const LAST_NAME = 'last_name';
	const EMAIL ='email_id';

	public function getId();

	public function getFirstName();

	public function getLastName();

	public function getEmail();

	public function setId($id);

	public function setFirstName($firstname);

	public function setLastName($lastname);

	public function setEmailId($emailId);
}
?>

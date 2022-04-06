<?php
namespace Hummingbird\Module\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {

        $newsTableName = $setup->getTable('employee_table');

        if ($setup->getConnection()->isTableExists($newsTableName) != true) {

            $newsTable = $setup->getConnection()
                ->newTable($newsTableName)
                ->addColumn(
                    'employee_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Employee ID'
                )
                ->addColumn(
                    'first_name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable' => false, 'default' => ''],
                    'First Name'
                )
                ->addColumn(
                    'last_name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Last Name'
                )
                ->addColumn(
                    'email_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Email ID'
                )
                ->addIndex(
                    $setup->getIdxName('employee_table', ['first_name']),
                    ['first_name']
                )
                ->setComment("Employee Table");

            $setup->getConnection()->createTable($newsTable);
        }
    }
}

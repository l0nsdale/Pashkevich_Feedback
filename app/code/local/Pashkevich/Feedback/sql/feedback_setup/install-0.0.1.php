<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22.2.17
 * Time: 0.32
 */


$installer = $this;
$tableFeedbacks = $installer->getTable('feedback/table_feedbacks');
$installer->startSetup();

$installer->getConnection()->dropTable($tableFeedbacks);
$table = $installer->getConnection()
    ->newTable($tableFeedbacks)
    ->addColumn('feedbacks_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
    ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ))
    ->addColumn('message', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();

<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('mailbox', 'password_scheme', 'string', '30', array(
             'notnull' => '1',
             'default' => ''
             ));
    }

    public function down()
    {
        $this->removeColumn('mailbox', 'password_scheme');
    }
}
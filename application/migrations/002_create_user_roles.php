<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_create_user_roles extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),

            'role' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),
        ));

        
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('user_roles');
    }

    public function down()
    {
        $this->dbforge->drop_table('user_roles');
    }
}

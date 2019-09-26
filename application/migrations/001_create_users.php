<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_create_users extends CI_Migration
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

            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),

            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),
            
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '256',
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'is_active' => array(
                'type' => 'INT',
                'constraint' => 1,
            ),
            'date_created' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
        ));
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}

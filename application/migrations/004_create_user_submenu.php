<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_create_user_submenu extends CI_Migration
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

            'menu_id' => array(
                'type' => 'INT',
                'contstrain' => 11
            ),

            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),

            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),

            'icon' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
            ),

            'is_active' => array(
                'type' => 'INT',
                'constraint' => 1,
            ),
        ));

        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_submenu');
    }

    public function down()
    {
        $this->dbforge->drop_table('user_submenu');
    }
}

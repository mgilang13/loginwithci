<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_create_user_access_menu extends CI_Migration
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

            'role_id' => array(
                'type' => 'INT',
                'contstrain' => 11
            ),

            'menu_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
        ));

        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_access_menu');
    }

    public function down()
    {
        $this->dbforge->drop_table('user_access_menu');
    }
}

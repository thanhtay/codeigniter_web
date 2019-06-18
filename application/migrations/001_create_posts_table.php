<?php

class Migration_Create_Posts_Table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'created_at' => array(
                'type' => 'int',
                'constraint' => 11,
            ),
            'updated_at' => array(
                'type' => 'int',
                'constraint' => 11,
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('posts');
    }

    public function down()
    {
        $this->dbforge->drop_table('posts');
    }
}

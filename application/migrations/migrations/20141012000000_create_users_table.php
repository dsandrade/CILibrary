<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CreateUsersTable extends CI_Migration
{
    /**
     * CreateReadersTable constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'login' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '255',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}

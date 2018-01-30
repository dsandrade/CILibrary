<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_books_table extends CI_Migration
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
            'publisher_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'isbn' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ]
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('books');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dbforge->drop_table('books');
    }
}

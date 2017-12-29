<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CreateLoansTable extends CI_Migration
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
            'book_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'reader_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'withdrawal_at' => [
                'type' => 'DATE',
                'null' => true
            ],
            'return_date' => [
                'type' => 'DATE',
                'null' => true
            ],
            'returned_at' => [
                'type' => 'DATE',
                'null' => true
            ],
            'canceled_at' => [
                'type' => 'DATE',
                'null' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ]
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('loans');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dbforge->drop_table('loans');
    }
}

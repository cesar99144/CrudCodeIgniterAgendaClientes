<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),

			'cnpj' => array(
				'type' => 'VARCHAR',
				'constraint' => 30
				
			),

			'razao' => array(
				'type' => 'VARCHAR',
				'constraint' => 80
			),

			'fantasia' => array(
				'type' => 'VARCHAR',
				'constraint' => 70
			),

			'cidade' => array(
				'type' => 'VARCHAR',
				'constraint' => 80
			),

			'estado' => array(
				'type' => 'VARCHAR',
				'constraint' => 60
			),

			'celular' => array(
				'type' => 'VARCHAR',
				'constraint' => 40
			),
		]);

		$this->forge->addPrimaryKey('id', TRUE);
		$this->forge->createTable('clientes');
	}

	public function down()
	{
		//
	}
}

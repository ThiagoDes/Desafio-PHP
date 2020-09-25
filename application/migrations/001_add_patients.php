<?php

class Migration_Add_patients extends CI_Migration {

    public function up() {
        $fields = array(
            'id_patient' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'Photograph' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => NULL,
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'mother_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'birthday' => array(
                'type' => 'DATE',
            ),
            'cpf' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
            ),
            'cns' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
            ),
            'address' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'number' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            ),
            'neighborhood' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
            ),
            'complement' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => NULL,
            ),
            'city' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
            ),
            'uf' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
            ),
            'cep' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
            )
        );
    
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id_patient', TRUE);
        $this->dbforge->create_table('tb_patients', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_patients');
    }

}
<?php

class Admin_model extends CI_Model {

public $email;
public $senha;
public $nome;




public function get_cadastrados()
{
		$query = $this->db->get('cadastrados');
		return $query->result();
}

public function insert_entry()
{
		$this->nome    = $_POST['nome']; // please read the below note
		$this->email  = $_POST['email'];
		$this->whatsapp  = $_POST['whatsapp'];
		$this->quantidade  = ($_POST['quantidade'] == "") ? 1 : $_POST['quantidade'];

		$this->db->insert('cadastrados', $this);
}

public function confirmar_participacao($id)
{
		$this->confirmado     = 1;
		$this->db->update('cadastrados', $this, array('id' => $id));
}

}
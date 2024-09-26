<?php
class Clientes_model extends CI_Model
{

    
    function __construct()
    {
        parent::__construct();
    }

    
    function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        
        $this->db->select($fields);
        $this->db->from($table);
        
        // condicionais da pesquisa

        // condicional de documento
        if (array_key_exists('documento', $where)) {
            $this->db->where('documento', $where['documento']);
            $this->db->or_where('cnpj', $where['documento']);
        }


        // condicional de nome do cliente
        if (array_key_exists('cliente', $where)) {
            $this->db->where_in('nomeCliente', $where['cliente']); 
        }
        
        $this->db->limit($perpage, $start);

        $this->db->order_by('idClientes', 'desc');
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id)
    {
        $this->db->where('idClientes', $id);
        $this->db->limit(1);
        return $this->db->get('clientes')->row();
    }
    
    function add($table, $data)
    {
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }
    
    function edit($table, $data, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }
        
        return false;
    }
    
    function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }

    function count($table)
    {
        return $this->db->count_all($table);
    }
    
    public function getOsByCliente($id)
    {
        $this->db->select('os.*, usuarios.nome');
        $this->db->from('os');
        $this->db->join('usuarios', 'usuarios.idUsuarios = os.rep', 'left');
        $this->db->where('clientes_id', $id);
        $this->db->order_by('idOs', 'desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }


}

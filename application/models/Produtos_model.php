<?php
class Produtos_model extends CI_Model
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

        // condicional de status
        if (array_key_exists('tipo', $where)) {
            $this->db->where('tipo', $where['tipo']);
        }

        // condicional de protocolo
        if (array_key_exists('pesquisa', $where)) {
            $this->db->where_in('descricao', $where['pesquisa']);
        }
        
        $this->db->limit($perpage, $start);

         $this->db->order_by('idProdutos', 'desc');
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id)
    {
        $this->db->where('idProdutos', $id);
        $this->db->limit(1);
        return $this->db->get('produtos')->row();
    }


    public function getRelacionados($id = null) 
    {
        
        $this->db->select('produtos_itens.*, produtos.*');
        $this->db->from('produtos_itens');
        $this->db->join('produtos', 'produtos.idProdutos = produtos_itens.relacionado_id');
        $this->db->where('produto_id', $id);
        return $this->db->get()->result();
    }

    public function getEquipamentos($id = null) 
    {
        
        $this->db->select('produtos_itens.*, produtos.*');
        $this->db->from('produtos_itens');
        $this->db->join('produtos', 'produtos.idProdutos = produtos_itens.produto_id');
        $this->db->where('relacionado_id', $id);
        return $this->db->get()->result();
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

}

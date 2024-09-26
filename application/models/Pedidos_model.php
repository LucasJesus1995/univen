<?php
class Pedidos_model extends CI_Model
{

    
    function __construct()
    {
        parent::__construct(); 
    }

    

        function getPedido($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {

        

        $this->db->select($fields.', os.idOs');
        $this->db->from($table);
        $this->db->join('os', 'os.idOs = '.$table.'.protocolo');
        

        // condicionais da pesquisa

        // condicional de status
        if (array_key_exists('status', $where)) {
            $this->db->where('statusPedidos', $where['status']);
        }

        // condicional de protocolo
        if (array_key_exists('pesquisa', $where)) {
            $this->db->where_in('protocolo', $where['pesquisa']);
        }
        
        $this->db->limit($perpage, $start);


        $this->db->order_by('pedidos.idPedidos', 'desc');
        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id)
    {
        $this->db->where('idPedidos', $id);
        $this->db->limit(1);
        return $this->db->get('pedidos')->row();
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

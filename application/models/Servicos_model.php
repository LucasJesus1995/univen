<?php
class Servicos_model extends CI_Model
{


    
    function __construct()
    {
        parent::__construct();
    }

    
    function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        
        $this->db->select('servicos.*, clientes.*, produtos.descricao as desc');
        $this->db->from($table);
        $this->db->join('clientes', 'clientes.idClientes = servicos.clientes_id');
        $this->db->join('produtos', 'produtos.idProdutos = servicos.produto');
        
        // condicionais da pesquisa

        // condicional de status
        if (array_key_exists('status', $where)) {
            $this->db->where('status', $where['status']);
        }

        // condicional de protocolo
        if (array_key_exists('pesquisa', $where)) {
            $this->db->where_in('idServicos', $where['pesquisa']);
        }

        // condicional de nome do cliente
        if (array_key_exists('cliente', $where)) {
            $this->db->where_in('nome', $where['cliente']);
        }
        
        $this->db->limit($perpage, $start);

        $this->db->order_by('idServicos', 'desc');
        $query = $this->db->get(); 
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id)
    {
        $this->db->select('servicos.*, clientes.*, produtos.descricao as desc');
        $this->db->from('servicos');
        $this->db->join('clientes', 'clientes.idClientes = servicos.clientes_id');
        $this->db->join('produtos', 'produtos.idProdutos = servicos.produto');
        $this->db->where('servicos.idServicos', $id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    function getEquipamento()
    {
        $this->db->select('*');
        $this->db->from('produtos');
        $this->db->where('tipo', '1');
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

    public function autoCompleteClienteTicket($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nomeCliente', $q);
        $query = $this->db->get('clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label'=>$row['nomeCliente'],'id'=>$row['idClientes']);
            }
            echo json_encode($row_set);
        }
    }
    
    function count($table)
    {
        return $this->db->count_all($table);
    }
}

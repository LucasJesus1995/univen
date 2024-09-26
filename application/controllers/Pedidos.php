<?php

class Pedidos extends CI_Controller
{

    
    function __construct()
    {
        parent::__construct();
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }
            $this->load->helper(array('codegen_helper'));
            $this->load->model('pedidos_model', '', true);
            $this->data['menuPedidos'] = 'pedidos';
    }
    
    function index()
    {
        $this->gerenciar();
    }

    function gerenciar()
    {

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vPedido')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar pedidos.');
            redirect(base_url());
        }
        $this->load->library('table');
        $this->load->library('pagination');

        $where_array = array();

        $pesquisa = $this->input->get('pesquisa');
        $status = $this->input->get('status');

        if ($pesquisa) {
            $where_array['pesquisa'] = $pesquisa;
        }
        if ($status) {
            $where_array['status'] = $status;
        }
        
   
        $config['base_url'] = base_url().'index.php/pedidos/gerenciar/';
        $config['total_rows'] = $this->pedidos_model->count('pedidos');
        $config['per_page'] = 10;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        
        $this->data['results'] = $this->pedidos_model->getPedido('pedidos', 'idPedidos,protocolo,statusPedidos,rastreio', $where_array, $config['per_page'], $this->uri->segment(3));
        
        $this->data['view'] = 'pedidos/pedidos';
        $this->load->view('tema/topo', $this->data);
      
       
        
    }
    
    function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aPedido')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar pedidos.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('pedidos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'protocolo' => set_value('protocolo'),
                'statusPedidos' => set_value('envio'),
                'rastreio' => set_value('rastreio'),
                'dataPedido' => date('Y/m/d H:i:s')
            );

            if ($this->pedidos_model->add('pedidos', $data) == true) {
                $this->session->set_flashdata('success', 'Pedido adicionado com sucesso!');
                redirect(base_url() . 'index.php/pedidos/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->data['view'] = 'pedidos/adicionarPedidos';
        $this->load->view('tema/topo', $this->data);

    }

    function editar() 
    {


        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'ePedido')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar pedido.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('pedidos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'protocolo' => $this->input->post('protocolo'),
                'statusPedidos' => $this->input->post('envio'),
                'rastreio' => $this->input->post('rastreio'),
                'dataPedido' => date('Y/m/d H:i:s')
                
            );

            if ($this->pedidos_model->edit('pedidos', $data, 'idPedidos', $this->input->post('idPedidos')) == true) {
                $this->session->set_flashdata('success', 'Pedido editado com sucesso!');
                redirect(base_url() . 'index.php/pedidos/editar/'.$this->input->post('idPedidos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->pedidos_model->getById($this->uri->segment(3));

        $this->data['view'] = 'pedidos/editarPedido';
        $this->load->view('tema/topo', $this->data);

    }

    public function visualizar()
    {

        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vPedido')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar pedidos.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->pedidos_model->getById($this->uri->segment(3));
        $this->data['view'] = 'pedidos/visualizar';
        $this->load->view('tema/topo', $this->data);

        
    }
    
    public function excluir()
    {

            
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dPedido')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir pedido.');
            redirect(base_url());
        }

            
            $id =  $this->input->post('id');
        if ($id == null) {

            $this->session->set_flashdata('error', 'Erro ao tentar excluir pedido.');
            redirect(base_url().'index.php/pedidos/gerenciar/');
        }

          $this->pedidos_model->delete('pedidos', 'idPedidos', $id);

            $this->session->set_flashdata('success', 'Pedido excluido com sucesso!');
            redirect(base_url().'index.php/pedidos/gerenciar/');   
    }
}

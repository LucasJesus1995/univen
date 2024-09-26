<?php

class Servicos extends CI_Controller
{
    

    
    function __construct()
    {
        parent::__construct();
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }

        $this->load->helper(array('form', 'codegen_helper'));
        $this->load->model('servicos_model', '', true);
        $this->data['menuServicos'] = 'Serviços';
    }
    
    function index()
    {
        $this->gerenciar();
    }

    function gerenciar()
    {
        
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar ticket.');
            redirect(base_url());
        }

        $this->load->library('pagination');

        $where_array = array();

        $pesquisa = $this->input->get('pesquisa');
        $cliente = $this->input->get('cliente');
        $status = $this->input->get('status');

        if ($pesquisa) {
            $where_array['pesquisa'] = $pesquisa;
        }
        if ($cliente) {
            $where_array['cliente'] = $cliente;
        }
        if ($status) {
            $where_array['status'] = $status;
        }
        
        
        $config['base_url'] = base_url().'index.php/servicos/gerenciar/';
        $config['total_rows'] = $this->servicos_model->count('servicos');
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

        $this->data['results'] = $this->servicos_model->get('servicos', 'idServicos,nome,produto,motivo,descricao,status,prioridade', $where_array, $config['per_page'], $this->uri->segment(3));
       
        $this->data['view'] = 'servicos/servicos';
        $this->load->view('tema/topo', $this->data);

       
        
    }
    
    function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar ticket.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            

            $data = array(
                'nome' => set_value('cliente'),
                'clientes_id' => set_value('clientes_id'),
                'produto' => set_value('produto'),
                'tipo' => set_value('tipo'),
                'motivo' => set_value('motivo'),
                'descricao' => set_value('descricao'),
                'data_ticket' => date('Y-m-d'),
                'prioridade' => '2'
            );

            if ($this->servicos_model->add('servicos', $data) == true) {
                $this->session->set_flashdata('success', 'Ticket adicionado com sucesso!');
                redirect(base_url() . 'index.php/servicos/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->data['produtos'] = $this->servicos_model->getEquipamento($this->uri->segment(3));
        $this->data['view'] = 'servicos/adicionarServico';
        $this->load->view('tema/topo', $this->data);

    }

    function visualizar()
    {
        
        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }
        
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar tickets.');
            redirect(base_url());
        }
        
        $this->data['result'] = $this->servicos_model->getById($this->uri->segment(3));

        if ($this->data['result'] == null) {
            $this->session->set_flashdata('error', 'ticket não encontrado.');
            redirect(base_url() . 'index.php/servicos/editar/'.$this->input->post('idServicos'));
        }
        $this->data['view'] = 'servicos/visualizarServico';
        $this->load->view('tema/topo', $this->data);
     
    }

    function editar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar ticket.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        

        if ($this->form_validation->run('servicos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $preco = $this->input->post('preco');
            $preco = str_replace(",", "", $preco);
            $data = array(
                'nome' => $this->input->post('cliente'),
                'clientes_id' => $this->input->post('clientes_id'),
                'produto' => $this->input->post('produto'),
                'tipo' => $this->input->post('tipo'),
                'motivo' => $this->input->post('motivo'),
                'descricao' => $this->input->post('descricao'),
                'solucao' => $this->input->post('solucao'),
                'status' => $this->input->post('status'),
                'prioridade' => $this->input->post('prioridade')
                
            );

            if ($this->servicos_model->edit('servicos', $data, 'idServicos', $this->input->post('idServicos')) == true) {
                $this->session->set_flashdata('success', 'Ticket editado com sucesso!');
                redirect(base_url() . 'index.php/servicos/editar/'.$this->input->post('idServicos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um errro.</p></div>';
            }
        }

        $this->data['result'] = $this->servicos_model->getById($this->uri->segment(3));
        $this->data['produtos'] = $this->servicos_model->getEquipamento($this->uri->segment(3));
        $this->data['view'] = 'servicos/editarServico';
        $this->load->view('tema/topo', $this->data);

    }
    
    function excluir()
    {

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dServico')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir ticket.');
            redirect(base_url());
        }
       
        
        $id =  $this->input->post('id');
        if ($id == null) {

            $this->session->set_flashdata('error', 'Erro ao tentar excluir ticket.');
            redirect(base_url().'index.php/servicos/gerenciar/');
        }

        $this->db->where('servicos_id', $id);
        $this->db->delete('servicos_os');

        $this->servicos_model->delete('servicos', 'idServicos', $id);
        

        $this->session->set_flashdata('success', 'Ticket excluido com sucesso!');
        redirect(base_url().'index.php/servicos/gerenciar/');
    }

    public function autoCompleteCliente()
    {

        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->servicos_model->autoCompleteClienteTicket($q);
        }

    }
}

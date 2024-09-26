<?php

class Produtos extends CI_Controller
{
    

    function __construct()
    {
        parent::__construct();
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }

        $this->load->helper(array('form', 'codegen_helper')); 
        $this->load->model('produtos_model', '', true);
        $this->data['menuProdutos'] = 'Produtos'; 
    }

    function index()
    {
        $this->gerenciar();
    }

    function gerenciar()
    {
        
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }

        $this->load->library('table');
        $this->load->library('pagination'); 

        $where_array = array();

        $pesquisa = $this->input->get('pesquisa');
        $tipo = $this->input->get('tipo');

        if ($pesquisa) {
            $where_array['pesquisa'] = $pesquisa;
        }
        if ($tipo) {
            $where_array['tipo'] = $tipo;
        }
        
        
        $config['base_url'] = base_url().'index.php/produtos/gerenciar/';
        $config['total_rows'] = $this->produtos_model->count('produtos');
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

        $this->data['results'] = $this->produtos_model->get('produtos', 'idProdutos,descricao,unidade,precoVenda,estoque,estoqueMinimo,tipo,file', $where_array, $config['per_page'], $this->uri->segment(3));
       
        $this->data['view'] = 'produtos/produtos';
        $this->load->view('tema/topo', $this->data);
       
        
    }
    
    function adicionar()
    {

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar produtos.');
            redirect(base_url());
        }

        $this->load->library('form_validation'); 
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {

            $arquivo = $this->do_upload();

            $file = $arquivo['file_name'];
            $path = $arquivo['full_path'];
            $url = base_url().'/assets/img/produtos/'.date('d-m-Y').'/'.$file;
            $tamanho = $arquivo['file_size'];
            $tipo = $arquivo['file_ext'];


            $precoCompra = $this->input->post('precoCompra');
            $precoCompra = str_replace(",", "", $precoCompra);
            $precoVenda = $this->input->post('precoVenda');
            $precoVenda = str_replace(",", "", $precoVenda);
            $data = array(
                'file' => $file,
                'descricao' => set_value('descricao'), 
                'area_id' => set_value('area'),
                'categoria' => set_value('categoria'),
                'unidade' => set_value('unidade'),
                'precoVenda' => $precoVenda,
                'estoque' => set_value('estoque'),
                'estoqueMinimo' => set_value('estoqueMinimo'),
                'tipo' => set_value('tipo'),
                'funcao' => set_value('funcao')
                
            );

            if ($this->produtos_model->add('produtos', $data) == true) {
                $this->session->set_flashdata('success', 'Produto adicionado com sucesso!');
                redirect(base_url() . 'index.php/produtos/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';
            }
        }
        $this->data['view'] = 'produtos/adicionarProduto';
        $this->load->view('tema/topo', $this->data);
     
    }

    function editar()
    {

        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar produtos.');
            redirect(base_url());
        }
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('produtos') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
           
            $precoVenda = $this->input->post('precoVenda');
            $precoVenda = str_replace(",", "", $precoVenda);
            $data = array(
                'descricao' => $this->input->post('descricao'),
                'area_id' => $this->input->post('area'),
                'categoria' => $this->input->post('categoria'),
                'unidade' => $this->input->post('unidade'),
                'precoVenda' => $precoVenda,
                'estoque' => $this->input->post('estoque'),
                'estoqueMinimo' => $this->input->post('estoqueMinimo'),
                'funcao' => $this->input->post('funcao'),
                'sobre' => $this->input->post('sobre'),

                'tipo' => $this->input->post('tipo')
            );

            if ($this->produtos_model->edit('produtos', $data, 'idProdutos', $this->input->post('idProdutos')) == true) {
                $this->session->set_flashdata('success', 'Produto editado com sucesso!');
                redirect(base_url() . 'index.php/produtos/editar/'.$this->input->post('idProdutos'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';
            }
        }

        $this->data['result'] = $this->produtos_model->getById($this->uri->segment(3));
        $this->data['produtos'] = $this->produtos_model->getRelacionados($this->uri->segment(3));
 

        $this->data['view'] = 'produtos/editarProduto';
        $this->load->view('tema/topo', $this->data);
     
    }

      public function editar_foto_produto()
    {

        $arquivo = $this->do_upload_foto();

            
            $path = $arquivo['full_path'];
            $url = base_url().'/assets/img/produtos/'.date('d-m-Y').'/'.$file;
            $tamanho = $arquivo['file_size'];
            $tipo = $arquivo['file_ext'];

         $data = array(
                'file' => $this->input->post('userfile'),
               
            );

            if ($this->produtos_model->edit('produtos', $data, 'idProdutos', $this->input->post('idProdutos')) == true) {
                $this->session->set_flashdata('success', 'Foto do produto editado com sucesso!');
                redirect(base_url() . 'index.php/produtos/gerenciar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured</p></div>';
            }

    }



    public function visualizar()
    {

         if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }
        
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar produtos.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->load->model('mapos_model');
        $this->data['result'] = $this->produtos_model->getById($this->uri->segment(3));
        $this->data['produtos'] = $this->produtos_model->getRelacionados($this->uri->segment(3));
        $this->data['relacionado'] = $this->produtos_model->getEquipamentos($this->uri->segment(3));
        $this->data['view'] = 'produtos/visualizarProduto';
        $this->load->view('tema/topo', $this->data);
       
    }
    
    function excluir()
    {

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir produtos.');
            redirect(base_url());
        }

        
        $id =  $this->input->post('id');
        if ($id == null) {

            $this->session->set_flashdata('error', 'Erro ao tentar excluir produto.');
            redirect(base_url().'index.php/produtos/gerenciar/');
        }

        $this->db->where('produtos_id', $id);
        $this->db->delete('produtos_os');


        $this->db->where('produtos_id', $id);
        $this->db->delete('itens_de_vendas');
        
        $this->produtos_model->delete('produtos', 'idProdutos', $id);
        

        $this->session->set_flashdata('success', 'Produto excluido com sucesso!');
        redirect(base_url().'index.php/produtos/gerenciar/');
    }

    public function adicionarRelacionados()
    {

       
        $produto = $this->input->post('relacionado_id');
        $data = array(
            
            'relacionado_id'=> $produto,
            'produto_id'=> $this->input->post('idProduto'),
        );

        if ($this->produtos_model->add('produtos_itens', $data) == true) {
            
            echo json_encode(array('result'=> true));
        } else {
            echo json_encode(array('result'=> false));
        }
      
    }

    function excluirRelacionados()
    {
        
            $ID = $this->input->post('idProduto');
        if ($this->produtos_model->delete('produtos_itens', 'idProdItem', $ID) == true) {
                
            echo json_encode(array('result'=> true));
        } else {
            echo json_encode(array('result'=> false));
        }
    }

     public function do_upload()
    {

    
        

        $config['upload_path'] = './assets/img/produtos/';
        $config['allowed_types'] = 'txt|jpg|jpeg|gif|png|pdf';
        $config['max_size']     = 0;
        $config['max_width']  = '3000';
        $config['max_height']  = '2000';
        $config['encrypt_name'] = true;


       

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('error', 'Erro ao fazer upload do arquivo, verifique se a extensão do arquivo é permitida.');
            redirect(base_url() . 'index.php/produtos/adicionar/');
        } else {
            //$data = array('upload_data' => $this->upload->data());
            return $this->upload->data();
        }
    }

   

}

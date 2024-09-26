
<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo base_url(); ?>index.php/servicos/gerenciar">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aServico')) { ?>
            <div class="span3">
                <a href="<?php echo base_url(); ?>index.php/servicos/adicionar" class="btn btn-success span12"><i class="icon-plus icon-white"></i> Adicionar Ticket</a>
            </div>
        <?php } ?>

        <div class="span2">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Protocolo a pesquisar" class="span12" value="" >
        </div>
        <div class="span3">
            <input type="text" name="cliente"  id="cliente"  placeholder="Nome completo do cliente a pesquisar" class="span12" value="" >
        </div>
        <div class="span2">
            <select name="status" id="status" class="span12">
                <option value="">Selecione status</option>
                <option value="0">Aberto</option>
                <option value="1">Concluído</option>
                <option value="2">Respondido</option>
            </select>

        </div>
        <div class="span1">
            <button class="span12 btn"> <i class="icon-search"></i> </button>
        </div>
    </form>
</div>

<?php

if (!$results) {?>

    <div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Tickets</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nome</th>
            <th>Produto</th>
            <th>Motivo</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Prioridade</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="5">Nenhum Ticket Cadastrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>



<?php } else { ?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Tickets</h5>

     </div> 

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Nome</th>
            <th>Produto</th>
            <th>Motivo</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Prioridade</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {

            switch ($r->status) {
                case '0':
                    $nome = 'Aberto';
                    $cor = '#f39c12';
                    break;
                case '1':
                    $nome = 'Concluído';
                    $cor = '#5bb75b';
                    break;
                case '2':
                    $nome = 'Respondido';
                    $cor = '#00c0ef';
                    break;
                default:
                    $cor = '#E0E4CC';
                    break;

            }

            switch ($r->prioridade) {
                case '1':
                    $nomeP = 'Alto';
                    $corP = '#da4f49';
                    break;
                case '2':
                    $nomeP = 'Médio';
                    $corP = '#f39c12';
                    break;
                case '3':
                    $nomeP = 'Baixo';
                    $corP = '#00c0ef';
                    break;
                default:
                    $corP = '#E0E4CC';
                    break;
            }
            

            echo '<tr>';
            echo '<td>'.$r->idServicos.'</td>';
            echo '<td>'.$r->nome.'</td>';
            echo '<td>'.$r->desc.'</td>';
            echo '<td>'.$r->motivo.'</td>';
            echo '<td>'.$r->descricao.'</td>';
            echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$nome.'</span> </td>';
            echo '<td><span class="badge" style="background-color: '.$corP.'; border-color: '.$corP.'">'.$nomeP.'</span> </td>';
            echo '<td>';
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) {
                echo '<a href="'.base_url().'index.php/servicos/visualizar/'.$r->idServicos.'" style="margin-right: 1%" class="btn tip-top" title="Visualizar Ticket"><i class="icon-eye-open"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/servicos/editar/'.$r->idServicos.'" class="btn btn-info tip-top" title="Editar Ticket"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dServico')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" servico="'.$r->idServicos.'" class="btn btn-danger tip-top" title="Excluir Ticket"><i class="icon-remove icon-white"></i></a>  ';
            }
                      
                      
            echo '</td>';
            echo '</tr>';
}?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
	
        



<?php echo $this->pagination->create_links();
}?>


<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/servicos/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Ticket</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idServico" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir este Ticket?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Excluir</button>
  </div>
  </form>
</div>






<script type="text/javascript">
$(document).ready(function(){


   $(document).on('click', 'a', function(event) {
        
        var servico = $(this).attr('servico');
        $('#idServico').val(servico);

    });

});

</script>
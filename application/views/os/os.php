<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo base_url(); ?>index.php/os/gerenciar">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aOs')) { ?>
            <div class="span3">
                <a href="<?php echo base_url(); ?>index.php/os/adicionar" class="btn btn-success span12"><i class="icon-plus icon-white"></i> Adicionar Proposta</a>
            </div>
        <?php } ?>

        <div class="span3">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Nome do cliente a pesquisar" class="span12" value="" >
        </div>
        <div class="span2">
            <select name="status" id="status" class="span12">
                <option value="">Selecione status</option>
                <option value="1">Aguardando Cliente</option>
                <option value="2">Pendente</option>
                <option value="3">Em Análise</option>
                <option value="4">Aprovado</option>
                <option value="5">Reprovado</option>
                <option value="6">Cancelado</option>
                <option value="7">Faturado</option>

            </select>

        </div>

        <div class="span3">
            <input type="text" name="data"  id="data"  placeholder="Data Inicial" class="span6 datepicker" value="">
            <input type="text" name="data2"  id="data2"  placeholder="Data Final" class="span6 datepicker" value="" >
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
        <h5>Propostas</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Cliente</th>
            <th>Representante</th>
            <th>Data Inicial</th>
            <th>Data Final</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="6">Nenhuma Proposta Cadastrada</td>
        </tr>
    </tbody>
</table>
</div>
</div>
<?php } else {?>


<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-file"></i>
         </span>
        <h5>Propostas</h5>

     </div>

<div class="widget-content nopadding">

<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Cliente</th>
            <th>Representante</th>
            <th>Data Inicial</th>
            <th>Data Final</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>  
    <tbody>
        <?php foreach ($results as $r) {
            $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
            $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));

            switch ($r->status) {
                case '2':
                    $nome = 'Pendente';
                    $cor = '#f39c12';
                    break;
                case '3':
                    $nome = 'Em Análise';
                    $cor = '#00c0ef';
                    break;
                case '1':
                    $nome = 'Aguardando Cliente';
                    $cor = '#B266FF';
                    break;
                case '5':
                    $nome = 'Reprovado';
                    $cor = '#da4f49';
                    break;    
                case '6':
                    $nome = 'Cancelado';
                    $cor = '#da4f49';
                    break;
                 case '7':
                    $nome = 'Faturado';
                    $cor = '#5bb75b';
                    break;
                case '4':
                    $nome = 'Aprovado';
                    $cor = '#5bb75b';
                    break;
                default:
                    $cor = '#E0E4CC';
                    break;
            }

            echo '<tr>';
            echo '<td>'.$r->idOs.'</td>';
            echo '<td>'.$r->nomeCliente.'</td>';
            echo '<td>'.$r->nome.'</td>';
            echo '<td>'.$dataInicial.'</td>';
            echo '<td>'.$dataFinal.'</td>';
            echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$nome.'</span> </td>';
            
            echo '<td>';
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/os/visualizar/'.$r->idOs.'" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
                
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/os/editar/'.$r->idOs.'" class="btn btn-info tip-top" title="Editar Proposta"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dOs')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" os="'.$r->idOs.'" cliente="'.$r->clientes_id.'" class="btn btn-danger tip-top" title="Cancelar Proposta"><i class="icon-remove icon-white"></i></a>  ';
            }
                               
                      
            echo  '</td>';
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
  <form action="<?php echo base_url() ?>index.php/os/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Cancelar Proposta</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idOs" name="id" value="" />
    <input type="hidden" id="idClientes" name="assinante" value="" />
    <h5 style="text-align: center">Deseja realmente cancelar esta Proposta?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <button class="btn btn-danger">Cancelar</button>
  </div>
  </form>
</div>


<script type="text/javascript">
$(document).ready(function(){


   $(document).on('click', 'a', function(event) {
        
        var os = $(this).attr('os');
        $('#idOs').val(os);

        var cliente = $(this).attr('cliente');
        $('#idClientes').val(cliente);

    });

   $(document).on('click', '#excluir-notificacao', function(event) {
       event.preventDefault();
       
       $.ajax({
           url: '<?php echo site_url() ?>/os/excluir_notificacao',
           type: 'GET',
           dataType: 'json',
       })
       .done(function(data) {
           if(data.result == true){
              alert('Notificação excluída com sucesso');
              location.reload();
           }else{
              alert('Ocorreu um problema ao tentar exlcuir notificação.');
           }   


       });
       

   });

   $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

});

</script>
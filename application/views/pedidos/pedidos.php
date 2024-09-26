<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo base_url(); ?>index.php/pedidos/gerenciar">
       
            <div class="span3">
                
            </div>
     

        <div class="span3">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Número de protocolo a pesquisar" class="span12" value="" >
        </div>
        <div class="span2">
            <select name="status" id="status" class="span12"> 
                <option value="">Selecione status</option>
                <option value="4">Encaminhado</option>
                <option value="3">Em Separação</option>
                <option value="2">Em Transporte</option>
                <option value="1">Entregue</option>

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
                <i class="icon-truck
"></i>
            </span>
            <h5>Pedidos</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Protocolo Proposta</th>
                        <th>Estado de Envio</th>
                        <th>Rastreamento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Nenhum pedido Cadastrado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php } else {
    

?>
<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-truck"></i>
         </span>
        <h5>Pedidos</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr>
            <th>#</th>
            <th>Protocolo Proposta</th>
            <th>Estado de Envio</th>
            <th>Rastreamento</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {

            switch ($r->statusPedidos) {
                case '2':
                    $cor = '#f39c12';
                    $id = 'Em Transporte';
                    break;
                case '3':
                    $cor = '#00c0ef';
                    $id = 'Em Separação';
                    break;
                case '4':
                    $cor = '#B266FF';
                    $id = 'Encaminhado';
                    break;
                case '1':
                    $cor = '#5bb75b';
                    $id = 'Entregue';
                    break;
                default:
                    $cor = '#E0E4CC';
                    break;
            }


            echo '<tr>';
            echo '<td>'.$r->idPedidos.'</td>';
            echo '<td><a href="'.base_url().'index.php/os/visualizar/'.$r->idOs.'"> # '.$r->idOs.'</a></td>';
           echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$id.'</span> </td>';
            echo '<td>'.$r->rastreio.'</td>'; 
           
            echo '<td>';
            
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'ePedido')) {
                echo '<a href="'.base_url().'index.php/pedidos/editar/'.$r->idPedidos.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Pedido"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dPedido')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" pedido="'.$r->idPedidos.'" style="margin-right: 1%" class="btn btn-danger tip-top" title="Excluir Pedido"><i class="icon-remove icon-white"></i></a>';
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
  <form action="<?php echo base_url() ?>index.php/pedidos/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Pedido</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idPedido" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir este pedido?</h5>
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
        
        var pedido = $(this).attr('pedido');
        $('#idPedido').val(pedido);

    });

});

</script>

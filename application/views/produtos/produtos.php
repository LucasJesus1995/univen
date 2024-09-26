<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo base_url(); ?>index.php/produtos/gerenciar">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
            <div class="span3">
                <a href="<?php echo base_url(); ?>index.php/produtos/adicionar" class="btn btn-success span12"><i class="icon-plus icon-white"></i> Adicionar Produto</a>
            </div>
        <?php } ?>

        <div class="span3">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Nome do produto a pesquisar" class="span12" value="" >
        </div>
        <div class="span2">
            <select name="tipo" id="tipo" class="span12"> 
                <option value="">Tipo do Produto</option>
                <option value="1">Equipamento</option>
                <option value="2">Item</option>

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
            <i class="icon-barcode"></i>
         </span>
        <h5>Produtos</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Tipo de Produto</th>
            <th>Preço</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td colspan="5">Nenhum Produto Cadastrado</td>
        </tr>
    </tbody>
</table>
</div>
</div>

<?php } else {?>

<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-barcode"></i>
         </span>
        <h5>Produtos</h5>

     </div>

<div class="widget-content nopadding">
<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th>#</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Tipo de Produto</th>
            <th>Preço</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {

            switch ($r->tipo) {
                case '1':
                    $tipo = 'Equipamento';
                    break;
                case '2':
                    $tipo = 'Item';
                    break;
                
                default:
                    $tipo = 'Não possui';
                    break;
            }


            echo '<tr>';
            echo '<td>'.$r->idProdutos.'</td>';

            
                
            
            ?>
            <td style="width:7%">
<?php if ($r->file != null) { ?>
                <a href="<?php echo base_url(); ?>assets/img/produtos/<?php echo $r->file; ?>"><img src="<?php echo base_url(); ?>assets/img/produtos/<?php echo $r->file; ?>" style="height:50px;"></a>
<?php
            }else{

            }
            ?>
            </td>

            <?php
            


            echo '<td>'.$r->descricao.'</td>';
            echo '<td>'.$tipo.'</td>';
            echo '<td>'.number_format($r->precoVenda, 2, ',', '.').'</td>';
            
            echo '<td>';
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/produtos/visualizar/'.$r->idProdutos.'" class="btn tip-top" title="Visualizar Produto"><i class="icon-eye-open"></i></a>  ';
            }
            
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eProduto')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/produtos/editar/'.$r->idProdutos.'" class="btn btn-info tip-top" title="Editar Produto"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dProduto')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" produto="'.$r->idProdutos.'" class="btn btn-danger tip-top" title="Excluir Produto"><i class="icon-remove icon-white"></i></a>';
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
  <form action="<?php echo base_url() ?>index.php/produtos/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Produto</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idProduto" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir este produto?</h5>
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
        
        var produto = $(this).attr('produto');
        $('#idProduto').val(produto);



    });

});

</script>
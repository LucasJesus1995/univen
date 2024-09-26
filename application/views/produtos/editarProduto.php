
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-content nopadding">
            <div class="widget-title">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes do Produto</a></li>
                        <li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos Relacionados</a></li>
                       <!-- <li id="tabServicos"><a href="#tab3" data-toggle="tab">Endereço de Entrega</a></li> -->
                       <!-- <li id="tabAnexos"><a href="#tab4" data-toggle="tab">Anexos</a></li> -->
                    </ul>
                </div>
                    <div class="widget-content tab-content">
                        <div class="tab-pane active" id="tab1" style="min-height: 300px">
                            <div class="accordion" id="collapse-group">
                    <div class="accordion-group widget-box">
                        <div class="accordion-heading">
                            <div class="widget-title">
                                <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                    <span class="icon"><i class="icon-list"></i></span><h5>Editar Produto</h5>
                                </a>
                            </div>
                        </div>
                        <div class="collapse in accordion-body">
                           <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" method="post" class="form-horizontal" >
                    <input type="hidden" name="idProdutos" value="<?php echo $result->idProdutos ?>">
                     <div class="control-group">
                        <label for="descricao" class="control-label">Nome do Produto<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descricao" type="text" name="descricao" value="<?php echo $result->descricao ?>"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Tipo de Produto</label>
                        <div class="controls">
                            <select id="tipo" name="tipo" value="<?php echo $result->tipo ?>">
                            <option <?php if ($result->tipo == '1') {  echo 'selected'; } ?> value="1">Equipamento</option>
                            <option <?php if ($result->tipo == '2') {  echo 'selected'; } ?> value="2">Item</option>
                        </select>
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label">Tipo de Área</label>
                        <div class="controls">
                            <select id="area" name="area">
                            <option value="0">- Selecione -</option>
                            <option <?php if ($result->area_id == '1') {  echo 'selected'; } ?> value="1">Humana</option>
                            <option <?php if ($result->area_id == '2') {  echo 'selected'; } ?> value="2">Veterinária</option>
                            <option <?php if ($result->area_id == '3') {  echo 'selected'; } ?> value="3">Odonto</option>
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Categoria</label>
                        <div class="controls">
                            <select id="categoria" name="categoria">
                            <option  value="0">- Selecione -</option>
                            <option <?php if ($result->categoria == '1') {  echo 'selected'; } ?> value="1">Ultrassom</option>
                            <option <?php if ($result->categoria == '2') {  echo 'selected'; } ?> value="2">Imagem</option>
                            <option <?php if ($result->categoria == '3') {  echo 'selected'; } ?> value="3">Radiologia</option>
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precoVenda" class="control-label">Preço de Venda<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precoVenda" class="money" type="text" name="precoVenda" value="<?php echo $result->precoVenda ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                    <label for="unidade" class="control-label">Unidade<span class="required">*</span></label>
                    <div class="controls">
                        <!--<input id="unidade" type="text" name="unidade" value="<?php echo set_value('unidade'); ?>"  />-->
                        <select id="unidade" name="unidade">
                            <option value="UN">Unidade</option>
                           <!-- <option value="KG">Kilograma</option>
                            <option value="LT">Litro</option>
                            <option value="CX">Caixa</option> -->
                        </select>
                    </div>
                    </div>                     

                    <div class="control-group">
                        <label for="estoque" class="control-label">Estoque<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estoque" type="text" name="estoque" value="<?php echo $result->estoque ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="estoqueMinimo" class="control-label">Estoque Mínimo</label>
                        <div class="controls">
                            <input id="estoqueMinimo" type="text" name="estoqueMinimo" value="<?php echo $result->estoqueMinimo ?>"  />
                        </div>
                    </div>
                     <div class="control-group">
                        <label for="funcao" class="control-label">Função do Produto</label>
                        <div class="controls">
                        <textarea name="funcao" id="funcao" rows="5" value="<?php echo $result->funcao ?>" style="width:70%;height:200px;"><?php echo $result->funcao ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="sobre" class="control-label">Sobre o Produto</label>
                        <div class="controls">
                        <textarea name="sobre" rows="5" value="<?php echo $result->sobre ?>" style="width:70%;height:200px;"><?php echo $result->sobre ?></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Alterar</button>
                                <a href="<?php echo base_url() ?>index.php/produtos" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>

                    
                </form>
            </div>
                        </div>
                    </div>
                </div>

                        </div>


                        <!--Produtos Relacionados-->
                        <br>
                        <div class="tab-pane" id="tab2" style="min-height: 300px">
                            <div class="span12 well" style="padding: 1%; margin-left: 0">
                                <form id="formProdutos" action="<?php echo base_url() ?>index.php/os/adicionarProduto" method="post">
                                    <div class="span8">
                                        <input type="hidden" name="relacionado_id" id="relacionado_id" />
                                        <input type="hidden" name="idProduto" id="idProduto" value="<?php echo $result->idProdutos?>" />
                                        <label for="">Produto</label>
                                        <input type="text" class="span12" name="produto" id="produto" placeholder="Digite o nome do produto" />
                                    </div>
                                    <div class="span2">
                                        <label for="">.</label>
                                        <button class="btn btn-success span12" id="btnAdicionarProduto"><i class="icon-white icon-plus"></i> Adicionar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="span12" id="divProdutos" style="margin-left: 0">
                                <table class="table table-bordered" id="tblProdutos"> 
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Tipo de Produto</th>
                                            <th>Preço</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($produtos != null) {
                                        foreach ($produtos as $p) {
                                            
                                            switch ($p->tipo) {
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
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$tipo.'</td>';
                                            echo '<td>'.$p->precoVenda.'</td>';
                                             echo '<td><a href="" idAcao="'.$p->idProdItem.'" title="Excluir Produto" class="btn btn-danger"><i class="icon-remove icon-white"></i></a></td>';
                                            
                                            echo '</tr>';
                                        }}else {
                                            echo '<tr><td colspan="3">Nenhuma produto relacionado cadastrado.</td></tr>';
                                        }?>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
        </div>

    </div>
</div>
</div>




 




<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/maskmoney.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
    $(".money").maskMoney(); 

     

     $("#produto").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteProduto",
            minLength: 2,
            select: function( event, ui ) {

                 $("#relacionado_id").val(ui.item.id);

            }
      });



      $("#formProdutos").validate({
          
          submitHandler: function( form ){
             
                 var dados = $( form ).serialize();
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/produtos/adicionarRelacionados",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );
                        $("#produto").val('').focus();
                    }
                    else{
                        alert('Ocorreu um erro ao tentar adicionar produto.');
                    }
                  }
                  });

                  return false;
                

             }
             
       });

      $(document).on('click', 'a', function(event) {
            var idProduto = $(this).attr('idAcao');
            
            if((idProduto % 1) == 0){
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/produtos/excluirRelacionados",
                  data: "idProduto="+idProduto,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );
                        
                    }
                    else{
                        alert('Ocorreu um erro ao tentar excluir produto.');
                    }
                  }
                  });
                  return false;
            }
            
       });


});

</script>





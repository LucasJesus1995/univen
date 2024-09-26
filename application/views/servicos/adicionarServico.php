
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Cadastro de Ticket</h5>
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formServico" method="post" class="form-horizontal" >
                    <div class="control-group">
                                            <label for="cliente" class="control-label">Cliente<span class="required">*</span></label>
                                            <div class="controls">
                                            
                                            <input id="cliente" type="text" name="cliente" value="<?php echo set_value('cliente'); ?>"  />
                                            <input id="clientes_id" type="hidden" name="clientes_id" value=""  />
                                        </div>
                                        </div>
                    
                    <div class="control-group">
                        <label for="produto" class="control-label">Produto<span class="required">*</span></label>
                        <div class="controls">
                         
                        <select name="produto" id="produto">
                          <option>- Selecione -</option>
                           <?php
                              if ($produtos != null) {
                                foreach ($produtos as $p) { 
                            ?>
                               
                              <option value="<?php echo $p->idProdutos ?>"><?php echo $p->descricao ?></option>
                                
                            <?php  }} ?>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="tipo" class="control-label">Tipo</label>
                        <div class="controls">
                            <select id="tipo" name="tipo" value="<?php echo set_value('tipo'); ?>">
                            <option value="">- Selecione -</option>
                            <option value="1">Informação</option>
                            <option value="2">Solicitação</option>
                            <option value="3">Reclamação</option>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="motivo" class="control-label">Motivo</label>
                        <div class="controls">
                            <input id="motivo" type="text" name="motivo" value="<?php echo set_value('motivo'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <div class="controls">
                            <textarea id="descricao" name="descricao" value="<?php echo set_value('descricao'); ?>"  /></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/servicos" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
          $(".money").maskMoney();


           $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/servicos/autoCompleteCliente", 
            minLength: 2,
            select: function( event, ui ) {

                 $("#clientes_id").val(ui.item.id);
                 
                

            }
      });

           $('#formServico').validate({
            rules :{
                  nome:{ required: true},
                  
            },
            messages:{
                  nome :{ required: 'Campo Requerido.'}, 
                  
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           }); 
      });
</script>




                                    

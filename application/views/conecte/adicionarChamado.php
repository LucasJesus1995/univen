<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Cadastro de Chamado</h5>
            </div>
            <div class="widget-content nopadding">
               
                <form action="<?php echo current_url(); ?>" id="formChamado" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="produto" class="control-label">Produto</label>
                        <div class="controls">
                         
                         <input type="text" name="produto" id="produto" value="<?php echo set_value('produto'); ?>"/>
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
                                <a href="<?php echo base_url() ?>index.php/mine/chamados" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
           $('#formChamado').validate({
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




                                    

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-truck"></i>
                </span>
                <h5>Cadastro de Pedido</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formPedido" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="protocolo" class="control-label">Protocolo Proposta<span class="required">*</span></label>
                        <div class="controls">
                            <input id="protocolo" type="text" name="protocolo" value="<?php echo set_value('protocolo'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="envio" class="control-label">Estado de Envio<span class="required">*</span></label>
                        <div class="controls">
                            <select id="envio" name="envio" value="<?php echo set_value('envio'); ?>">
                      <option value="0">- Selecione -</option>
                      <option value="4">Encaminhado</option>
                      <option value="3">Em Separação</option>
                      <option value="2">Em Transporte</option>
                      <option value="1">Entregue</option>
                    </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="rastreio" class="control-label">Rastreamento</label>
                        <div class="controls">
                            <input id="rastreio" class="rastreio" type="text" name="rastreio" value="<?php echo set_value('rastreio'); ?>"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/pedidos" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formPedido').validate({
            rules :{
                  protocolo:{ required: true},
                  envio:{ required: true},
                  
            },
            messages:{
                  protocolo :{ required: 'Campo Requerido.'},
                  envio :{ required: 'Campo Requerido.'},
                  

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
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
                                                <h5>Editar Ticket</h5>
                                          </div>
                                          <div class="widget-content nopadding">
                                                <?php echo $custom_error; ?>
                                                <form action="<?php echo current_url(); ?>" id="formServico" method="post" class="form-horizontal" >
                                                    <?php echo form_hidden('idServicos', $result->idServicos) ?>


                                                      <div class="control-group">
                                            <label for="cliente" class="control-label">Cliente<span class="required">*</span></label>
                                            <div class="controls">
                                            
                                            <input id="cliente" type="text" name="cliente" value="<?php echo $result->nome ?>"  />
                                            <input id="clientes_id" type="hidden" name="clientes_id" value="<?php echo $result->clientes_id ?>"  />
                                        </div>
                                        </div>
                    <div class="control-group">
                        <label for="produto" class="control-label">Produto</label>
                        <div class="controls">
                         <select name="produto" id="produto">
                          <option>- Selecione -</option>
                           <?php
                              if ($produtos != null) {
                                foreach ($produtos as $p) { 
                            ?>
                               
                              <option <?php if ($result->produto == $p->idProdutos) {  echo 'selected'; } ?> value="<?php echo $p->idProdutos ?>"><?php echo $p->descricao ?></option>
                                
                            <?php  }} ?>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="tipo" class="control-label">Tipo</label>
                        <div class="controls">
                          <select id="tipo" name="tipo">
                            <option value="">- Selecione -</option>
                            <option <?php if ($result->tipo == '1') {  echo 'selected'; } ?> value="1">Informação</option>
                            <option <?php if ($result->tipo == '2') {  echo 'selected'; } ?> value="2">Solicitação</option>
                            <option <?php if ($result->tipo == '3') {  echo 'selected'; } ?> value="3">Reclamação</option>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="motivo" class="control-label">Motivo</label>
                        <div class="controls">
                            <input id="motivo" type="text" name="motivo" value="<?php echo $result->motivo ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <div class="controls">
                            <textarea id="descricao" name="descricao"  /><?php echo $result->descricao ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="solucao" class="control-label">Solução</label>
                        <div class="controls">
                            <textarea id="solucao" name="solucao"  /><?php echo $result->solucao ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="status" class="control-label">Status</label>
                        <div class="controls">
                          <select id="status" name="status">
                            <option value="">- Selecione -</option>
                            <option <?php if ($result->status == '0') {  echo 'selected'; } ?> value="0">Aberto</option>
                            <option <?php if ($result->status == '1') {  echo 'selected'; } ?> value="1">Concluído</option>
                            <option <?php if ($result->status == '2') {  echo 'selected'; } ?> value="2">Respondido</option>
                        </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="prioridade" class="control-label">Prioridade</label>
                        <div class="controls">
                          <select id="prioridade" name="prioridade">
                            <option value="">- Selecione -</option>
                            <option <?php if ($result->prioridade == '1') {  echo 'selected'; } ?> value="1">Alta</option>
                            <option <?php if ($result->prioridade == '2') {  echo 'selected'; } ?> value="2">Médio</option>
                            <option <?php if ($result->prioridade == '3') {  echo 'selected'; } ?> value="3">Baixa</option>
                        </select>
                        </div>
                    </div>

                                                      <div class="form-actions">
                                                      <div class="span12">
                                                            <div class="span6 offset3">
                                                            <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Alterar</button>
                                                            <a href="<?php echo base_url()?>index.php/servicos" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
                  preco:{ required: true}
            },
            messages:{
                  nome :{ required: 'Campo Requerido.'},
                  preco :{ required: 'Campo Requerido.'}
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




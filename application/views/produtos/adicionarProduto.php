<style>
/* Hiding the checkbox, but allowing it to be focused */
.badgebox
{
    opacity: 0;
}

.badgebox + .badge
{
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
	width: 27px;
}

.badgebox:focus + .badge
{
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */
    
    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked + .badge
{
    /* Move the check mark back when checked */
	text-indent: 0;
}
</style>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-align-justify"></i>
                </span>
                <h5>Cadastro de Produto</h5> 
            </div>
            <div class="widget-content nopadding">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" enctype="multipart/form-data" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="preco" class="control-label"><span class="required">Foto*</span></label>
                        <div class="controls">
                            <input id="arquivo" type="file" name="userfile" /> (png|jpg|jpeg)
                        </div>
                    </div>
                     <div class="control-group">
                        <label for="descricao" class="control-label">Nome do Produto<span class="required">*</span></label>
                        <div class="controls">
                            <input id="descricao" type="text" name="descricao" value="<?php echo set_value('descricao'); ?>"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Tipo de Produto</label>
                        <div class="controls">
                            <select id="tipo" name="tipo" value="<?php echo set_value('tipo'); ?>">
                            <option value="1">Equipamento</option>
                            <option value="2">Item</option>
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Tipo de Área</label>
                        <div class="controls">
                            <select id="area" name="area" value="<?php echo set_value('area'); ?>">
                            <option value="0">- Selecione -</option>
                            <option value="1">Humana</option>
                            <option value="2">Veterinária</option>
                            <option value="3">Odonto</option>
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Categoria</label>
                        <div class="controls">
                            <select id="categoria" name="categoria" value="<?php echo set_value('categoria'); ?>">
                            <option value="0">- Selecione -</option>
                            <option value="1">Ultrassom</option>
                            <option value="2">Imagem</option>
                            <option value="3">Radiologia</option>
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="precoVenda" class="control-label">Preço de Venda<span class="required">*</span></label>
                        <div class="controls">
                            <input id="precoVenda" class="money" type="text" name="precoVenda" value="<?php echo set_value('precoVenda'); ?>"  />
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
                            <input id="estoque" type="text" name="estoque" value="<?php echo set_value('estoque'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="estoqueMinimo" class="control-label">Estoque Mínimo</label>
                        <div class="controls">
                            <input id="estoqueMinimo" type="text" name="estoqueMinimo" value="<?php echo set_value('estoqueMinimo'); ?>"  />
                        </div>
                    </div>
                     <div class="control-group">
                        <label for="funcao" class="control-label">Função do Produto</label>
                        <div class="controls">
                        <textarea name="funcao" id="funcao" rows="5" value="<?php echo set_value('funcao'); ?>" style="width:70%;height:200px;"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="sobre" class="control-label">Sobre o Produto</label>
                        <div class="controls">
                        <textarea name="sobre" id="sobre" rows="5" value="<?php echo set_value('sobre'); ?>" style="width:70%;height:200px;"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/produtos" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>

                    
                </form>
            </div>

         </div>
     </div>
</div>

<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script src="<?php echo base_url();?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".money").maskMoney();

        $('#formProduto').validate({
            rules :{
                  descricao: { required: true},
                  unidade: { required: true},
                  precoCompra: { required: true},
                  precoVenda: { required: true},
                  userfile:{ required: true},
                  estoque: { required: true}
            },
            messages:{
                  descricao: { required: 'Campo Requerido.'},
                  unidade: {required: 'Campo Requerido.'},
                  precoCompra: { required: 'Campo Requerido.'},
                  precoVenda: { required: 'Campo Requerido.'},
                  userfile :{ required: 'Campo Requerido.'},
                  estoque: { required: 'Campo Requerido.'}
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




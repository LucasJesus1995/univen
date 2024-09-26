<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-file"></i>
                </span>
                <h5>Cadastro de Proposta</h5>
            </div>
            <div class="widget-content nopadding">
                

                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes da Proposta</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
 
                            <div class="span12" id="divCadastrarOs">
                                <?php if ($custom_error == true) { ?>
                                <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Dados incompletos, verifique os campos com asterisco ou se selecionou corretamente cliente e responsável.</div>
                                <?php } ?>
                                <form action="<?php echo current_url(); ?>" method="post" id="formOs">

                                    <div class="span12" style="padding: 1%">
                                        <div class="span6">
                                            <label for="cliente">Cliente<span class="required">* &nbsp;</span>
                                        <a class="tip-top" title="Adicionar Novo Cliente" href="#modal-cliente" id="btn-cliente" role="button" data-toggle="modal" ><i class="icon-plus icon-white"></i></a>
                                            
                                            <input style="position: relative;top:6px" id="cliente" class="span12" type="text" name="cliente" value=""  />
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value=""  />
                                        </div>
                                        <div class="span6">
                                            <label for="tecnico">Origem<span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value=""  />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value=""  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="origemProposta">Origem da Proposta</label>
                                            <select class="span12" name="origemProposta" id="origemProposta" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">Prospecção</option>
                                                <option value="2">Lead</option>
                                            </select>
                                        </div>

                                         <div class="span3">
                                         <label for="rep">REP.<span class="required">*</span></label>
                                            <select class="span12" name="rep" id="rep">
                                                <option value="">- Selecione -</option>
                                                 <?php
                                        if ($representante != null) {
                                                foreach ($representante as $t) {
                                                ?>
                               
                                            <option value="<?php echo $t->idUsuarios ?>"><?php echo $t->nome ?></option>
                                
                                        <?php  }}
                       

                        ?>
                                            </select>
                                        </div>
                                        
                                        <div class="span3">
                                            <label for="comissao">Comissão</label>
                                            <select class="span12" name="comissao" id="comissao" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">2,20%</option>
                                                <option value="2">3,60%</option>
                                                <option value="3">5,00%</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="tipo">Tipo<span class="required">*</span></label>
                                            <select class="span12" name="tipo" id="tipo" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">Proposta Venda</option>
                                                <option value="2">Contrato Venda</option>
                                                <option value="3">Contrato Locação C/opção de compra</option>
                                                <option value="4">Contrato Locação S/opção de compra</option>
                                                <option value="5">Contrato Comodato</option>
                                                <option value="6">Contrato de Cessão de Uso</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span3">
                                            <label for="business">Business Unit</label>
                                            <select class="span12" name="business" id="business" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">Humana</option>
                                                <option value="2">Veterinária</option>
                                                <option value="3">Odonto</option>
                                            </select>
                                        </div>
                                    
                                        <div class="span3">
                                            <label for="status">Status<span class="required">*</span></label>
                                            <select class="span12" name="status" id="status" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="2">Pendente</option>
                                                <option value="3">Em Análise</option>
                                                <option value="4">Aprovado</option>
                                                <option value="5">Reprovado</option>
                                                <option value="6">Cancelado</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                                            <input id="dataInicial" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y'); ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="dataFinal">Data Final</label>
                                            <input id="dataFinal" class="span12 datepicker" type="text" name="dataFinal" value=""  />
                                        </div>

                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span3">
                                            <label for="faturamento">Tipo Faturamento de Venda</label>
                                            <select class="span12" name="faturamento" id="faturamento" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">70% Produto e 30% Serviços</option>
                                                <option value="2">100% Produto</option>
                                                <option value="3">Diferenciado</option>
                                            </select>
                                        </div>
                                    <div class="span3">
                                            <label for="frete">Frete</label>
                                            <select class="span12" name="frete" id="frete" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">CIF</option>
                                                <option value="2">FOB</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="garantia">Garantia</label>
                                            <select class="span12" name="garantia" id="garantia" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">12 Meses</option>
                                                <option value="2">24 Meses</option>
                                                <option value="3">36 Meses</option>
                                                <option value="4">48 Meses</option>
                                                <option value="5">Todo Contrato</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="prazo">Prazo de PGTO.</label>
                                            <select class="span12" name="prazo" id="prazo" value="">
                                                <option value="0">- Selecione -</option>
                                                <option value="1">A Vista Direto</option>
                                                <option value="2">A Vista Finan Bancário</option>
                                                <option value="3">Ato /30 Dias</option>
                                                <option value="4">Ato /30/60 Dias</option>
                                                <option value="5">Ato /30/60/90 Dias</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="parcelas">Parcelas</label>
                                            <select class="span12" name="parcelas" id="parcelas" value="">
                                                <option value="">- Selecione -</option>
                                                <option value="1">12 Meses</option>
                                                <option value="2">24 Meses</option>
                                                <option value="3">36 Meses</option>
                                                <option value="4">48 Meses</option>
                                                <option value="5">60 Meses</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="span12" style="padding: 1%; margin-left: 0">

                                        <div class="span6">
                                            <label for="descricaoProduto">Descrição Produto</label>
                                            <textarea class="span12" name="descricaoProduto" id="descricaoProduto" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="span6">
                                            <label for="observacoes">Observações</label>
                                            <textarea class="span12" name="observacoes" id="observacoes" cols="30" rows="5"></textarea>
                                        </div>

                                    </div>
                                    
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6 offset3" style="text-align: center">
                                            <button class="btn btn-success" id="btnContinuar"><i class="icon-share-alt icon-white"></i> Continuar</button>
                                            <a href="<?php echo base_url() ?>index.php/os" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

                
.
             
        </div>
        
    </div>
</div>
</div>

<!-- Modal Faturar--> 
<div id="modal-cliente" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formCliente" action="<?php echo current_url() ?>" method="post">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Univen E-commerce Admin - Adicionar Novo Cliente</h3>
</div>
<div class="modal-body">
    
    <div class="span12 alert alert-info" style="margin-left: 0"> Obrigatório o preenchimento dos campos com asterisco.</div>
    <div class="span12" style="margin-left: 0"> 
      <label for="nomeCliente">Nome*</label>
      <input class="span12" id="nomeCliente" type="text" name="nomeCliente" value=""  />
    </div> 

   <div class="control-group">
                        <label class="control-label" style="margin-top:10px">Documento<span class="required">*</span></label>
                            <div class="controls">
                            <input type="radio" class="form-control" id="rbCpf" style="height:45px; width:20px;" name="tipoDocumento" onClick="habilitaCampo(this.id)" value="1"><span for="tipoDocumento" class="required"> Pessoa Física</span>
                          
                            <input type="radio" class="form-control" id="rbCnpj"  style="height:45px; width:20px;margin-left: 20px;" name="tipoDocumento" onClick="habilitaCampo(this.id)" value="2"><span for="tipoDocumento" class="required"> Pessoa Jurídica</span>
                            </div>
                    </div>

                    <div  id="txtCpf" style="display: none">


                        <div class="control-group">
                    <!-- CPF -->
                    <label for="cpf" class="control-label">CPF<span class="required">*</span></label>
                    <div class="controls">
                        <input class="span12" id="cpf" type="text" name="documentocpf" value="">
                    </div>
                </div>

                    <!-- Data de Nascimento -->
                    <div class="control-group">
                        <label for="nascimento" class="control-label">Data De Nascimento<span class="required">*</span></label>
                        <div class="controls">
                            <input class="span12" id="nascimento" type="text" name="nascimento" value="">
                        </div>
                    </div>
                </div>
                     <div  id="txtCnpj" style="display: none">

                    <div class="control-group">
                    <!-- CNPJ -->
                    <label for="cnpj" class="control-label">CNPJ<span class="required">*</span></label>
                    <div class="controls">
                        <input class="span12" id="cnpj" type="text" name="documentocnpj" value="">
                    </div>
                </div>
                </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="rg">Inscrição Estadual/RG*</label>
        <input class="span12 rg" id="rg" type="text" name="rg" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="razao">Razão Social</label>
        <input class="span12" id="razao" type="text" name="razao" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="telefone">Telefone*</label>
        <input class="span12 telefone" id="telefone" type="text" name="telefone" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="email">Email</label>
        <input class="span12" id="email" type="email" name="email" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="cep">CEP</label>
        <input class="span12 cep" id="cep" type="text" name="cep" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="numero">Número</label>
        <input class="span12" id="numero" type="text" name="numero" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="rua">Rua</label>
        <input class="span12" id="rua" type="text" name="rua" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="bairro">Bairro</label>
        <input class="span12" id="bairro" type="text" name="bairro" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="cidade">Cidade</label>
        <input class="span12" id="cidade" type="text" name="cidade" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="estado">Estado</label>
        <select class="span12" id="estado" name="estado">
                      <option value="">- Selecione -</option>
                      <option value="1">Acre</option>
                      <option value="2">Alagoas</option>
                      <option value="3">Amazonas</option>
                      <option value="4">Amapá</option>
                      <option value="5">Bahia</option>
                      <option value="6">Ceará</option>
                      <option value="7">Distrito Federal</option>
                      <option value="8">Espírito Santo</option>
                      <option value="9">Goiás</option>
                      <option value="10">Maranhão</option>
                      <option value="11">Minas Gerais</option>
                      <option value="12">Mato Grosso do Sul</option>
                      <option value="13">Mato Grosso</option>
                      <option value="14">Pará</option>
                      <option value="15">Paraíba</option>
                      <option value="16">Pernambuco</option>
                      <option value="17">Piauí</option>
                      <option value="18">Paraná</option>
                      <option value="19">Rio de Janeiro</option>
                      <option value="20">Rio Grande do Norte</option>
                      <option value="21">Rondônia</option>
                      <option value="22">Roraima</option>
                      <option value="23">Rio Grande do Sul</option>
                      <option value="24">Santa Catarina</option>
                      <option value="25">Sergipe</option>
                      <option value="26">São Paulo</option>
                      <option value="27">Tocantins</option>
                    </select>
      </div>
    </div>
    
    <h3> Contato Comercial</h3>
      <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="telefoneC">Telefone</label>
        <input class="span12 telefone" id="telefoneC" type="text" name="telefoneC" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="emailC">E-mail</label>
        <input class="span12" id="emailC" type="text" name="emailC" value="" />
      </div>
    </div>


    <h3> Contato Financeiro</h3>
    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="telefoneF">Telefone</label>
        <input class="span12 telefone" id="telefoneF" type="text" name="telefoneF" value="" />
      </div>
    </div>

    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="emailF">E-mail</label>
        <input class="span12" id="emailF" type="text" name="emailF" value="" />
      </div>
    </div>

    </div>
  
<div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-cliente">Cancelar</button>
  <button class="btn btn-success">Adicionar</button>
</div>
</form>
</div>

<script type="text/javascript">
$(document).ready(function(){

      $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteCliente",
            minLength: 1,
            select: function( event, ui ) {

                 $("#clientes_id").val(ui.item.id);
                

            }
      });

      $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 1,
            select: function( event, ui ) {

                 $("#usuarios_id").val(ui.item.id);


            }
      });


      $("#representante").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteRepresentante",
            minLength: 2,
            select: function( event, ui ) {

                 $("#rep_id").val(ui.item.id);


            }
      });

      
      

      $("#formOs").validate({
          rules:{
             nome: {required:true},
             tecnico: {required:true},
             dataInicial: {required:true}
          },
          messages:{
             cliente: {required: 'Campo Requerido.'},
             tecnico: {required: 'Campo Requerido.'},
             dataInicial: {required: 'Campo Requerido.'}
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

    $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

    $("#formCliente").validate({
          rules:{
             nomeCliente: {required:true},
             documento: {required:true},
             rg: {required:true},
             telefone: {required:true}
      
          },
          messages:{
             nomeCliente: {required: 'Campo Requerido.'},
             documento: {required: 'Campo Requerido.'},
             rg: {required: 'Campo Requerido.'},
             telefone: {required: 'Campo Requerido.'}
          },
          submitHandler: function( form ){       
            var dados = $( form ).serialize();
            $('#btn-cancelar-cliente').trigger('click');
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>index.php/clientes/adicionar",
              data: dados,
              dataType: 'json',
              success: function(data)
              {
                if(data.result == true){
                    
                    window.location.reload(true);
                }
                else{
                    alert('Ocorreu um erro ao tentar adicionar cliente.');
                    $('#progress-cliente').hide();
                }
              }
              });

              return false;
          }
     });
   
});




</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">

    function habilitaCampo(qual)
  {
    document.getElementById("txtCpf").style.display = qual == "rbCpf" ? "block" : "none";
    document.getElementById("txtCnpj").style.display = qual == "rbCpf" ? "none" : "block";
  }

    $(".rg").mask("00.000.000-0");

    $(".nasc").mask("00/00/0000");

    $(".cep").mask("00000-000");
    
    $(".telefone, .celular").keydown(function(){
    
    try {
        $(".telefone, .celular").unmask();
    } catch (e) {}

    var tamanho = $(".telefone, .celular").val().length;

    if(tamanho < 10){
        $(".telefone, .celular").mask("(00) 0000-0000");
    } else {
        $(".telefone, .celular").mask("(00) 0 0000-0000");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});


    
    $(".cpfcnpj").keydown(function(){
    
    try {
        $(".cpfcnpj").unmask();
    } catch (e) {}

    var tamanho = $(".cpfcnpj").val().length;

    if(tamanho < 11){
        $(".cpfcnpj").mask("999.999.999-99");
    } else {
        $(".cpfcnpj").mask("99.999.999/9999-99");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});

    </script>


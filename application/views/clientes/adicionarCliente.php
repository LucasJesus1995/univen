<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>"  />
                        </div>
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
                        <input id="cpf" type="text" name="documentocpf" value="<?php echo set_value('documentocpf'); ?>">
                    </div>
                </div>

                    <!-- Data de Nascimento -->
                    <div class="control-group">
                        <label for="nascimento" class="control-label">Data De Nascimento<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nascimento" type="text" name="nascimento" value="<?php echo set_value('nascimento'); ?>">
                        </div>
                    </div>
                        
                    



                </div>
                     <div  id="txtCnpj" style="display: none">

                    <div class="control-group">
                    <!-- CNPJ -->
                    <label for="cnpj" class="control-label">CNPJ<span class="required">*</span></label>
                    <div class="controls">
                        <input id="cnpj" type="text" name="documentocnpj" value="<?php echo set_value('documentocnpj'); ?>">
                    </div>
                </div>
                </div>

                    <div class="control-group">
                        <label for="rg" class="control-label">Inscrição Estadual/RG<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rg" class="rg" type="text" name="rg" value="<?php echo set_value('rg'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="razao" class="control-label">Razão Social</label>
                        <div class="controls">
                            <input id="razao" type="text" name="razao" value="<?php echo set_value('razao'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" class="telefone" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label for="email" class="control-label">Email</label>
                        <div class="controls">
                            <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP</label>
                        <div class="controls">
                            <input id="cep" class="cep" type="text" name="cep" value="<?php echo set_value('cep'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="numero" class="control-label">Número</label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?php echo set_value('numero'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Rua</label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value="<?php echo set_value('rua'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Bairro</label>
                        <div class="controls">
                            <input id="bairro" type="text" name="bairro" value="<?php echo set_value('bairro'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade</label>
                        <div class="controls">
                            <input id="cidade" type="text" name="cidade" value="<?php echo set_value('cidade'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">Estado</label>
                        <div class="controls">
                    <select id="estado" name="estado" value="<?php echo set_value('estado'); ?>">
                      <option value="0">- Selecione -</option>
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

                    <hr>
                    <div class="control-group" class="control-label">
                        <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contato Comercial</h4>
                        <label for="telefoneC" class="control-label">Telefone</label>
                        <div class="controls">
                            <input id="telefoneC" class="telefone" type="text" name="telefoneC" value="<?php echo set_value('telefoneC'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="emailC" class="control-label">E-mail</label>
                        <div class="controls">
                            <input id="emailC" type="text" name="emailC" value="<?php echo set_value('emailC'); ?>"  />
                        </div>
                    </div>
                    <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contato Financeiro</h4>
                    <div class="control-group" class="control-label">
                        <label for="telefoneF" class="control-label">Telefone</label>
                        <div class="controls">
                            <input id="telefoneF" class="telefone" type="text" name="telefoneF" value="<?php echo set_value('telefoneF'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="emailF" class="control-label">E-mail</label>
                        <div class="controls">
                            <input id="emailF" type="text" name="emailF" value="<?php echo set_value('emailF'); ?>"  />
                        </div>
                    </div>
                    <hr>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  tipoDocumento:{ required: true},
                  telefone:{ required: true},
                  email:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  tipoDocumento :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  bairro:{ required: 'Campo Requerido.'},
                  cidade:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'}

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
<script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulario_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                document.getElementById("numero").focus();
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulario_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulario_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulario_cep();
                }
            });
        });

    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
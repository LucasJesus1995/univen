
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
                <h5>Editar Proposta</h5>
            </div>
            <div class="widget-content nopadding">


                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes da Proposta</a></li>
                        <li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos</a></li>
                       <li id="tabServicos"><a href="#tab3" data-toggle="tab">Endereço de Entrega</a></li>
                       <li id="tabAnexos"><a href="#tab4" data-toggle="tab">Endereço de Cobrança</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divCadastrarOs"> 
                                
                                <form action="<?php echo current_url(); ?>" method="post" id="formOs">
                                    <?php echo form_hidden('idOs', $result->idOs) ?>
                                    
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <h3>#Protocolo: <?php echo $result->idOs ?></h3>
                                        
                                        <div class="span6" style="margin-left: 0">
                                            <label for="cliente">Cliente<span class="required">*</span></label>
                                            <input id="cliente" class="span12" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>"  />
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="<?php echo $result->clientes_id ?>"  />
                                            <input id="valorTotal" type="hidden" name="valorTotal" value=""  />
                                        </div>
                                        <div class="span6">
                                            <label for="tecnico">Origem<span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value="<?php echo $result->nome ?>"  />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?php echo $result->usuarios_id ?>"  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="origemProposta">Origem da Proposta<span class="required">*</span></label>
                                            <select class="span12" name="origemProposta" id="origemProposta" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->origemProposta == '1') {  echo 'selected'; } ?> value="1">Prospecção</option>
                                                <option <?php if ($result->origemProposta == '2') {  echo 'selected'; } ?> value="2">Lead</option>
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
                               
                                            <option <?php if ($result->rep == $t->idUsuarios) {  echo 'selected'; } ?> value="<?php echo $t->idUsuarios ?>"><?php echo $t->nome ?></option>
                                
                                        <?php  }}
                       

                        ?>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="comissao">Comissão</label>
                                            <select class="span12" name="comissao" id="comissao" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->comissao == '1') {  echo 'selected'; } ?> value="1">2,20%</option>
                                                <option <?php if ($result->comissao == '2') {  echo 'selected'; } ?> value="2">3,60%</option>
                                                <option <?php if ($result->comissao == '3') {  echo 'selected'; } ?> value="3">5,00%</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="tipo">Tipo<span class="required">*</span></label>
                                            <select class="span12" name="tipo" id="tipo" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->tipo == '1') {  echo 'selected'; } ?> value="1">Proposta Venda</option>
                                                <option <?php if ($result->tipo == '2') {  echo 'selected'; } ?> value="2">Contrato Venda</option>
                                                <option <?php if ($result->tipo == '3') {  echo 'selected'; } ?> value="3">Contrato Locação C/opção de compra</option>
                                                <option <?php if ($result->tipo == '4') {  echo 'selected'; } ?> value="4">Contrato Locação S/opção de compra</option>
                                                <option <?php if ($result->tipo == '5') {  echo 'selected'; } ?> value="5">Contrato Comodato</option>
                                                <option <?php if ($result->tipo == '6') {  echo 'selected'; } ?> value="6">Contrato de Cessão de Uso</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span3">
                                            <label for="business">Business Unit
                                            <select class="span12" name="business" id="business" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->business == '1') {  echo 'selected'; } ?> value="1">Humana</option>
                                                <option <?php if ($result->business == '2') {  echo 'selected'; } ?> value="2">Veterinária</option>
                                                <option <?php if ($result->business == '3') {  echo 'selected'; } ?> value="3">Odonto</option>
                                            </select>
                                        </div>
                                    
                                        <div class="span3">
                                            <label for="status">Status<span class="required">*</span></label>
                                            <select class="span12" name="status" id="status" value="">
                                                <option <?php if ($result->status == '1') {  echo 'selected'; } ?> value="1">Aguardando Cliente</option>
                                                <option <?php if ($result->status == '2') { echo 'selected'; } ?> value="2">Pendente</option>
                                                <option <?php if ($result->status == '3') { echo 'selected'; } ?> value="3">Em Análise</option>
                                                <option <?php if ($result->status == '4') { echo 'selected'; } ?> value="4">Aprovado</option>
                                                <option <?php if ($result->status == '5') { echo 'selected'; } ?> value="5">Reprovado</option>
                                                <option <?php if ($result->status == '6') { echo 'selected'; } ?> value="6">Cancelado</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                                            <input id="dataInicial" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y', strtotime($result->dataInicial)); ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="dataFinal">Data Final</label>
                                            <input id="dataFinal" class="span12 datepicker" type="text" name="dataFinal" value="<?php echo date('d/m/Y', strtotime($result->dataFinal)); ?>"  />
                                        </div>

                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span3">
                                            <label for="faturamento">Tipo Faturamento de Venda</label>
                                            <select class="span12" name="faturamento" id="faturamento" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->tipoFaturamento == '1') { echo 'selected'; } ?> value="1">70% Produto e 30% Serviços</option>
                                                <option <?php if ($result->tipoFaturamento == '2') { echo 'selected'; } ?> value="2">100% Produto</option>
                                                <option <?php if ($result->tipoFaturamento == '3') { echo 'selected'; } ?> value="3">Diferenciado</option>
                                            </select>
                                        </div>
                                    <div class="span3">
                                            <label for="frete">Frete</label>
                                            <select class="span12" name="frete" id="frete" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->frete == '1') { echo 'selected'; } ?> value="1">CIF</option>
                                                <option <?php if ($result->frete == '2') { echo 'selected'; } ?> value="2">FOB</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="garantia">Garantia</label>
                                            <select class="span12" name="garantia" id="garantia" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->garantia == '1') { echo 'selected'; } ?> value="1">12 Meses</option>
                                                <option <?php if ($result->garantia == '2') { echo 'selected'; } ?> value="2">24 Meses</option>
                                                <option <?php if ($result->garantia == '3') { echo 'selected'; } ?> value="3">36 Meses</option>
                                                <option <?php if ($result->garantia == '4') { echo 'selected'; } ?> value="4">48 Meses</option>
                                                <option <?php if ($result->garantia == '5') { echo 'selected'; } ?> value="5">Todo Contrato</option>
                                            </select>
                                        </div>
                                        <div class="span3">
                                            <label for="prazo">Prazo de PGTO.</label>
                                            <select class="span12" name="prazo" id="prazo" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->prazoPg == '1') { echo 'selected'; } ?> value="1">A Vista Direto</option>
                                                <option <?php if ($result->prazoPg == '2') { echo 'selected'; } ?> value="2">A Vista Finan Bancário</option>
                                                <option <?php if ($result->prazoPg == '3') { echo 'selected'; } ?> value="3">Ato /30 Dias</option>
                                                <option <?php if ($result->prazoPg == '4') { echo 'selected'; } ?> value="4">Ato /30/60 Dias</option>
                                                <option <?php if ($result->prazoPg == '5') { echo 'selected'; } ?> value="5">Ato /30/60/90 Dias</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="parcelas">Parcelas</label>
                                            <select class="span12" name="parcelas" id="parcelas" value="">
                                                <option value="">- Selecione -</option>
                                                <option <?php if ($result->parcelas == '1') { echo 'selected'; } ?> value="1">12 Meses</option>
                                                <option <?php if ($result->parcelas == '2') { echo 'selected'; } ?> value="2">24 Meses</option>
                                                <option <?php if ($result->parcelas == '3') { echo 'selected'; } ?> value="3">36 Meses</option>
                                                <option <?php if ($result->parcelas == '4') { echo 'selected'; } ?> value="4">48 Meses</option>
                                                <option <?php if ($result->parcelas == '5') { echo 'selected'; } ?> value="5">60 Meses</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="span12" style="padding: 1%; margin-left: 0">

                                        <div class="span6">
                                            <label for="descricaoProduto">Descrição do Produto</label>
                                            <textarea class="span12" name="descricaoProduto" id="descricaoProduto" cols="30" rows="5"><?php echo $result->descricaoProduto?></textarea>
                                        </div>
                                        <div class="span6">
                                            <label for="observacoes">Observações</label>
                                            <textarea class="span12" name="observacoes" id="observacoes" cols="30" rows="5"><?php echo $result->observacoes ?></textarea>
                                        </div>

                                    </div>
                                    
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6 offset3" style="text-align: center">
                                            <?php if ($result->faturado == 0) { ?>
                                                <a href="#modal-faturar" id="btn-faturar" role="button" data-toggle="modal" class="btn btn-success"><i class="icon-file"></i> Faturar</a>
                                            <?php } ?>
                                            <button class="btn btn-success" id="btnContinuar"><i class="icon-white icon-ok"></i> Alterar</button>
                                            <a href="<?php echo base_url() ?>index.php/os/visualizar/<?php echo $result->idOs; ?>" class="btn btn-primary"><i class="icon-eye-open"></i> Visualizar Proposta</a>
                                            <a href="<?php echo base_url() ?>index.php/os" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>


                        <!--Produtos-->
                        <div class="tab-pane" id="tab2">
                            <div class="span12 well" style="padding: 1%; margin-left: 0">
                                <form id="formProdutos" action="<?php echo base_url() ?>index.php/os/adicionarProduto" method="post">
                                    <div class="span8">
                                        <input type="hidden" name="idProduto" id="idProduto" />
                                        <input type="hidden" name="idOsProduto" id="idOsProduto" value="<?php echo $result->idOs?>" />
                                        <input type="hidden" name="estoque" id="estoque" value=""/>
                                        <input type="hidden" name="preco" id="preco" value=""/>
                                        <label for="">Produto</label>
                                        <input type="text" class="span12" name="produto" id="produto" placeholder="Digite o nome do produto" />
                                    </div>
                                    <div class="span2">
                                        <label for="">Quantidade</label>
                                        <input type="text" placeholder="Quantidade" id="quantidade" name="quantidade" class="span12" />
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
                                            <th>Quantidade</th>
                                            <th>Ações</th>
                                            <th>Sub-total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        foreach ($produtos as $p) {
                                            
                                            $total = $total + $p->precoVenda;
                                            echo '<tr>';
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$p->quantidade.'</td>';
                                            echo '<td><a href="" idAcao="'.$p->idProdutos_os.'" prodAcao="'.$p->idProdutos.'" quantAcao="'.$p->quantidade.'" title="Excluir Produto" class="btn btn-danger"><i class="icon-remove icon-white"></i></a></td>';
                                            echo '<td>R$ '.number_format($p->precoVenda, 2, ',', '.').'</td>';
                                            echo '</tr>';
                                        }?>
                                       
                                        <tr>
                                            <td colspan="3" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php echo number_format($total, 2, ',', '.');?><input type="hidden" id="total-venda" value="<?php echo number_format($total, 2); ?>"></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!--Endereço de Entrega-->
                        <div class="tab-pane" id="tab3">
                            <form action="<?php echo base_url();?>index.php/os/editarEndEntrega" method="post" id="formEntrega">
                            <div class="span12" style="padding: 1%; margin-left: 0">

                                    <div class="span3">
                                    <?php echo form_hidden('idOs', $result->idOs) ?>
                                    <?php echo form_hidden('idClientes', $result->clientes_id) ?>
                                     <?php if (!$result->cep) { ?>
                                         <label for="rua">Rua</label>
                                            <input id="rua" type="text" class="span12" name="rua"   />
                                        </div>
                                    <div class="span3">
                                            <label for="numero">Nº</label>
                                            <input id="numero" type="text" class="span12" name="numero"  />
                                        </div>
                                        <div class="span3">
                                            <label for="bairro">Bairro</label>
                                            <input id="bairro" type="text" class="span12" name="bairro"   />
                                        </div>
                                        <div class="span3">
                                            <label for="cidade">Cidade</label>
                                            <input id="cidade" type="text" class="span12" name="cidade"  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
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
                                    
                                       <div class="span3">
                                            <label for="cep">CEP</label>
                                            <input id="cep" type="text" class="span12" name="cep"   />
                                        </div>
                                           
                                        <?php }else{ ?>
                                            <label for="rua">Rua</label>
                                            <input id="rua" type="text" class="span12" name="rua" value="<?php echo $result->rua ?>"  />
                                        </div>
                                    <div class="span3">
                                            <label for="numero">Nº</label>
                                            <input id="numero" type="text" class="span12" name="numero" value="<?php echo $result->numero ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="bairro">Bairro</label>
                                            <input id="bairro" type="text" class="span12" name="bairro" value="<?php echo $result->bairro ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="cidade">Cidade</label>
                                            <input id="cidade" type="text" class="span12" name="cidade" value="<?php echo $result->cidade ?>"  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="estado">Estado</label>
                                            <select class="span12" id="estado" name="estado">
                       <option <?php if ($result->estado == '1') {  echo 'selected'; } ?> value="1">Acre</option>
                      <option <?php if ($result->estado == '2') {  echo 'selected'; } ?> value="2">Alagoas</option>
                      <option <?php if ($result->estado == '3') {  echo 'selected'; } ?> value="3">Amazonas</option>
                      <option <?php if ($result->estado == '4') {  echo 'selected'; } ?> value="4">Amapá</option>
                      <option <?php if ($result->estado == '5') {  echo 'selected'; } ?> value="5">Bahia</option>
                      <option <?php if ($result->estado == '6') {  echo 'selected'; } ?> value="6">Ceará</option>
                      <option <?php if ($result->estado == '7') {  echo 'selected'; } ?> value="7">Distrito Federal</option>
                      <option <?php if ($result->estado == '8') {  echo 'selected'; } ?> value="8">Espírito Santo</option>
                      <option <?php if ($result->estado == '9') {  echo 'selected'; } ?> value="9">Goiás</option>
                      <option <?php if ($result->estado == '10') {  echo 'selected'; } ?> value="10">Maranhão</option>
                      <option <?php if ($result->estado == '11') {  echo 'selected'; } ?> value="11">Minas Gerais</option>
                      <option <?php if ($result->estado == '12') {  echo 'selected'; } ?> value="12">Mato Grosso do Sul</option>
                      <option <?php if ($result->estado == '13') {  echo 'selected'; } ?> value="13">Mato Grosso</option>
                      <option <?php if ($result->estado == '14') {  echo 'selected'; } ?> value="14">Pará</option>
                      <option <?php if ($result->estado == '15') {  echo 'selected'; } ?> value="15">Paraíba</option>
                      <option <?php if ($result->estado == '16') {  echo 'selected'; } ?> value="16">Pernambuco</option>
                      <option <?php if ($result->estado == '17') {  echo 'selected'; } ?> value="17">Piauí</option>
                      <option <?php if ($result->estado == '18') {  echo 'selected'; } ?> value="18">Paraná</option>
                      <option <?php if ($result->estado == '19') {  echo 'selected'; } ?> value="19">Rio de Janeiro</option>
                      <option <?php if ($result->estado == '20') {  echo 'selected'; } ?> value="20">Rio Grande do Norte</option>
                      <option <?php if ($result->estado == '21') {  echo 'selected'; } ?> value="21">Rondônia</option>
                      <option <?php if ($result->estado == '22') {  echo 'selected'; } ?> value="22">Roraima</option>
                      <option <?php if ($result->estado == '23') {  echo 'selected'; } ?> value="23">Rio Grande do Sul</option>
                      <option <?php if ($result->estado == '24') {  echo 'selected'; } ?> value="24">Santa Catarina</option>
                      <option <?php if ($result->estado == '25') {  echo 'selected'; } ?> value="25">Sergipe</option>
                      <option <?php if ($result->estado == '26') {  echo 'selected'; } ?> value="26">São Paulo</option>
                      <option <?php if ($result->estado == '27') {  echo 'selected'; } ?> value="27">Tocantins</option>
                    </select>
                                        </div>
                                    
                                       <div class="span3">
                                            <label for="cep">CEP</label>
                                            <input id="cep" type="text" class="span12" name="cep" value="<?php echo $result->cep ?>"  />
                                        </div>
                                        <?php 
                                        }?>
                                        <div class="span2">
                                        <label for=""></label>
                                        <button class="btn btn-success span12"><i class="icon-white icon-ok"></i> Alterar</button>
                                    </div>
                                    </div>

                                </form>
                        </div>



                        <!--Endereço de Cobrança-->
                        <div class="tab-pane" id="tab4">

                            <form action="<?php echo base_url();?>index.php/os/editarEndCobranca" method="post" id="formCobranca">
                            <div class="span12" style="padding: 1%; margin-left: 0">

                                    <div class="span3">
                                         <?php echo form_hidden('idOs', $result->idOs) ?>

                                        <?php if (!$cobranca) { ?>

                                            <label for="ruaCB">Rua</label>
                                            <input id="ruaCB" type="text" class="span12" name="ruaCB"   />
                                        </div>
                                    <div class="span3">
                                            <label for="numeroCB">Nº</label>
                                            <input id="numeroCB" type="text" class="span12" name="numeroCB"  />
                                        </div>
                                        <div class="span3">
                                            <label for="bairroCB">Bairro</label>
                                            <input id="bairroCB" type="text" class="span12" name="bairroCB"   />
                                        </div>
                                        <div class="span3">
                                            <label for="cidadeCB">Cidade</label>
                                            <input id="cidadeCB" type="text" class="span12" name="cidadeCB"  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="estadoCB">Estado</label>
                                            <select class="span12" id="estadoCB" name="estadoCB">
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
                                    
                                       <div class="span3">
                                            <label for="cepCB">CEP</label>
                                            <input id="cepCB" type="text" class="span12" name="cepCB"   />
                                        </div>
                                           
                                        <?php }else{ ?>
                                            <label for="ruaCB">Rua</label>
                                            <input id="ruaCB" type="text" class="span12" name="ruaCB" value="<?php echo $cobranca->rua ?>"  />
                                        </div>
                                    <div class="span3">
                                            <label for="numeroCB">Nº</label>
                                            <input id="numeroCB" type="text" class="span12" name="numeroCB" value="<?php echo $cobranca->numero ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="bairroCB">Bairro</label>
                                            <input id="bairroCB" type="text" class="span12" name="bairroCB" value="<?php echo $cobranca->bairro ?>"  />
                                        </div>
                                        <div class="span3">
                                            <label for="cidadeCB">Cidade</label>
                                            <input id="cidadeCB" type="text" class="span12" name="cidadeCB" value="<?php echo $cobranca->cidade ?>"  />
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                    <div class="span3">
                                            <label for="estadoCB">Estado</label>
                                            <select class="span12" id="estadoCB" name="estadoCB">
                      <option value="">- Selecione -</option>
                      <option <?php if ($cobranca->estado == '1') {  echo 'selected'; } ?> value="1">Acre</option>
                      <option <?php if ($cobranca->estado == '2') {  echo 'selected'; } ?> value="2">Alagoas</option>
                      <option <?php if ($cobranca->estado == '3') {  echo 'selected'; } ?> value="3">Amazonas</option>
                      <option <?php if ($cobranca->estado == '4') {  echo 'selected'; } ?> value="4">Amapá</option>
                      <option <?php if ($cobranca->estado == '5') {  echo 'selected'; } ?> value="5">Bahia</option>
                      <option <?php if ($cobranca->estado == '6') {  echo 'selected'; } ?> value="6">Ceará</option>
                      <option <?php if ($cobranca->estado == '7') {  echo 'selected'; } ?> value="7">Distrito Federal</option>
                      <option <?php if ($cobranca->estado == '8') {  echo 'selected'; } ?> value="8">Espírito Santo</option>
                      <option <?php if ($cobranca->estado == '9') {  echo 'selected'; } ?> value="9">Goiás</option>
                      <option <?php if ($cobranca->estado == '10') {  echo 'selected'; } ?> value="10">Maranhão</option>
                      <option <?php if ($cobranca->estado == '11') {  echo 'selected'; } ?> value="11">Minas Gerais</option>
                      <option <?php if ($cobranca->estado == '12') {  echo 'selected'; } ?> value="12">Mato Grosso do Sul</option>
                      <option <?php if ($cobranca->estado == '13') {  echo 'selected'; } ?> value="13">Mato Grosso</option>
                      <option <?php if ($cobranca->estado == '14') {  echo 'selected'; } ?> value="14">Pará</option>
                      <option <?php if ($cobranca->estado == '15') {  echo 'selected'; } ?> value="15">Paraíba</option>
                      <option <?php if ($cobranca->estado == '16') {  echo 'selected'; } ?> value="16">Pernambuco</option>
                      <option <?php if ($cobranca->estado == '17') {  echo 'selected'; } ?> value="17">Piauí</option>
                      <option <?php if ($cobranca->estado == '18') {  echo 'selected'; } ?> value="18">Paraná</option>
                      <option <?php if ($cobranca->estado == '19') {  echo 'selected'; } ?> value="19">Rio de Janeiro</option>
                      <option <?php if ($cobranca->estado == '20') {  echo 'selected'; } ?> value="20">Rio Grande do Norte</option>
                      <option <?php if ($cobranca->estado == '21') {  echo 'selected'; } ?> value="21">Rondônia</option>
                      <option <?php if ($cobranca->estado == '22') {  echo 'selected'; } ?> value="22">Roraima</option>
                      <option <?php if ($cobranca->estado == '23') {  echo 'selected'; } ?> value="23">Rio Grande do Sul</option>
                      <option <?php if ($cobranca->estado == '24') {  echo 'selected'; } ?> value="24">Santa Catarina</option>
                      <option <?php if ($cobranca->estado == '25') {  echo 'selected'; } ?> value="25">Sergipe</option>
                      <option <?php if ($cobranca->estado == '26') {  echo 'selected'; } ?> value="26">São Paulo</option>
                      <option <?php if ($cobranca->estado == '27') {  echo 'selected'; } ?> value="27">Tocantins</option>
                    </select>
                                        </div>
                                    
                                       <div class="span3">
                                            <label for="cepCB">CEP</label>
                                            <input id="cepCB" type="text" class="span12" name="cepCB" value="<?php echo $cobranca->cep ?>"  />
                                        </div>
                                        <?php 
                                        }?>
                                        <div class="span2">
                                        <label for=""></label>
                                        <button class="btn btn-success span12"><i class="icon-white icon-ok"></i> Alterar</button>
                                    </div>
                                    </div>

                                </form>
                        </div>


                        <!--Anexos-->
                        <div class="tab-pane" id="">
                            <div class="span12" style="padding: 1%; margin-left: 0">
                                <div class="span12 well" style="padding: 1%; margin-left: 0" id="form-anexos">
                                    <form id="formAnexos" enctype="multipart/form-data" action="javascript:;" accept-charset="utf-8"s method="post">
                                    <div class="span10">
                                
                                        <input type="hidden" name="idOsServico" id="idOsServico" value="<?php echo $result->idOs?>" />
                                        <label for="">Anexo</label>
                                        <input type="file" class="span12" name="userfile[]" multiple="multiple" size="20" />
                                    </div>
                                    <div class="span2">
                                        <label for="">.</label>
                                        <button class="btn btn-success span12"><i class="icon-white icon-plus"></i> Anexar</button>
                                    </div>
                                    </form>
                                </div>
                
                                <div class="span12" id="divAnexos" style="margin-left: 0">
                                    <?php
                                    $cont = 1;
                                    $flag = 5;
                                    foreach ($anexos as $a) {

                                        if ($a->thumb == null) {
                                            $thumb = base_url().'assets/img/icon-file.png';
                                            $link = base_url().'assets/img/icon-file.png';
                                        } else {
                                            $thumb = base_url().'assets/anexos/thumbs/'.$a->thumb;
                                            $link = $a->url.$a->anexo;
                                        }

                                        if ($cont == $flag) {
                                            echo '<div style="margin-left: 0" class="span3"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" role="button" class="btn anexo" data-toggle="modal"><img src="'.$thumb.'" alt=""></a></div>';
                                            $flag += 4;
                                        } else {
                                            echo '<div class="span3"><a href="#modal-anexo" imagem="'.$a->idAnexos.'" link="'.$link.'" role="button" class="btn anexo" data-toggle="modal"><img src="'.$thumb.'" alt=""><p align="center">'. $a->anexo .'</p></a></div>';
                                        }
                                        $cont ++;
                                    } ?>
                                </div>

                            </div>
                        </div>
                


                    </div>

                </div>


.

        </div>

    </div>
</div>
</div>




 
<!-- Modal visualizar anexo -->
<div id="modal-anexo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Visualizar Anexo</h3>
  </div>
  <div class="modal-body">
    <div class="span12" id="div-visualizar-anexo" style="text-align: center">
        <div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <a href="" id-imagem="" class="btn btn-inverse" id="download">Download</a>
    <a href="" link="" class="btn btn-danger" id="excluir-anexo">Excluir Anexo</a>
  </div>
</div>





<!-- Modal Faturar-->
<div id="modal-faturar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formFaturar" action="<?php echo current_url() ?>" method="post">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3 id="myModalLabel">Faturar Venda</h3>
</div>
<div class="modal-body">
    
    <div class="span12 alert alert-info" style="margin-left: 0"> Obrigatório o preenchimento dos campos com asterisco.</div>
    <div class="span12" style="margin-left: 0"> 
      <label for="descricao">Descrição</label>
      <input class="span12" id="descricao" type="text" name="descricao" value="Fatura de Venda - #<?php echo $result->idOs; ?> "  />
      
    </div>  
    <div class="span12" style="margin-left: 0"> 
      <div class="span12" style="margin-left: 0"> 
        <label for="cliente">Cliente*</label>
        <input class="span12" id="cliente" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>" />
        <input type="hidden" name="clientes_id" id="clientes_id" value="<?php echo $result->clientes_id ?>">
        <input type="hidden" name="os_id" id="os_id" value="<?php echo $result->idOs; ?>">
      </div>
      
      
    </div>
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">  
        <label for="valor">Valor*</label>
        <input type="hidden" id="tipo" name="tipo" value="receita" /> 
        <input class="span12 money" id="valor" type="text" name="valor" value="<?php echo number_format($total, 2, ',', '.'); ?> "  />
      </div>
      <div class="span4" >
        <label for="vencimento">Data Vencimento*</label>
        <input class="span12 datepicker" id="vencimento" type="text" name="vencimento"  />
      </div>
      
    </div>
    
    <div class="span12" style="margin-left: 0"> 
      <div class="span4" style="margin-left: 0">
        <label for="recebido">Recebido?</label>
        &nbsp &nbsp &nbsp &nbsp <input  id="recebido" type="checkbox" name="recebido" value="1" /> 
      </div>
      <div id="divRecebimento" class="span8" style=" display: none">
        <div class="span6">
          <label for="recebimento">Data Recebimento</label>
          <input class="span12 datepicker" id="recebimento" type="text" name="recebimento" /> 
        </div>
        <div class="span6">
          <label for="formaPgto">Forma Pgto</label>
          <select name="formaPgto" id="formaPgto" class="span12">
            <option value="Dinheiro">Dinheiro</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Cheque">Cheque</option>
            <option value="Boleto">Boleto</option>
            <option value="Depósito">Depósito</option>
            <option value="Débito">Débito</option>        
          </select> 
      </div>
      
    </div>
    
    
</div>
<div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-faturar">Cancelar</button>
  <button class="btn btn-primary">Faturar</button>
</div>
</form>
</div>



<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>assets/js/maskmoney.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
    $(".money").maskMoney(); 

     $('#recebido').click(function(event) {
        var flag = $(this).is(':checked');
        if(flag == true){
          $('#divRecebimento').show();
        }
        else{
          $('#divRecebimento').hide();
        }
     });

     $(document).on('click', '#btn-faturar', function(event) {
       event.preventDefault();
         valor = $('#total-venda').val();
         total_servico = $('#total-servico').val();
         valor = valor.replace(',', '' );
         total_servico = total_servico.replace(',', '' );
         total_servico = parseFloat(total_servico); 
         valor = parseFloat(valor);
         $('#valor').val(valor + total_servico);
     });
     
     $("#formFaturar").validate({
          rules:{
             descricao: {required:true},
             cliente: {required:true},
             valor: {required:true},
             vencimento: {required:true}
      
          },
          messages:{
             descricao: {required: 'Campo Requerido.'},
             cliente: {required: 'Campo Requerido.'},
             valor: {required: 'Campo Requerido.'},
             vencimento: {required: 'Campo Requerido.'}
          },
          submitHandler: function( form ){       
            var dados = $( form ).serialize();
            $('#btn-cancelar-faturar').trigger('click');
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>index.php/os/faturar",
              data: dados,
              dataType: 'json',
              success: function(data)
              {
                if(data.result == true){
                    
                    window.location.reload(true);
                }
                else{
                    alert('Ocorreu um erro ao tentar faturar OS.');
                    $('#progress-fatura').hide();
                }
              }
              });

              return false;
          }
     });

     $("#produto").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteProduto",
            minLength: 2,
            select: function( event, ui ) {

                 $("#idProduto").val(ui.item.id);
                 $("#estoque").val(ui.item.estoque);
                 $("#preco").val(ui.item.preco);
                 $("#quantidade").focus();
                 

            }
      });

      $("#servico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteServico",
            minLength: 2,
            select: function( event, ui ) {

                 $("#idServico").val(ui.item.id);
                 $("#precoServico").val(ui.item.preco);
                 

            }
      });


      $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteCliente",
            minLength: 2,
            select: function( event, ui ) {

                 $("#clientes_id").val(ui.item.id);


            }
      });

      $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 2,
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
             cliente: {required:true},
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




      $("#formProdutos").validate({
          rules:{
             quantidade: {required:true}
          },
          messages:{
             quantidade: {required: 'Insira a quantidade'}
          },
          submitHandler: function( form ){
             var quantidade = parseInt($("#quantidade").val());
             var estoque = parseInt($("#estoque").val());
             if(estoque < quantidade){
                alert('Você não possui estoque suficiente.');
             }
             else{
                 var dados = $( form ).serialize();
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/adicionarProduto",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divProdutos" ).load("<?php echo current_url();?> #divProdutos" );
                        $("#quantidade").val('');
                        $("#produto").val('').focus();
                    }
                    else{
                        alert('Ocorreu um erro ao tentar adicionar produto.');
                    }
                  }
                  });

                  return false;
                }

             }
             
       });

       $("#formServicos").validate({
          rules:{
             servico: {required:true}
          },
          messages:{
             servico: {required: 'Insira um serviço'}
          },
          submitHandler: function( form ){       
                 var dados = $( form ).serialize();
                 
                $("#divServicos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/adicionarServico",
                  data: dados,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $( "#divServicos" ).load("<?php echo current_url();?> #divServicos" );
                        $("#servico").val('').focus();
                    }
                    else{
                        alert('Ocorreu um erro ao tentar adicionar serviço.');
                    }
                  }
                  });

                  return false;
                }

       });

        $("#formAnexos").validate({
         
          submitHandler: function( form ){       
                //var dados = $( form ).serialize();
                var dados = new FormData(form); 
                $("#form-anexos").hide('1000');
                $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/anexar",
                  data: dados,
                  mimeType:"multipart/form-data",
                  contentType: false,
                  cache: false,
                  processData:false,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                        $("#userfile").val('');

                    }
                    else{
                        $("#divAnexos").html('<div class="alert fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> '+data.mensagem+'</div>');      
                    }
                  },
                  error : function() {
                      $("#divAnexos").html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>Atenção!</strong> Ocorreu um erro. Verifique se você anexou o(s) arquivo(s).</div>');      
                  }

                  });

                  $("#form-anexos").show('1000');
                  return false;
                }

        });

       $(document).on('click', 'a', function(event) {
            var idProduto = $(this).attr('idAcao');
            var quantidade = $(this).attr('quantAcao');
            var produto = $(this).attr('prodAcao');
            if((idProduto % 1) == 0){
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/excluirProduto",
                  data: "idProduto="+idProduto+"&quantidade="+quantidade+"&produto="+produto,
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



       $(document).on('click', 'span', function(event) {
            var idServico = $(this).attr('idAcao');
            if((idServico % 1) == 0){
                $("#divServicos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>index.php/os/excluirServico",
                  data: "idServico="+idServico,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divServicos").load("<?php echo current_url();?> #divServicos" );

                    }
                    else{
                        alert('Ocorreu um erro ao tentar excluir serviço.');
                    }
                  }
                  });
                  return false;
            }

       });


       $(document).on('click', '.anexo', function(event) {
           event.preventDefault();
           var link = $(this).attr('link');
           var id = $(this).attr('imagem');
           var url = '<?php echo base_url(); ?>index.php/os/excluirAnexo/';
           $("#div-visualizar-anexo").html('<img src="'+link+'" alt="">');
           $("#excluir-anexo").attr('link', url+id);

           $("#download").attr('href', "<?php echo base_url(); ?>index.php/os/downloadanexo/"+id);

       });

       $(document).on('click', '#excluir-anexo', function(event) {
           event.preventDefault();

           var link = $(this).attr('link'); 
           $('#modal-anexo').modal('hide');
           $("#divAnexos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");

           $.ajax({
                  type: "POST",
                  url: link,
                  dataType: 'json',
                  success: function(data)
                  {
                    if(data.result == true){
                        $("#divAnexos" ).load("<?php echo current_url();?> #divAnexos" );
                    }
                    else{
                        alert(data.mensagem);
                    }
                  }
            });
       });



       $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });




});

</script>





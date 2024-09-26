<?php $totalServico = 0;
$totalProdutos = 0;?>
<div class="row-fluid" style="margin-top: 0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-file"></i>
                </span>
                <h5>Proposta</h5>
                <div class="buttons"> 
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/os/editar/'.$result->idOs.'"><i class="icon-pencil icon-white"></i> Editar</a>';
} ?>
                    
                    <a target="_blank" title="Imprimir" class="btn btn-mini btn-inverse" href="<?php echo site_url()?>/os/imprimir/<?php echo $result->idOs; ?>"><i class="icon-print icon-white"></i> Imprimir</a>
                </div>
            </div>
            <div class="widget-content" id="printOs">
                <div class="invoice-content">
                    <div class="invoice-head" style="margin-bottom: 0">

                        <table class="table">
                            <tbody>
                                <?php if ($emitente == null) {?>
                                            
                                <tr>
                                    <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                                </tr>
                                <?php } else {?>
                                <tr>
                                    <td style="width: 25%"><img src=" <?php echo $emitente[0]->url_logo; ?> "></td>
                                    <td> <span style="font-size: 20px; "> <?php echo $emitente[0]->nome; ?></span> </br><span><?php echo $emitente[0]->cnpj; ?> </br> <?php echo $emitente[0]->rua.', '.$emitente[0]->numero.' - '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span> </br> <span> E-mail: <?php echo $emitente[0]->email.' - Fone: '.$emitente[0]->telefone; ?></span></td>
                                    <td style="width: 18%; text-align: center">#Protocolo: <span ><?php echo $result->idOs?></span></br> </br> <span>Emissão: <?php echo date('d/m/Y')?></span></td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                            <?php 
                                        switch ($result->estado) {
                                            case '1':
                                                $nomeEstado = 'Acre';
                                                break;
                                            case '2':
                                                $nomeEstado = 'Alagoas';
                                                break;
                                            case '3':
                                                $nomeEstado = 'Amazonas';
                                                break;
                                            case '4':
                                                $nomeEstado = 'Amapá';
                                                break;    
                                            case '5':
                                                $nomeEstado = 'Bahia';
                                                break;
                                            case '6':
                                                $nomeEstado = 'Ceará';
                                                break;
                                            case '7':
                                                $nomeEstado = 'Distrito Federal';
                                                break;
                                            case '8':
                                                $nomeEstado = 'Espírito Santo';
                                                break;
                                            case '9':
                                                $nomeEstado = 'Goiás';
                                                break;
                                            case '10':
                                                $nomeEstado = 'Maranhão';
                                                break;
                                            case '11':
                                                $nomeEstado = 'Minas Gerais';
                                                break;
                                            case '12':
                                                $nomeEstado = 'Mato Grosso do Sul';
                                                break;
                                            case '13':
                                                $nomeEstado = 'Mato Grosso';
                                                break;
                                            case '14':
                                                $nomeEstado = 'Pará';
                                                break;
                                            case '15':
                                                $nomeEstado = 'Paraíba';
                                                break;
                                            case '16':
                                                $nomeEstado = 'Pernambuco';
                                                break;
                                            case '17':
                                                $nomeEstado = 'Piauí';
                                                break;
                                            case '18':
                                                $nomeEstado = 'Paraná';
                                                break;
                                            case '19':
                                                $nomeEstado = 'Rio de Janeiro';
                                                break;
                                            case '20':
                                                $nomeEstado = 'Rio Grande do Norte';
                                                break;
                                            case '21':
                                                $nomeEstado = 'Rondônia';
                                                break;
                                            case '22':
                                                $nomeEstado = 'Roraima';
                                                break;
                                            case '23':
                                                $nomeEstado = 'Rio Grande do Sul';
                                                break;
                                            case '24':
                                                $nomeEstado = 'Santa Catarina';
                                                break;
                                            case '25':
                                                $nomeEstado = 'Sergipe';
                                                break;
                                            case '26':
                                                $nomeEstado = 'São Paulo';
                                                break;
                                            case '27':
                                                $nomeEstado = 'Tocantins';
                                                break;                
                                            default:
                                                $nomeEstado = ' ';
                                                break;
                                        }
                            ?>
                
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><h5>Cliente</h5>
                                                <span><?php echo $result->nomeCliente?></span><br/>
                                                <span><?php echo $result->rua?>, <?php echo $result->numero?>, <?php echo $result->bairro?></span>, 
                                                <span><?php echo $result->cidade?> - <?php echo $nomeEstado?>. <?php echo $result->cep?></span><br>
                                                <span>Telefone: <?php echo $result->telefone?></span><br/>
                                                <span>E-mail: <?php echo $result->email?></span><br/>
                                                <span>Razão Social: <?php echo $result->razao?></span><br/>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                        <?php 

                                        switch ($result->tipo) {
                                            case '1':
                                                $nomeTipo = 'Proposta Venda';
                                                break;
                                            case '2':
                                                $nomeTipo = 'Contrato Venda';
                                                break;
                                            case '3':
                                                $nomeTipo = 'Contrato Locação C/opção de compra';
                                                break;
                                            case '4':
                                                $nomeTipo = 'Contrato Locação S/opção de compra';
                                                break;
                                            case '5':
                                                $nomeTipo = 'Contrato Comodato';
                                                break;    
                                            default:
                                                $nomeTipo = '';
                                                break;
                                        }

                                        switch ($result->business) {
                                            case '1':
                                                $nomeBusiness = 'Humana';
                                                break;
                                            case '2':
                                                $nomeBusiness = 'Veterinária';
                                                break;
                                            case '3':
                                                $nomeBusiness = 'Odonto';
                                                break;
                                            default:
                                                $nomeBusiness = '';
                                                break;
                                        }

                                        switch ($result->tipoFaturamento) {
                                            case '1':
                                                $nomeFaturamento = '70% Produto e 30% Serviços';
                                                break;
                                            case '2':
                                                $nomeFaturamento = '100% Produto';
                                                break;
                                            case '3':
                                                $nomeFaturamento = 'Diferenciado';
                                                break;
                                            default:
                                                $nomeFaturamento = '';
                                                break;
                                        }

                                        switch ($result->frete) {
                                            case '1':
                                                $nomeFrete = 'CIF';
                                                break;
                                            case '2':
                                                $nomeFrete = 'FOB';
                                                break;
                                            default:
                                                $nomeFrete = '';
                                                break;
                                        }

                                         switch ($result->garantia) {
                                            case '1':
                                                $nomeGarantia = '12 Meses';
                                                break;
                                            case '2':
                                                $nomeGarantia = '24 Meses';
                                                break;
                                            case '3':
                                                $nomeGarantia = '36 Meses';
                                                break;
                                            case '4':
                                                $nomeGarantia = '48 Meses';
                                                break;
                                            case '5':
                                                $nomeGarantia = 'Todo Contrato';
                                                break;    
                                            default:
                                                $nomeGarantia = '';
                                                break;
                                        }

                                        switch ($result->prazoPg) {
                                            case '1':
                                                $nomePg = 'A Vista Direto';
                                                break;
                                            case '2':
                                                $nomePg = 'A Vista Finan Bancário';
                                                break;
                                            case '3':
                                                $nomePg = 'Ato /30 Dias';
                                                break;
                                            case '4':
                                                $nomePg = 'Ato /30/60 Dias';
                                                break;
                                            case '5':
                                                $nomePg = 'Ato /30/60/90 Dias';
                                                break;    
                                            default:
                                                $nomePg = '';
                                                break;
                                        }

                                        
                                            ?>
                                                <span><h5><?php echo $nomeTipo?></h5></span>
                                                <span>Área: <?php echo $nomeBusiness?></span><br/>
                                                <span>Tipo de Faturamento: <?php echo $nomeFaturamento?></span><br/>
                                                <span>Frete: <?php echo $nomeFrete?></span><br/>
                                                <span>Garantia: <?php echo $nomeGarantia?></span><br/>
                                                <span>Prazo de Pagamento: <?php echo $nomePg?></span><br/>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 


      
                    </div>

                    <div style="margin-top: 0; padding-top: 0">

                    <?php if ($result->descricaoProduto != null) {?>
                    <hr style="margin-top: 0">
                    <h5>Descrição do Produto</h5>
                    <p>
                        <?php echo $result->descricaoProduto?>
                        
                    </p>
                    <?php }?>

                    
                    
                    <?php if ($result->observacoes != null) {?>
                    <hr style="margin-top: 0">
                    <h5>Observações</h5>
                    <p>
                        <?php echo $result->observacoes?>
                    </p>
                    <?php }?>

                        <?php if ($produtos != null) {?>
                        <br />
                        <table class="table table-bordered" id="tblProdutos">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                            <th>Sub-total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($produtos as $p) {

                                            $totalProdutos = $totalProdutos + $p->precoVenda;
                                            echo '<tr>';
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$p->quantidade.'</td>';
                                            
                                            echo '<td>R$ '.number_format($p->precoVenda, 2, ',', '.').'</td>';
                                            echo '</tr>';
                                        }?>

                                        <tr>
                                            <td colspan="2" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php echo number_format($totalProdutos, 2, ',', '.');?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php }?>
                        
                        <?php if ($servicos != null) {?>
                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Serviço</th>
                                                <th>Sub-total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            setlocale(LC_MONETARY, 'en_US');
                                            foreach ($servicos as $s) {
                                                $preco = $s->preco;
                                                $totalServico = $totalServico + $preco;
                                                echo '<tr>';
                                                echo '<td>'.$s->nome.'</td>';
                                                echo '<td>R$ '.number_format($s->preco, 2, ',', '.').'</td>';
                                                echo '</tr>';
                                            }?>

                                        <tr>
                                            <td colspan="1" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php  echo number_format($totalServico, 2, ',', '.');?></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                        <?php }?>
                        <hr />
                    
                        <h4 style="text-align: right">Valor Total: R$ <?php echo number_format($totalProdutos + $totalServico, 2, ',', '.');?></h4>

                    </div>
            

                    
                    
              
                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Dados do Cliente</a></li>
            <li><a data-toggle="tab" href="#tab2">Propostas</a></li>
            <div class="buttons">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/clientes/editar/'.$result->idClientes.'"><i class="icon-pencil icon-white"></i> Editar</a>';
} ?>
                    
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Dados Pessoais</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Nome</strong></td>
                                                    <td><?php echo $result->nomeCliente ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Documento</strong></td>
                                                    <td><?php echo $result->documento ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Data de Cadastro</strong></td>
                                                    <td><?php echo date('d/m/Y', strtotime($result->dataCadastro)) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Contatos</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse accordion-body" id="collapseGTwo">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Telefone</strong></td>
                                                    <td><?php echo $result->telefone ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Email</strong></td>
                                                    <td><?php echo $result->email ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Telefone COM</strong></td>
                                                    <td><?php echo $result->telefoneC ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Email COM</strong></td>
                                                    <td><?php echo $result->emailC ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Telefone FIN</strong></td>
                                                    <td><?php echo $result->telefoneF ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Email FIN</strong></td>
                                                    <td><?php echo $result->emailF ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group widget-box">
                                <div class="accordion-heading">
                                    <div class="widget-title">
                                        <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                            <span class="icon"><i class="icon-list"></i></span><h5>Endereço</h5>
                                        </a>
                                    </div>
                                </div>


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
                                <div class="collapse accordion-body" id="collapseGThree"> 
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Rua</strong></td>
                                                    <td><?php echo $result->rua ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Número</strong></td>
                                                    <td><?php echo $result->numero ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Bairro</strong></td>
                                                    <td><?php echo $result->bairro ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Cidade</strong></td>
                                                    <td><?php echo $result->cidade ?> - <?php echo $nomeEstado ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>CEP</strong></td>
                                                    <td><?php echo $result->cep ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>



          
        </div>


        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>
                
                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Data Inicial</th>
                                    <th>Data Final</th>
                                    <th>Descricao</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="6">Nenhuma Proposta Cadastrada</td>
                                </tr>
                            </tbody>
                        </table>
                
                <?php } else { ?>


              

                        <table class="table table-bordered ">
                            <thead>
                                <tr style="backgroud-color: #2D335B">
                                    <th>#</th>
                                    <th>Data Inicial</th>
                                    <th>Data Final</th>
                                    <th>Representante</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
<?php
foreach ($results as $r) {
    $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
    $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));

    switch ($r->status) {
                case '2':
                    $nome = 'Pendente';
                    $cor = '#f39c12';
                    break;
                case '3':
                    $nome = 'Em Análise';
                    $cor = '#00c0ef';
                    break;
                case '1':
                    $nome = 'Orçamento';
                    $cor = '#B266FF';
                    break;
                case '5':
                    $nome = 'Reprovado';
                    $cor = '#da4f49';
                    break;    
                case '6':
                    $nome = 'Cancelado';
                    $cor = '#da4f49';
                    break;
                case '4':
                    $nome = 'Aprovado';
                    $cor = '#5bb75b';
                    break;
                default:
                    $cor = '#E0E4CC';
                    break;
            }


    echo '<tr>';
    echo '<td>' . $r->idOs . '</td>';
    echo '<td>' . $dataInicial . '</td>';
    echo '<td>' . $dataFinal . '</td>';
    echo '<td>' . $r->nome . '</td>';
     echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$nome.'</span> </td>';

    echo '<td>';
    if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
        echo '<a href="' . base_url() . 'index.php/os/visualizar/' . $r->idOs . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
    }
    if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
        echo '<a href="' . base_url() . 'index.php/os/editar/' . $r->idOs . '" class="btn btn-info tip-top" title="Editar OS"><i class="icon-pencil icon-white"></i></a>';
    }
                    
    echo  '</td>';
    echo '</tr>';
} ?>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
            

            <?php  } ?>

        </div>
    </div>
</div>
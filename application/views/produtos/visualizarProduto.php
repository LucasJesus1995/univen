
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-content nopadding">
            <div class="widget-title">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes do Produto</a></li>
                        <li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos Relacionados</a></li>
                       <!-- <li id="tabServicos"><a href="#tab3" data-toggle="tab">Endereço de Entrega</a></li> -->
                       <!-- <li id="tabAnexos"><a href="#tab4" data-toggle="tab">Anexos</a></li> -->
                    </ul>
                </div>
                    <div class="widget-content tab-content">
                        <div class="tab-pane active" id="tab1" style="min-height: 300px">
                            <div class="accordion" id="collapse-group">
                    <div class="accordion-group widget-box">
                        <div class="accordion-heading">
                            <div class="widget-title">
                                <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                    <span class="icon"><i class="icon-list"></i></span><h5>Dados do Produto</h5>
                                </a>
                            </div>
                        </div>
                        <div class="collapse in accordion-body">
                            <div class="widget-content">
                                <table class="table table-bordered">

                                    <?php  

                                    switch ($result->area_id) {
                                        case '1':
                                            $area = 'Humana';
                                            break;
                                        case '2':
                                            $area = 'Veterinária';
                                            break;
                                        case '3':
                                            $area = 'Odonto';
                                            break;
                                        default:
                                            $area = ' ';
                                            break;
                                    }

                                    switch ($result->categoria) {
                                        case '1':
                                            $categoria = 'Ultrassom';
                                            break;
                                        case '2':
                                            $categoria = 'Imagem';
                                            break;
                                        case '3':
                                            $categoria = 'Radiologia';
                                            break;
                                        default:
                                            $categoria = ' ';
                                            break;
                                    }


                                    ?>




                                    <tbody>
                                        <tr>
                                            <td style="text-align: right; width: 30%"><strong>Nome do Produto</strong></td>
                                            <td><?php echo $result->descricao ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Área</strong></td>
                                            <td><?php echo $area ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Categoria</strong></td>
                                            <td><?php echo $categoria ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Unidade</strong></td>
                                            <td><?php echo $result->unidade ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Preço de Venda</strong></td>
                                            <td>R$ <?php echo $result->precoVenda; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Estoque</strong></td>
                                            <td><?php echo $result->estoque; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Estoque Mínimo</strong></td>
                                            <td><?php echo $result->estoqueMinimo; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Função</strong></td>
                                            <td><?php echo $result->funcao; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right"><strong>Sobre</strong></td>
                                            <td><?php echo $result->sobre; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>


                        <!--Produtos Relacionados-->
                        <br>
                        <div class="tab-pane" id="tab2" style="min-height: 300px">
                            <div class="span12" id="divProdutos" style="margin-left: 0">
                                <table class="table table-bordered" id="tblProdutos"> 
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Tipo de Produto</th>
                                            <th>Preço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($produtos != null && $result->tipo == '1') { ?>
                                        <?php
                                        
                                        foreach ($produtos as $p) {

                                            switch ($p->tipo) {
                                                case '1':
                                                    $tipo = 'Equipamento';
                                                    break;
                                                case '2':
                                                    $tipo = 'Item';
                                                    break;
                                                
                                                default:
                                                    $tipo = 'Não possui';
                                                    break;
                                            }
                                            
                                            
                                            echo '<tr>';
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$tipo.'</td>';
                                            echo '<td>'.$p->precoVenda.'</td>';
                                            echo '</tr>';
                                        }?>
                                       <?php }else{
                                            foreach ($relacionado as $r) {
                                            switch ($r->tipo) {
                                                case '1':
                                                    $tipo = 'Equipamento';
                                                    break;
                                                case '2':
                                                    $tipo = 'Item';
                                                    break;
                                                
                                                default:
                                                    $tipo = 'Não possui';
                                                    break;
                                            }
                                            
                                            
                                            
                                            echo '<tr>';
                                            echo '<td>'.$r->descricao.'</td>';
                                            echo '<td>'.$tipo.'</td>';
                                            echo '<td>'.$r->precoVenda.'</td>';
                                            echo '</tr>';

                                            }
                                        } ?>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
        </div>

    </div>
</div>
</div>





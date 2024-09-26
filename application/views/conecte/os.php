<?php
// alterar para permissão de o cliente adicionar ou não a ordem de serviço
if (!$this->session->userdata('cadastra_os')) { ?>
    <div class="span12" style="margin-left: 0">
        <div class="span3">
            <a href="<?php echo base_url(); ?>index.php/mine/adicionarOs" class="btn btn-success span12"><i class="icon-plus icon-white"></i> Adicionar Proposta</a>
        </div>
    </div>
<?php }

if (!$results) {
    ?>
    <div class="span12" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
        <span class="icon">
            <i class="icon-file"></i>
         </span>
                <h5>Propostas</h5>

            </div>

            <div class="widget-content nopadding"> 


                <table class="table table-bordered ">
                    <thead>
                    <tr style="backgroud-color: #2D335B">
                        <th>#</th>
                        <th>Operador</th>
                        <th>Data Inicial</th>
                        <th>Data Final</th>
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
            </div>
        </div>

    </div>

<?php } else { ?>

    <div class="span12" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
        <span class="icon">
            <i class="icon-file"></i>
         </span>
                <h5>Propostas</h5>

            </div>

            <div class="widget-content nopadding">


                <table class="table table-bordered ">
                    <thead>
                    <tr style="backgroud-color: #2D335B">
                        <th>#</th>
                        <th>Operador</th>
                        <th>Data Inicial</th>
                        <th>Data Final</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($results as $r) {
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
                        echo '<td>' . $r->nome . '</td>';
                        echo '<td>' . $dataInicial . '</td>';
                        echo '<td>' . $dataFinal . '</td>';
                        echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$nome.'</span> </td>';


                        echo '<td><a href="' . base_url() . 'index.php/mine/visualizarOs/' . $r->idOs . '" class="btn tip-top" title="Visualizar e Imprimir"><i class="icon-eye-open"></i></a>
                                  <a href="' . base_url() . 'index.php/mine/imprimirOs/' . $r->idOs . '" target="_blank" class="btn btn-inverse tip-top" title="Imprimir"><i class="icon-print"></i></a>
                                  <a href="' . base_url() . 'index.php/mine/detalhesOs/' . $r->idOs . '" class="btn btn-info tip-top" title="Ver mais detalhes"><i class="icon-list"></i></a>  
                              </td>';
                        echo '</tr>';
} ?>
                    <tr>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php echo $this->pagination->create_links();
} ?>


  <div class="quick-actions_homepage">
    <ul class="quick-actions">
      <li class="bg_lo span3"> <a href="<?php echo base_url()?>index.php/mine/os"> <i class="icon-file"></i> Propostas</a> </li>
      <li class="bg_ls span3"> <a href="<?php echo base_url()?>index.php/mine/compras"><i class="icon-shopping-cart"></i> Pedido</a></li>
      <li class="bg_lg span3"> <a href="<?php echo base_url()?>index.php/mine/conta"><i class="icon-user"></i> Minha Conta</a></li>
    </ul>
  </div>
 

  <div class="span12" style="margin-left: 0">
      
      <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Últimas Propostas</h5></div>
          <div class="widget-content">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Data Inicial</th>
                          <th>Data Final</th>
                          <th>Garantia</th>
                          <th>Status</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                        <?php
                        if ($os != null) {
                            foreach ($os as $o) {

                                switch ($o->status) {
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
                                echo '<td>'.$o->idOs.'</td>';
                                echo '<td>'.date('d/m/Y', strtotime($o->dataInicial)).'</td>';
                                echo '<td>'.date('d/m/Y', strtotime($o->dataFinal)).'</td>';
                                echo '<td>'.$o->garantia.'</td>';
                                echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$nome.'</span> </td>';
                                echo '<td> <a href="'.base_url().'index.php/mine/visualizarOs/'.$o->idOs.'" class="btn"> <i class="icon-eye-open" ></i> </a></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="3">Nenhum ordem de serviço encontrada.</td></tr>';
                        }

                        ?>
                  </tbody>
              </table>
          </div>
      </div>

      <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Andamento de pedido</h5></div>
          <div class="widget-content">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Data de Venda</th>
                          <th>Responsável</th>
                          <th>Faturado</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                        <?php
                        if ($compras != null) {
                            foreach ($compras as $p) {
                                if ($p->faturado == 1) {
                                    $faturado = 'Sim';

                                } else {
                                    $faturado = 'Não';
                                }
                                echo '<tr>';
                                echo '<td>'.$p->idVendas.'</td>';
                                echo '<td>'.date('d/m/Y', strtotime($p->dataVenda)).'</td>';
                                echo '<td>'.$p->nome.'</td>';
                                echo '<td>'.$faturado.'</td>';
                                echo '<td> <a href="'.base_url().'index.php/mine/visualizarCompra/'.$p->idVendas.'" class="btn"> <i class="icon-eye-open" ></i> </a></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5">Nenhum venda encontrada.</td></tr>';
                        }

                        ?>
                  </tbody>
              </table>
          </div>
      </div>
    
  </div>

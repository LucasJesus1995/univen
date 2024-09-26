<?php
// alterar para permissão de o cliente adicionar ou não a ordem de serviço
if (!$this->session->userdata('cadastra_chamado')) { ?>
    <div class="span12" style="margin-left: 0">
        <div class="span3">
            <a href="<?php echo base_url(); ?>index.php/mine/adicionarChamado" class="btn btn-success span12"><i class="icon-plus icon-white"></i> Adicionar Chamado</a>
        </div>
    </div>
<?php }

if (!$results) {
    ?>
    <div class="span12" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
                <h5>Chamados</h5>

            </div>

            <div class="widget-content nopadding"> 


                <table class="table table-bordered ">
                    <thead>
                    <tr style="backgroud-color: #2D335B">
                        <th>#</th>
                        <th>Nome</th>
                        <th>Motivo</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td colspan="6">Nenhum Chamado Cadastrado</td>
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
            <i class="icon-tags"></i>
         </span>
                <h5>Chamados</h5>

            </div>

            <div class="widget-content nopadding">


                <table class="table table-bordered ">
                    <thead>
                    <tr style="backgroud-color: #2D335B">
                        <th>#</th>
                        <th>Produto</th>
                        <th>Tipo de chamado</th>
                        <th>Motivo</th>
                        <th>Status</th>
                        <th>Prioridade</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($results as $r) {
                        

                        switch ($r->status) {
                            case '0':
                                $nome = 'Aberto';
                                $cor = '#f39c12';
                                break;
                            case '1':
                                $nome = 'Concluído';
                                $cor = '#5bb75b';
                                break;
                            case '2':
                                $nome = 'Respondido';
                                $cor = '#00c0ef';
                                break;
                            default:
                                $cor = '#E0E4CC';
                                break;

                        }

                        switch ($r->prioridade) {
                            case '1':
                                $nomeP = 'Alto';
                                $corP = '#da4f49';
                                break;
                            case '2':
                                $nomeP = 'Médio';
                                $corP = '#f39c12';
                                break;
                            case '3':
                                $nomeP = 'Baixo';
                                $corP = '#00c0ef';
                                break;
                            default:
                                $corP = '#E0E4CC';
                                break;
                        }

                        
                        echo '<tr>';
                        echo '<td>' . $r->idServicos . '</td>';
                        echo '<td>' . $r->produto . '</td>';
                        echo '<td>' . $r->tipo . '</td>';
                        echo '<td>' . $r->motivo . '</td>';
                        echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$nome.'</span> </td>';
                        echo '<td><span class="badge" style="background-color: '.$corP.'; border-color: '.$corP.'">'.$nomeP.'</span> </td>';

                        echo '<td><a href="' . base_url() . 'index.php/mine/visualizarChamados/' . $r->idServicos . '" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>
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

<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Detalhes do Ticket</a></li>
           
            <div class="buttons">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eServico')) {
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/servicos/editar/'.$result->idServicos.'"><i class="icon-pencil icon-white"></i> Editar</a>';
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
                                            <span class="icon"><i class="icon-tags"></i></span><h5>Detalhes</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="collapse in accordion-body" id="collapseGOne">
                                    <div class="widget-content">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Nome</strong></td>
                                                    <td><?php echo $result->nome ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>Produto</strong></td>
                                                    <td><?php echo $result->desc ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>tipo</strong></td>
                                                    <td><?php echo $result->tipo ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right; width: 30%"><strong>motivo</strong></td>
                                                    <td><?php echo $result->motivo ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Descrição</strong></td>
                                                    <td><?php echo $result->descricao ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Data do Ticket</strong></td>
                                                    <td><?php echo date('d/m/Y', strtotime($result->data_ticket)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: right"><strong>Solução</strong></td>
                                                    <td><?php echo $result->solucao ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>



          
        </div>

    </div>
</div>
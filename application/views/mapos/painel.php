<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>js/dist/excanvas.min.js"></script><![endif]-->

<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/dist/jquery.jqplot.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/dist/jquery.jqplot.min.css" />

<script type="text/javascript" src="<?php echo base_url();?>assets/js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/dist/plugins/jqplot.donutRenderer.min.js"></script>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?>
            <li class="bg_lb"> <a href="<?php echo base_url()?>index.php/clientes"> <i class="icon-group"></i> Clientes</a> </li>
        <?php } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
            <li class="bg_lg"> <a href="<?php echo base_url()?>index.php/produtos"> <i class="icon-barcode"></i> Produtos</a> </li>
        <?php } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
            <li class="bg_ly"> <a href="<?php echo base_url()?>index.php/servicos"> <i class="icon-tags"></i> Tickets</a> </li>
        <?php } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
            <li class="bg_lo"> <a href="<?php echo base_url()?>index.php/os"> <i class="icon-file"></i> Propostas</a> </li>
        <?php } ?>

      </ul>
    </div>
  </div>  
<!--End-Action boxes--> 



<div class="row-fluid" style="margin-top: 0">
    
   

    <div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Propostas Em Aberto</h5></div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data Inicial</th>
                            <th>Data Final</th>
                            <th>Cliente</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($ordens != null) {
                            foreach ($ordens as $o) {
                                echo '<tr>';
                                echo '<td>'.$o->idOs.'</td>';
                                echo '<td>'.date('d/m/Y', strtotime($o->dataInicial)).'</td>';
                                echo '<td>'.date('d/m/Y', strtotime($o->dataFinal)).'</td>';
                                echo '<td>'.$o->nomeCliente.'</td>';
                                echo '<td>';
                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                                    echo '<a href="'.base_url().'index.php/os/visualizar/'.$o->idOs.'" class="btn"> <i class="icon-eye-open" ></i> </a> ';
                                }
                                echo '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="3">Nenhuma proposta em aberto.</td></tr>';
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php if ($os != null) { ?>
<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas de Propostas</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-os" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if ($estatisticas_financeiro != null) {
    if ($estatisticas_financeiro->total_receita != null || $estatisticas_financeiro->total_despesa != null || $estatisticas_financeiro->total_receita_pendente != null || $estatisticas_financeiro->total_despesa_pendente != null) {  ?>
<div class="row-fluid" style="margin-top: 0">

    <div class="span4">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas financeiras - Realizado</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-financeiro" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

    <div class="span4">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas financeiras - Pendente</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-financeiro2" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>


    <div class="span4">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Total em caixa / Previsto</h5></div>
            <div class="widget-content">
                <div class="row-fluid">
                    <div class="span12">
                      <div id="chart-financeiro-caixa" style=""></div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>

</div>
<?php                                                                                                           }
} ?>


<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas do Sistema</h5></div>
            <div class="widget-content">
                <div class="row-fluid">           
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_lh"><i class="icon-group"></i> <strong><?php echo $this->db->count_all('clientes');?></strong> <small>Clientes</small></li>
                            <li class="bg_lh"><i class="icon-barcode"></i> <strong><?php echo $this->db->count_all('produtos');?></strong> <small>Produtos </small></li>
                            <li class="bg_lh"><i class="icon-file"></i> <strong><?php echo $this->db->count_all('os');?></strong> <small>Propostas</small></li>
                            <li class="bg_lh"><i class="icon-tags"></i> <strong><?php echo $this->db->count_all('servicos');?></strong> <small>Tickets</small></li>
                            
                        </ul>
                 
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>




<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


<?php if ($os != null) {?>
<script type="text/javascript">
    
    $(document).ready(function(){
      var data = [
      
        <?php foreach ($os as $o) {
            switch ($o->status) {
                case '2':
                    $nome = 'Pendente';
                    break;
                case '3':
                    $nome = 'Em Análise';
                    break;
                case '1':
                    $nome = 'Orçamento';
                    break;
                case '5':
                    $nome = 'Reprovado';
                    break;    
                case '6':
                    $nome = 'Cancelado';
                    break;
                case '4':
                    $nome = 'Aprovado';
                    break;
                default:
                    $nome = ' ';
                    break;
            }
            echo "['".$nome."', ".$o->total."],";
} ?>
       
      ];
      var plot1 = jQuery.jqplot ('chart-os', [data], 
        { 
          seriesDefaults: {
            // Make this a pie chart.
            renderer: jQuery.jqplot.PieRenderer, 
            rendererOptions: {
              // Put data labels on the pie slices.
              // By default, labels show the percentage of the slice.
              showDataLabels: true
            }
          }, 
          legend: { show:true, location: 'e' }
        }
      );

    });
 
</script>

<?php } ?>



<?php if (isset($estatisticas_financeiro) && $estatisticas_financeiro != null) {
    if ($estatisticas_financeiro->total_receita != null || $estatisticas_financeiro->total_despesa != null || $estatisticas_financeiro->total_receita_pendente != null || $estatisticas_financeiro->total_despesa_pendente != null) {
?>
<script type="text/javascript">
    
$(document).ready(function(){

 var data2 = [['Total Receitas',<?php echo ($estatisticas_financeiro->total_receita != null ) ?  $estatisticas_financeiro->total_receita : '0.00'; ?>],['Total Despesas', <?php echo ($estatisticas_financeiro->total_despesa != null ) ?  $estatisticas_financeiro->total_despesa : '0.00'; ?>]];
 var plot2 = jQuery.jqplot ('chart-financeiro', [data2], 
   {  

     seriesColors: [ "#9ACD32", "#FF8C00", "#EAA228", "#579575", "#839557", "#958c12","#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],   
     seriesDefaults: {
       // Make this a pie chart.
       renderer: jQuery.jqplot.PieRenderer, 
       rendererOptions: {
         // Put data labels on the pie slices.
         // By default, labels show the percentage of the slice.
         dataLabels: 'value',
         showDataLabels: true
       }
     }, 
     legend: { show:true, location: 'e' }
   }
 );


 var data3 = [['Total Receitas',<?php echo ($estatisticas_financeiro->total_receita_pendente != null ) ?  $estatisticas_financeiro->total_receita_pendente : '0.00'; ?>],['Total Despesas', <?php echo ($estatisticas_financeiro->total_despesa_pendente != null ) ?  $estatisticas_financeiro->total_despesa_pendente : '0.00'; ?>]];
 var plot3 = jQuery.jqplot ('chart-financeiro2', [data3], 
   {  

     seriesColors: [ "#90EE90", "#FF0000", "#EAA228", "#579575", "#839557", "#958c12","#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],   
     seriesDefaults: {
       // Make this a pie chart.
       renderer: jQuery.jqplot.PieRenderer, 
       rendererOptions: {
         // Put data labels on the pie slices.
         // By default, labels show the percentage of the slice.
         dataLabels: 'value',
         showDataLabels: true
       }
     }, 
     legend: { show:true, location: 'e' }
   }

 );


 var data4 = [['Total em Caixa',<?php echo ($estatisticas_financeiro->total_receita - $estatisticas_financeiro->total_despesa); ?>],['Total a Entrar', <?php echo ($estatisticas_financeiro->total_receita_pendente - $estatisticas_financeiro->total_despesa_pendente); ?>]];
 var plot4 = jQuery.jqplot ('chart-financeiro-caixa', [data4], 
   {  

     seriesColors: ["#839557","#d8b83f", "#d8b83f", "#ff5800", "#0085cc"],   
     seriesDefaults: {
       // Make this a pie chart.
       renderer: jQuery.jqplot.PieRenderer, 
       rendererOptions: {
         // Put data labels on the pie slices.
         // By default, labels show the percentage of the slice.
         dataLabels: 'value',
         showDataLabels: true
       }
     }, 
     legend: { show:true, location: 'e' }
   }

 );


});
 
</script>

<?php                                                                                                              }
} ?>
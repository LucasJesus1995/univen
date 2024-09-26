
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Área do Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" /> 


    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
  </head>

  <body>

    <!--Header-part-->
    <div id="header">
      <h1><a href="dashboard.html"><?php echo $this->config->item('app_name'); ?></a></h1>
    </div>
    <!--close-Header-part--> 

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li class=""><a title="" href="<?php echo base_url()?>index.php/mine/conta"><i class="icon icon-star"></i> <span class="text"> Minha Conta</span></a></li>
        <li class=""><a title="" href="<?php echo base_url()?>index.php/mine/sair"><i class="icon icon-share-alt"></i> <span class="text"> Sair</span></a></li>
      </ul>
    </div>


    <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i> Menu</a>
      <ul>
        <li class="<?php if (isset($menuPainel)) {
            echo 'active';

};?>"><a href="<?php echo base_url()?>index.php/mine/painel"><i class="icon icon-home"></i> <span>Painel</span></a></li>

        <li class="<?php if (isset($menuVendas)) {
            echo 'active';

};?>"><a href="<?php echo base_url()?>index.php/mine/compras"><i class="icon icon-play"></i> <span>Live Commerce</span></a></li>

        <li class="submenu <?php if (isset($menuOs)) {
                    echo 'active open';
        };?>">
          <a href="#"><i class="icon icon-share"></i> <span>Plano Conecta </span> <span ><i class="icon-chevron-down"></i></span></a>
          <ul>
            
            <li><a href="<?php echo base_url()?>index.php/mine/os">Assinatura</a></li>
            <li><a href="">Pagamentos</a></li>
            <li><a href="">Status de Utilização</a></li>
            
 
          </ul>
        </li>

        <li class="submenu <?php if (isset($menuServicos)) {
            echo 'active open';

};?>">
          <a href="#"><i class="icon icon-medkit"></i> <span>Suporte </span> <span ><i class="icon-chevron-down"></i></span></a>
          <ul>
            
            <li><a href="<?php echo base_url()?>index.php/mine/chamados">Chamados</a></li>
            <li><a href="">Chat</a></li>
            <li><a href="">FAQ - Dúvidas Frequentes</a></li>
            
 
          </ul>
        </li>
          
      </ul>
    </div>


   
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="<?php echo base_url(); ?>index.php/mine/painel" title="Painel" class="tip-bottom"><i class="icon-home"></i> Painel</a></div>
      </div>
 
      <div class="container-fluid">
        <div class="row-fluid">
          
          <div class="span12">
            <?php if ($this->session->flashdata('error') != null) {?>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $this->session->flashdata('error');?>
              </div>
            <?php }?>

            <?php if ($this->session->flashdata('success') != null) {?>
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $this->session->flashdata('success');?>
              </div>
            <?php }?>

                <?php if (isset($output)) {
                    $this->load->view($output);
} ?>            
            
          </div>
        </div>
      
      </div>
    </div>
   

    <!-- javascript
    ================================================== -->

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/matrix.js"></script> 


  </body>
</html>

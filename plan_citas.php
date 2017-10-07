<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Prospecci&oacute;n - grupo optima</title>
          <?php $this->load->view('globales/estilos'); setlocale(LC_MONETARY, 'en_US');?>
          <?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


    </head>
    <body>
        <!-- main wrapper (without footer) -->
        <div id="main-wrapper">

            <!-- top bar -->
            <?php $this->load->view('globales/topBar'); ?>

            <!-- header -->
            <header id="header">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                     <?php $data["mn"] ="bateo"; $this->load->view('globales/menu',$data); ?>

                        </div>
                    </div>
                </div>
            </header>


            <section id="main_section">
                <div class="container-fluid">
                    <div id="contentwrapper">
                        <div id="content">

                            <!-- breadcrumbs -->
                            <section id="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo base_url();?>reporte/eva_detalle_asesor/<?= $_GET['ida']?>">Regresar</a></li>

                                </ul>
                            </section>

                            <!-- main content -->

 <div class="row-fluid">

                                <div class="span12">

                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>Tabla de Comisiones <?php echo date('Y');?></h3>
                                            <h3 class="natij"  style="float:right; margin-right:50px;"></h3>
                                        </div>
                                        <div class="box_a_content cnt_a">
                                     <?php echo $output; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>





       </div>





                    <!-- jPanel sidebar -->
                    <aside id="jpanel_side" class="jpanel_sidebar"></aside>
                    <!-- sticky footer space -->
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <!-- #main-wrapper end -->

        <!-- footer -->

  <?php $this->load->view('globales/footer'); ?>
  <?php $this->load->view('globales/js'); ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

    </body>
</html>

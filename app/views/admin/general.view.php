<?=$this->view('template/adminheader',$data)?>
      

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		<div class="row mt">
      			
      			
      	
      			
      		</div><!--/ row -->
          </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="general.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=ADMIN?>js/jquery.js"></script>
    <script src="<?=ADMIN?>js/jquery-1.8.3.min.js"></script>
    <script src="<?=ADMIN?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=ADMIN?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=ADMIN?>js/jquery.scrollTo.min.js"></script>
    <script src="<?=ADMIN?>js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?=ADMIN?>js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="<?=ADMIN?>js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=ADMIN?>js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>

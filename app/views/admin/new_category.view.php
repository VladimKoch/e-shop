<?=$this->view('template/adminheader',$data)?>
      

      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
         
			
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=ADMIN?>/js/jquery.js"></script>
    <script src="<?=ADMIN?>/js/bootstrap.min.js"></script>
    <script src="<?=ADMIN?>/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?=ADMIN?>/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?=ADMIN?>/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=ADMIN?>/js/jquery.scrollTo.min.js"></script>
    <script src="<?=ADMIN?>/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?=ADMIN?>/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>

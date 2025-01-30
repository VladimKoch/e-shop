<?=$this->view('template/adminheader',$data)?>
      
    <style>
        .hide{
            display: none;
        }
    </style>
  

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">

            <h1 class=" mb-5">Categories</h1>
            
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4 ><i class="fa fa-angle-right"></i> Product Categories
                            <button id="save"  type="button" class="btn btn-theme btn-xs hide save" onclick="collect_data(event)">save</button>
                            <button id="add" type="button" class="btn btn-primary btn-xs" onclick="show_add_new(event)" ><i class="fa fa-plus"></i>Add new</button></h4>
                            
                            <!-- ADD new category -->
                            <div class="add_new hide">
                                
                                <!-- BASIC FORM ELELEMNTS -->
                                <div class="row mt">
                                    <div class="col-lg-12">
                                        
                                        <br>
                                        <h4  class="mb justify-content-center align-items-center add_category"><i class="fa fa-angle-right"></i> Add Category</h4>
                                        
                                                <form class="form-horizontal style-form" method="get">
                                                    <div class="form-group m-5">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-4" >
                                                            <input type="text" placeholder="Type a name of the category" id="category" name="category" class="form-control">
                                                            
                                                        </div>
                                            
                                                    </div>
                                                    <div class="form-group m-5">
                                                        <label class="col-sm-1 col-sm-2 control-label">Description</label>
                                                        <div class="col-sm-5" >
                                                            <input type="text" placeholder="Describe category" id="description" name="description" class="form-control">
                                                            
                                                        </div>
                                            
                                                    </div>
                                                
                                                </form>
                                        
                                                </div><!-- col-lg-12-->      	
                                            </div>   <!-- /row -->

                                  </div>
                                  <!-- Add new category end -->

                                      <!-- Edit category -->
                            <div class="edit_new hide">
                                
                                <!-- BASIC FORM ELELEMNTS -->
                                <div class="row mt">
                                    <div class="col-lg-12">
                                        
                                        <br>
                                        <h4  class="mb justify-content-center align-items-center edit_category"><i class="fa fa-angle-right"></i> Edit Category</h4>
                                        
                                                <form class="form-horizontal style-form" method="get">
                                                    <div class="form-group m-5">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-4" >
                                                            <input type="text" placeholder="Type a name of the category" id="category" name="category" class="form-control">
                                                            
                                                        </div>
                                            
                                                    </div>
                                                    <div class="form-group m-5">
                                                        <label class="col-sm-1 col-sm-2 control-label">Description</label>
                                                        <div class="col-sm-5" >
                                                            <input type="text" placeholder="Describe category" id="description" name="description" class="form-control">
                                                            
                                                        </div>
                                            
                                                    </div>
                                                
                                                </form>
                                        
                                                </div><!-- col-lg-12-->      	
                                            </div>   <!-- /row -->

                                  </div>
                                  <!-- Edi category end -->
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Category</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Description</th>
                                  <th><i class="fa fa-euro"></i> Price</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th><i class=" fa fa-edit"></i> Action</th>
                                  <th></th>
                              </tr>
                              </thead>
                                <tbody id="table_body">
                                    <?php if(isset($tables)):?>
                                        <?php echo $tables?>
                                    <?php endif;?>
                                </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
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

    //   $(function(){
    //       $('select.styled').customSelect();
    //   });

  </script>

    <script type="text/javascript">

        function show_edit(e){

            console.log(e);
            document.querySelector('.add_category').innerHTML = `<i class="fa fa-angle-right"></i> Edit Category`;
            const id_row = e.id;


            // var category = document.querySelector('#id_category').textContent;
            // var description = document.querySelector('#id_description').textContent;
            
            // var category_value = document.querySelector('#category');
            // var description_value = document.querySelector('#description');

            // category_value.value = category;
            // description_value.value = description;


            var show_add_box = document.querySelector('.edit_new');
            if(show_add_box.classList.contains("hide")){
                show_add_box.classList.remove('hide');
            }else
            {
                show_add_box.classList.add('hide');
            }

            var show_save = document.querySelector('.save');
            if(show_save.classList.contains("hide")){
                show_save.classList.remove('hide');
            }else
            {
                show_save.classList.add('hide');
            }

            
                collect_data_edit({id:id_row});


        }



       function show_add_new(e)
       {    
            document.querySelector('.add_category').innerHTML = `<i class="fa fa-angle-right"></i> Add Category`;
        
            
            var show_add_box = document.querySelector('.add_new');
            if(show_add_box.classList.contains("hide")){
                show_add_box.classList.remove('hide');
            }else
            {
                show_add_box.classList.add('hide');
            }

            var show_save = document.querySelector('.save');
            if(show_save.classList.contains("hide")){
                show_save.classList.remove('hide');
            }else
            {
                show_save.classList.add('hide');
            }


    
       }

       function collect_data_edit(id){
            
            var category = document.querySelector('#id_category').textContent;
            var description = document.querySelector('#id_description').textContent;
            
            var category_value = document.querySelector('#category');
            var description_value = document.querySelector('#description');

            category_value.value = category;
            description_value.value = description;

            if(category_value.value.trim() !== "" && description_value.value.trim() !== "")
            {
                save({id:id,category:category.textContent,description:description.textContent,data_type:"edit_category"})
                // category_value.value = "";
                // description_value.value = "";
                // show_add_new();

            }

            
            // console.log(category.textContent);

       }



       function collect_data(){
            
            var category = document.querySelector('#category');
            var description = document.querySelector('#description');
            if(category.value.trim() == "" || description.value.trim() == ""){
                alert("Please enter valid category name and description");
            }
            else{

              let data_category = category.value.trim();
              let data_decription = description.value.trim();

                save({category:data_category,description:data_decription,data_type:'add_category'})
                category.value = "";
                description.value="";
                show_add_new();
            }
       }

       function save(data = {}){
 
            var ajax = new XMLHttpRequest();
            var form = new FormData();

            ajax.addEventListener('readystatechange',function(){
                if(ajax.readyState == 4 && ajax.status == 200)
                    {
                        handle_result(ajax.responseText);
                        // alert(ajax.responseText);
                    }
            });

            ajax.open("POST",'<?=PATH?>ajax',true);
            ajax.send(JSON.stringify(data));
       }

       function handle_result(result){
           var table_body = document.querySelector('#table_body');

            // console.log(result);

            if(result != ""){
                var obj = JSON.parse(result);
                if(obj.data_type == "add_category")
                {
                        if(obj.message_type =='info'){
                            table_body.innerHTML = obj.data;

                        }else
                        {
                            alert(obj.message);
                        }
                
                }
                else if(obj.data_type == "disable_row")
                {
                    var table_body = document.querySelector('#table_body');
                    table_body.innerHTML = obj.data;

                }else if(obj.data_type == "delete_category")
                
                {   
                    table_body.innerHTML = obj.data;
                    alert(obj.message);
                }
            }
       }


       function delete_row(obj){

            if(!confirm("Do you really want to delete this row ?")){
                return;
            }

            var id = obj.id;
            save({id:id,data_type:"delete_category"});
            // show_add_new();
               
        }



    function disable_row(id,state){
        save({
            data_type:"disable_row",
            id:id,
            current_state:state
        });
    }

    </script> 

  </body>
</html>

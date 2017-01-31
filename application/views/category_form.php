<!-- page content -->
<div class="right_col" role="main">
<?php $this->load->view('includes/top_tile.php') ; ?>
<div class="">
 
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Create New Category </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

 <?php if (isset($success_message)) {  ?>
 <div class="alert alert-success" align="center">
   <h4><?php echo $success_message ; ?></h4> 
   </div>
 <?php } ?> 

 <?php if (validation_errors()) {  ?>
 <div class="alert alert-danger" align="center">
   <h4><?php echo validation_errors(); ?></h4> 
   </div>
 <?php } ?>
      <form  action="<?php echo site_url('admin_controller/create_category') ?>" method="post"
        id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
          Category Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="cat_name" id="first-name" value="<?php echo set_value('cat_name'); ?>"
            required="" class="form-control col-md-7 col-xs-12">
          </div>
        </div> 
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>
</div>
  
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Category Lists</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content"> 

        <!-- start project list -->

       
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th><div align="center"> Category ID </div></th>
              <th><div align="center"> Category Name </div></th>
              <th><div align="center"> Date Created </div></th>
              <th><div align="center"> Actions </div></th>
            </tr>
          </thead>
          <tbody>
             <?php  foreach ( $category_detail as $value ) { ?>
            <tr>
              <td align="center"><?php  echo $value-> id ;?></td>
              <td align="center"><?php  echo $value-> category_name ;?></td>
              <td align="center"><?php  echo $value-> reg_date ;?></td>  
              <td align="center"> 
                <a href="<?php echo site_url('admin_controller/display_single_category/'.$value-> id) ; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                <a href="<?php echo site_url('admin_controller/delete_category/'.$value-> id) ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
              </td>
            </tr>
            <?php    } ?>
          </tbody>
        </table>
        
        <!-- end project list -->

      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
<!-- /page content -->
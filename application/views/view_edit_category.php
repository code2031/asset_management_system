<!-- page content -->
<div class="right_col" role="main">
<?php $this->load->view('includes/top_tile.php') ; ?>
<div class="">
 
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Category </h2>
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

 <?php foreach ($category_name as $value) { ?> 
      <form  action="<?php echo site_url('admin_controller/update_category/'.$value-> id) ?>" method="post"
        id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
          Category Name <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="cat_name" id="first-name" value="<?php echo $value-> category_name; ?>"
            required="" class="form-control col-md-7 col-xs-12">
          </div>
        </div> 
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
        
      </form>
      <?php } ?>
    </div>
  </div>
</div>
</div> 

</div>
</div>
</div>
<!-- /page content -->
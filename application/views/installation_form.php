<div class="right_col" role="main">
<?php $this->load->view('includes/top_tile.php') ; ?>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
  <h2>Install New Asset</h2>
  <ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
  </ul>
  <div class="clearfix"></div>
</div>
<div class="x_content" style="display: block;">
  
<?php if (isset($success_message)) {  ?>
 <div class="alert alert-success" align="center">
   <h4><?php echo $success_message ; ?></h4> 
   </div>
 <?php } ?> 
  <form action="<?php echo site_url('admin_controller/install_asset') ;?>" class="form-horizontal form-label-left" novalidate="" method="post"> 
    <span class="section">Asset Info</span>

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Category <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <select type="text" id="number" name="category_id" required="required" class="form-control col-md-7 col-xs-12">
     <option>--select-- </option>
      <?php  foreach ( $category_detail as $value ) { ?>   
      <option value="<?php  echo $value-> id ;?>">
        <?php echo $category_name =  $value-> category_name ; ?>
      </option>
      <?php } ?>
    </select>
  </div><?php echo form_error('category_id'); ?>
</div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name/Brand <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="asset_name" value="<?php echo set_value('asset_name'); ?>" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2">
      </div><?php echo form_error('asset_name'); ?>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Model <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="model" value="<?php echo set_value('model'); ?>"  id="email"required="required" class="form-control col-md-7 col-xs-12">
      </div><?php echo form_error('model'); ?>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Serial Number <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text"  name="serial_number"  value="<?php echo set_value('serial_number'); ?>"  id="email2" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
      </div><?php echo form_error('serial_number'); ?>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">PO Number </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telephone" name="po_number"  value="<?php echo set_value('po_number'); ?>"  required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
      </div><?php echo form_error('po_number'); ?>
    </div> 
     <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Vendor supplied <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="telephone" name="vendor"  value="<?php echo set_value('vendor'); ?>"  required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
      </div><?php echo form_error('vendor'); ?>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Purchased <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="purchase_day" name="date_purchased" class="date-picker form-control col-md-7 col-xs-12" required="required">
      </div><?php echo form_error('date_purchased'); ?>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Warranty <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
      <select class="form-control" name="warranty" value="<?php echo set_value('warranty'); ?>" required>
        <option value="0">No Warranty</option>
       <option value="1" >1 Year</option>
       <option value="2">2 Years</option>
       <option value="3">3 Years</option>
       <option value="4">4 years</option>
       <option value="5">5 Years</option>
       <option value="6">6 Years</option>
       <option value="7">7 years</option>
     </select>      
    </div><?php echo form_error('warranty'); ?>
    </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website"> Asset Specification <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea name="asset_specification" value="" id="textarea" required="required" class="form-control col-md-7 col-xs-12"><?php echo set_value('asset_specification'); ?></textarea>
      </div><?php echo form_error('asset_specification'); ?>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-3"> 
        <button id="send" type="submit" class="btn btn-success">Install</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
<script>
  $(function() {
    // body...
    $('#purchase_day').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true
    });
  });
</script>
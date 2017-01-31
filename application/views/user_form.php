<!-- page content -->
<div class="right_col" role="main">
<?php $this->load->view('includes/top_tile.php') ; ?>  

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_content">

 <?php if (isset($success_message)) {  ?>
 <div class="alert alert-success" align="center">
   <h4><?php echo $success_message ; ?></h4> 
   </div>
 <?php } ?>

<form action="<?php echo site_url('admin_controller/create_user') ;?>" method="post"
  class="form-horizontal form-label-left" novalidate>
<span class="section">Personal Info</span>

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
    Name <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
    name="names" value="<?php echo set_value('names'); ?>" placeholder="both name(s) e.g Wale Ajayi" required="required">
  </div><div><?php echo form_error('names'); ?></div>
</div>

 <div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Role <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <select type="number" id="number" name="role" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
    <option></option>
     <option value="User">User</option>
      <option value="Admin">Admin</option>
    </select>
  </div><?php echo form_error('role'); ?>
</div>

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" required="required" class="form-control col-md-7 col-xs-12">
  </div><?php echo form_error('email'); ?>
</div>

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Username <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="email" id="email2" name="uname" value="<?php echo set_value('uname'); ?>" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
  </div><?php echo form_error('uname'); ?>
</div>

<div class="item form-group">
  <label for="password" class="control-label col-md-3">Password</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="password" type="password" name="pwd1" value="<?php echo set_value('pwd1'); ?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
  </div><?php echo form_error('pwd1'); ?>
</div>

<div class="item form-group">
  <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="password2" type="password" name="pwd2" value="<?php echo set_value('pwd2'); ?>" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
  </div><?php echo form_error('pwd2'); ?>
</div>

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="tel" id="telephone" name="phone" value="<?php echo set_value('phone'); ?>" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
  </div><?php echo form_error('phone'); ?>
</div>

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Status <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <select type="number" id="number" name="status" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
     <option></option>
      <option value="Enabled" >Enabled</option>
      <option value="Disabled">Disabled</option>
    </select>
  </div><?php echo form_error('status'); ?>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <button id="send" type="submit" class="btn btn-success">Create</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<!-- /page content is cool, ajagunna maruf->
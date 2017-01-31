<!-- page content -->
<div class="right_col" role="main">
<?php $this->load->view('includes/top_tile.php') ; ?>
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Asset Managers</h3>
</div>

<div class="title_right">
<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for...">
<span class="input-group-btn">
  <button class="btn btn-default" type="button">Go!</button>
</span>
</div>
</div>
</div>
</div>

<div class="clearfix"></div>

<div class="row">
<div class="col-md-12">
<div class="x_panel">
<div class="x_content">
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <ul class="pagination pagination-split">
      <li><a href="#">A</a></li>
      <li><a href="#">B</a></li>
      <li><a href="#">C</a></li>
      <li><a href="#">D</a></li>
      <li><a href="#">E</a></li>
      <li>...</li>
      <li><a href="#">W</a></li>
      <li><a href="#">X</a></li>
      <li><a href="#">Y</a></li>
      <li><a href="#">Z</a></li>
    </ul>
  </div>

  <div class="clearfix"></div>
  <?php
  foreach ($user_detail as $value) { ?>

  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
    <div class="well profile_view">
      <div class="col-sm-12">
        <h4 class="brief">Role: <?php echo $value-> role ; ?></h4>
        <div class="left col-xs-7">
          <h2><?php echo $value-> names ; ?></h2>
          <p><strong>Status: </strong><?php echo $value-> status ; ?></p>
          <ul class="list-unstyled">
            <li><i class="fa fa-building"></i> <?php echo $value-> reg_date ; ?> </li>
            <li><i class="fa fa-phone"></i> <?php echo $value-> phone ; ?> </li>
          </ul>
        </div>
        <div class="right col-xs-5 text-center">
          <img src="<?php echo base_url(); ?>assets/images/user.png" alt="" class="img-circle img-responsive">
        </div>
      </div>
      <div class="col-xs-12 bottom text-center">
        <a href="<?php echo site_url('admin_controller/enable_user/'.$value-> id) ?>" class="btn btn-primary btn-xs">
          <i  class="fa fa-check"></i> Enable </a>
        <a href="<?php echo site_url('admin_controller/disable_user/'.$value-> id) ?>" class="btn btn-info btn-xs">
          <i class="fa fa-close"></i> Disable </a>
        <a href="<?php echo site_url('admin_controller/delete_user/'.$value-> id) ?>" 
          class="btn btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Delete </a>
      </div>
    </div>
  </div>
  <?php } ?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->
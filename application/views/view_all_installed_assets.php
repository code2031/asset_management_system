<!-- page content -->
<div class="right_col" role="main">
<?php $this->load->view('includes/top_tile.php') ; ?>
<div class="">
<div class="page-title">

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
<div class="x_title">
  <h2>Installed Assets</h2>
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
        <th><div align="center">S/N</div></th>
        <th><div align="center">Name</div></th>
        <th><div align="center">Model</div></th>
        <th><div align="center">Category</div></th>
        <th><div align="center">Serial</div></th>
        <th><div align="center">Installer</div></th>
        <th><div align="center">Purchased</div></th>
        <th><div align="center">Installed</div></th>
        <th><div align="center">Warranty</div></th>
        <th><div align="center">Expire</div></th>
        <th><div align="center">Status</div></th>
        <th><div align="center">Actions</div></th>
      </tr>
    </thead>
    <tbody> 

    <?php  
    $category_name = $this->session->userdata('category_name');
     $row = 1 ; 
     foreach ($asset_details as $value)  {  ?>
      <tr> 
        <td align="center"> <?php echo $row ; ?></td>
        <td align="center"><?php  echo $value-> asset_name ; ?></td>
        <td align="center"><?php  echo $value-> model ; ?></td>
        <td align="center"><?php  echo $category_name ; ?></td>
        <td align="center"><?php  echo $value-> serial_number ; ?></td>
        <td align="center"><?php  echo $value-> installed_by ; ?></td>
        <td align="center"><?php  echo $value-> date_purchased ; ?></td>
        <td align="center"><?php  echo $value-> installed_date ; ?></td>
        <td align="center"><?php  echo $value-> warranty."year" ; ?></td>
        <td align="center"><?php  echo $value-> installed_date ; ?></td>
        <td align="center"><?php  echo $value-> status ; ?></td> 
        <td align="center">
          <a href="#" class="btn btn-info btn-xs"> View </a>
          <a href="#" class="btn btn-success btn-xs">Deploy</a>
          <a href="<?php echo site_url('admin_controller/delete_asset/'.$value-> id) ; ?>" class="btn btn-danger btn-xs">Delete </a> 
        </td>
      </tr>
      <?php $row++ ; } ?>
      
    </tbody>
  </table>
  <!-- end project list -->

</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content 
<a href="<?php //echo site_url('admin_controller/delete_asset/'.$value-> id) ; ?>" class="btn btn-danger btn-xs">Delete </a>
          <a href="#" class="btn btn-primary btn-xs">Decommission</a>
 -->
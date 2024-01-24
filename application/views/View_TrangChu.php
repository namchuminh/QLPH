<?php require(APPPATH.'views/layouts/header.php'); ?>
<div class="content-wrapper" style="min-height: 1203.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thống Kê</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Thống Kê</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $countPhong[0]['tongso']; ?></h3>

                <p>Phòng Học</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-house"></i>
              </div>
              <a href="<?php echo base_url('phong-hoc/'); ?>" class="small-box-footer">XEM TẤT CẢ <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $countLoaiPhong[0]['tongso']; ?></h3>

                <p>Loại Phòng</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-layer-group"></i>
              </div>
              <a href="<?php echo base_url('loai-phong/'); ?>" class="small-box-footer">XEM TẤT CẢ <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $countThietBi[0]['tongso']; ?></h3>

                <p>Thiết Bị</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-computer"></i>
              </div>
              <a href="<?php echo base_url('thiet-bi/'); ?>" class="small-box-footer">XEM TẤT CẢ <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $countNhanVien[0]['tongso']; ?></h3>

                <p>Nhân Viên</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-user-group"></i>
              </div>
              <a href="<?php echo base_url('nhan-vien/'); ?>" class="small-box-footer">XEM TẤT CẢ <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php require(APPPATH.'views/layouts/footer.php'); ?>
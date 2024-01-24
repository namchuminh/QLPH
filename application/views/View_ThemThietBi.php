<?php require(APPPATH.'views/layouts/header.php'); ?>
<div class="content-wrapper" style="min-height: 1203.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Thiết Bị Phòng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('thiet-bi/'); ?>">Quản Lý Thiết Bị Phòng</a></li>
              <li class="breadcrumb-item active">Thêm Thiết Bị Phòng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Thông tin thiết bị phòng</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ten">Mã Thiết Bị</label>
                    <input type="text" class="form-control" id="ten" placeholder="Mã thiết bị" name="mathietbi" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ten">Tên Thiết Bị</label>
                    <input type="text" class="form-control" id="ten" placeholder="Tên thiết bị" name="tenthietbi" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="ten">Mô Tả </label>
                    <textarea class="form-control" rows="5" name="mota" placeholder="Mô tả thiết bị" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="sc">Số Lượng</label>
                    <div class="input-group">
                      <input type="number" class="form-control" id="sc" placeholder="Số lượng" name="soluong" required>
                      <div class="input-group-append">
                        <span class="input-group-text">chiếc</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Phòng Học</label>
                    <select class="form-control" name="phonghoc" required>
                      <?php foreach ($phonghoc as $key => $value): ?>
                        <option value="<?php echo $value['MaPhongHoc']; ?>"><?php echo $value['MaPhongHoc']; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Trạng Thái</label>
                    <select class="form-control" name="trangthai  " required>
                      <option selected="selected" value="1">Sử dụng</option>
                      <option value="0">Sửa chữa</option>
                    </select>
                  </div>
                </div>
              </div> 
              <a class="btn btn-success" href="<?php echo base_url('thiet-bi/'); ?>">Quay Lại</a>
              <button class="btn btn-primary">Thêm Thiết Bị</button>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require(APPPATH.'views/layouts/footer.php'); ?>

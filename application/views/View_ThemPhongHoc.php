<?php require(APPPATH.'views/layouts/header.php'); ?>
<div class="content-wrapper" style="min-height: 1203.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản Lý Phòng Học</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('phong-hoc/'); ?>">Quản Lý Phòng Học</a></li>
              <li class="breadcrumb-item active">Thêm Phòng Học</li>
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
            <h3 class="card-title">Thông tin phòng học</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ten">Tên Phòng Học</label>
                    <input type="text" class="form-control" id="ten" placeholder="Tên phòng học" name="tenphonghoc" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ten">Diện Tích Phòng</label>
                    <div class="input-group">
                      <input type="number" class="form-control" id="ten" placeholder="Diện tích phòng" name="dientich" required>
                      <div class="input-group-append">
                        <span class="input-group-text">m<sup>2</sup></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sc">Sức Chứa Phòng</label>
                    <div class="input-group">
                      <input type="number" class="form-control" id="sc" placeholder="Sức chứa người" name="succhua" required>
                      <div class="input-group-append">
                        <span class="input-group-text">người</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Loại Phòng</label>
                    <select class="form-control" name="loaiphong" required>
                      <?php foreach ($loaiphong as $key => $value): ?>
                        <option value="<?php echo $value['MaLoaiPhong']; ?>"><?php echo $value['TenLoaiPhong']; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Vị Trí Phòng</label>
                    <select class="form-control" name="vitri" required>
                      <?php foreach ($vitri as $key => $value): ?>
                        <option value="<?php echo $value['MaViTriPhong']; ?>"><?php echo $value['ToaNha'].' - '. $value['Tang'].' - '.$value['CoSo']; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tình Trạng Phòng</label>
                    <select class="form-control" name="tinhtrang" required>
                      <option selected="selected" value="1">Hoạt động</option>
                      <option value="0">Sửa chữa</option>
                    </select>
                  </div>
                </div>
              </div> 
              <a class="btn btn-success" href="<?php echo base_url('phong-hoc/'); ?>">Quay Lại</a>
              <button class="btn btn-primary">Thêm Phòng</button>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require(APPPATH.'views/layouts/footer.php'); ?>

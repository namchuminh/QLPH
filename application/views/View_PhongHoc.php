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
              <li class="breadcrumb-item active">Quản Lý Phòng Học</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách phòng học</h3>

                <div class="card-tools">
                  <form class="input-group input-group-sm" style="width: 150px;" method="get" action="<?php echo base_url('tim-kiem-phong/'); ?>">
                    <input type="text" name="tenphonghoc" class="form-control float-right" placeholder="Tìm tên phòng">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên Phòng Học</th>
                      <th>Diện Tích</th>
                      <th>Sức Chứa</th>
                      <th>Loại Phòng</th>
                      <th>Vị Trí</th>
                      <th>Trạng Thái</th>
                      <th>Hành Động</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach ($list as $key => $value): ?>
	                    <tr>
	                      <td><?php echo $key + 1; ?></td>
	                      <td><?php echo $value['MaPhongHoc']; ?></td>
	                      <td><?php echo $value['DienTich']; ?> m<sup>2</sup></td>
	                      <td><?php echo $value['SucChua']; ?> người</td>
	                      <td><?php echo $value['TenLoaiPhong']; ?></td>
	                      <td style="max-width: 200px;"><?php echo $value['ToaNha'] ." - ". $value['Tang'] ." - ". $value['CoSo']; ?></td>
	                      <td><?php echo $value['TinhTrang'] == 1 ? "Hoạt động" : "Sửa chữa"; ?></td>
	                      <td>
	                      	<a href="<?php echo base_url('phong-hoc/'.$value['MaPhongHoc'].'/sua/'); ?>" class="btn btn-primary" style="color: white;">
	                      		<i class="fas fa-edit"></i>
                            	<span>SỬA</span>
                           	</a>
                           	<a href="<?php echo base_url('phong-hoc/'.$value['MaPhongHoc'].'/xoa/'); ?>" class="btn btn-danger" style="color: white;">
	                      		<i class="fas fa-trash"></i>
                            	<span>XÓA</span>
                           	</a>
	                      </td>
	                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require(APPPATH.'views/layouts/footer.php'); ?>

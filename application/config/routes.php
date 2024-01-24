<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'TrangChu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dang-nhap'] = 'DangNhap/index';
$route['dang-xuat'] = 'DangXuat/index';

$route['phong-hoc'] = 'PhongHoc/index';
$route['phong-hoc/them'] = 'PhongHoc/add';
$route['phong-hoc/(:any)/sua'] = 'PhongHoc/update/$1';
$route['phong-hoc/(:any)/xoa'] = 'PhongHoc/delete/$1';
$route['tim-kiem-phong'] = 'PhongHoc/search';

$route['loai-phong'] = 'LoaiPhong/index';
$route['loai-phong/them'] = 'LoaiPhong/add';
$route['loai-phong/(:any)/sua'] = 'LoaiPhong/update/$1';
$route['loai-phong/(:any)/xoa'] = 'LoaiPhong/delete/$1';

$route['vi-tri'] = 'ViTri/index';
$route['vi-tri/them'] = 'ViTri/add';
$route['vi-tri/(:any)/sua'] = 'ViTri/update/$1';
$route['vi-tri/(:any)/xoa'] = 'ViTri/delete/$1';

$route['thiet-bi'] = 'ThietBi/index';
$route['thiet-bi/them'] = 'ThietBi/add';
$route['thiet-bi/(:any)/sua'] = 'ThietBi/update/$1';
$route['thiet-bi/(:any)/xoa'] = 'ThietBi/delete/$1';

$route['nhan-vien'] = 'NhanVien/index';
$route['nhan-vien/them'] = 'NhanVien/add';
$route['nhan-vien/(:any)/sua'] = 'NhanVien/update/$1';
$route['nhan-vien/(:any)/xoa'] = 'NhanVien/delete/$1';

$route['ca-nhan'] = 'CaNhan/index';





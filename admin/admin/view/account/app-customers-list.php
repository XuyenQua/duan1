<!-- sa-app__body -->
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customers</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Tài khoản khách hàng</h1>
                    </div>
                    <!-- <div class="col-auto d-flex"><a href="app-customer.html" class="btn btn-primary">New customer</a></div> -->
                </div>
            </div>
            <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for customers" class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 1, &quot;asc&quot; ]]" data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false"><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                            <th class="min-w-12x">Tên đăng nhập</th>
                            <th>Ngày đăng ký</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>vai Trò</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($ds_tai_khoan as $tai_khoan) :
                                extract($tai_khoan);
                                // var_dump($tai_khoan);
                                if($anh_tk == ""){
                                    $hinh = $img_path_admin ."user.jpg";
                                }else{
                                    $hinh = $img_path_admin .$anh_tk;
                                }

                                if($_SESSION['user']['vai_tro']==3||$_SESSION['user']['vai_tro']==2){
                                    $link = 'index.php?act=app-delete-customers-list&iddel='.$id;
                                }else{
                                    $link = '#';
                                }
                                
                                ?>
                                <tr>
                                <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></td>
                                <td>
                                    <div class="d-flex align-items-center"><a href="index.php?act=app-customer&id=<?=$id?>" class="me-4">
                                            <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"><img src="<?=$hinh?>" width="40" height="40" alt="" /></div>
                                        </a>
                                        <div><a href="index.php?act=app-customer&id=<?=$id?>" class="text-reset"><?=$ten_dang_nhap?></a>
                                            <div class="text-muted mt-n1"><?=$email?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-nowrap"><?=$ngay_dang_ky?></td>
                                <td><?=$dia_chi?></td>
                                <td><?=$so_dien_thoai?></td>
                                <td>
                                    <div class="sa-price"><span class="sa-price__symbol"><?=$vai_tro?></span></div>
                                </td>
                                <td>
                                    <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                                                <path d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"></path>
                                            </svg></button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-0">
                                            <!-- <li><a class="dropdown-item" href="#">Sửa</a></li> -->
                                            <!-- <li><a class="dropdown-item" href="#">Duplicate</a></li>
                                            <li><a class="dropdown-item" href="#">Add tag</a></li>
                                            <li><a class="dropdown-item" href="#">Remove tag</a></li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li> -->
                                            <!-- <li><a class="dropdown-item text-danger" onclick="return confirm('bạn có muốn xóa hay không')"  href="<?=$link?>">xóa</a></li> -->
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!-- sa-app__body / end -->
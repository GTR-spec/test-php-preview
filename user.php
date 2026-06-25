<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris - Surface</title>
    <link rel="stylesheet" href="user_files/bootstrap.min_35de.css">
    <link rel="stylesheet" href="user_files/toastr.min_35de.css">
    <link rel="stylesheet" href="user_files/dataTables.bootstrap.min_35de.css">
    <link rel="stylesheet" href="user_files/all.min_35de.css">
    
    <script src="user_files/jquery-3.6.1_35de.js"></script>
    <script src="user_files/bootstrap.min_35de.js"></script>
    <script src="user_files/toastr.min_35de.js"></script>
    <script src="user_files/jquery.dataTables.min_35de.js"></script>
    
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            z-index: 1000;
        }

        .navbar-center-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            width: 200px;
            height: calc(100% - 56px);
            background-color: #3d3d3d;
            padding-top: 20px;
            z-index: 999;
        }

        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #adadad;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #4d4d4d;
            color: #ffffff;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
            flex: 1;
            position: relative;
            min-height: 85vh;
        }

        .main-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('assets/image/big_logo.jpeg'); 
            background-repeat: no-repeat;
            background-position: center 60%;
            background-size: 400px;
            opacity: 0.05;
            z-index: -1;
            pointer-events: none;
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                margin-top: 55px;
                background: #FFFDD0;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top position-relative" style="background: linear-gradient(135deg, #FFFDD0 0%, #F5F5DC 100%); border-bottom: 3px solid #E6E2AF; min-height: 56px;">
        <div class="container-fluid">
            
            <a class="navbar-brand navbar-center-brand" href="http://localhost/02SIFE005/Tugas_Pemrograman_Web/home.php">
                <img src="user_files/logo-text_35de.svg" alt="Surface Logo" height="50">
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold" href="http://localhost/02SIFE005/Tugas_Pemrograman_Web/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link text-dark">
                            <i class="fa-regular fa-user me-1"></i> Welcome Back, <strong>admin</strong>
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="sidebar py-4">
        <div class="text-center mb-4 px-3 pb-3" style="border-bottom: 1px solid #4d4d4d;">
            <img src="user_files/logo-light_35de.png" alt="Logo Sidebar" class="img-fluid" style="max-height: 45px; object-fit: contain;">
        </div>

        <a href="http://localhost/02SIFE005/Tugas_Pemrograman_Web/index.php">
            <i class="fa-solid fa-gauge me-2"></i> Dashboard
        </a>
        <a href="http://localhost/02SIFE005/Tugas_Pemrograman_Web/inventaris.php">
            <i class="fa-solid fa-boxes-stacked me-2"></i> Inventaris
        </a>
        <a href="http://localhost/02SIFE005/Tugas_Pemrograman_Web/user.php">
            <i class="fa-solid fa-users me-2"></i> User
        </a>
        <a href="http://localhost/02SIFE005/Tugas_Pemrograman_Web/login/logout.php" class="text-danger mt-2">
            <i class="fa-solid fa-right-from-bracket me-2"></i> Logout
        </a>
    </div>
<div class="main-content">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
   
                <header class="d-flex justify-content-between align-items-center py-2 mb-3 border-bottom">
                    <h1 class="h2 mb-0">Data User</h1>
                    <div>
                        <button id="btnTambah" class="btn btn-primary">
                            <i class="fa-solid fa-user-plus me-1"></i> Tambah User
                        </button>
                    </div>
                </header>
                
                <div class="table-responsive">
                    <div id="tabel_user_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="tabel_user_length"><label>Show <select name="tabel_user_length" aria-controls="tabel_user" class=""><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="tabel_user_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="tabel_user"></label></div><table class="table table-striped table-bordered w-100 no-footer dataTable" id="tabel_user" aria-describedby="tabel_user_info" style="">
                        <thead class="table-light">
                            <tr><th style="width: 92.8833px;" class="sorting sorting_asc" tabindex="0" aria-controls="tabel_user" rowspan="1" colspan="1" aria-label="No: activate to sort column descending" aria-sort="ascending">No</th><th class="sorting" tabindex="0" aria-controls="tabel_user" rowspan="1" colspan="1" style="width: 562.233px;" aria-label="Username: activate to sort column ascending">Username</th><th class="sorting" tabindex="0" aria-controls="tabel_user" rowspan="1" colspan="1" style="width: 539.267px;" aria-label="Password: activate to sort column ascending">Password</th><th style="width: 288.617px;" class="sorting" tabindex="0" aria-controls="tabel_user" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending">Aksi</th></tr>
                        </thead>
                        <tbody><tr class="odd"><td class="sorting_1">1</td><td>user</td><td>user</td><td><button data-id="1" class="btn btn-sm btn-warning" id="btnEdit">Edit</button> <button data-id="1" class="btn btn-sm btn-danger" id="btnHapus">Hapus</button></td></tr><tr class="even"><td class="sorting_1">2</td><td>admin</td><td>admin</td><td><button data-id="4" class="btn btn-sm btn-warning" id="btnEdit">Edit</button> <button data-id="4" class="btn btn-sm btn-danger" id="btnHapus">Hapus</button></td></tr></tbody>
                    </table><div class="dataTables_info" id="tabel_user_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div><div class="dataTables_paginate paging_simple_numbers" id="tabel_user_paginate"><a class="paginate_button previous disabled" aria-controls="tabel_user" aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="-1" id="tabel_user_previous">Previous</a><span><a class="paginate_button current" aria-controls="tabel_user" aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="tabel_user" aria-disabled="true" aria-role="link" data-dt-idx="next" tabindex="-1" id="tabel_user_next">Next</a></div></div>             
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="userForm">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="userModalLabel">Modal title</h5>
                    <button type="button" class="btn p-0 border-0" data-bs-dismiss="modal" aria-label="Close" style="font-size: 1.2rem;">
                        <i class="fa-solid fa-xmark text-secondary"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="user_id" name="user_id">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required="" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Save</button>
                    <button type="submit" class="btn btn-success text-white" id="btnUpdate">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var tabelUser = $('#tabel_user').DataTable({
        "responsive": true
    });

    tampilData();

    function tampilData() {
        $.ajax({
            url: "user/read.php",
            method: "GET",
            success: function(data) {
                if ($.fn.DataTable.isDataTable('#tabel_user')) {
                    tabelUser.destroy();
                }
                
                $('#tabel_user tbody').html(data);
                
                tabelUser = $('#tabel_user').DataTable({
                    "responsive": true
                });
            },
            error: function() {
                toastr.error('Gagal mengambil data dari server.');
            }
        });
    }

    $('#btnTambah').click(function() {
        $('#userModalLabel').text('Tambah User');
        $('#userForm')[0].reset();
        $('#user_id').val('');
        $('#btnSimpan').show();
        $('#btnUpdate').hide();
        $('#userModal').modal('show');
    });

    $('#userForm').submit(function(e) {
        e.preventDefault(); 
        
        var formData = $(this).serialize();
        var targetUrl = $('#btnSimpan').is(':visible') ? "user/create.php" : "user/update.php";
        
        $.ajax({
            url: targetUrl,
            method: "POST",
            data: formData,
            success: function(response) {
                $('#userModal').modal('hide');
                tampilData();
                toastr.success('Data berhasil diproses');
            },
            error: function() {
                toastr.error('Data gagal diproses ke server');
            }
        });
    });

    $(document).on('click', '#btnEdit', function() {
        var user_id = $(this).data('id');
        $.ajax({
            url: "user/get.php",
            method: "GET",
            data: { user_id: user_id },
            success: function(data) {
                try {
                    var user = JSON.parse(data);
                    $('#user_id').val(user.user_id);
                    $('#username').val(user.username);
                    $('#password').val(user.password);
                    
                    $('#userModalLabel').text('Edit User');
                    $('#btnSimpan').hide();
                    $('#btnUpdate').show();
                    $('#userModal').modal('show');
                } catch(e) {
                    toastr.error('Gagal memproses data format server.');
                }
            },
            error: function() {
                toastr.error('Gagal mengambil detail user.');
            }
        });
    });

    $(document).on('click', '#btnHapus', function() {
        var user_id = $(this).data('id');
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
                url: "user/delete.php",
                method: "POST",
                data: { user_id: user_id },
                success: function(data) {
                    tampilData();
                    toastr.success('Data berhasil dihapus');
                },
                error: function() {
                    toastr.error('Data gagal dihapus');
                }
            });
        }
    });

    $(document).on('click', '[data-bs-dismiss="modal"]', function() {
        $('#userModal').modal('hide');
    });
});
</script>

 <footer class="text-center py-3 mt-auto" style="background-color: #F5F5DC; border-top: 3px solid #E6E2AF;">
        <p class="text-dark mb-0">© 2026 Surface Head Office. All rights reserved.</p>
    </footer>


</body></html>
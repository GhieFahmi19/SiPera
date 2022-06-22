<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<!-- Isi dari Main Content -->
<section class="section">
    <div class="section-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <a href="https://sipas21.applayer.id/surat-masuk" class="btn btn-sm btn-dark"><i class="fas fa-backward"></i> Back</a>
                    <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#modal-sm"><i class="fas fa-file"></i> Detail Surat</button>
                    <a role="button" class="btn btn-sm btn-dark" data-target="#modal-download" data-toggle="modal"><i class="fas fa-download"></i> Download</a>
                    <a href="https://sipas21.applayer.id/surat-masuk/edit/3b18b0652a8a295ce8876530f9e7d067" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <form action="https://sipas21.applayer.id/surat-masuk/do_delete/3b18b0652a8a295ce8876530f9e7d067" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="hdn_del_id" value="16">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-times"></i> Delete</button>

                    </form>

                </div>

                <div class="col-12">
                    <div class="card card-dark card-outline elevation-3 rounded-0">
                        <div class="card-header">
                            <h3 class="card-title text-bold">
                                File(s)
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-dark" onclick="show_upload()"><i class="fas fa-upload"></i> Upload File</button>


                                <button type="button" class="btn btn-tool" onclick="reload_data()"><i class="fas fa-sync"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="dtbl-files_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dtbl-files_length"><label>Show <select name="dtbl-files_length" aria-controls="dtbl-files" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dtbl-files_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dtbl-files"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered dataTable no-footer dtr-inline" id="dtbl-files" role="grid" aria-describedby="dtbl-files_info" style="width: 100%;" width="100%" cellspacing="0">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_desc" tabindex="0" aria-controls="dtbl-files" rowspan="1" colspan="1" style="width: 269px;" aria-sort="descending" aria-label="#: activate to sort column ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-files" rowspan="1" colspan="1" style="width: 156px;" aria-label="Type: activate to sort column ascending">Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-files" rowspan="1" colspan="1" style="width: 268px;" aria-label="Description: activate to sort column ascending">Description</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-files" rowspan="1" colspan="1" style="width: 341px;" aria-label="Uploaded: activate to sort column ascending">Uploaded</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1 dtr-control">
                                                        <div class="btn-group btn-group-sm"><a href="../files/sm/942990b3d160662dca595f368324d98c" class="btn btn-sm btn-dark" target="_blank"><i class="fas fa-folder-open"></i> View</a> <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
                                                            <div class="dropdown-menu" role="menu" style=""><button onclick="edit_file(&quot;&quot;&quot;&quot;)" class="dropdown-item"><i class="fas fa-edit"></i> Edit</button><button onclick="del_file(&quot;&quot;,&quot;&quot;)" class="dropdown-item text-danger"><i class="fas fa-times"></i> Delete</button> </div>
                                                        </div>
                                                    </td>
                                                    <td>image</td>
                                                    <td></td>
                                                    <td>2022-06-05 20:17:58</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="dtbl-files_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dtbl-files_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dtbl-files_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="dtbl-files_previous"><a href="#" aria-controls="dtbl-files" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dtbl-files" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="dtbl-files_next"><a href="#" aria-controls="dtbl-files" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-dark card-outline elevation-3 rounded-0">
                        <div class="card-header">
                            <h3 class="card-title text-bold">
                                Disposisi

                            </h3>
                            <div class="card-tools">
                                <a href="/surat-masuk/disposisi/add" class="btn btn-sm btn-dark"><i class="fas fa-plus"></i> Tambah Disposisi</a>

                                <button type="button" class="btn btn-tool" onclick="reload_data_disposisi()"><i class="fas fa-sync"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="dtbl-disposisi_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dtbl-disposisi_length"><label>Show <select name="dtbl-disposisi_length" aria-controls="dtbl-disposisi" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dtbl-disposisi_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dtbl-disposisi"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered dataTable no-footer dtr-inline" id="dtbl-disposisi" role="grid" aria-describedby="dtbl-disposisi_info" style="width: 100%;" width="100%" cellspacing="0">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_desc" tabindex="0" aria-controls="dtbl-disposisi" rowspan="1" colspan="1" style="width: 310px;" aria-sort="descending" aria-label="#: activate to sort column ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-disposisi" rowspan="1" colspan="1" style="width: 178px;" aria-label="Sifat: activate to sort column ascending">Sifat</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-disposisi" rowspan="1" colspan="1" style="width: 221px;" aria-label="Tujuan: activate to sort column ascending">Tujuan</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-disposisi" rowspan="1" colspan="1" style="width: 325px;" aria-label="Batas Waktu: activate to sort column ascending">Batas Waktu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1 dtr-control">
                                                        <div class="btn-group btn-group-sm "><a href="https://sipas21.applayer.id/surat-masuk/disposisi/view/e887411c5c40dd03e13827bbe108ca90" class="btn btn-sm btn-dark"><i class="fas fa-folder-open"></i> View</a> <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown"> <span class="sr-only">Toggle Dropdown</span> </button>
                                                            <div class="dropdown-menu" role="menu"><a href="https://sipas21.applayer.id/surat-masuk/disposisi/edit/e887411c5c40dd03e13827bbe108ca90" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a><a href="https://sipas21.applayer.id/surat-masuk/disposisi/print/e887411c5c40dd03e13827bbe108ca90" class="dropdown-item" target="_blank"><i class="fas fa-print"></i> Print Disposisi</a> </div>
                                                        </div>
                                                    </td>
                                                    <td>segera</td>
                                                    <td>adit</td>
                                                    <td>2022-06-05</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="dtbl-disposisi_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dtbl-disposisi_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dtbl-disposisi_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="dtbl-disposisi_previous"><a href="#" aria-controls="dtbl-disposisi" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dtbl-disposisi" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="dtbl-disposisi_next"><a href="#" aria-controls="dtbl-disposisi" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-dark card-outline elevation-3 rounded-0">
                        <div class="card-header">
                            <h3 class="card-title text-bold">
                                User(s)
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-dark" onclick="show_users('16')"><i class="fas fa-user"></i> Add User</button>
                                <button type="button" class="btn btn-tool" onclick="reload_data_user()"><i class="fas fa-sync"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="dtbl-users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dtbl-users_length"><label>Show <select name="dtbl-users_length" aria-controls="dtbl-users" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dtbl-users_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dtbl-users"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered dataTable no-footer dtr-inline" id="dtbl-users" role="grid" aria-describedby="dtbl-users_info" style="width: 100%;" width="100%" cellspacing="0">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_desc" tabindex="0" aria-controls="dtbl-users" rowspan="1" colspan="1" style="width: 176px;" aria-sort="descending" aria-label="#: activate to sort column ascending">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-users" rowspan="1" colspan="1" style="width: 116px;" aria-label="User: activate to sort column ascending">User</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-users" rowspan="1" colspan="1" style="width: 406px;" aria-label="Time: activate to sort column ascending">Time</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-users" rowspan="1" colspan="1" style="width: 216px;" aria-label="Access: activate to sort column ascending">Access</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dtbl-users" rowspan="1" colspan="1" style="width: 79px;" aria-label="Note: activate to sort column ascending">Note</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1 dtr-control">
                                                        <div class="btn-group btn-group-sm "><a role="button" class="btn btn-sm btn-dark"><i class="fas fa-edit"></i> Actions</a> <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown"> <span class="sr-only">Toggle Dropdown</span> </button>
                                                            <div class="dropdown-menu" role="menu"><button onclick="edit_user_access(&quot;&quot;,&quot;0&quot;)" class="dropdown-item"><i class="fas fa-edit"></i> Edit</button><button onclick="del_user(&quot;&quot;,&quot;0&quot;)" class="dropdown-item text-danger"><i class="fas fa-times"></i> Delete</button> </div>
                                                        </div>
                                                    </td>
                                                    <td><b>@gridtutor</b><br>grid tutor<br>NIP:123456</td>
                                                    <td>2022-06-05 00:00:00 - 2022-06-05 23:59:59</td>
                                                    <td><b>Access:</b> Disable<br><b class="ml-3">File:</b> Disable<br><b class="ml-3">Disposisi:</b> Disable<br><b class="ml-3">Download:</b> Disable</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div id="dtbl-users_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dtbl-users_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dtbl-users_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="dtbl-users_previous"><a href="#" aria-controls="dtbl-users" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="dtbl-users" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled" id="dtbl-users_next"><a href="#" aria-controls="dtbl-users" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
</section>

<?= $this->endSection() ?>
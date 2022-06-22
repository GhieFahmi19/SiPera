<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

      <!-- Isi dari Main Content -->
        <section class="section">
          <div class="section-header">
            <div class="card card-dark card-outline elevation-3 rounded-0">
            <div class="card-header">
                <h3 class="card-title">
                  <a href="/surat-masuk/add" class="btn btn-sm btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="reload_data()"><i class="fas fa-sync"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div id="dtbl-index_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row"><div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dtbl-index_length"><label>Show <select name="dtbl-index_length" aria-controls="dtbl-index" class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                  </select> entries</label>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                <div id="dtbl-index_filter" class="dataTables_filter">
                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dtbl-index">
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped table-bordered dataTable no-footer dtr-inline" id="dtbl-index" role="grid" aria-describedby="dtbl-index_info" style="width: 100%;" width="100%" cellspacing="0">
                        <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 14px;" aria-sort="descending" aria-label="ID: activate to sort column ascending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 61px;" aria-label="Tindakan: activate to sort column ascending">Tindakan</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 50px;" aria-label="No Agenda: activate to sort column ascending">No Agenda</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 41px;" aria-label="No Surat: activate to sort column ascending">No Surat</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 55px;" aria-label="Tanggal Surat: activate to sort column ascending">Tanggal Surat</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 110px;" aria-label="Asal Surat: activate to sort column ascending">Asal Surat</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 128px;" aria-label="Perihal: activate to sort column ascending">Perihal</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 101px;" aria-label="Klasifikasi: activate to sort column ascending">Klasifikasi</th>
                        <th class="sorting" tabindex="0" aria-controls="dtbl-index" rowspan="1" colspan="1" style="width: 86px;" aria-label="Penyimpanan: activate to sort column ascending">Penyimpanan</th></tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                      <td class="sorting_1 dtr-control">16</td>
                      <td><div class="btn-group btn-group-sm"><a href="../surat-masuk/view/3b18b0652a8a295ce8876530f9e7d067" class="btn btn-sm btn-dark"><i class="fas fa-folder-open"></i> View</a>   
                      <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">      
                        <span class="sr-only">Toggle Dropdown</span>    
                      </button>    
                      <div class="dropdown-menu" role="menu" style="">
                        <a href="../surat-masuk/edit/3b18b0652a8a295ce8876530f9e7d067" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>    
                    </div>
                  </div>
               </div>
              </tr>
              <tr role="row" class="even"><td class="sorting_1 dtr-control">15</td>
              <td>
                <div class="btn-group btn-group-sm ">
                <a href="../surat-masuk/view/e15b64f02836f21120fa9de64a4550d2" class="btn btn-sm btn-dark"><i class="fas fa-folder-open"></i> View</a>    
              <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown"><span class="sr-only">Toggle Dropdown</span></button>   
               <div class="dropdown-menu" role="menu">
                 <a href="../surat-masuk/edit/e15b64f02836f21120fa9de64a4550d2" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>    
              </div>
            </div>
                
        </tr>
        <tr role="row" class="odd"><td class="sorting_1 dtr-control">14</td>
        <td>
          <div class="btn-group btn-group-sm ">
            <a href="../surat-masuk/view/8056ad49fc05ec65fa06d99f3633a344" class="btn btn-sm btn-dark"><i class="fas fa-folder-open"></i> View</a>    
          <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown"><span class="sr-only">Toggle Dropdown</span></button>    
          <div class="dropdown-menu" role="menu">
            <a href="../surat-masuk/edit/8056ad49fc05ec65fa06d99f3633a344" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>    
        </div>
      </div>
    </td>
    
   </tr>
<tr role="row" class="even"><td class="sorting_1 dtr-control">13</td>
<td><div class="btn-group btn-group-sm ">
  <a href="../surat-masuk/view/72ae1d11eb72f8c2f08dc59ee59af855" class="btn btn-sm btn-dark"><i class="fas fa-folder-open"></i> View</a>   
 <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown"><span class="sr-only">Toggle Dropdown</span></button>    
        <div class="dropdown-menu" role="menu">
          <a href="../surat-masuk/edit/72ae1d11eb72f8c2f08dc59ee59af855" class="dropdown-item"><i class="fas fa-edit"></i> Edit</a>   
       </div>
      </div>
    </td>
</tbody>
       </table><div id="dtbl-index_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
              </div>
            </div>
            <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dtbl-index_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
          </div>
          <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dtbl-index_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dtbl-index_previous">
            <a href="#" aria-controls="dtbl-index" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
            <li class="paginate_button page-item active"><a href="#" aria-controls="dtbl-index" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item next disabled" id="dtbl-index_next"><a href="#" aria-controls="dtbl-index" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
            </div>
        </div>
             </section>

	<?= $this->endSection() ?>

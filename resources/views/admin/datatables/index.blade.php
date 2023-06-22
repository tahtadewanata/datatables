@extends('admin.layouts.app')
@section('content')
    <div class="section-header">
        <h1>DataTables</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Modules</a></div>
            <div class="breadcrumb-item">DataTables</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic DataTables</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tahun</label>
                            <select class="form-control" name="tahun" id="selectTahun">
                                <option value="">Pilih Tahun</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-data">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Kecamatan</th>
                                        <th colspan="2">Jenis Kelamin SD Swasta</th>
                                        <th rowspan="2">Jumlah</th>
                                        <th colspan="2">Persentase</th>
                                        <th rowspan="2" width="15%">Actions</th>
                                    </tr>
                                    <tr>
                                        <th>L</th>
                                        <th>P</th>
                                        <th>L</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../admin/modules/jquery.min.js"></script>
    <!-- JS Libraies -->
    <script src="../../admin/modules/datatables/datatables.min.js"></script>
    <script src="../../admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../../admin/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../../admin/js/page/modules-datatables.js"></script>

    <script>
        $(function() {
            var myTable = $('#table-data').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('datatable.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan'
                    },
                    {
                        data: 'jk_l',
                        name: 'jk_l'
                    },
                    {
                        data: 'jk_p',
                        name: 'jk_p'
                    },
                    {
                        data: 'sum',
                        name: 'sum'
                    },
                    {
                        data: 'pr_l',
                        name: 'pr_l'
                    },
                    {
                        data: 'pr_p',
                        name: 'pr_p'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
            $('#selectTahun').on('change', function() {
                var tahun = $(this).val();
                console.log(tahun);
                var urls = '{!! route('datatable.index') !!}' + '?tahun=' + tahun;
                myTable.ajax.url(urls).load();
            });
        });
    </script>
@endsection

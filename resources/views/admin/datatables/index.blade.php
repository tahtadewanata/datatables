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
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-data">
                                <thead>
                                    <tr>
                                        <th width="10%">No.</th>
                                        <th>table1</th>
                                        <th>table2</th>
                                        <th>sum</th>
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
            var table = $('#table-data').DataTable({
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
                        data: 'jklksds',
                        name: 'jklksds'
                    },
                    {
                        data: 'jkprsds',
                        name: 'jkprsds'
                    },
                    {
                        data: 'sum',
                        name: 'sum'
                    },
                ]
            });
        });
    </script>
@endsection

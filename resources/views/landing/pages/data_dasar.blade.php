@extends('landing.layouts.app')
@section('content')
    <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>Data Dasar</h1>
                    <!-- Page Description -->

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-0">
                        <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tabel</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-title mb-0">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Behind Story  ====-->

    <script src="../../landing/plugins/jquery/jquery.min.js"></script>
    <script src="../../admin/modules/chart.min.js"></script>

    <script>
        $(function() {
            var myTable = $('#exampleData').DataTable({
                lengthChange: false,
                searching: false,
                processing: true,
                serverSide: true,
                ajax: '{{ route('getdasar') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'namadata',
                        name: 'namadata'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                'columnDefs': [{
                    'targets': [0, 1, 2],
                    /* column index */
                    'orderable': false,
                    /* true or false */
                }],
                "aoColumnDefs": [{
                "aTargets": ['details'],
                "bSearchable": false,
                "bSortable": false
                }]
            });
        });
    </script>
@endsection

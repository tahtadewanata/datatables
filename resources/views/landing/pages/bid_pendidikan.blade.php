@extends('landing.layouts.app')
@section('content')
    <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>{{$title}}</h1>
                    <!-- Page Description -->

                </div>
            </div>
        </div>
        {{-- </section>

    <section class="section"> --}}
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-0">
                        <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tabel</th>
                                    <th width="15%">Actions</th>
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
                processing: true,
                serverSide: true,
                ajax: '{{ route('getPendidikantable') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false },
                    { data: 'nama_tabel', name: 'nama_tabel' },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false },
                ],
            });
        });
    </script>
@endsection

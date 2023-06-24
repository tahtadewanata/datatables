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
                        <h4>Basic DataTables</h4> <a href="{{ route('kecamatan.create') }}" class="btn btn-primary">Tambah
                            Kecamatan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th width="10%">No.</th>
                                        <th>Kecamatan</th>
                                        <th width="15%">Tahun</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($datas as $kec)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $kec->nama_kecamatan }}</td>
                                            <td>{{ $kec->tahun }}</td>
                                            <td><a href="{{ route('kecamatan.edit', $kec->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-danger"
                                                    onclick="if(confirm('Anda yakin ingin menghapus data ini?')){ document.getElementById('form-delete-{{ $kec->id }}').submit(); }">Hapus</a>
                                                <form id="form-delete-{{ $kec->id }}"
                                                    action="{{ route('kecamatan.destroy', $kec->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
@endsection

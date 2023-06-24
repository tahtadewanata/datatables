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
                        <form action="{{ route('kecamatan.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="kec">Kecamatan</label>
                                    <input type="text" class="form-control" id="kec" name="nama_kecamatan"
                                        placeholder="Kecamatan">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="thn">Tahun</label>
                                    <input type="text" class="form-control" id="thn" name="tahun"
                                        placeholder="Kecamatan">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

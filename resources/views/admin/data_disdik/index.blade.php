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
                        <form id="importForm" action="{{ route('datadisdik.import') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-control" name="import_file" id="import_file">
                            <button type="submit" class="btn btn-success">Import</button>
                        </form>
                        <div id="importResults"></div>
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
        $(document).ready(function() {
            $('#importForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route('datadisdik.import') }}',
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        toastr.success(response.pesan, 'Success', {
                            closeButton: true, // Display a close button
                            progressBar: true, // Show a progress bar
                        });


                        $('#import_file').val('');
                        $('#import_file').text('Choose File');
                    },
                    error: function() {
                        alert('An error occurred during import.');
                    }
                });
            });
        });
    </script>
@endsection

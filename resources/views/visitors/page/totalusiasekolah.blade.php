<!DOCTYPE html>
<html>

<head>
    <title>Data Table Demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <label for="year-filter">Filter by Year:</label>
    <select id="year-filter">
        <option value="">All</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
    </select>

    <table id="data-tablec" class="table table-bordered display">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Kecamatan</th>
                <th colspan="2">Jenis Kelamin SD Swasta</th>
                <th rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th>L</th>
                <th>P</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function() {

            var table = $('#data-tablec').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('totalusiasekolah.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id'
                    },
                    {
                        data: 'nama_opd',
                        name: 'nama_opd'
                    },
                    {
                        data: 'tb_usiasekolah.jk_lk_smps',
                        name: 'tb_usiasekolah.jk_lk_sds'
                    },
                    {
                        data: 'tb_usiasekolah.jk_pr_sds',
                        name: 'tb_usiasekolah.jk_pr_sds'
                    },
                    {
                        data: "sum",
                        name: 'sum'
                    },
                ],
            });
        });
    </script>
</body>

</html>
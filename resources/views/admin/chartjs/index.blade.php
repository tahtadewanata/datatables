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
                        <h4>CharJs</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../admin/modules/jquery.min.js"></script>

    <!-- JS Libraies -->
    <script src="../../admin/modules/chart.min.js"></script>

    <script>
        var ctx = document.getElementById("myChart2").getContext('2d');

        // Membuat fungsi untuk mengambil data chart melalui Ajax
        function fetchData() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '{{ route('getChart') }}', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var chartData = JSON.parse(xhr.responseText);

                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: chartData.labels,
                            datasets: [{
                                label: 'Laki-laki',
                                data: chartData.data.laki,
                                borderWidth: 2,
                                backgroundColor: '#6777ef',
                                borderColor: '#6777ef',
                                pointBackgroundColor: '#ffffff',
                                pointRadius: 4
                            }, {
                                label: 'Perempuan',
                                data: chartData.data.perempuan,
                                borderWidth: 2,
                                backgroundColor: '#ff6b88',
                                borderColor: '#ff6b88',
                                pointBackgroundColor: '#ffffff',
                                pointRadius: 4
                            }]
                        },
                    });
                }
            };
            xhr.send();
        }

        // Memanggil fungsi fetchData saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            fetchData();
        });
    </script>
@endsection

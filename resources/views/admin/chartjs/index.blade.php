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
            </div>
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
        //Chartjs
        let myChart;

        $(document).ready(function() {
            // Ketika dokumen selesai dimuat
            $('#selectTahun').change(function() {
                // Ketika nilai elemen select dengan ID selectTahun berubah
                reloadChart(); // Memanggil fungsi reloadChart untuk memperbarui chart
            });

            function reloadChart() {
                // Fungsi untuk memperbarui chart

                // Mengambil nilai yang dipilih dari elemen select
                let selectedYear = $('#selectTahun').val();

                $.ajax({
                    url: "{{ route('getChart') }}",
                    type: "GET",
                    data: {
                        tahun: selectedYear
                    },
                    dataType: "json",
                    success: function(response) {
                        // Jika permintaan AJAX berhasil
                        if (myChart) {
                            myChart.destroy(); // Destory chart sebelumnya (jika ada)
                        }

                        // Ini adalah package dari chart.js, untuk dokumentasi lihat https://www.chartjs.org/docs/latest/
                        let ctx = document.getElementById("myChart2").getContext('2d');
                        myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: response.labels,
                                datasets: [{
                                    label: 'Laki-laki',
                                    data: response.data.laki,
                                    borderWidth: 2,
                                    backgroundColor: '#6777ef',
                                    borderColor: '#6777ef',
                                    pointBackgroundColor: '#ffffff',
                                    pointRadius: 4
                                }, {
                                    label: 'Perempuan',
                                    data: response.data.perempuan,
                                    borderWidth: 2,
                                    backgroundColor: '#ff6b88',
                                    borderColor: '#ff6b88',
                                    pointBackgroundColor: '#ffffff',
                                    pointRadius: 4
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: false,
                                            stepSize: 10
                                        }
                                    }]
                                }
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr
                        .responseText); // Menampilkan pesan error pada konsol jika terjadi kesalahan
                    }
                });
            }
            reloadChart(); // Memanggil fungsi reloadChart saat dokumen selesai dimuat
        });
    </script>
@endsection

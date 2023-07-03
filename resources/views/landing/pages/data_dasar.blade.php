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
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Tabel</th>
                                    <th rowspan="2" width="15%">Aksi</th>
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
                ajax: '{{ route('chartTable') }}',
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
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                'columnDefs': [ {
                'targets': [0,1,2], /* column index */
                'orderable': false, /* true or false */
     }]
            });
        });

        //Chartjs
        let myChart;

        $(document).ready(function() {
            // Ketika dokumen selesai dimuat
            $('#exampleFormControlSelect1').change(function() {
                // Ketika nilai elemen select dengan ID exampleFormControlSelect1 berubah
                reloadChart(); // Memanggil fungsi reloadChart untuk memperbarui chart
            });

            function reloadChart() {
                // Fungsi untuk memperbarui chart

                // Mengambil nilai yang dipilih dari elemen select
                let selectedYear = $('#exampleFormControlSelect1').val();

                $.ajax({
                    url: "{{ route('getChartTable') }}",
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

        function downloadImage() {
            myChart.options.title.text = 'New Chart Title';
            myChart.update({
                duration: 0
            });
            var link = document.createElement('a');
            link.href = myChart.toBase64Image();
            link.download = 'myImage.png';
            link.click();
            myChart.options.title.text = 'Chart Title';
            myChart.update({
                duration: 0
            });
        }
    </script>
@endsection

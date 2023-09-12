@extends('landing.layouts.app')
@section('content')
    <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>{{$title}}</h1>
                    <!-- Page Description -->
                    <p>{{$desc}}</p>
                </div>
            </div>
        </div>
        {{-- </section>

    <section class="section"> --}}
        <div class="container">
            <button onclick="downloadImage();">save as image</button>
            <form>
                <div class="form-group">
                    <br>
                    <label for="exampleFormControlSelect1"><strong>Tahun</strong></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tahun">
                        <option value="">Pilih Tahun</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-0">
                        <table id="exampleData" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Jenjang</th>
                                    <th colspan="2">Jenis Kelamin</th>
                                    <th rowspan="2">Jumlah</th>
                                    <th colspan="2">Persentase</th>
                                    <th rowspan="2" width="15%">Actions</th>
                                </tr>
                                <tr>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
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
            let tahun = $('#exampleFormControlSelect1').val();
            var myTable = $('#exampleData').DataTable({
                processing: true,
                serverSide: true,               
                ajax: {
                url: '{{ route('getpart-sekolah') }}',
                type: "GET",
                dataType: "JSON",
                error: function(xhr, error, code) {
                    alertModalError(xhr); 
                }
            },               
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'jenjang',
                        name: 'jenjang'
                    },
                    {
                        data: 'jk_lk',
                        name: 'jk_lk' //dari sini bukan ? mungkin 
                    },
                    {
                        data: 'jk_pr',
                        name: 'jk_pr'
                    },
                    {
                        data: 'sum',
                        name: 'sum'
                    },
                    {
                        data: 'pr_l',
                        name: 'pr_l'
                    },
                    {
                        data: 'pr_p',
                        name: 'pr_p'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                'columnDefs': [{
                    'targets': [0, 1, 2, 3, 4, 5, 6, 7],
                    /* column index */
                    'orderable': false,
                    /* true or false */
                }]
            });
            $('#exampleFormControlSelect1').on('change', function() {
                // Ketika nilai elemen select dengan ID exampleFormControlSelect1 berubah

                // Mengambil nilai yang dipilih
                let tahun = $(this).val();

                // Membentuk URL dengan menambahkan parameter tahun
                let urls = '{!! route('getpart-sekolah') !!}' + '?tahun=' + tahun;

                // Memperbarui URL sumber data DataTable dan memuat ulang data
                myTable.ajax.url(urls).load();
            });
        });

        //Chartjs
        let myChart;

        $(document).ready(function() {
            reloadChart(); // Memanggil fungsi reloadChart saat dokumen selesai dimuat
            // Ketika dokumen selesai dimuat
            $('#exampleFormControlSelect1').change(function() {
                // Ketika nilai elemen select dengan ID exampleFormControlSelect1 berubah
                reloadChart(); // Memanggil fungsi reloadChart untuk memperbarui chart
            });           
           
        });

        function reloadChart() {
                // Fungsi untuk memperbarui chart

                // Mengambil nilai yang dipilih dari elemen select
                let selectedYear = $('#exampleFormControlSelect1').val();

                $.ajax({
                    url: "{{ route('getChartApk') }}",
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
                                    data: response.data.lanang,
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
                                            stepSize: 20
                                        }
                                    }],
                                    xAxes: [{
                                    ticks: {
                                        maxRotation: 50,
                                        minRotation: 30,
                                        padding: 10,
                                        autoSkip: false,
                                        fontSize: 10
                                    }
                                    }]
                                }
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr
                            .responseText
                            ); // Menampilkan pesan error pada konsol jika terjadi kesalahan
                    }
                });
            }

        function downloadImage() {
            myChart.options.title.text = 'Judul Chart';
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

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
                        <option value="2020">2020</option>
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
                                    <th rowspan="2">Kecamatan</th>
                                    <th colspan="2">Paket A</th>
                                    <th colspan="2">Paket B</th>
                                    <th colspan="2">Paket C</th>
                                    <th rowspan="2" width="15%">Actions</th>
                                </tr>
                                <tr>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot align="right">
        <tr>
            <th colspan="2"></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </tfoot>
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
                "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total of the complete result 
            var monTotal = api
                .column( 2 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
	    var tueTotal = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
            var wedTotal = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
	     var thuTotal = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
				
            var kemisTotal = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            var friTotal = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            var satTotal = api
                .column( 8 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            

        // Update footer by showing the total with the reference of the column index
        $(api.column(0).footer()).html('Total: ').addClass('text-center');
        $(api.column(2).footer()).html(monTotal); // Clear column 1 footer
        $(api.column(3).footer()).html(tueTotal);
        $(api.column(4).footer()).html(wedTotal);
        $(api.column(5).footer()).html(thuTotal);
        $(api.column(6).footer()).html(thuTotal);
        $(api.column(7).footer()).html(friTotal);
        $(api.column(8).footer()).html(satTotal);
        },
        processing: true,
                serverSide: true,               
                ajax: {
                url: '{{ route('getKejarpaket') }}',
                
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
                        data: 'kecamatan',
                        name: 'kecamatan'
                    },
                    {
                        data: 'jk_lk',
                        name: 'jk_lk' 
                    },
                    {
                        data: 'jk_pr',
                        name: 'jk_pr'
                    },
                    {
                        data: 'B_lk',
                        name: 'B_lk'
                    },
                    {
                        data: 'B_pr',
                        name: 'B_pr'
                    },
                    {
                        data: 'C_lk',
                        name: 'C_lk'
                    },
                    {
                        data: 'C_pr',
                        name: 'C_pr'
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
                let urls = '{!! route('getKejarpaket') !!}' + '?tahun=' + tahun;

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
                    url: "{{ route('getChartSdnegeri') }}",
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
                            type: 'line',
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
                                            stepSize: 200
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

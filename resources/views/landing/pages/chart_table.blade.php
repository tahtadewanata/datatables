@extends('landing.layouts.app')
@section('content')
    <section class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1>About Small Apps</h1>
                    <!-- Page Description -->
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia
                        eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>
                </div>
            </div>
        </div>
        {{-- </section>

    <section class="section"> --}}
        <div class="container">
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
                                    <th colspan="2">Jenis Kelamin SD Swasta</th>
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
                        data: 'jk_l',
                        name: 'jk_l'
                    },
                    {
                        data: 'jk_p',
                        name: 'jk_p'
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
                ]
            });
            $('#exampleFormControlSelect1').on('change', function() {
                let tahun = $(this).val();
                let urls = '{!! route('chartTable') !!}' + '?tahun=' + tahun;
                myTable.ajax.url(urls).load();
            });
        });

        //Chartjs
        let myChart;

        $(document).ready(function() {
            $('#exampleFormControlSelect1').change(function() {
                reloadChart();
            });

            function reloadChart() {
                let selectedYear = $('#exampleFormControlSelect1').val();

                $.ajax({
                    url: "{{ route('getChartTable') }}",
                    type: "GET",
                    data: {
                        tahun: selectedYear
                    },
                    dataType: "json",
                    success: function(response) {
                        if (myChart) {
                            myChart.destroy();
                        }

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
                        console.error(xhr.responseText);
                    }
                });
            }
            reloadChart();
        });
    </script>
@endsection
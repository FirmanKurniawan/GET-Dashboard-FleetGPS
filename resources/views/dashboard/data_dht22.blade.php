@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endsection
@section('js')
<script src="{{asset('stisla/dist/assets/modules/chart.min.js')}}"></script>

<script>
    var statistics_chart = document.getElementById("myChartWarehouse").getContext('2d');
    var temperature = {!! json_encode($temperature) !!};
    var timeLabels = {!! json_encode($timeLabels) !!};
    var myChart = new Chart(statistics_chart, {
        type: 'line',
        data: {
            labels: timeLabels,
            datasets: [
                {
                    label: 'Temperature',
                    data: temperature,
                    borderWidth: 2.5,
                    borderColor: '#6777ef',
                    backgroundColor: '#6777ef',
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#000000',
                    pointRadius: 4
                },
            ]
        },
        options: {
            legend: {
                display: false, // Menampilkan legenda
                // labels: {
                //     boxWidth: 20 // Ukuran kotak legenda
                // }
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        // display: false,
                        drawBorder: false,
                        color: '#f2f2f2'
                    },
                    ticks: {
                        stepSize: 5,
                        min: 20,
                        max: 40,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        // color: '#fbfbfb',
                        // lineWidth: 2,
                        display: false
                    },
                    ticks: {
                        display: false
                    },
                }],
            }
        }
    });
</script>

<script>
    var statistics_chart = document.getElementById("myChartWarehouse2").getContext('2d');
    var humidity = {!! json_encode($humidity) !!};
    var timeLabels = {!! json_encode($timeLabels) !!};
    var myChart = new Chart(statistics_chart, {
        type: 'line',
        data: {
            labels: timeLabels,
            datasets: [
                {
                    label: 'Humidity',
                    data: humidity,
                    borderWidth: 2.5,
                    borderColor: '#ef6e77',
                    backgroundColor: '#ef6e77',
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#000000',
                    pointRadius: 4
                },
            ]
        },
        options: {
            legend: {
                display: false, // Menampilkan legenda
                // labels: {
                //     boxWidth: 20 // Ukuran kotak legenda
                // }
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        // display: false,
                        drawBorder: false,
                        color: '#f2f2f2'
                    },
                    ticks: {
                        stepSize: 5,
                        min: 20,
                        max: 40,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        // color: '#fbfbfb',
                        // lineWidth: 2,
                        display: false
                    },
                    ticks: {
                        display: false
                    },
                }],
            }
        }
    });
</script>

<script>
    var statistics_chart = document.getElementById("myChartWarehouse3").getContext('2d');
    var heat_index = {!! json_encode($heat_index) !!};
    var timeLabels = {!! json_encode($timeLabels) !!};
    var myChart = new Chart(statistics_chart, {
        type: 'line',
        data: {
            labels: timeLabels,
            datasets: [
                {
                    label: 'Heat Index',
                    data: heat_index,
                    borderWidth: 2.5,
                    borderColor: '#3cb371',
                    backgroundColor: '#3cb371',
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#000000',
                    pointRadius: 4
                },
            ]
        },
        options: {
            legend: {
                display: false, // Menampilkan legenda
                // labels: {
                //     boxWidth: 20 // Ukuran kotak legenda
                // }
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        // display: false,
                        drawBorder: false,
                        color: '#f2f2f2'
                    },
                    ticks: {
                        stepSize: 5,
                        min: 20,
                        max: 40,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        // color: '#fbfbfb',
                        // lineWidth: 2,
                        display: false
                    },
                    ticks: {
                        display: false
                    },
                }],
            }
        }
    });
</script>
<script src="{{asset('stisla/dist/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('stisla/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('stisla/dist/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('stisla/dist/assets/js/page/modules-datatables.js')}}"></script>
@endsection
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Sensor</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item">Sensor</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Data DHT 22</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="/script" class="btn btn-primary"><i class="fas fa-plus"></i> Get Data Sensor</a>
                &nbsp;
                <select class="form-control col-2">
                    <option>Sensor 1</option>
                    <option>Sensor 2</option>
                    <option>Sensor 3</option>
                    <option>Sensor 4</option>
                    <option>Sensor 5</option>
                    <option>Sensor 6</option>
                </select>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-item"><i class="fas fa-plus"></i> Add Item</button> --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          Name Sensor
                        </th>
                        <th>Temperature</th>
                        <th>Humidity</th>
                        <th>Heat Index</th>
                        <th>Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($datas as $data)
                      <tr>
                        <td>
                            Sensor 1
                        </td>
                        <td>{{ $data->temperature }}</td>
                        <td>{{ $data->humidity }}</td>
                        <td>{{ $data->heat_index }}</td>
                        <td>{{ $data->time }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

            <!-- Form modal untuk edit -->
            {{-- <form class="modal-part" id="modal-edit-part">
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="fas fa-toolbox"></i>
                        </div>
                    </div>
                    <input type="hidden" class="id-edit">
                    <input type="text" class="form-control name-edit" placeholder="Name" name="name" value="" id="name-edit">
                    </div>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="fas fa-calculator"></i>
                        </div>
                    </div>
                    <input type="number" class="form-control stock-edit" placeholder="Stock" name="stock" value="" id="stock-edit">
                    </div>
                </div>
            </form> --}}
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                <h4>Statistics</h4>
                <div class="card-header-action">
                    <div class="btn-group">
                    <a href="#" class="btn" id="weekBtn">Interval 5 detik</a>
                    {{-- <a href="#" class="btn" id="monthBtn">Month</a> --}}
                    </div>
                </div>
                </div>
                <div class="card-body">
                <canvas id="myChartWarehouse3" height="182"></canvas>
                {{-- <canvas id="myChartWarehouse2" height="182" style="display: none;"></canvas> --}}
                <script>
                    const weekBtn = document.getElementById("weekBtn");
                    const monthBtn = document.getElementById("monthBtn");
                    const myChartWarehouse = document.getElementById("myChartWarehouse");
                    const myChartWarehouse = document.getElementById("myChartWarehouse2");
                    const myChartWarehouse = document.getElementById("myChartWarehouse3");
                    //const myChartWarehouse2 = document.getElementById("myChartWarehouse2");

                    // Inisialisasi tombol "Week" sebagai aktif
                    weekBtn.classList.add("active");

                    // Tangani klik pada tombol Week
                    weekBtn.addEventListener("click", function(event) {
                        event.preventDefault(); // Mencegah perubahan posisi secara otomatis

                        myChartWarehouse.style.display = "block";
                        myChartWarehouse2.style.display = "none";

                        // Atur status tombol aktif
                        weekBtn.classList.add("active");
                        monthBtn.classList.remove("active");
                    });

                    // Tangani klik pada tombol Month
                    monthBtn.addEventListener("click", function(event) {
                        event.preventDefault(); // Mencegah perubahan posisi secara otomatis

                        myChartWarehouse.style.display = "none";
                        myChartWarehouse2.style.display = "block";

                        // Atur status tombol aktif
                        weekBtn.classList.remove("active");
                        monthBtn.classList.add("active");
                    });
                </script>
                </div>
            </div>
            </div>
        </div>

        v class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                <h4>Statistics</h4>
                <div class="card-header-action">
                    <div class="btn-group">
                    <a href="#" class="btn" id="weekBtn">Interval 5 detik</a>
                    {{-- <a href="#" class="btn" id="monthBtn">Month</a> --}}
                    </div>
                </div>
                </div>
                <div class="card-body">
                <canvas id="myChartWarehouse2" height="182"></canvas>
                {{-- <canvas id="myChartWarehouse2" height="182" style="display: none;"></canvas> --}}
                <script>
                    const weekBtn = document.getElementById("weekBtn");
                    const monthBtn = document.getElementById("monthBtn");
                    const myChartWarehouse = document.getElementById("myChartWarehouse");
                    const myChartWarehouse = document.getElementById("myChartWarehouse2");
                    const myChartWarehouse = document.getElementById("myChartWarehouse3");
                    //const myChartWarehouse2 = document.getElementById("myChartWarehouse2");

                    // Inisialisasi tombol "Week" sebagai aktif
                    weekBtn.classList.add("active");

                    // Tangani klik pada tombol Week
                    weekBtn.addEventListener("click", function(event) {
                        event.preventDefault(); // Mencegah perubahan posisi secara otomatis

                        myChartWarehouse.style.display = "block";
                        myChartWarehouse2.style.display = "none";

                        // Atur status tombol aktif
                        weekBtn.classList.add("active");
                        monthBtn.classList.remove("active");
                    });

                    // Tangani klik pada tombol Month
                    monthBtn.addEventListener("click", function(event) {
                        event.preventDefault(); // Mencegah perubahan posisi secara otomatis

                        myChartWarehouse.style.display = "none";
                        myChartWarehouse2.style.display = "block";

                        // Atur status tombol aktif
                        weekBtn.classList.remove("active");
                        monthBtn.classList.add("active");
                    });
                </script>
                </div>
            </div>
            </div>
        </div>

        v class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                <h4>Statistics</h4>
                <div class="card-header-action">
                    <div class="btn-group">
                    <a href="#" class="btn" id="weekBtn">Interval 5 detik</a>
                    {{-- <a href="#" class="btn" id="monthBtn">Month</a> --}}
                    </div>
                </div>
                </div>
                <div class="card-body">
                <canvas id="myChartWarehouse3" height="182"></canvas>
                {{-- <canvas id="myChartWarehouse2" height="182" style="display: none;"></canvas> --}}
                <script>
                    const weekBtn = document.getElementById("weekBtn");
                    const monthBtn = document.getElementById("monthBtn");
                    const myChartWarehouse = document.getElementById("myChartWarehouse");
                    const myChartWarehouse = document.getElementById("myChartWarehouse2");
                    const myChartWarehouse = document.getElementById("myChartWarehouse3");
                    //const myChartWarehouse2 = document.getElementById("myChartWarehouse2");

                    // Inisialisasi tombol "Week" sebagai aktif
                    weekBtn.classList.add("active");

                    // Tangani klik pada tombol Week
                    weekBtn.addEventListener("click", function(event) {
                        event.preventDefault(); // Mencegah perubahan posisi secara otomatis

                        myChartWarehouse.style.display = "block";
                        myChartWarehouse2.style.display = "none";

                        // Atur status tombol aktif
                        weekBtn.classList.add("active");
                        monthBtn.classList.remove("active");
                    });

                    // Tangani klik pada tombol Month
                    monthBtn.addEventListener("click", function(event) {
                        event.preventDefault(); // Mencegah perubahan posisi secara otomatis

                        myChartWarehouse.style.display = "none";
                        myChartWarehouse2.style.display = "block";

                        // Atur status tombol aktif
                        weekBtn.classList.remove("active");
                        monthBtn.classList.add("active");
                    });
                </script>
                </div>
            </div>
            </div>
        </div>
      </div>
    </section>
</div>

<!-- Modal "Add Item" -->
<div class="modal fade" id="modal-add-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Name Item">
                    </div>
                    <div class="form-group">
                        <label for="brand" class="col-form-label">Brand:</label>
                        <input type="text" class="form-control" id="brand" placeholder="Brand Item">
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-form-label">Type:</label>
                        <select class="form-control" id="type">
                            <option value="out">Out</option>
                            <option value="in">In</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stock" class="col-form-label">Stock:</label>
                        <input type="number" class="form-control" id="stock" placeholder="Total Stock">
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="col-form-label">Category:</label>
                        <select class="form-control" id="category_id">
                            {{-- @foreach ($categories as $category) --}}
                                {{-- <option value="{{ $category['id'] }}">{{ $category['name_category'] }}</option> --}}
                            {{-- @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="vendor_id" class="col-form-label">Vendor:</label>
                        <select class="form-control" id="vendor_id">
                            {{-- @foreach ($vendors as $vendor) --}}
                                {{-- <option value="{{ $vendor['id'] }}">{{ $vendor['name'] }}</option> --}}
                            {{-- @endforeach --}}
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add-item">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for editing item -->
<div class="modal fade" id="modal-edit-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="edit-name" class="col-form-label">Name:</label>
                        <input type="hidden" class="id-edit">
                        <input type="text" class="form-control" id="edit-name">
                    </div>
                    <div class="form-group">
                        <label for="brand" class="col-form-label">Brand:</label>
                        <input type="text" class="form-control" id="edit-brand" placeholder="Brand Item">
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-form-label">Type:</label>
                        <select class="form-control" id="edit-type">
                            <option value="out">Out</option>
                            <option value="in">In</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit-stock" class="col-form-label">Stock:</label>
                        <input type="number" class="form-control" id="edit-stock">
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="col-form-label">Category:</label>
                        <select class="form-control" id="edit-category_id">
                            {{-- @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}">{{ $category['name_category'] }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="vendor_id" class="col-form-label">Vendor:</label>
                        <select class="form-control" id="edit-vendor_id">
                            {{-- @foreach ($vendors as $vendor)
                                <option value="{{ $vendor['id'] }}">{{ $vendor['name'] }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="edit-item">Update</button>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="http://localhost:8000/leaflet.css"/>
<link rel="stylesheet" href="http://localhost:8000/leaflet-fullscreen.css" />

{{-- <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}"> --}}
@endsection
@section('js')
<!-- Make sure you put this AFTER Leaflet's CSS -->

{{-- <script src="{{asset('stisla/dist/assets/modules/chart.min.js')}}"></script> --}}

{{-- <script>
    function updateChartData() {
        $.ajax({
            url: 'http://localhost:8000/temperature',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                myChart1.data.labels = response.timeLabels;
                myChart1.data.datasets[0].data = response.temperature;

                myChart1.update();
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    var statistics_chart = document.getElementById("myChartWarehouse").getContext('2d');
    var temperature = {!! json_encode($temperature) !!};
    var timeLabels = {!! json_encode($timeLabels) !!};

    var myChart1 = new Chart(statistics_chart, {
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
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
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
                        display: false
                    },
                    ticks: {
                        display: false
                    },
                }],
            }
        }
    });
    setInterval(updateChartData, 1000);
</script>

<script>
    function updateHumidityChart() {
        $.ajax({
            url: 'http://localhost:8000/humidity',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                myChartHumidity.data.labels = response.timeLabels;
                myChartHumidity.data.datasets[0].data = response.humidity;
                myChartHumidity.update();
            },
            error: function(error) {
                console.error('Error fetching humidity data:', error);
            }
        });
    }

    var statistics_chart_humidity = document.getElementById("myChartWarehouse2").getContext('2d');
    var humidity = {!! json_encode($humidity) !!};
    var timeLabels = {!! json_encode($timeLabels) !!};

    var myChartHumidity = new Chart(statistics_chart_humidity, {
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
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: '#f2f2f2'
                    },
                    ticks: {
                        stepSize: 5,
                        min: 30,
                        max: 90,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        display: false
                    },
                }],
            }
        }
    });
    setInterval(updateHumidityChart, 1000);
</script>

<script>
    function updateHeatIndexChart() {
        $.ajax({
            url: 'http://localhost:8000/heat_index',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                myChartHeatIndex.data.labels = response.timeLabels;
                myChartHeatIndex.data.datasets[0].data = response.heat_index;
                myChartHeatIndex.update();
            },
            error: function(error) {
                console.error('Error fetching heat index data:', error);
            }
        });
    }

    var statistics_chart_heat_index = document.getElementById("myChartWarehouse3").getContext('2d');
    var heat_index = {!! json_encode($heat_index) !!};
    var timeLabels = {!! json_encode($timeLabels) !!};

    var myChartHeatIndex = new Chart(statistics_chart_heat_index, {
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
                display: false,
            },
            scales: {
                yAxes: [{
                    gridLines: {
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
                        display: false
                    },
                    ticks: {
                        display: false
                    },
                }],
            }
        }
    });
    setInterval(updateHeatIndexChart, 1000);
</script> --}}

{{-- <script src="{{asset('stisla/dist/assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('stisla/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> --}}
<script src="{{asset('stisla/dist/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>
{{-- <script src="{{asset('stisla/dist/assets/js/page/modules-datatables.js')}}"></script> --}}
@endsection
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Sensor</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item">GPS</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Data GPS</h2>
        <div class="row">
          <div class="col-12">
            <div id="map" style="width: 100%; height: 580px"></div>
            <script src="http://localhost:8000/leaflet.js"></script>
            <script src="http://localhost:8000/leaflet-fullscreen.js"></script>
            <script>
                var map = L.map('map').setView([-1.1742548, 116.6769315], 5);

                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                var customIcon = L.icon({
                    iconUrl: 'http://localhost:8000/icontruck.png',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [0, -32],
                });

                function updateTruckPositions() {
                    $.get('/location', function (data) {
                        map.eachLayer(function (layer) {
                            if (layer instanceof L.Marker) {
                                map.removeLayer(layer);
                            }
                        });

                        data.forEach(function (truck) {
                            // Parsing tanggal dan waktu dari format yang diberikan
                            var updatedAt = new Date(truck.updated_at);

                            // Menggunakan fungsi toLocaleString untuk memformat tanggal dan waktu
                            var formattedDate = updatedAt.toLocaleString('en-US', { timeZone: 'UTC' });

                            var marker = L.marker([truck.latitude, truck.longitude], { icon: customIcon }).addTo(map)
                                .bindPopup('Truck ' + truck.id + '<br>Latitude: ' + truck.latitude + '<br>Longitude: ' + truck.longitude + '<br>Updated At: ' + formattedDate);
                        });
                    });
                }

                setInterval(updateTruckPositions, 5000);
                map.addControl(new L.Control.Fullscreen());
            </script>
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

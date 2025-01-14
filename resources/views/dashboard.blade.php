@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4 mt-1">
                <h4 class="font-weight-bold">Dashboard</h4>
            </div>
            <div class="col-lg-8 col-md-12 mx-auto">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-2 mt-2 text-secondary">Total Foto Musuh Hari Ini</p>
                                        <div class="d-flex flex-wrap justify-content-start align-items-center">
                                            <h5 id="totalDetectedImageToday"
                                                class="mb-0 font-weight-bold">{{$totalDetectedImageToday}}</h5>
                                            <p id="percentageDetectedToday"
                                               class="mb-0 ml-3 text-success font-weight-bold">{{$percentageDetectedToday}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Status Flag Section
                                <div class="mt-3">
                                    <p class="mb-0 text-secondary">Status Keamanan</p>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <p id="statusFlag" style="font-size: 15px"
                                           class="badge badge-{{ $statusFlag == 'Siaga 1' ? 'danger' : ($statusFlag == 'Siaga 2' ? 'warning' : 'primary') }}">
                                            {{$statusFlag}}
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-2 mt-2 text-secondary">Total Foto Musuh</p>
                                        <div class="d-flex flex-wrap justify-content-start align-items-center">
                                            <h5 id="totalAllDetectedImage"
                                                class="mb-0 font-weight-bold">{{$totalAllDetectedImage}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-2 mt-2 text-secondary">Total User</p>
                                        <div class="d-flex flex-wrap justify-content-start align-items-center">
                                            <h5 id="totalUser"
                                                class="mb-0 font-weight-bold">{{$totalUser}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h6 class="mb-3 mt-2 text-secondary">Terakhir Kali Musuh Terlihat</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-5">Waktu:
                                <span id="lastSeenTime" class="font-weight-bold">
                                    {{ \Carbon\Carbon::parse($lastImage->timestamp)->format('Y-m-d H:i:s') }}
                                </span>
                            </p>
                        </div>
                        <img id="lastSeenImage" src="{{asset("storage/".$fileName)}}" alt="Foto Musuh Terakhir"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            function fetchDashboardData() {
                $.ajax({
                    url: '{{ route('dashboard') }}',
                    method: 'GET',
                    success: function (response) {
                        $('#totalDetectedImageToday').text(response.totalDetectedImageToday);
                        $('#percentageDetectedToday').text(response.percentageDetectedToday);
                        $('#statusFlag')
                            .text(response.statusFlag)
                            .removeClass('badge-danger badge-warning badge-primary')
                            .addClass(response.statusFlag === 'Siaga 1' ? 'badge-danger' : (response.statusFlag === 'Siaga 2' ? 'badge-warning' : 'badge-primary'));
                        $('#totalAllDetectedImage').text(response.totalAllDetectedImage);
                        $('#totalUser').text(response.totalUser);
                        $('#lastSeenTime').text(response.lastSeenTime);
                        $('#lastSeenImage').attr('src', response.lastSeenImage);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching dashboard data:', error);
                    }
                });
            }

            setInterval(fetchDashboardData, 5000);
        });
    </script>
@endpush

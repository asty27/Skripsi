@extends('layouts.main')
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endpush
@section('title')
    History
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4 mt-1">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h4 class="font-weight-bold">History Data</h4>
                </div>
                <div class="card-body mt-3">
                    {{-- Filter Date --}}
                    <form action="{{ url()->current() }}" method="GET" class="d-flex flex-wrap mb-4">
                        <label class="text" style="font-family: inherit;" for="dates">Filter By Date</label>
                        <div class="input-group mb-1">
                            <input type="text" class="form-control" autocomplete="off" name="dates" id="dates"
                                   placeholder="Start Date">
                        </div>
                    </form>

                    {{-- History Images --}}
                    <div class="row">
                        @forelse($histories as $history)
                            <div class="col-md-4 col-lg-3 mb-4">
                                <div class="card shadow-sm h-100">
                                    <img
                                        src="{{ asset("storage/".$history->file_name) }}"
                                        class="card-img-top"
                                        alt="History Image"
                                        style="max-height: 200px; object-fit: fill;">
                                    <div class="card-body mt-2">
                                        <h6 class="card-title font-weight-bold">{{ \Carbon\Carbon::parse($history->timestamp)->format('d M Y, H:i:s') }}</h6>
                                        <button
                                            type="button"
                                            class="btn btn-info btn-sm w-100"
                                            data-toggle="modal"
                                            data-target="#modalDetail-{{ $history->id }}">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal --}}
                            <div class="modal fade" id="modalDetail-{{ $history->id }}" tabindex="-1"
                                 aria-labelledby="modalLabel-{{ $history->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{ $history->id }}">Detail
                                                History</h5>
                                        </div>
                                        <div class="modal-body">
                                            <img
                                                src="{{ asset("storage/".$history->file_name) }}"
                                                class="img-fluid mb-3"
                                                alt="History Image">
                                            <h6>
                                                <strong>Tanggal :</strong> {{ \Carbon\Carbon::parse($history->timestamp)->format('d M Y, H:i:s') }}
                                            </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center">No Images Found</p>
                            </div>
                        @endforelse
                    </div>

                    {!! $histories->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const startDateParam = urlParams.get('start_date');
        const endDateParam = urlParams.get('end_date');

        if (startDateParam && endDateParam) {
            $('input[name="dates"]').val(startDateParam + ' - ' + endDateParam);

            $('input[name="dates"]').daterangepicker({
                startDate: moment(startDateParam),
                endDate: moment(endDateParam),
                locale: {
                    format: 'YYYY-MM-DD'
                },
                autoUpdateInput: false
            });
        } else {
            $('input[name="dates"]').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            });
        }

        $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
            const startDate = picker.startDate.format('YYYY-MM-DD');
            const endDate = picker.endDate.format('YYYY-MM-DD');
            const currentUrl = new URL(window.location.href);

            currentUrl.searchParams.set('start_date', startDate);
            currentUrl.searchParams.set('end_date', endDate);

            window.location.href = currentUrl.toString();
        });
    </script>
@endpush

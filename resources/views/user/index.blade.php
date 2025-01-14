@extends('layouts.main')

@section('title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Users Data</h4>
                        </div>
                        <a href="{{route('users.create')}}" class="btn btn-primary btn-sm">Create User</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <div class="row align-items-center">
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label>
                                                <input type="search" class="form-control form-control-sm"
                                                       id="search" placeholder="Search..."
                                                       aria-controls="employeeTable" name="search"
                                                       value="{{ request()->search }}"
                                                       style="height: 37px; width: 150%; max-width: 300px; margin-left:15px;">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <table id="employeeTable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr style="height: 45px;padding: 10px 0;">
                                        <th style="width: 20px; vertical-align: middle; text-align: left;">Num</th>
                                        <th style="vertical-align: middle; text-align: left;">Name</th>
                                        <th style="vertical-align: middle; text-align: left;">Email</th>
                                        <th style="vertical-align: middle; text-align: left;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('users.show',$user->id) }}"
                                                       class="btn btn-primary btn-sm mx-1 edit-td-action-btn">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('users.destroy',$user->id) }}"
                                                       class="btn btn-danger btn-sm mx-1 edit-td-action-btn">
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        let typingTimer;
        const doneTypingInterval = 1000;
        $('#search').on('keyup', function () {
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        function doneTyping() {
            const inputElement = document.getElementById('search');
            handleInputChangeQueryParams(inputElement)
        }
    </script>
@endpush

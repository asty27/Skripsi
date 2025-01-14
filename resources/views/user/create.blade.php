@extends('layouts.main')

@section('title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between mb-5">
                        <div class="header-title">
                            <h4 class="card-title">Add New User</h4>
                        </div>
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">View Data User</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" name="email" value="{{old("email")}}" required class="form-control">
                                @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="{{old("name")}}" required class="form-control">
                                @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Jabatan:</label>
                                <input type="text" name="alamat" value="{{old("name")}}" required class="form-control">
                                @error('alamat')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" value="{{old("password")}}" required class="form-control">
                                @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

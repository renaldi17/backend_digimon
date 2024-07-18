<!-- resources/views/admin/profile/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <h1 class="mt-4 mb-4">User Profile</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Profile Detail</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" class="form-control" id="username" value="{{ $user->username }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="created_at">Account Created At:</label>
                            <input type="text" name="created_at" class="form-control" id="created_at" value="{{ $user->created_at }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="updated_at">Last Updated At:</label>
                            <input type="text" name="updated_at" class="form-control" id="updated_at" value="{{ $user->updated_at }}" readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ url('admin') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

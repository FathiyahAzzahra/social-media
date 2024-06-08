<!-- resources/views/profile/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($user->profile_picture) }}" alt="Profile Picture" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h3>{{ $user->name }}</h3>
                                <p>{{ $user->bio }}</p>
                                <!-- Add more profile details here if needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

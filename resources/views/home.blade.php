@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                        {{ __('You are logged in!') }}
                        <script>window.location = "{{ route('todos.index') }}";</script>
                    @else
                        <h1 class="text-center p-5">Welcome to To-Do List Apps</h1>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')

@section('page')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-title">
                        <strong>Add New Car</strong>
                    </div>

                    @include('cars._create_form')
            </div>
        </div>
    </div>
</main>

@endsection
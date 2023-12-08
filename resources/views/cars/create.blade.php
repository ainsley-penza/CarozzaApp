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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label
                                        for="model"
                                        class="col-md-3 col-form-label"
                                        >Car Model</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="text"
                                            name="model"
                                            id="model"
                                            class="form-control is-invalid"
                                        />
                                        <div class="invalid-feedback">
                                            Please enter a model.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="year"
                                        class="col-md-3 col-form-label"
                                        >Car Year</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="number"
                                            step=1
                                            min=0
                                            name="year"
                                            id="year"
                                            class="form-control is-invalid"
                                        />
                                        <div class="invalid-feedback">
                                            Please enter a car year.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="salesperson_email"
                                        class="col-md-3 col-form-label"
                                        >Salesperson Email</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="email"
                                            name="salesperson_email"
                                            id="salesperson_email"
                                            class="form-control is-invalid"
                                        />
                                        <div class="invalid-feedback">
                                            Please enter salesperson email
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="manufacturer_id"
                                        class="col-md-3 col-form-label"
                                        >Manufacturer</label
                                    >
                                    <div class="col-md-9">
                                        <select
                                            name="manufacturer_id"
                                            id="manufacturer_id"
                                            class="form-control is-invalid"
                                        >
                                            @foreach($manufacturers as $id => $name)
                                              <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please choose a manufacturer
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group row mb-0">
                                    <div class="col-md-9 offset-md-3">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Save
                                        </button>
                                        <a
                                            href="{{ route('cars.index') }}"
                                            class="btn btn-outline-secondary"
                                            >Cancel</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
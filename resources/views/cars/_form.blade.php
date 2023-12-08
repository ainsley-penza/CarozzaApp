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
                                            class="form-control @error('model') is-invalid @enderror"
                                            value="{{ old('model') }}"
                                        />
                                        @error('model')
                                        <div class="invalid-feedback">
                                            A car model should be inputted.
                                        </div>
                                        @enderror
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
                                            class="form-control @error('year') is-invalid @enderror"
                                            value="{{ old('year') }}"
                                        />
                                        @error('year')
                                        <div class="invalid-feedback">
                                            A car year must be inputted.
                                        </div>
                                        @enderror
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
                                            class="form-control @error('salesperson_email') is-invalid @enderror"
                                            value="{{ old('salesperson_email') }}"
                                        />
                                        @error('salesperson_email')
                                        <div class="invalid-feedback">
                                            A salesperson email must be inputted with the correct format.
                                        </div>
                                        @enderror
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
                                            class="form-control @error('manufacturer_id') is-invalid @enderror"
                                        >
                                            @foreach($manufacturers as $id => $name)
                                              <option {{ $id == old('manufacturer_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('manufacturer_id')
                                        <div class="invalid-feedback">
                                            A manufacturer should be selected.
                                        </div>
                                        @enderror
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
                                            >Cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
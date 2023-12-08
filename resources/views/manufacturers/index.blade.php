@extends('layouts.main')

@section('page')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Manufacturers</h2>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Alfred</td>
                      <td>Kuhlman</td>
                      <td>alfred@test.com</td>
                    </tr>
                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
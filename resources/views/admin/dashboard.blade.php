@extends('layouts.master')


@section('title')
    Dashboard | PFE History
@endsection


@section('content')
    
<div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> THE LIST OF (PFE) FOR THE LAST YEARS</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Student Name
                </th>
                <th>
                  Student LastName
                </th>
                <th>
                  Student Email
                </th>
                <th>
                  Teacher Name (framery)
                </th>
                <th>
                  Teacher email
                </th>
                <th>
                  company Name
                </th>
                <th>
                  company Location
                </th>
                <th>
                  company Contact
                </th>
                <th class="text-right">
                  Rate
                </th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection


  @section('scripts')
    
@endsection


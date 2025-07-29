@extends('Admin.layouts.master')

@section('main-content')
@include('admin.layouts.nav')
@include('admin.layouts.sidebar')
  
     <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Table</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                      

                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Location</th>
                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $locations as $location )
                                                    
                                                
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $location->title }}</td>
                                                   
                                                    <td class="pt_10 pb_10">
                                                        <a href="{{ route('locations.show', $location->id) }}" class="btn btn-warning "  data-bs-toggle="modal" data-bs-target="#modal_1"><i class="fas fa-eye"></i></a>
                                                        <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                        <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                  
                                                </tr>
                                               
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection
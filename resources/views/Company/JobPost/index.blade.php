@extends('globaldasboard.layouts.master')

@section('main-content')
@include('company.layouts.navbar')
@include('company.layouts.sidebar')
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
                                                    <th>job title</th>
                                                    <th>position</th>
                                                    <th>salary</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $posts as $post )
                                                    
                                                
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->salary }}</td>
                                                    <td>{{ $post->address }}</td>
                                                    <td class="pt_10 pb_10">
                                                        <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_1"><i class="fas fa-eye"></i></a>
                                                        {{-- @can('edit-post', $post) --}}
                                                            <a href="{{ route('post.edit', $post) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                        {{-- @endcan --}}
                                                        
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
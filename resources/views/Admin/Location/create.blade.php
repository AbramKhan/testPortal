@extends('Admin.layouts.master')

@section('main-content')
    @include('admin.layouts.nav')
    @include('admin.layouts.sidebar')

    <div class="main-content">
        <section class="section">
            <div class="section-header justify-content-between">
                <h1>Create Locations</h1>
                <div class="ml-auto">
                    <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                </div>
            </div>
            <div class="section-body">


                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('locations.store') }}" method="POST" >
                                @csrf
                                <div class="col-md-10">
                                    <div class="form-group mb-3">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>
@endsection

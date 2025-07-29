@extends('globaldasboard.layouts.master')



@section('main-content')
@include('company.layouts.navbar')
@include('company.layouts.sidebar')

  <div class="main-content">
     
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>Form</h1>
                    <div class="ml-auto">
                        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                    </div>
                </div>
          
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            
                                {{-- @can('update',  $jobPost) --}}
                                    <div class="card-body">
                                    <form action="{{ route('post.store') }}" method="post" >
                                        @csrf
                                    

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>Title</label>
                                                    <input type="text"  name="title" value="{{ old('title', $post->title) }}" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>salary</label>
                                                    <input type="text" class="form-control" name="salary" value="{{ old('salary', $post->salary) }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>Datepicker</label>
                                                    <input type="text" id="datepicker" class="form-control" name="deadline">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>position</label>
                                                    <input type="text"  class="form-control" name="position" value="">
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>Address</label>
                                                    <input type="text" id="datepicker" class="form-control" name="address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>vacancy</label>
                                                    <input type="text"  class="form-control" name="vacancy" value="">
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                     <label>location</label>
                                                    <select class="form-select"  name="locations[]" aria-label="Default select example">
                                                       
                                                            @foreach($locations as $location)
                                                            <option {{ in_array($location->id, old('locations', [])) ? 'selected' : '' }} value="{{ $location->id }}"> {{ $location->title }}</option>
                                                            @endforeach
                                                     </select>
                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                     <label>category</label>
                                                    <select class="form-select"  name="categories[]" aria-label="Default select example">
                                                        
                                                            @foreach($categories as $category)
                                                            <option {{ in_array($category->id, old('categories', [])) ? 'selected' : '' }} value="{{ $category->id }}"> {{ $category->title }}</option>
                                                            @endforeach
                                                     </select>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <label>job responsibilities</label>
                                            <textarea name="job_responsibilities" class="form-control editor" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>required skills</label>
                                            <textarea name="required_skills" class="form-control editor" cols="30" rows="10"></textarea>
                                        </div>
                                       
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  </div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center "><h1>DASHBOARD</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5>Edit Programming Language</h5> 
                    <a href="{{route('home')}}" class="ml-4 btn btn-sm btn-primary">Return</a>
                    <form action="{{route('home.update', $language->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$language->title}}">
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label">Description:</label>
                                <textarea class="form-control" name="description" id="description">{{$language->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Image:</label>
                                <br>
                                <img src="{{asset('images/'.$language->image)}}" class="img-fluid mb-3" width="120px">
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal Edit-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('home.update', $language->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$language->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control" name="description" id="description">{{$language->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Image:</label>
                        <br>
                        <img src="{{asset('images/'.$language->image)}}" class="img-fluid mb-3" width="120px">
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->
@endsection

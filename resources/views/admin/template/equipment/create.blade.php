@extends('admin.template.default')
@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Add Equipment Data</h2>
        </div>

        <div class="box-body">
        <form action="{{ route('equipment.store')}}" method="post">
                @csrf
                <div class="form-group @error('name') has-error @enderror ">
                    <label for=""> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter equipments's name">
                    @error('name')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('description') has-error @enderror ">
                    <label for=""> Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter description">
                    @error('description')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('photos') has-error @enderror ">
                    <label for="">Photos</label>
                    <input type="text" name="photos" class="form-control" placeholder="photos">
                    @error('photos')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-primary" >
                </div>
            </form>

        </div>
    </div>
@endsection

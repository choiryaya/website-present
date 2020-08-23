@extends('admin.template.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Add Book Data</h2>
        </div>

        <div class="box-body">
            <form action="{{ route('equipment.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group @error('name') has-error @enderror ">
                    <label for=""> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter equipment's name">
                    @error('title')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('description') has-error @enderror ">
                    <label for=""> Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Enter equipment's description" rows="3">{{old('description')}}</textarea>
                    @error('description')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('cover') has-error @enderror ">
                    <label for=""> Cover</label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
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

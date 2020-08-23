@extends('admin.template.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Edit RFID Data</h2>
        </div>

        <div class="box-body">
        <form action="{{ route('rfid.update', $rfid)}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group" @error('name') has-error @enderror ">
                <label for=""> Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter author's name" value="{{$rfid->name}}">
                @error('name')
                <span class="help-block">{{$message}}</span>
                @enderror
                <label for=""> School</label>
                <input type="text" name="school" class="form-control" placeholder="Enter school's name" value="{{$rfid->school}}">
                @error('school')
                <span class="help-block">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary" >
                </div>
            </form>

        </div>
    </div>
@endsection

@extends('admin.template.default')
@section('content')
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">Add RFID Data</h2>
        </div>

        <div class="box-body">
        <form action="{{ route('rfid.store')}}" method="post">
                @csrf
                <div class="form-group @error('name') has-error @enderror ">
                    <label for=""> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter students's name">
                    @error('name')
                    <span class="help-block">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group @error('school') has-error @enderror ">
                    <label for=""> School</label>
                    <input type="text" name="school" class="form-control" placeholder="Enter students's school">
                    @error('school')
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

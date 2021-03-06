@extends('backend.master')
@section('title')
    Site Settings
@endsection
@section('content')
<div class="container-fluid">
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            {{session::get('message')}}
            <a class="close" data-dismiss="alert">&times;</a>
        </div>
    @endif
</div>
@if ($data=='')
<div class="container-fluid mr-3">
    <form action="{{url('addSettings')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('setups')}}">
        <div class="form-group">
            <label>Logo</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
            <p><img id="output" width="200"></p>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control"placeholder="name@example.com" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control"placeholder="+88-017-XXX-XXXX" required>
        </div>
        <div class="form-group">
            <label>Landline</label>
            <input type="text" name="landline" class="form-control"placeholder="+02-XXX-XXXX" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control"placeholder="location" required>
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" class="form-control"placeholder="facebook.com/..." required>
        </div>
        <div class="form-group">
            <label>Linkedin</label>
            <input type="text" name="linkedin" class="form-control"placeholder="linkedin.com/..." required>
        </div>
        <div class="form-group">
            <label>Youtube</label>
            <input type="text" name="youtube" class="form-control"placeholder="youtube.com/..." required>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@else
<div class="container-fluid mr-3">
    <form action="{{url('addSettings')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('setups')}}">
        <div class="form-group">
            <label>Logo</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
        <p><img id="output" src="{{url('setups')}}/{{$data->image}}"></p>
        </div>
        <div class="form-group">
            <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="name@example.com" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$data->phone}}" placeholder="+88-017-XXX-XXXX" required>
        </div>
        <div class="form-group">
            <label>Landline</label>
            <input type="text" name="landline" class="form-control" value="{{$data->landline}}" placeholder="+02-XXX-XXXX" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="location" required>
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" class="form-control" value="{{$data->facebook}}" placeholder="facebook.com/..." required>
        </div>
        <div class="form-group">
            <label>Linkedin</label>
            <input type="text" name="linkedin" class="form-control" value="{{$data->linkedin}}" placeholder="linkedin.com/..." required>
        </div>
        <div class="form-group">
            <label>Youtube</label>
            <input type="text" name="youtube" class="form-control" value="{{$data->youtube}}" placeholder="youtube.com/..." required>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@endif

<script>
    var loadfile=function(event){
        var image=document.getElementById('output');
        image.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
@endsection
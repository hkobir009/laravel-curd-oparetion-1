
@extends('app')
@section('content')
<div class="container">
    <form action="{{route('update',[$data->id])}}" method="POST">
        @csrf
        @if(Session::has('msg'))
        <div class="alert alert-primary" >
           {{Session::get('msg')}}
         </div>
        @endif
        <h4 class="mt-2 text-center">Update record</h4>
        <div class="form-row">
            <div class="form-group col-md-8 offset-md-2">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$data->first_name}}">
            </div>
            <div class="form-group col-md-8 offset-md-2">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$data->last_name}}">
            </div>
            <div class="form-group col-md-8 offset-md-2">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$data->address}}">
            </div>
            <div class="form-group col-md-8 offset-md-2">
                <label>Phone</label>
                <input type="text" name="phone_no" class="form-control" placeholder="Phone" value="{{$data->phone_no}}">
            </div>
            <div class="form-group col-md-8 offset-md-2">
                <label>Post Code</label>
                <input type="text" name="post_code" class="form-control" placeholder="Post Code" value="{{$data->post_code}}">
            </div>
            <div class="form-group col-md-8 offset-md-2">
                <button type="submit" class="btn-block btn btn-primary">submit</button>
            </div>
        </div>
    </form>


</div>
@endsection


@extends('app')
@section('content')

<div class="container">
    <div class="row">
        <div class="cal-md-8 offset-md-2">
            <div class="mt-2 mb-2">
                       <a href="{{url('/insert')}}"><button class="btn btn-primary">Add new</button></a>
                    </div>
                    <table class="table table hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First name</th>
                                <th scope="col">Last name</th>
                                <th scope="col">Address</th>
                                <th scope="col">phone</th>
                                <th scope="col">postal code</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($informations as $information)
                            <tr>
                                <th scope="row">{{$information->id}}</th>
                                <td>{{$information->first_name}}</td>
                                <td>{{$information->last_name}}</td>
                                <td>{{$information->address}}</td>
                                <td>{{$information->phone_no}}</td>
                                <td>{{$information->post_code}}</td>
                                <td>
                                    <a href=""><button type="submit" name="submit" class="btn btn-success">Edit</button></a>
                                    <a href=""><button type="submit" name="submit" class="btn btn-danger">delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

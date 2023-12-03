@extends('layouts.customer')
@section('title')
    My Orders
@endsection

@section('content')
<div class="py-5">

</div>

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-head">
                    <h4>My Profile</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>College_ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td> {{$item->tracking_no}} </td>
                                    <td> {{$item->total_price}} </td>
                                    <td> {{$item->status == '0' ? "Pending" : "Completed"}} </td>
                                    <td>    
                                        <a href="{{url("view-order/".$item->id)}}" class="btn btn-outline-info">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</div>
<div class="py-5"></div>
<div class="py-5"></div>
<div class="py-5"></div>


@endsection
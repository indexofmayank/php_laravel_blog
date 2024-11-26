@extends('app') 

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <!-- Profile Section -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>User Profile</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/150" 
                             alt="Profile Picture" 
                             class="rounded-circle" 
                             style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Name:</strong> mayank tiwari
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> mayankdevtiwari@gmail.com
                        </li>
                        <li class="list-group-item">
                            <strong>Phone:</strong> 9935377995
                        </li>
                        <li class="list-group-item">
                            <strong>Joined On:</strong> 12/05/2019
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

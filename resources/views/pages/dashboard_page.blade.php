@extends('app') 

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <!-- Stats Section -->
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div>
                            <h4 class="mb-0">0</h4>
                            <p class="text-muted">Followers</p>
                        </div>
                        <div>
                            <h4 class="mb-0">0</h4>
                            <p class="text-muted">Posts</p>
                        </div>
                        <div>
                            <h4 class="mb-0">0</h4>
                            <p class="text-muted">Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Stats Section -->
        <div class="col-md-8 mt-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ asset('images/no-stats-icon.png') }}" alt="No stats available" class="img-fluid" style="max-width: 150px;">
                    <h5 class="mt-3">No stats available for blog views.</h5>
                    <p class="text-muted">Check again later for new stats information.</p>
                </div>
            </div>
        </div>

        <!-- Latest Post Section -->
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Latest Post</h5>
                    <div>
                        <select class="form-select form-select-sm" aria-label="Last 7 days">
                            <option selected>Last 7 days</option>
                            <option value="1">Last 30 days</option>
                            <option value="2">Last year</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-center text-muted">No posts available.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div class="stat bg-primary text-white">
            <div class="stat-title">Total Users</div>
            <div class="stat-value">89,400</div>
            <div class="stat-desc">21% more than last month</div>
        </div>

        <div class="stat bg-secondary text-secondary-content">
            <div class="stat-title">Page Views</div>
            <div class="stat-value">2.6M</div>
            <div class="stat-desc">14% more than last month</div>
        </div>

        <div class="stat bg-accent text-accent-content">
            <div class="stat-title">New Registers</div>
            <div class="stat-value">1,200</div>
            <div class="stat-desc">90 (14%) more than last month</div>
        </div>

        <div class="stat bg-neutral text-neutral-content">
            <div class="stat-title">New Orders</div>
            <div class="stat-value">450</div>
            <div class="stat-desc">5% more than last month</div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <!-- Recent Activities -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Recent Activities</h2>
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Created new post</td>
                                <td>2023-10-20</td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>Updated profile</td>
                                <td>2023-10-19</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Quick Actions</h2>
                <div class="flex flex-wrap gap-2">
                    <button class="btn btn-primary">Create User</button>
                    <button class="btn btn-secondary">New Post</button>
                    <button class="btn btn-accent">Generate Report</button>
                    <button class="btn btn-info">Send Newsletter</button>
                </div>
            </div>
        </div>
    </div>
@endsection

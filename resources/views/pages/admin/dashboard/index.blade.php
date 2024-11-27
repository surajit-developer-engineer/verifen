@extends('layouts.admin-dashboard')
@section('content')
    <h1 class="pageTitle">Dashboard</h1>
    <div class="dFlx spaceBet">
        <div class="dashFourClm">
            <h2>Leads Today</h2>
            <p>{{ number_format($dataArr['dataCount']['todayLeads']) }}</p>
        </div>
        <div class="dashFourClm">
            <h2>Leads This Week</h2>
            <p>{{ number_format($dataArr['dataCount']['weeklyLeads']) }}</p>
        </div>
        <div class="dashFourClm">
            <h2>Leads This Month</h2>
            <p>{{ number_format($dataArr['dataCount']['monthlyLeads']) }}</p>
        </div>
        <div class="dashFourClm">
            <h2>Leads Total</h2>
            <p>{{ number_format($dataArr['dataCount']['totalLeads']) }}</p>
        </div>
    </div>

    <div class="dashDataTable">
        <div class="datatable table1">
            <table class="table" id="bootstrap-data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($dataArr['enquiryArr'] as $enquiry)
                        <tr>
                            <td title="Name">
                                {{ $enquiry->name }}
                            </td>
                            <td title="Email">
                                {{ $enquiry->email }}
                            </td>
                            <td title="Phone">
                                {{ $enquiry->phone }}
                            </td>
                            <td title="Address">
                                {{ $enquiry->address }}
                            </td>
                            <td title="Action">
                                <a href="{{ route('admin.enquiry.view', $enquiry->id) }}" title="View">
                                    <i class="fa fa-eye chat"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

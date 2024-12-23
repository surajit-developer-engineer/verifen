@extends('layouts.admin-dashboard')
@section('content')
    <h1 class="pageTitle">Dashboard</h1>
    <div class="dFlx spaceBet">
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Display Membership Type</p>
                <h2>{{ number_format($dataArr['dataCount']['todayLeads']) }}</h2>
            </div>
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Total Applications</p>
                <h2>{{ number_format($dataArr['dataCount']['weeklyLeads']) }}</h2>
            </div>
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Approved Applications</p>
                <h2>{{ number_format($dataArr['dataCount']['monthlyLeads']) }}</h2>
            </div>
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Active Loans</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>            
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Closed Loans</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>             
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div>
            <div class="dashFourClmFlx">
                <p>Available Funding</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>              
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Total Funded</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>            
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Total Paid Back</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>            
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Balance</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>            
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Membership Fee</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>             
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Interest Rate</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>            
        </div>
        <div class="dashFourClm">
            <div class="iconBox"><i class="fa fa-user-circle-o"></i></div> 
            <div class="dashFourClmFlx">
                <p>Penalties</p>
                <h2>{{ number_format($dataArr['dataCount']['totalLeads']) }}</h2>
            </div>             
        </div>
    </div>


    <div class="dashDataTable">
     <div class="datatable table1">
     <table class="table" id="bootstrap-data-table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataArr['enquiryArr'] as $enquiry)
                    <tr>
                    <td data-label="Name">
                        {{ $enquiry->name }}
                    </td>
                    <td data-label="Email">
                        {{ $enquiry->email }}
                    </td>
                    <td data-label="Phone">
                        {{ $enquiry->phone }} 
                    </td>
                    <td data-label="Address">
                        {{ $enquiry->address }}
                    </td>
                    <td data-label="Action">
                        <a href="{{ route('admin.enquiry.view', $enquiry->id) }}" title="View">
                            <i class="fa fa-eye chat"></i>
                        </a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


@stop

@extends('layouts.admin-dashboard')
@section('content')
<div class="dFlx spaceBet">
    <h1 class="pageTitle mb20">Partners</h1>
    <a class="addNew" href="{{ route('admin.lead.partner.add') }}"><i class="fa fa-plus"></i> Add New</a>
</div>
    <div class="admin-body-area">
        <!-- Booking Status Section Start -->
        <div class="booking-status-sec list-sec">


            <div class="list-area" id="showFilter">

                <!-- User List Area -->
                <div class="datatable table1">
                    <table class="table" id="bootstrap-data-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($leadPartners as $leadPartner)
                                <tr>
                                    <td title="Name">
                                        {{ $leadPartner->name }}
                                    </td>
                                    <td title="Action">
                                        <a href="{{ route('admin.lead.partner.edit', $leadPartner->id) }}" title="Edit">
                                            <i class="fa fa-edit listing"></i>
                                        </a>
                                        <a href="{{ route('admin.lead.partner.delete', $leadPartner->id) }}" title="Delete"
                                            class="delete-confirm">
                                            <i class="fa fa-trash chat"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- Booking Status Section Start -->
@stop

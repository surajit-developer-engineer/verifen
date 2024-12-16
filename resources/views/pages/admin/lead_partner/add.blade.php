@extends('layouts.admin-dashboard')
@section('content')
    <div class="dFlx spaceBet">
        <h1 class="pageTitle mb20">Add Partner</h1>
        <a class="addNew" href="{{ route('admin.lead.partner') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; Back</a>
    </div>
    <div class="admin-body-area">
        <!-- Booking Status Section Start -->
        <div class="booking-status-sec list-sec">



            <div class="list-area">
                <form action="{{ route('admin.lead.partner.insert') }}" method="POST" id="lead_partner_form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                        </div>
                    </div>

                    <button class="submit-btn subBtn" type="submit">Add</button>
                </form>

            </div>
        </div>

    </div>
    <!-- Booking Status Section Start -->
@stop

@extends('layouts.admin-dashboard')

@section('content')
    <div class="dFlx spaceBet">
        <h1 class="pageTitle mb20">{{ isset($partner) ? 'Edit Partner' : 'Add Partner' }}</h1>
        <a class="addNew" href="{{ route('admin.blog') }}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back
        </a>
    </div>

    <div class="admin-body-area">
        <!-- Partner Form Section Start -->
        <div class="booking-status-sec list-sec">
            <div class="list-area">
                <form
                    action="{{ isset($partner) ? route('admin.lead.partner.update', $partner->id) : route('admin.lead.partner.insert') }}"
                    method="POST"
                    id="partner_form">
                    @csrf
                    @if(isset($partner))
                        @method('PUT')
                    @endif

                    <div class="row">
                        {{-- Partner Name --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="title">Partner Name <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $partner->title ?? '') }}" required>
                            </div>
                        </div>

                        {{-- UTM Source --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="utm_source">UTM Source <span class="text-danger">*</span></label>
                                <input type="text" name="utm_source" id="utm_source" class="form-control"
                                    value="{{ old('utm_source', $partner->utm_source ?? '') }}" required>
                            </div>
                        </div>

                        {{-- UTM Medium --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="utm_medium">UTM Medium</label>
                                <select name="utm_medium" id="utm_medium" class="form-control">
                                    <option value="">-- Select Medium --</option>
                                    <option value="email" {{ old('utm_medium', $partner->utm_medium ?? '') == 'email' ? 'selected' : '' }}>Email</option>
                                    <option value="social" {{ old('utm_medium', $partner->utm_medium ?? '') == 'social' ? 'selected' : '' }}>Social</option>
                                    <option value="ads" {{ old('utm_medium', $partner->utm_medium ?? '') == 'ads' ? 'selected' : '' }}>Ads</option>
                                    <option value="referral" {{ old('utm_medium', $partner->utm_medium ?? '') == 'referral' ? 'selected' : '' }}>Referral</option>
                                </select>
                            </div>
                        </div>

                        {{-- Partner Type --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="type">Partner Type <span class="text-danger">*</span></label>
                                <select name="type" id="type" class="form-control" required>
                                    <option value="">-- Select Partner Type --</option>
                                    <option value="affiliate" {{ old('type', $partner->type ?? '') == 'affiliate' ? 'selected' : '' }}>Affiliate</option>
                                    <option value="reseller" {{ old('type', $partner->type ?? '') == 'reseller' ? 'selected' : '' }}>Reseller</option>
                                    <option value="distributor" {{ old('type', $partner->type ?? '') == 'distributor' ? 'selected' : '' }}>Distributor</option>
                                    <option value="agency" {{ old('type', $partner->type ?? '') == 'agency' ? 'selected' : '' }}>Agency</option>
                                </select>
                            </div>
                        </div>

                        {{-- Phone Number --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"
                                    placeholder="(000) 000-0000" value="{{ old('phoneNumber', $partner->phoneNumber ?? '') }}" required>
                            </div>
                        </div>

                        {{-- Landing Page --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="urlType">Landing Page <span class="text-danger">*</span></label>
                                <select name="urlType" id="urlType" class="form-control" required>
                                    <option value="">-- Select Landing Page --</option>
                                    <option value="home" {{ old('urlType', $partner->urlType ?? '') == 'home' ? 'selected' : '' }}>Home Page</option>
                                    <option value="contact" {{ old('urlType', $partner->urlType ?? '') == 'contact' ? 'selected' : '' }}>Contact Page</option>
                                    <option value="custom" {{ old('urlType', $partner->urlType ?? '') == 'custom' ? 'selected' : '' }}>Custom Page</option>
                                </select>
                            </div>
                        </div>

                        {{-- API Key --}}
                        <div class="col-lg-6">
                            <div class="form-group d-flex align-items-end">
                                <div class="flex-grow-1">
                                    <label for="apiKey">API Key <span class="text-danger">*</span></label>
                                    <input type="text" name="apiKey" id="apiKey" class="form-control"
                                        placeholder="Api Key" value="{{ old('apiKey', $partner->apiKey ?? '') }}" required>
                                </div>
                                <div class="ms-2">
                                    <button type="button" id="generateApiKey" class="btn btn-secondary mt-4">Generate</button>
                                </div>
                            </div>
                        </div>

                        {{-- CPL --}}
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="cpl">CPL</label>
                                <input type="number" name="cpl" id="cpl" class="form-control" placeholder="CPL" value="{{ old('cpl', $partner->cpl ?? '') }}">
                            </div>
                        </div>

                        {{-- Third Party Webhook --}}
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="thirdPartyWebhookUrl">Third Party Webhook URL</label>
                                <input type="url" name="thirdPartyWebhookUrl" id="thirdPartyWebhookUrl" class="form-control"
                                    placeholder="https://example.com/webhook" value="{{ old('thirdPartyWebhookUrl', $partner->thirdPartyWebhookUrl ?? '') }}">
                            </div>
                        </div>

                        {{-- Source --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="referralAbbreviation">Source <span class="text-danger">*</span></label>
                                <input type="text" name="referralAbbreviation" id="referralAbbreviation" class="form-control"
                                    placeholder="Source" value="{{ old('referralAbbreviation', $partner->referralAbbreviation ?? '') }}" required>
                            </div>
                        </div>

                        {{-- Lead Type --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Lead Type</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isWebLead" id="isWebLead1" value="true" {{ old('isWebLead', $partner->isWebLead ?? '') == 'true' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isWebLead1">Web Lead</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="isWebLead" id="isWebLead2" value="false" {{ old('isWebLead', $partner->isWebLead ?? '') == 'false' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isWebLead2">Post Lead</label>
                                </div>
                            </div>
                        </div>

                        {{-- Scripts --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="scripts">Scripts</label>
                                <textarea name="scripts" id="scripts" class="form-control" rows="4">{{ old('scripts', $partner->scripts ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button class="submit-btn subBtn" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#phoneNumber').mask('(000) 000-0000');

            $('#generateApiKey').on('click', function() {
                let key = 'xxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                    let r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
                    return v.toString(16);
                });
                $('#apiKey').val(key);
            });
        });
    </script>
@endpush

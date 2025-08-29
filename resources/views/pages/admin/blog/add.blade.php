@extends('layouts.admin-dashboard')

@section('content')
    <div class="dFlx spaceBet">
        <h1 class="pageTitle mb20">Add Blog</h1>
        <a class="addNew" href="{{ route('admin.blog') }}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back
        </a>
    </div>

    <div class="admin-body-area">
        <!-- Blog Form Section Start -->
        <div class="booking-status-sec list-sec">
            <div class="list-area">
                <form action="{{ route('admin.blog.insert') }}" method="POST" id="blog_form">
                    @csrf
                    <div class="row">

                        {{-- Title --}}
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title') }}" required>
                            </div>
                        </div>

                        {{-- Created By --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="created_by">Created By <span class="text-danger">*</span></label>
                                <input type="text" name="created_by" id="created_by" class="form-control"
                                    value="{{ old('created_by') }}" required>
                            </div>
                        </div>

                        {{-- Created At --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="created_date">Created At <span class="text-danger">*</span></label>
                                <input type="date" name="created_date" id="created_date" class="form-control"
                                    value="{{ old('created_date') }}" min="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="content">Content <span class="text-danger">*</span></label>
                                <textarea name="content" id="editor" class="form-control" rows="6" required>{{ old('content') }}</textarea>
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Status</label><br>
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" name="status" value="1" {{ old('status') ? 'checked' : '' }}
                                    data-toggle="toggle" data-on="Active" data-off="Inactive">
                            </div>
                        </div>

                        {{-- Featured Article --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Featured Article</label><br>
                                <input type="hidden" name="is_featured_article" value="0">
                                <input type="checkbox" name="is_featured_article" value="1"
                                    {{ old('is_featured_article') ? 'checked' : '' }} data-toggle="toggle" data-on="Yes"
                                    data-off="No">
                            </div>
                        </div>
                    </div>

                    <button class="submit-btn subBtn" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@stop

@push('script')
    {{-- Bootstrap Toggle --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endpush

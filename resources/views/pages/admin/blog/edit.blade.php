@extends('layouts.admin-dashboard')

@section('content')
    <div class="dFlx spaceBet">
        <h1 class="pageTitle mb20">Edit Blog</h1>
        <a class="addNew" href="{{ route('admin.blog') }}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back
        </a>
    </div>

    <div class="admin-body-area">
        <!-- Booking Status Section Start -->
        <div class="booking-status-sec list-sec">
            <div class="list-area">
                <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" id="blog_form">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $blog->title }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Created By</label>
                                <input type="text" name="created_by" class="form-control" value="{{ $blog->created_by }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Created At</label>
                                <input type="date" name="created_date" class="form-control"
                                    value="{{ $blog->created_date }}" min="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" id="editor" class="form-control" rows="6" required>{{ $blog->content }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Status</label><br>
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" name="status" value="1" data-toggle="toggle" data-on="Active"
                                    data-off="Inactive" {{ $blog->status ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Featured Article</label><br>
                                <input type="hidden" name="is_featured_article" value="0">
                                <input type="checkbox" name="is_featured_article" value="1" data-toggle="toggle"
                                    data-on="Yes" data-off="No" {{ $blog->is_featured_article ? 'checked' : '' }}>
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

@extends('layouts.admin-dashboard')
@section('content')
    <div class="dFlx spaceBet">
        <h1 class="pageTitle mb20">Blogs</h1>
        <a class="addNew" href="{{ route('admin.blog.add') }}"><i class="fa fa-plus"></i> Add New</a>
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
                                <th>Title</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Featured Article</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td title="Title">
                                        {{ $blog->title }}
                                    </td>
                                    <td title="Created By">
                                        {{ $blog->created_by }}
                                    </td>
                                    <td title="Created At">
                                        {{ $blog->created_date }}
                                    </td>
                                    <td title="Status">
                                        <span class="badge {{ $blog->status ? 'bg-success' : 'bg-danger' }}">
                                            {{ $blog->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td title="Featured Article">
                                        <span
                                            class="badge {{ $blog->is_featured_article ? 'bg-primary' : 'bg-secondary' }}">
                                            {{ $blog->is_featured_article ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td title="Action">
                                        <a href="{{ route('admin.blog.edit', $blog->id) }}" title="Edit">
                                            <i class="fa fa-edit listing"></i>
                                        </a>
                                        <form action="{{ route('admin.blog.delete', $blog->id) }}" method="POST"
                                            style="display:inline;" class="delete-confirm">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger"
                                                style="border:none; background:none;">
                                                <i class="fa fa-trash chat"></i>
                                            </button>
                                        </form>
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

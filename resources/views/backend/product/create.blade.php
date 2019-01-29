@extends('layouts.backend.main')

@section('title','Interview | Add New Product')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inertview
                <small>Add New Product</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="action">Add new</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            <form action="{{ url('/product/post') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Keyword Chose</label>
                                    <select name="keyword_id" id="" class="form-control">
                                        <option value="">Chose Keyword</option>
                                        @foreach($keywords as $keyword)
                                            <option value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Product title</label>
                                    <input type="text" name="title" placeholder="Enter Keyword Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Product Body</label>
                                    <textarea name="body" style="width: 100%; height: 150px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Product Image</label>
                                    <input type="file" name="image">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                <ul class="pagination no-margin">

                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('js')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endpush

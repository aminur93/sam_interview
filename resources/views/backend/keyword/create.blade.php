@extends('layouts.backend.main')

@section('title','Interview | Add new Keyword')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inertview
                <small> Add New Keyword</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="action">All New</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            <form action="{{ url('/keyword/post') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="">Keyword Name</label>
                                    <input type="text" name="name" placeholder="Enter Keyword Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Keyword Score</label>
                                    <input type="text" name="score" placeholder="Enter Keyword Score" class="form-control">
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

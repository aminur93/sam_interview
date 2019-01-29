@extends('layouts.backend.main')

@section('title','Interview | All Keyword')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inertview
                <small>Display All Keyword</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="action">All Keyword</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="pull-left">
                                <a href="{{ url('/keyword/post') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add New</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body ">

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>score</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($keywords as $keyword)
                                        <tr>
                                            <td>{{ $keyword->id }}</td>
                                            <td>{{ $keyword->name }}</td>
                                            <td>{{ $keyword->score }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

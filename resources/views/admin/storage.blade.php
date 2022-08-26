@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Storage data</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All articles</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-sm table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Article Name</th>
                                        <th>Seria</th>
                                        <th>QTY</th>
                                        <th>Code</th>
                                        <th>Title</th>
                                        <th>Actiions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td style="width: 30px;">{{$item->id}}</td>
                                            <td>{{$item->article_name}}</td>
                                            <td>{{$item->seria}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->code}}</td>
                                            <td>{{$item->title}}</td>
                                            <td style="width: 150px">
                                                <div class="btn-group">
                                                    <a href="#" type="button" class="btn btn-success btn-sm"><i class="fas fa-sync" style="color: white"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" type="button" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit" style="color: white"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" type="button" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash" style="color: white"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Article Name</th>
                                        <th>Seria</th>
                                        <th>QTY</th>
                                        <th>Code</th>
                                        <th>Title</th>
                                        <th>Actiions</th>
                                    </tr>
                                    </tfoot>
                                </table>

                                <div class="col-md-12">
                                    {{  $data->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection




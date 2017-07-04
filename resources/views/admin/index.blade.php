@extends('layout')

@section('title','Admin Landing')

@section('styles')
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
@endsection


@section('content')
    @if(Session::has('message'))
       <p class="alert alert-success"> {{Session::get('message')}}</p>
    @endif

    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-warning "><span class="fa fa-exclamation- circle"> </span> {{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="row">
        <!-- -->
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <form action="{{url('admin/addpost')}}" method="POST" class="form-horizontal" >
                {{csrf_field()}}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>

                        <h2 class="panel-title">Add Post</h2>

                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label"> Post Name: </label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <button class="btn btn-primary">Add Post </button>
                    </footer>
                </section>
            </form>


            <form  class="form-horizontal" action="{{url('admin/addcandidate')}}" method="POST">
                {{csrf_field()}}
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>

                        <h2 class="panel-title">Add candidate</h2>

                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Candidate's Name: </label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Candidate's Matric NO: </label>
                            <div class="col-sm-8">
                                <input type="text" name="matric_no" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Post: </label>
                            <div class="col-md-8">
                                <select class="form-control populate" name="post">

                                    @foreach($posts as $post)
                                        <option value="{{$post->id}}">{{$post->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>

                    <footer class="panel-footer">
                        <button class="btn btn-primary">Add Candidate </button>
                    </footer>
                </section>
            </form>


            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>

                    <h2 class="panel-title">Basic</h2>
                </header>
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                        <tr>
                            <th>Candidate's name</th>
                            <th>Candidate Matric NO</th>
                            <th>Post </th>
                            <th class="hidden-phone">Votes</th>
                            <th class="hidden-phone">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($candidates as $candidate)

                            <tr class="gradeX">
                                <td>{{$candidate->name}}</td>
                                <td>{{$candidate->matric_no}}</td>
                                <td>{{$candidate->post->title}}</td>
                                <td class="center">{{$candidate->votes}}</td>
                                <td class="center"><form action="{{url('/admin/delete/'.$candidate->id)}}" method="POST"> {{method_field('DELETE')}} <button class="btn btn-danger"> Delete </button>{{csrf_field()}}</form></td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </section>
        </div>


    </div>
@endsection

@section('scripts')
    <!-- Specific Page Vendor -->
    <script src="{{asset('assets/vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

    <!-- Examples -->
    <script src="{{asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
@endsection

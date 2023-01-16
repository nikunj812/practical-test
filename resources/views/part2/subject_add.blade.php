@extends('layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Part 2 / Add Subject</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="container">
            <div class="row">
                <div class="well col-md-offset-3 col-md-6">
                    <form action="javascript:;" method="post" id="subject-form" novalidate="novalidate">


                        <div id="form-content">


                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="subject-name">
                            </div>


                            <div class="form-group">
                                <label for="email">Term</label>
                                <select class="form-control" id="subject-term">
                                  @foreach ($terms as $term)
                                    <option value="{{ $term->id }}}">{{ $term->name }}</option>
                                  @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection

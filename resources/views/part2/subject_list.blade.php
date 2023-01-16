@extends('layout.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Part 2 / Subject</h1>
          </div><!-- /.col -->
          <div class="col-sm-3">
            <a href="{{ route('subject.add') }}" style="color : #fff">
            <button type="button" class="btn btn-block btn-primary">
              Add Subject
            </button>
          </a>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <p>Subject List : </p>
        <table>
          <tr>
            <th>Id</th>
            <th>name</th>
            <th>Term</th>
          </tr>
          @foreach($subjects as $subject)
          <tr>
            <td>{{ $subject->id }}</td>
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->term->name }}</td>
          </tr>
          @endforeach
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
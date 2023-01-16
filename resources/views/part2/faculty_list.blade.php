@extends('layout.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Part 2 / Faculty</h1>
          </div><!-- /.col -->
          <div class="col-sm-3">
            <button type="button" class="btn btn-block btn-primary">
              <a href="{{ route('faculty.add') }}" style="color : #fff">Add Faculty</a>
            </button>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <p>Faculty List : </p>
        <table>
          <tr>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
          </tr>
          @foreach($faculties as $faculty)
          <tr>
            <td>{{ $faculty->id }}</td>
            <td>{{ $faculty->name }}</td>
            <td>{{ $faculty->email }}</td>
          </tr>
          @endforeach
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
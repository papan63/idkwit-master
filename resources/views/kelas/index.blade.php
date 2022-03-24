    @extends('templates/header')

    @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
            Data Kelas
            <small>GK TAU PUSING</small>
        </h1>
            <ol class="breadcrub">
                <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> home</a></li>
                <li class="active">GK DULU</li>
            </ol>
</section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <a href="{{ url('kelas/add') }}" class = "btn btn-success"><i class="fa fa-plus-circel"></i> Tambah</a>
        </div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
@endsection
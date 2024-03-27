@extends('main')

@section('title', 'Edulevel')


@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edulevel</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Edulevel</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </di v>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">

            <!-- right col -->
            <section class="col-lg-5 connectedSortable">
                <!-- Form for name and address -->
                <div class="card">
                    <div class="card-header">
                        <form action="/edulevel/{{ $edulevel->id }}" method="post">
                            @method('patch')
                            @csrf
                            <h3 class="card-title">Edit Jenjang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Nama jenjang</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$edulevel->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc',$edulevel->desc) }}">
                                @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- right col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

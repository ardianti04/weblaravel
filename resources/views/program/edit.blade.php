@extends('main')

@section('title', 'Program')


@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Program</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Program</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">

            <!-- right col -->
            <section class="col-lg-5 connectedSortable">
                <!-- Form for name and address -->
                <div class="card">
                    <div class="card-header">
                        <form action="{{url('programs/'.$program->id)}}" method="post">
                            @method("put")
                            @csrf
                            <h3 class="card-title">Edit Program</h3>
                    </div>
                    {{-- <div class="pull-right">
                        <a href="{{ url('programs') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Nama Program</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name',$program->name) }}"
                                placeholder="Masukkan nama program">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Jenjang</label>
                                <select class="form-control  @error('edulevel_id') is-invalid @enderror" name="edulevel_id"
                                placeholder="Masukkan nama program">
                                <option value="">- Pilih -</option>
                                    @foreach ($edulevels as $item)
                                    <option value="{{ $item->id}}" {{ old('edulevel_id',$program->edulevel_id)==$item->id ? 'selected' : null }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('edulevel_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Harga member</label>
                                <input type="number" class="form-control  @error('student_price') is-invalid @enderror" name="student_price"
                                value="{{ old('student_price',$program->student_price) }}"
                                placeholder="Masukkan Harga Member">
                                @error('student_price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Member Maksimal</label>
                                <input type="number" class="form-control  @error('student_max') is-invalid @enderror" name="student_max"
                                value="{{ old('student_max',$program->student_max) }}"
                                placeholder="Masukkan Jumlah Member Maximal">
                                @error('student_max')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Info</label>
                                <textarea name="info" class="form-control @error('info') is-invalid @enderror">
                                {{ old('info',$program->info) }} </textarea>
                                    @error('info')
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

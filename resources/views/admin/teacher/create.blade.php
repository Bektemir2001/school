@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content col-6 mt-4">
        <div class="container-fluid ">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Мугалим кошуу</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.teachers.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group col-12">
                                    <label>Аты</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                <div class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                                </div>
                                <div class="form-group col-12">
                                    <label>Фамилясы</label>
                                    <input type="text" name="surename" class="form-control" value="{{old('surename')}}" >
                                </div>
                                <div class="text-danger">
                                    @error('surename')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email" value="{{old('email')}}">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Берген сабагы</label>
                                    <select class="form-control" name="lesson_id">

                                        @foreach($lessons as $lesson)
                                            <option
                                            {{old('lesson_id') == $lesson->id ? ' selected':''}}
                                            value="{{$lesson->id}}">{{ $lesson->name  }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Каттоо</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</div>

@endsection

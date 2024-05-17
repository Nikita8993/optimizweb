@extends('admin.layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Создание Статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Главная</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Создание статьи</h3>
                </div>
                <!--================================================================================-->
                <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Название">
                        </div>


                        <div class="form-group">
                            <label for="description">Цитата</label>
                            <textarea class="form-control @error('title') is-invalid @enderror" id="description" name="description"
                                placeholder="Цитата ..."></textarea>
                        </div>


                        <div class="form-group">
                            <label for="content">Контент</label>
                            <textarea class="form-control @error('title') is-invalid @enderror" id="content" name="content"
                                placeholder="Контент ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Категория</label>
                            <select class="form-control" id="category_id" name="category_id" placeholder="Контент ...">
                                @foreach ($categories as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tags">Теги</label>
                            <select class="select2" id="tags" name="tags[]" multiple="multiple" data-placeholder="Выбор тегов ..."
                                style="width: 100%">
                                @foreach ($tags as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="thumbnail">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                    <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
                <!--================================================================================-->
            </div>
    </div>
    </div>
    </div>
    </section>
@endsection

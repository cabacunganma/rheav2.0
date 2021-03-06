@extends('admin.layouts.app')

@section('content')
    <!-- Main content -->

    <!-- Page content -->
    <div class="container-fluid mt--8">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0" style="text-align: center">Edit</h3>
                    </div>

                    {{--HERE IS THE START--}}
                    <div class="container">
                    {!! Form::open(['action' => ['MaternalGuideController@update', $guide->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', $guide->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                        <div class="form-group">
                            {{Form::label('category_id', 'Category')}}
                            {{Form::select('category_id', $categories, null, ['class' => 'form-control'])}}
                        </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', $guide->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
                    <div class="form-group">
                        {{Form::file('cover_image')}}
                    </div>
                    {{--Hindi pweds gawing 'PUT' and 'POST' method--}}
                    {{Form::hidden('_method','PUT')}}
                    {{--{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}--}}
                    {{--{!! Form::close() !!}--}}
                        <div class="form-group row col-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                            <a href="/guides" class="btn btn-default">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                        {{--END--}}

                    <br>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Rhea</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

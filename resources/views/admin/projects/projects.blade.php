@extends('layouts.admin')
@section('page-header')
    Manage Listings
@endsection
@section('layout-css')
    <style>
        .inline {
            display: inline-block;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if(Session::has('delete_message'))
                    <div class="alert alert-success">
                        {{ Session::get('delete_message') }}
                    </div>
                @endif
                @if(Session::has('new_project_message'))
                    <div class="alert alert-success">
                        {{ Session::get('new_project_message') }}
                    </div>
                @endif
                @foreach($projects as $project)
                    <?php $content = str_limit($project->content, 150); ?>
                    <div class="col-md-4">
                        <div class="card card-product">
                            <div class="card-image" data-header-animation="true">
                                <a href="#pablo">
                                    <img class="img" src="{{asset($project->image)}}">
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                        <i class="material-icons">build</i> Fix Header!
                                    </button>
                                    <button type="button" class="btn btn-default btn-simple" rel="tooltip"
                                            data-placement="bottom" title="View">
                                        <i class="material-icons">art_track</i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-simple" rel="tooltip"
                                            data-placement="bottom" title="Edit">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    {!! Form::open(['method' => 'DELETE','route' => ['projects.destroy', $project->id],'class'=>'inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-simple" rel="tooltip"
                                            data-placement="bottom" title="Remove">
                                        <i class="material-icons">close</i>
                                    </button>
                                    {!! Form::close() !!}

                                </div>
                                <h4 class="card-title">
                                    <a href="{{$project->url}}">{{$project->name}}</a>
                                </h4>
                                <div class="card-description">
                                    {{$content}}
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="price">
                                    <h4>{{$project->name}}</h4>
                                </div>
                                <div class="stats pull-right">
                                    <p class="category"><i class="material-icons">place</i> Azerbaijan,Baku</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('layout-script')

@endsection
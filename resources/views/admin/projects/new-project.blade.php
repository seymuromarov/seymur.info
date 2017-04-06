@extends('layouts.admin')
@section('page-header')
    New Project
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">contacts</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Add Project</h4>
                            {!! Form::open(['action' => 'ProjectController@store','files' => true,'id'=>'TypeValidation','class'=>'form-horizontal']) !!}
                            {{--<form id="TypeValidation" class="form-horizontal" action="#">--}}
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Name</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input name="name" type="text" class="form-control" placeholder="name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Header</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input name="header" type="text" class="form-control" placeholder="Header">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Content</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input name="content" type="text" class="form-control" placeholder="Content">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Url</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input  class="form-control" type="text" placeholder="url" name="url"
                                                   url="true.html"/>
                                        </div>
                                    </div>
                                    {{--<label class="col-sm-3 label-on-right">--}}
                                    {{--<code>url="true"</code>--}}
                                    {{--</label>--}}
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-2">
                                        <legend>Project Image</legend>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image"/>
                                                    </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                   data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="form-group form-button">
                                            <button type="submit" class="btn btn-fill btn-rose">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            {{--</form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('layout-script')
    <script type="text/javascript">
        function setFormValidation(id) {
            $(id).validate({
                errorPlacement: function (error, element) {
                    $(element).parent('div').addClass('has-error');
                }
            });
        }

        $(document).ready(function () {
            setFormValidation('#RegisterValidation');
            setFormValidation('#TypeValidation');
            setFormValidation('#LoginValidation');
            setFormValidation('#RangeValidation');
        });
    </script>
@endsection
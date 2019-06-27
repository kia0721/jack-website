@extends('layouts.main')


@section('css_link')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">

            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="margin-top:5px;">Account Detail</h3>
                    </div>
                    <form class=""  method="POST" action="{{ url('updateAccount')}}">
                    <div class="col-md-6">
                        <input type="hidden" name="user_id" value="{{ $detail->user_id }}" />
                        <div class="pull-right">
                            <button class="btn btn-primary " type="sumbit" id="updateAccount">

                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="panel-body form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_type" id="user_type"/>
                        <div class="form-group">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control input-detail" name="lastname" value="{{ old('lastname', $detail->lastname) }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control input-detail" name="firstname" value="{{ old('firstname', $detail->firstname) }}" required >

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                            <label for="middlename" class="col-md-4 control-label input-detail">Middle name</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control input-detail" name="middlename" value="{{ old('middlename', $detail->middlename) }}" >

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input-detail" name="email" value="{{ old('email', $detail->email) }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="middlename" class="col-md-4 control-label">User type</label>

                            <div class="col-md-6">

                                <input type="hidden" name="user_type" value="{{ $detail->user_type }}"/>
                                <input  type="text" class="form-control" value="{{ $detail->user_type }}"  disabled>
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="tenant" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <button class="btn btn-link text-md " type="button" id="resetPassword" data-toggle="modal" data-target="#resetPassModal" >Reset Password
                                </button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<div id="resetPassModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Reset Password</h4>
                </div>

                
                <div class="modal-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_type" id="user_type"/>
                        <div class="form-group">
                           Are you sure you want to reset this password?
                        </div>                
                </div>
                <div class="modal-footer">
                    <div class="text-xs">
                        <button type="submit" class="btn btn-primary" id="yesResetPass"><span class="btn-text">Yes</span><i class="btn-loader"></i></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div><!-- // modal-footer // -->
                
            </div><!-- // modal-content // -->
            
    </div><!-- // modal-dialog // -->
</div>
@endsection

@section('script_link')
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script>
        var url = window.location.href
        var arr = url.split("/");
        var URL = arr[0]+"/";

        $('#updateAccount').prop("disabled", true);
        $("body").on("click","#yesResetPass",function(e){
            waitingDialog.show("Resetting password....");
            $("#resetPassModal").modal("hide");
            $.ajax({
                url: "{{ url('resetPassword') }}?_token="+$("input[name=_token]").val(),
                type: 'post',
                data: { 'id' : '{{ $detail->user_id }}',
                        'email' : '{{ $detail->email }}'

                },
                success: function (data) {
                    waitingDialog.show("SUCCESS", {
                        modalHeader: 'success',
                        dialog: data.result,
                        footer: true
                    });  
                }
            });
        });

        $('.input-detail').on('change', function() {
            $('#updateAccount').prop("disabled", false);
        });

        

    </script>
@endsection


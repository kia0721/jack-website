@extends('layouts.main')


@section('css_link')

    <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/DataTables-1.10.13/extensions/Responsive/css/responsive.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Accounts</h3><br>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                    Register
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li> <a href="#" id="tenantRegisterBtn">Tenant</a></li>
                    <li> <a href="#" id="adminRegisterBtn">Admin</a></li>
                  </ul>
                </div>
            </div>
        </div>
        
                <div class="col-md-12">
                    <br>
                    <table class="table display dt-responsive"  width="100%" id="tenant_table">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>User Type</th>
                                <!-- <th class="action_td">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr data-row-ten-id="{{ $user->user_id }}">
                                    <td >
                                        <a href="{{ url('/account') }}/{{ $user->user_id }}">{{ $user->firstname }}  {{ $user->lastname }} </a>
                                         
                                    </td>
                                    <td> {{ $user->email }} </td>
                                    <td> {{ $user->created_at }} </td>
                                    <td> {{ $user->user_type }} </td>
                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              
    </div>
</div>
@include('account.register')
@endsection

@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script>
        var url = window.location.href
        var arr = url.split("/");
        var URL = arr[0]+"/";

        $("body").on("click","#adminRegisterBtn",function(e){
            $('#registerAccModal').modal('show'); 

            $('#user_type_span').html("Admin");

            $('#user_type').val("Admin");

            $('.avail_tenant_div').hide();
        });
        $(document).ready(function() {
            // $('#tenant_table').DataTable({
            //     aoColumnDefs: [
            //       {
            //          bSortable: false,
            //          aTargets: [ 4 ]
            //       }
            //     ]
            // });
            $('#tenant_table').DataTable();
            $('#admin_table').DataTable( {
                // "processing": true,
                "ajax": {
                    "url": "{{ url('accounts/Admin') }}?_token="+$("input[name=_token]").val(),
                    "type": "GET"
                },
                "columns": [
                    { "title": "Fullname" , "data": "user_id",
                          "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                              $(nTd).html("<a href={{ url('/account') }}/"+oData.user_id+">"+oData.firstname +" "+ oData.lastname +"</a>");
                          } 
                    },
                    { "title": "Email", "data": "email" },
                    { "title": "Created At", "data": "created_at" }
                    // { "title": "Action", "data": "user_id", "className" : "action_td", "sortable":false,
                    //     "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    //       $(nTd).html('<button class="btn btn-danger btn-xs row-admin-delete"  data-admin-id="'+oData.user_id+'" '
                    //                 +'data-toggle="confirmation"><i class="glyphicon glyphicon-trash"></i></button>');

                    //     } 
                    // }
                ],

                "createdRow": function (row, data, rowIndex) {
                    // Per-cell function to do whatever needed with cells
                    
                    $(row).attr('data-row-admin-id', data.user_id);
                    
                }
            });
        });

        $("body").on("click","#tenantRegisterBtn",function(e){
            $('#registerAccModal').modal('show'); 

            $('#user_type_span').html("Tenant");
            $('#user_type').val("Tenant");
            $('.avail_tenant_div').show();
            // $(this).parents("form").ajaxForm(imageUpload);
        });

        $("body").on("click","#registerSubmit",function(e){
            $(this).parents("form").ajaxForm(registerSubmit);
        });
        var registerSubmit = { 
            beforeSubmit:function(formData, jqForm, options){
                
                waitingDialog.show("Registering account....");
                $("#registerAccModal").modal("hide");
                return true;
            },
            complete: function(response) 
            {
                var res = response.responseJSON;
                if(res.isSuccessful){

                    waitingDialog.show("SUCCESS", {
                        modalHeader: 'success',
                        dialog: "Successfully created",
                        footer: true,
                        onHide: function(){
                          // window.location = URL+'/'+res.id;
                          console.log(res.id);
                        }
                    });   


                } else {
                    waitingDialog.show("FAILED", {
                    modalHeader: 'danger',
                    dialog: res.result,
                    footer: true,
                        onHide: function(){
                          $("#registerAccModal").modal("show");
                        }
                    });
                }
            }
        };

        

    </script>
@endsection


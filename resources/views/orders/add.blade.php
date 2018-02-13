@extends('layouts.main')
@section('title')
    Start Page
@endsection
@section('extra_css')
    <!-- Datatables -->
    <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <style>
        .vl {
            border-left: 6px solid #dddddd;
            height: auto;
        }
        .highlight { background-color:pink; }
    </style>

@endsection
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">

                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">

                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Order managment</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">

                                    </ul>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
<div class="row" id="customer">
                                <span class="section">Customer Info</span>
                                <div class="col-md-6 col-sm-12">
                                    <form class="form-horizontal form-label-left" method="post" action="{{route('order_add')}}">
                                        {{csrf_field()}}

                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label class="control-label " for="first-name">Customer Name <span class="required">*</span>
                                        </label>
                                            <input type="text"  id="cust_name" name="cust_name" data-suggestions="Enter the Name" placeholder="Eg. Jhon Doe" data-validation="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label class="control-label " for="first-name">Customer Email<span class="required">*</span>
                                        </label>
                                            <input type="text"  id="cust_email" name="cust_email" data-suggestions="Enter the E-mail" placeholder="jhon@gmail.com" data-validation="required Email" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label class="control-label " for="first-name">Customer Phone <span class="required">*</span>
                                        </label>
                                            <input type="text"  id="cust_phone" name="cust_phone" data-suggestions="Enter Customer Contact number " placeholder="9874563210" data-validation="number" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label class="control-label " for="first-name">Date Of Birth <span class="required">*</span>
                                        </label>
                                            <input type="text"  id="cust_dob" name="cust_dob" data-suggestions="Select Dob" placeholder="Date Of Birth" data-validation="birthdate" data-validation-format="dd/mm/yyyy" class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label class="control-label " for="first-name">Customer Address<span class="required">*</span>
                                        </label>
                                            <textarea id="cust_address" name="cust_address" data-suggestions="Enter Address" placeholder="Subway Best Food,austria" data-validation="number" class="form-control col-md-7 col-xs-12" cols="40" rows="5"></textarea>
                                           </div>
<div class="clearfix"></div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        {{--<button type="submit" class="btn btn-primary">Cancel</button>--}}
                                        <button id="submit" type="button" class="btn btn-success">Filter</button>
                                    </div>
                                </div>
                            </form>
                                </div>

                                <div class="col-sm-6 vl ">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            {{--<th>Rate</th>--}}
                                            <th>Activity</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach ($customer as $customer)

                                             <tr>
                                                 <td >{{ $customer->name }}</td>
                                                 <td >{{ $customer->email }} </td>
                                                 <td>test</td>


                                            </tr>

                                         @endforeach


                                        </tbody>
                                    </table>
                                </div>
</div>

                                </div>
                                <hr>

                            </div>
<div class="clearfix"></div>

                            <div class="row" id="placeorder" hidden>
                                <div class="col-md-6 col-sm-12">
    <span class="section">Privious Order Info</span>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">

                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

               <table id="datatable_chk" class="table table-striped table-bordered bulk_action">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Item Name</th>
                        <th>Type</th>
                        <th>Extra</th>

                    </tr>
                    </thead>
                    <tbody>

                   <tr>
                       <td><input type="checkbox" name="select" value="artid"   data-order="abc" data-extra="extra chess"  ></td>
                       <td>06/02/2018</td>
                       <td>Chicken Biryani</td>
                       <td>Non-Veg</td>
                       <td>Spicy,Bone less</td>
                   </tr>
                   <tr>
                       <td><input type="checkbox" name="select" value="artid1"></td>
                       <td id="pr_item">07/02/2018</td>
                       <td>Chicken Biryani</td>
                       <td>Non-Veg</td>
                       <td>Spicy,Bone less</td>
                   </tr>  <tr>
                       <td><input type="checkbox" name="select" value="artid2"></td>
                       <td>08/02/2018</td>
                       <td>Buter Chicken </td>
                       <td>Non-Veg</td>
                       <td>Spicy,Bone less</td>
                   </tr>


                    </tbody>
                </table>
                            </div>
        </div>
    </div>
</div>
                                <div class="col-md-6 col-sm-12">
                                    <span class="section">Menu Card</span>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">

                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Settings 1</a>
                                                            </li>
                                                            <li><a href="#">Settings 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <table id="datatable_chk" class="table table-striped table-bordered bulk_action">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item Name</th>
                                                        <th>Type</th>



                                                    </tr>
                                                    </thead>
                                                    <tbody id="order_test">

                                                    @foreach ($menu as $menu)

                                     <tr >
                                        <td> <input type="checkbox" name="select" class="order_chk" data-id="{{ $menu->id }}" data-order="{{ $menu->name }}" data-type="{{ $menu->type }}" data-extra="" value="menu-{{ $menu->id }}" >
                                        </td><td id="name-{{ $menu->id }}">{{ $menu->name }}</td>
                                         <td id="type-{{ $menu->id }}">{{ $menu->type }} </td>

                                     </tr>

                                 @endforeach
                                               {{--     <tr >
                                                        <td> <input type="checkbox" name="select" class="order_chk" data-id="2" data-order="veg-biryani" data-type="veg" data-extra="" value="menu-2" >
                                                        </td><td id="name-{{ $menu->id }}">veg-biryani</td>
                                                        <td id="type-{{ $menu->id }}">veg</td>

                                                    </tr>--}}


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="form-horizontal form-label-left" method="post" action="{{route('order_add')}}">
                                    {{csrf_field()}}

                                    <input type="text"  id="cust_id" name="cust_id" hidden>

                                    <div class="clearfix"></div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                 .       <div class="col-md-6 col-md-offset-3">
                                            {{--<button type="submit" class="btn btn-primary">Cancel</button>--}}
                                            {{--<button id="submit" type="Submit" class="btn btn-success">Place Order</button>--}}
                                        </div>
                                    </div>
                                </form>



                                <ul class="toBeCompared"></ul>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>type</th>
                                    <th>QTY</th>
                                    <th>Extra</th>
                                    {{--<th>Rate</th>--}}
                                    <th>Activity</th>
                                </tr>
                                </thead>


                                <tbody id="menu_cnfrm">

                                </tbody>
                            </table>
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button id="submit" type="button" class="btn btn-success">Save</button>
                            <!-- modals -->
                            <!-- Large modal -->
                            </div>

                            <div class="modal fade bs-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                                        </div>
                                        <form class="form-horizontal form-label-left" method="post" action="{{route('menu_edit')}}">
                                            {{csrf_field()}}

                                            <div class="modal-body">

                                                <span class="section">Item Info</span>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item Name <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text"  id="itemname" name="name" placeholder="Enter Item Name" data-validation="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Type<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="itemtype"  name="type" data-validation="required Type" placeholder="Enter Type of Item Ex(Non-veg)" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>

                                                <input type="hidden" id="item_id"  name="id"  class="form-control col-md-7 col-xs-12">


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page content -->

@endsection

@section('extra_script')

    <!-- Datatables -->
    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Datatables -->
    <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [
                            {
                                extend: "copy",
                                className: "btn-sm"
                            },
                            {
                                extend: "csv",
                                className: "btn-sm"
                            },
                            {
                                extend: "excel",
                                className: "btn-sm"
                            },
                            {
                                extend: "pdfHtml5",
                                className: "btn-sm"
                            },
                            {
                                extend: "print",
                                className: "btn-sm"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable_chk').DataTable();

            $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });




            TableManageButtons.init();
        });
    </script>
    <!-- /Datatables -->
    <script>
        function myEdit(id){
            val1=$('#name-'+id).html();
            val2=$('#type-'+id).html();

            $('#item_id').val(id);
            $('#itemname').val(val1);
            $('#itemtype').val(val2);

        }
    </script>
    <script>
        $('#delete').on("submit", function(){
            return confirm("Do you want to delete this item?");
        });
    </script>
    <script>
        $(document).ready(function() {

            $(".order_chk ").click(function() {
                if($(this).prop("checked") == true){

                    $("#menu_cnfrm").append("<tr id="+$(this).data('id')+"> <td>"+$(this).data('order')+"</td><td>"+$(this).data('type')+"</td><td><input type='text' id='qty_id' name='qty'  > </td><td><input type='text' id='extra_id' name='extra' > </td><td> <a href='javascript:void(0);' class='remCF' id="+'menu-'+$(this).data('id')+" >Remove</a> <input type='checkbox' name='select' hidden value="+'menu-'+$(this).data('id')+" > </td></tr>");

                } else {
                    alert($(this).val() );
                  $("#menu_cnfrm").find('input:checkbox[value="' + $(this).val() + '"]').closest('tr').remove();

                }

            });

            $("#menu_cnfrm").on('click','.remCF',function(){

                $("#order_test").find('input:checkbox[value="' + this.id + '"]'). attr('checked', false);
                $(this).parent().parent().remove();


            });

        })
    </script>

    {{-- <script>
         $.validate({
             modules : 'date'
         });
     </script>--}}
    <script>
        $(document).ready(function() {
            $('#submit').on('click', function (e) {
                e.preventDefault();
                var name = $('#cust_name').val();
                var email = $('#cust_email').val();
                var phone = $('#cust_phone').val();
                var dob = $('#cust_dob').val();
                var address = $('#cust_address').val();

                $.ajax({
                    type: "POST",
                    url: "{{route('order_add')}}",
                    dataType: 'JSON',
                    data: {name: name, email: email, phone: phone, dob: dob, address: address,_token: '{{ csrf_token() }}'},
                    success: function( response ) {
                       /* alert(response.cust_id);*/

                        $('#customer').hide();
                        $('#placeorder').show();
                        $('#cust_id').val(response.cust_id);
                        if(response.status=='allready')
                        {
                            /*previous(response.cust_id);*/
                        }

                    }
                });

            });
           /* previous(custid)
            {
                $.ajax({

                    dataType: 'JSON',
                    data: {custid: custid},
                    success: function(data ) {
                        manageRow(data.data);

                    }
                });
            }*/
            /* Add new Post table row */
            /*function manageRow(data) {
                var	rows = '';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td><input type="checkbox" name="select" value="'+value.id+'"></td>';
                    rows = rows + '<td>'+value.created_at+'</td>';
                    rows = rows + '<td>'+value.item_name+'</td>';
                    rows = rows + '<td>'+value.type+'</td>';
                    rows = rows + '<td>'+value.extra+'</td>';
                   /!* rows = rows + '<td data-id="'+value.id+'">';
                    rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
                    rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
                    rows = rows + '</td>';*!/
                    rows = rows + '</tr>';
                });
                $("tbody").html(rows);
            }*/

        });
    </script>

@endsection
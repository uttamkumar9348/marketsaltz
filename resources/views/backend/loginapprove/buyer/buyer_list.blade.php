@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Buyer')}}</h1>
        </div>
        
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_blogs" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('Buyer List') }}</h5>
            </div>
            
            <div class="col-md-2">
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}">
                </div>
            </div>
        </div>
        </form>
        <div class="card-body">
            <table class="table mb-0 aiz-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="lg">{{translate('Name')}}</th>
                        <th data-breakpoints="lg">{{translate('Email')}}</th>
                        <th data-breakpoints="lg">{{translate('Mobile Number')}}</th>
                        <th data-breakpoints="lg">{{translate('Gst ID')}}</th>
                        <th data-breakpoints="lg">{{translate('Organization Name')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($buyer_list as $key=>$buyer_lists)
                    <tr>
                        <td>
                            {{$key+1}}
                        </td>
                        <td>
                            {{$buyer_lists->first_name}} {{$buyer_lists->last_name}}
                        </td>
                        <td>
                            {{$buyer_lists->email}}
                        </td>
                        <td>
                            {{$buyer_lists->phonenumber}}
                        </td>
                        <td>
                         {{$buyer_lists->gst_number}}
                        </td>
                        <td>
                           {{$buyer_lists->Organization_name}}
                        </td>
                        <td>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input onchange="" name="status{{ $buyer_lists->id }}" id="status{{ $buyer_lists->id }}" value="{{ $buyer_lists->status }}" type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            

                            
                             <script>
                                                             $("#status{{ $buyer_lists->id }}").click(function() {
                                                                 //  var id = $('#user_id').val();
                                                                 var status = $("#status{{ $buyer_lists->id }}").val();

                                                                 //  alert(id);
                                                                 if (status == 1) {
                                                                     //  alert('disactive');
                                                                     $.ajax({
                                                                         url: "{{url('/change_status')}}",
                                                                         type: "post",
                                                                         data: {
                                                                             '_token': '{{csrf_token()}}',
                                                                             'status': '{{ $buyer_lists->status }}',
                                                                             'id': '{{ $buyer_lists->id }}',
                                                                         },
                                                                         success: function(result) {
                                                                             // alert(result);
                                                                             $('input:checkbox[name=status{{ $buyer_lists->id }}]').attr('checked', false);
                                                                         }
                                                                     });
                                                                 } else {
                                                                     //  alert('active');
                                                                     $.ajax({
                                                                         url: "{{url('/change_status')}}",
                                                                         type: "post",
                                                                         data: {
                                                                             '_token': '{{csrf_token()}}',
                                                                             'status': '{{ $buyer_lists->status }}',
                                                                             'id': '{{ $buyer_lists->id }}',
                                                                         },
                                                                         success: function(result) {
                                                                             // alert(result);
                                                                             $('input:checkbox[name=status{{ $buyer_lists->id }}]').attr('checked', true);
                                                                         }
                                                                     });
                                                                 }
                                                             });
                                                         </script>


                                        <script>
                                                $(document).ready(function() {
                                                var status = $('#status{{ $buyer_lists->id }}').val();
                                                if (status == 1) {
                                                   $('input:checkbox[name=status{{ $buyer_lists->id }}]').attr('checked', true);
                                                } else {
                                                      $('input:checkbox[name=status{{ $buyer_lists->id }}]').attr('checked', false);
                                                     }
                                                });
                                        </script>
                                                        
                            
                        </td>
                        <td class="text-right">
                           
                            <a class="btn btn-soft-success btn-icon btn-circle btn-sm " data-toggle="modal" data-target="#my-modal2{{$buyer_lists->id}}" title="{{translate('View')}}"><i class="las la-eye"></i></a>
                            <a class="btn btn-soft-danger btn-icon btn-circle btn-sm "  data-toggle="modal" data-target="#my-modal{{$buyer_lists->id}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>

                    </tr>
                   @endforeach
                </tbody>
            </table>
            @foreach($buyer_list as $key=>$buyer_lists)
                                    <!-- delete Modal -->
<div id="my-modal{{$buyer_lists->id}}" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{translate('Delete Confirmation')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">{{translate('Are you sure to delete this?')}}</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                <a href="{{url('/dlt_list',$buyer_lists->id)}}"  class="btn btn-primary mt-2">{{translate('Delete')}}</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Details Modal -->
<div id="my-modal2{{$buyer_lists->id}}" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title h6"><b>{{translate('Buyer Details')}}</b><br><span style="padding: 5px;color: black; font-size: 12px;font-weight: bold;background: turquoise;">{{$buyer_lists->created_at->toDayDateTimeString()}}</span></h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="col-md-12" style="text-align:left;">
                    
                    <h6 class="mt-1">{{$buyer_lists->first_name}} {{$buyer_lists->last_name}}</h6>
                    <p class="mt-1">{{$buyer_lists->phonenumber}}</p>
                    <p class="mt-1">{{$buyer_lists->email}}</p>
                    <p class="mt-1">{{$buyer_lists->gst_number}}</p>
                    <p class="mt-1">{{$buyer_lists->Organization_name}}</p>
                    <p class="mt-1">{{$buyer_lists->status}}</p>
                    <p class="mt-1">{{$buyer_lists->address}}</p>
                </div>
                <!--<div class="col-md-6">-->
                    
                <!--</div>-->
                
                
            </div>
        </div>
    </div>
</div><!-- /. End modal -->
@endforeach
            <div class="aiz-pagination">
                
            </div>
        </div>
</div>




@endsection


@section('script')

  

@endsection

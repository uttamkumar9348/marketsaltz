@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('Form')}}</h1>
        </div>
        
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_blogs" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('Form / Registration Form') }}</h5>
            </div>
            
            <div class="col-md-2">
                <div class="form-group mb-0 ml-5">
                    <!--<input type="text" class="form-control form-control-sm" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}">-->
                    <a class="btn btn-soft-success btn-icon btn-sm " data-toggle="modal" data-target="#my-modal" title="{{translate('Add Title')}}"><i class="las la-plus"></i></a>
                </div>
            </div>
        </div>
        </form>
        <div class="card-body">
            <table class="table mb-0 aiz-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-center" data-breakpoints="lg">{{ translate('Option') }}</th>
                        <th class="text-center" data-breakpoints="lg">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registration_form as $key=>$registration_lists)
                    <tr>
                        <td>
                            {{$key+1}}
                        </td>
                        <td class="text-center">
                            {!! $registration_lists->option !!}
                        </td>
                       
                        
                        
                        <td class="text-center">
                           
                            <a class="btn btn-soft-success btn-icon btn-circle btn-sm " data-toggle="modal" data-target="#my-modal2{{$registration_lists->id}}" title="{{translate('View')}}"><i class="las la-edit"></i></a>
                            <a class="btn btn-soft-danger btn-icon btn-circle btn-sm "  data-toggle="modal" data-target="#my-modal{{$registration_lists->id}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>

                    </tr>
                   @endforeach
                </tbody>
            </table>
            @foreach($registration_form as $key=>$registration_lists)
            
            <!-- delete Modal -->
            <div id="my-modal{{$registration_lists->id}}" class="modal fade">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title h6">{{translate('Delete Confirmation')}}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p class="mt-1">{{translate('Are you sure to delete this?')}}</p>
                            <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                            
                            
                            <a href="{{url('/admin/delete_registration_option',$registration_lists->id)}}"  class="btn btn-primary mt-2">{{translate('Delete')}}</a>
                            
                            
                        </div>
                    </div>
                </div>
            </div><!-- /.modal -->

            <!-- Edit Modal -->
            <div id="my-modal2{{$registration_lists->id}}" class="modal fade">
                <div class="modal-dialog modal-md modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title h6"><b>{{translate('Edit')}}</b><br></h6>   
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="col-md-12" style="text-align:left;">
                                
                                <!--<h6 class="mt-1">{{$registration_lists->id}}</h6>-->
                                <!--<p class="mt-1">{!! $registration_lists->option !!}</p>-->
                                <form method="post" action="{{ url('/admin/edit_registration_option') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $registration_lists->id }}">
                                    <div class="col-md-12" style="text-align:left;">
                                        <div class="row">
                                            <div class="col-md-12"><textarea class="aiz-text-editor" name="option">{{ $registration_lists->option }}</textarea></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /. End modal -->
            
            <!-- ADD Modal -->
            <div id="my-modal" class="modal fade">
                <div class="modal-dialog modal-md modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title h6"><b>{{translate('Add new option')}}</b><br></h6>   
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body text-center">
                            <form method="post" action="{{ url('/admin/add_registration_option') }}">
                                @csrf
                               <div class="col-md-12" style="text-align:left;">
                                <div class="row">
                                    <div class="col-md-12"><textarea class="aiz-text-editor" name="option"></textarea></div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-sm">Save</button> 
                            </form>
                            
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

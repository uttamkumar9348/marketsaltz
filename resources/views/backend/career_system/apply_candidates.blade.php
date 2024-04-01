@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Candidates')}}</h1>
        </div>
        
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_blogs" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All job posts') }}</h5>
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
                        <th>{{translate('Job Title')}}</th>
                        <th data-breakpoints="lg">{{translate('Name')}}</th>
                        <th data-breakpoints="lg">{{translate('Mobile Number')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($candidates as $key=>$candidate)
                    <tr>
                        <td>
                            {{$key+1}}
                        </td>
                        <td>
                            {{($candidate->job)->job_title}}
                        </td>
                        <td>
                         {{$candidate->fullname}}
                        </td>
                        <td>
                           {{$candidate->mobile_no}}
                        </td>
                        <td>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" onchange="" value="{{$candidate->id}}">
                                <span></span>
                            </label>
                        </td>
                        <td class="text-right">
                           
                            <a class="btn btn-soft-success btn-icon btn-circle btn-sm " data-toggle="modal" data-target="#my-modal2{{$candidate->id}}" title="{{translate('View')}}"><i class="las la-eye"></i></a>
                            <a class="btn btn-soft-danger btn-icon btn-circle btn-sm "  data-toggle="modal" data-target="#my-modal{{$candidate->id}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                        <!-- delete Modal -->
<div id="my-modal{{$candidate->id}}" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{translate('Delete Confirmation')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">{{translate('Are you sure to delete this?')}}</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                <a href="{{url('/dlt_candidate',$candidate->id)}}"  class="btn btn-primary mt-2">{{translate('Delete')}}</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Details Modal -->
<div id="my-modal2{{$candidate->id}}" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6"><b>{{translate('Candidates Details')}}</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <div class="col-md-12" style="text-align:left;">
                    <span style="padding: 10px;color: black;font-weight: bold;background: turquoise;">{{$candidate->created_at->toDayDateTimeString()}}</span>
                    <h6 class="mt-1">{{($candidate->job)->job_title}}</h6>
                    <p class="mt-1">{{$candidate->fullname}}</p>
                    <p class="mt-1">{{$candidate->email}}</p>
                    <p class="mt-1">{{$candidate->mobile_no}}</p>
                    <p class="mt-1">{{$candidate->experience}}</p>
                    <p class="mt-1">{{$candidate->qualification}}</p>
                    <a href="{{asset('public/candidate_cv/' .$candidate->resume)}}" view><embed class="mt-1" src="{{ asset('public/candidate_cv/'.'/' .$candidate->resume)}}"  type="application/pdf"   height="200px" width="200"></a>
                    <p class="mt-1">{{$candidate->address}}</p>
                </div>
                <!--<div class="col-md-6">-->
                    
                <!--</div>-->
            </div>
        </div>
    </div>
</div><!-- /. End modal -->
                    </tr>
                   @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                
            </div>
        </div>
</div>


@endsection



@section('script')

  

@endsection

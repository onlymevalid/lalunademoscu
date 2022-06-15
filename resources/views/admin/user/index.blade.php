@extends('layouts.appadmin')
   
@section('content')
<div class="row">
    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        User list
                                    </h4>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display min-w850" id="example3">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Image
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Phone
                                                    </th>
                                                    <th>
                                                        provence
                                                    </th>
                                                    <th>
                                                        Package
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                @can('user_delete')
                                    <td></td>
                                @endcan

                                @if($user->type == 0)
                                   <td class="cover"><img src="/img/agency.svg" width="26"></td>
                               @else
                                   <td class="cover"><img src="/uploads/profile/{{ $user->id }}/th-{{ $user->cover ?? '' }}"></td>
                               @endif

                                <td field-key='name'>{{ $user->name }}</td>
                                <td field-key='email'>{{ $user->email }}</td>
                                <td field-key='phone'>{{ $user->phone }}</td>
                                {{-- <td field-key='email'>
                                    @if($user->verified == '1')
                                        Verified
                            
                                    @else
                                        Unverified
                                    @endif</td> --}}
                                <td field-key='provence'>{{ $user->provence }}</td>
                                <td field-key='plan'>{{ $user->plan }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-primary shadow btn-xs sharp mr-1" href="{{ route('admin.useredit',[$user->id]) }}"><i class="fa fa-pencil"></i></a> 
                                        <a class="btn btn-danger shadow btn-xs sharp" href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
@endsection
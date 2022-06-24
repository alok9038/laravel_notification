@extends('layouts.base')
@section('content')
<div class="container my-2" style="height: 600px">
    <div class="card border shadow-sm">
        <div class="card-header">
            <span class="h5">Follow</span>
        </div>
        <div class="card-body p-0 px-1">
            <div class="row">
                <div class="col-12">
                    <div class="chat-box-left h-auto w-100 border-0 px-0">
                        <div class="chat-list" style="height: 500px!important" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <div class="" id="general_chat">
                                                    @php
                                                        $sr = 0;
                                                    @endphp
                                                    @foreach ($users as $user)
                                                    @php
                                                        $sr += 1;
                                                    @endphp
                                                        <a href="javascript:void()" class="media">
                                                            <div class="media-left">
                                                                <img src="{{ URL::asset('assets/images/users/user-'.$sr.'.jpg') }}" alt="user" class="rounded-circle thumb-md">
                                                                {{-- <span class="round-10 bg-success"></span> --}}
                                                            </div><!-- media-left -->
                                                            <div class="media-body">
                                                                <div class="d-inline-block">
                                                                    <h6>{{ $user->name }}</h6>
                                                                    <p>developer</p>
                                                                </div>
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <button type="button" class="btn mt-2 w-100 btn-soft-primary">Follow</button>
                                                                </div>
                                                            </div><!-- end media-body -->
                                                        </a> <!--end media-->
                                                    @endforeach
                                                </div><!--end general chat-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 664px;">
                                </div>
                            </div>
                        </div>
                    </div><!--end chat-box-left -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

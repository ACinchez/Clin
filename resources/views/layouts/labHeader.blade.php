@extends('layouts.default')
@section('labHeader')
<link rel="stylesheet" href="{{asset('css\labheader.css')}}">
        <div class="header">
            <div class="header-1">
                <nav class="topnav navbar navbar-light">
                    <!--hamburger button-->
                    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                      <i class="fe fe-menu navbar-toggler-icon" style="color:aliceblue";></i>
                    </button>
                    <div>
                <span class="uic-logo-title">
                    <img class="uic-logo" src="{{asset('pics\uic-logo-small.png')}}" alt="uic-logo">
                    <H1 class="title-logo">
                        UIC LABORATORY TEST
                    </H1>
                </span>
            </div>
        </div>
    </div>
    </ul>
  </nav>
  @endsection

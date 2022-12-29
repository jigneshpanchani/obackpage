
@extends('backend.layout.default')
@section('content')

    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><strong>{{ (@$pagetitle) ? $pagetitle : 'Dashboard' }}</strong></h5>
            </div>
        </div>
    </div>

    <div class="flex py-6 justify-center mt-4">
    <span class="text-gray-800 font-bold text-2xl">Welcome to Dashboard</span>
    </div>

    <style>
    .widthzero {
        width: 0px;
        /* display: none; */
    }
    .fa-bars{
        font-size: 32px;
        color: #fff;
    }
    .fa-caret-right{
        font-size: 14px;
        color: rgb(82, 79, 79);
    }
    .fa-chevron-right {
        font-size: 14px;
        color: rgb(82, 79, 79);
    }
    .citySidebar ul{
        padding: 0px;
        margin: 0px;
    }
    .citySidebar li {
        margin: 0;
        border-bottom: 1px solid black;
    }
    </style>

    



@endsection

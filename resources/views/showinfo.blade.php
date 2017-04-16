@extends('layouts.dashboard')

@section('content')
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thông tin website
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{url('home')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Thông tin website
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    Tổng số lượt truy cập : {{count($website_data)}}
                </div>
@endsection

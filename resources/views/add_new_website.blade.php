@extends('layouts.dashboard')

@section('content')
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List website
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{{url('home')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> List website
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Websites</h2>
                        
                        <div class="col-lg-12">

                        <form role="form" action="{{ url('add_new_website') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Website name</label>
                                <input name="website_name" class="form-control" placeholder="Type your website name here">
                            </div>

                            <div class="form-group">
                                <label>Website url</label>
                                <input name="website_url" class="form-control" placeholder="Type your website url">
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>

                        </form>

                    </div>
                    </div>
                </div>
@endsection

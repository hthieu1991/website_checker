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
                        <p>
                            <button type="button" class="btn btn-lg btn-primary" onclick="window.location='{{url('add_new_website')}}'">Add new website</button>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Website Name</th>
                                        <th>Url</th>
                                        <th>Visits</th>
                                        <th>Online</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($website as $web) {
                                       
                                ?>
                                    <tr>
                                        <td>{{$web->name}}</td>
                                        <td>{{$web->url}}</td>
                                        <td>1.0000.0000</td>
                                        <td>Online</td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection

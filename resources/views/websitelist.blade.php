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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($website as $web) {
                                        $online = "offline";
                                        $host = str_replace("http://", "", $web->url);
                                        $host = str_replace("https://", "", $host);
                                        if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
                                            $online = 'online';
                                            fclose($socket);
                                        }
                                       
                                ?>
                                    <tr>
                                        <td>{{$web->name}}</td>
                                        <td>{{$web->url}}</td>
                                        <td>1.000.000</td>
                                        <td>{{$online}}</td>
                                        <td>
                                            <a href="{{url('delete_website').'/'.$web->id}}">Delete</a>&nbsp;
                                            <a href="{{url('edit_website').'/'.$web->id}}">Edit</a>
                                        </td>
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

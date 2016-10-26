<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('Laura::layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Post</h3>
                    </div>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ action("\Laura\Controllers\Backend\UserController@store") }}" accept-charset="UTF-8" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Username">Username</label>

                                <input class="form-control" id="username" required="1" name="name" type="text" value="">
                            </div>
                            <div class="form-group">
                                <label for="email" required="" email="">E-Mail Address</label>

                                <input class="form-control" id="email" name="email" type="text" value="">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input class="form-control" required="" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <label for="Confirm Password">Confirm Password</label>
                                <input class="form-control" required="" name="cnf_password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <label for="User Image">user image</label>
                                <input name="image" type="file">
                            </div>

                            <div class="checkbox">
                                <select name="Role"><option value="1">Admin</option><option value="2">Super Admin</option><option value="3">Moderator</option></select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div>
@stop
@section('scripts')
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
@stop


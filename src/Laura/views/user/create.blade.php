<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('backend.layouts.main')
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
                    <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(array('url' => action("backend\UserController@store"), 'role' => 'form')) !!}
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                           {{ Form::label('Username', 'Username', array('for' => 'username')) }}

                           {{ Form::text('username', '', array("class" => "form-control", "id" => "username", "required" => true)) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'E-Mail Address', array('for' => 'email',  "required" => "", "email" => "")) }}

                           {{ Form::text('email', '', array("class" => "form-control", "id" => "email")) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Password', 'Password', array('for' => 'password')) }}
                          {{  Form::password('password', array('class' => 'form-control', "required" => "")) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Confirm Password', 'Confirm Password', array('for' => 'cnf_password')) }}
                            {{ Form::password('cnf_password', array('class' => 'form-control', "required" => "")) }}
                        </div>
                        <div class="checkbox">
                          {{ Form::select('Role', array('1' => 'Admin', '2' => 'Super Admin', '3' => 'Moderator')) }}
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


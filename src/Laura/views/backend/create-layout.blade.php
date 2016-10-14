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
            <small>Create Layout</small>
        </h1>      
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
                    {!! Form::open(array('url' => action("\Laura\Controllers\Backend\LayoutController@store"), 'role' => 'form' , 'method' => 'post')) !!}
                    {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('Name', 'Name', array('for' => 'name')) }}

                            {{ Form::text('name', '', array("class" => "form-control required", "id" => "name", "required" => true)) }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>   <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@stop
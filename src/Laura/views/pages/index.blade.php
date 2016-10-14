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
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" name="post_title" placeholder="Post Title" id="post_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_summary">Summary</label>
                                <textarea name="post_summary" id="post_summary" placeholder="Enter Summary" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="post_content">Post Content</label>
                                <textarea id="post_content" name="post_content" rows="10" cols="80" class='ckeditor'>
                                            This is my textarea to be replaced with CKEditor.
                                </textarea>                             
                            </div>
                            <div class="form-group">
                                <label>Date and time range:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="text" id="reservationtime" class="form-control pull-right active">
                                </div><!-- /.input group -->
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
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


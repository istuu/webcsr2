@extends('layouts.default')
@section('title')Create Privilege @endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li>
                        <a href="{{ url('/') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('privilege') }}">Privilege</a>
                    </li>
                    <li class="active">
                        Tambah Privilege
                    </li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Privilege</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Tambah Privilege</h3>
            </div>
            <div class="panel-body">
              <form id="form" action="{{ url('privilege') }}" data-toggle="validator" enctype="multipart/form-data" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="control-label">Name</label>
                                  <input name="name" type="text" class="form-control" required>
                              </div>
                          </div>
                          <!-- <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="control-label">Theme</label>
                                  <select name="theme" class="form-control">
                                    <option value="theme-dark">Dark</option>
                                    <option value="theme-blue">Blue</option>
                                    <option value="theme-cyan">Cyan</option>
                                    <option value="theme-light">Light</option>
                                  </select>
                              </div>
                          </div> -->
                      </div>
                  </div>
                  <div class="panel-footer text-right">
                      <button class="btn btn-info" type="submit">Submit</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection

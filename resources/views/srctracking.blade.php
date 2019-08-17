@extends('layouts.app')
@section('datas')
<div class="panel">
                                    <form class="form-horizontal" action="{{ url('/serch/dim/')}}" method="get">
                                      @csrf
                                        <div class="panel-body">
                                            <div id="bid">
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i>Custom Clearc Oprator Search</h2>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="">JOB Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="" name="Src"  id="" class="form-control">
                                                </div>
                                                 <button class="btn btn-primary" type="submit">Find</button>
                                            </div>
                                    </form>
                                </div>
@endsection
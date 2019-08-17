@extends('layouts.app')
@section('datas')
<div class="panel">
                                    <form class="form-horizontal" action="{{ url('/search_______/sch.nittsu/')}}" method="get">
                                      @csrf
                                        <div class="panel-body">
                                            <div id="bid">
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i> PPjk Search</h2>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="">Job Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="" name="Src"  id="" class="form-control">
                                                </div>
                                                 <button class="btn btn-primary" type="submit">Find</button>
                                            </div>
                                    </form>
                                </div>
@endsection
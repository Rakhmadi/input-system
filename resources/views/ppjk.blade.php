@extends('layouts.app')
@section('datas')
                                              <?php
                                                $parameter= Crypt::encrypt($o->id);
                                            ?>

<div class="panel">
                                        <form class="form-horizontal" action="{{ url('/update/' . $parameter)}}" method="post">
                                           @csrf
                                          <div class="panel-body">                       
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i> PPJK</h2>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_job">Tgl Create PIB</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tgl_create_pib" value='{{$o->tgl_create_pib}}'  id="tgl_create_pib" class=" date form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="bl_number">Aju PIB Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="ajunumber" value="{{$o->ajunumber}}"  id="ajunumber" class="form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_bl">Tgl Terima Manifest</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="manifest" value="{{$o->manifest}}" id="manifest" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="po">Tgl Terima BC 1.1</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="bc11" value="{{$o->bc11}}" id="bc11" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Tgl Approval PIB</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="pibaprofdata" value="{{$o->pibaprofdata}}" id="pibaprofdata" class=" date  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Tgl Transfer PIB</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="inputtglinftransfer" id="inputtglinftransfer" value="{{$o->inputtglinftransfer}}" class=" date  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Tgl SPPB</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="resc_sppb" value="{{$o->resc_sppb}}" id="resc_sppb" class=" date  form-control">
                                                </div>
                                            </div>
                                            
                                            </div>     
                                          <center><button class="btn btn-info" type="submit">Sign in</button></center>  
                                    </form>
                                    <div class="" style="margin: 4px;"></div>
                                    <form action="{{url('/pending/')}}" method="POST">
                                        @csrf
                                         <input type="hidden" id="job_number" name="job_number" value="{{$o->no_job}}">
                                         <input type="hidden" id="f" name="f" value="{{$o->ppjkname}}">
                                         <input type="hidden" id="job_number" name="x" value="{{ csrf_token() }}">
                                          <center><button class="btn btn-info" type="submit">excute</button></center>
                                    </form>            
                                        <div class="panel-footer text-right">
                                      </div>
                                </div>
@endsection
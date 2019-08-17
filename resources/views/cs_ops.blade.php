@extends('layouts.app')
@section('datas')
<div class="panel">
                                 <?php
                                                $parameter= Crypt::encrypt($o->id);
                                            ?>
                                        <form class="form-horizontal" action="{{url('/update/' . $parameter)}}" method="post">
                                            @csrf
                                          <div class="panel-body">                       
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i> CS OPS</h2>
                                              <br>
                                              <center> <h4> JOB Number : {{$o->no_job}}</h4></center>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_job">Berthing Location</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="lokasigudang" value="{{$o->lokasigudang}}"  id="tgl_create_pib" class=" date form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="bl_number">Tgl Pick Up Pengantar D/O</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="planpickupdo"  value="{{$o->planpickupdo}}" id="ajunumber" class="form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_bl">Tgl Pick Up D/O</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="pengantardo" value="{{$o->pengantardo}}" id="pengantardo" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="po">Return Empty DEPO</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="actualdo" id="actualdo" value="{{$o->actualdo}}" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Tgl NOA</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="noa" value="{{$o->noa}}" id="pibaprofdata" class=" date  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label"  for="no_ibd">Finish Striping</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="finishstripinf" id="finishstripinf" value="{{$o->finishstripinf}}" class=" date  form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Gate Out CY
</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{$o->gateoutcy}}" name="gateoutcy" id="gateoutcy" class=" date  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Loss Tree Level 1</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{$o->level1}}" name="level1" id="level1" class=" date  form-control">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Loss Tree Level 2</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{$o->level2}}" name="level2" id="level2" class=" date  form-control">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-lg-2  control-label" for="no_ibd">Job Status</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{$o->jobstatus}}" name="jobstatus" id="jobstatus" class=" date  form-control">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Remark Job Status</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{$o->remarkjob}}" name="remarkjob" id="resc_sppb" class="  form-control">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Department</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{$o->departemen}}" name="departemen" id="departemen" class=" date  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    
                                                    <div class="col-lg-6">
                                                           <center> <button class="btn btn-info" type="submit">Sign in</button> </center>
                                                    </div>
                                                </div>
                                            
                                            </div>                                         
                                       
                                            
                                       
                                    </form>
                                    <form action="{{url('/pending/')}}" method="POST">
                                        @csrf
                                         <input type="hidden" id="job_number" name="jobnumber" value="{{$o->no_job}}">
                                         <input type="hidden" id="name" name="name" value="{{$o->csopraname}}">
                                         <input type="hidden" id="job_number" name="token" value="{{ csrf_token() }}">
                                         <center><button class="btn btn-info" type="submit">excute</button></center>
                                    </form>   
                                    <div class="panel-footer text-right">
                                        </div>
                                    <!--===================================================-->
                                    <!--End Horizontal Form-->
                                </div>
@endsection
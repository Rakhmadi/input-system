@extends('layouts.app')
@section('datas')
                                        <?php
                                                $parameter= Crypt::encrypt($o->id);
                                        ?>


<div class="panel">
                                        <form class="form-horizontal" action="{{URL('/update/' . $parameter)}}" method="post">
                                          <div class="panel-body">                    
                                              @csrf   
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i> Tracking </h2>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_job">Nomor Surat Jalan</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nosuratjl" value="{{$o->nosuratjl}}"  id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="tgldelevery">Tgl Delivery</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tgldelevery"   value="{{$o->tgldelevery}}" id="tgldelevery" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="tglunloading">Tgl Unloading</label>
                                                <div class="col-lg-6"> 
                                                    <input type="text" name="tglunloading"   value="{{$o->tglunloading}}" id="tglunloading" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="tglretrnemptcontainer">Tgl Return Empty Container</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tglretrnemptcontainer"  value="{{$o->tglretrnemptcontainer}}" id="tglretrnemptcontainer" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="namasupir">Nama Supir</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="namasupir" id="namasupir"  value="{{$o->namasupir}}" class="  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="notelephone">Nomor Telp Supir</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="notelephone" id="notelephone"  value="{{$o->notelephone}}"  class=" date  form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="jmluangjln">Jumlah Uang Jalan</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="jmluangjln"  value="{{$o->jmluangjln}}" id="jmluangjln" class="  form-control">
                                                </div>
                                            </div>
                                            
                                            </div>                                         
                                        
                                            <button class="btn btn-info" type="submit">Save</button>
                                      
                                    </form>
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
                                <!--end all() tracking sys()-->

@endsection
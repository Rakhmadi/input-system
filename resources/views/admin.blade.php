@extends('layouts.app')
@section('datas')
<div class="panel">
                                    <form class="form-horizontal" method="post">
                                        <div class="panel-body">                       
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i>Home</h2>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_job">BL / AWB Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="bl_number"  id="bl_number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="bl_number">PO Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="ponumber"  id="ponumber" class="form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_bl">IBD Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="ibd_num"  id="ibd_num" class="form-control">
                                                </div> 
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="po">Tgl Terima IBD</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tglterimaibd" id="tglterimaibd" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Business Unit</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="businesunit" id="businesunit" class="  form-control">
                                                </div>
                                            </div>
                                            
                                            </div>                                         
                                        <div class="panel-footer text-right">
                                            <button class="btn btn-info" type="submit">Sign in</button>
                                        </div>
                                    </form>
                                    <!--===================================================-->
                                    <!--End Horizontal Form-->
                                </div>
@endsection
@extends('layouts.app')
@section('datas')
 <?php
                                                $parameter= Crypt::encrypt($o->id);
                                            ?>
<div class="panel">
                                    <form class="form-horizontal" action="{{ url('/update/' . $parameter)}}" method="post">
                                      @csrf
                                        <div class="panel-body">
                                            <div id="bid">
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i> CS Edit</h2>
                                              <br>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_job">BL / AWB Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="{{ $o->bl_number}}" name="bl_number"  id="bl_number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="bl_number">PO Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="ponumber" value="{{$o->ponumber}}"  id="ponumber" class="form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_bl">IBD Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="ibd_num" value="{{$o->ibd_num}}"  id="ibd_num" class="form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="po">Tgl Terima IBD</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tglterimaibd" value="{{$o->tglterimaibd}}" id="tglterimaibd" class=" date form-control">
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="no_ibd">Business Unit</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="businesunit" value="{{$o->businesunit}}" id="businesunit" class="  form-control">
                                                </div>
                                            </div>
                                               
                                            <div class="form-group">
                                               <label class="col-lg-2 control-label">Description of Goods</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="descofgoods" value="{{$o->descofgoods}}" name="descofgoods" />
                                                       <datalist id="descofgoods">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>

                                                <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="pre_alert">Tgl Pre-Alert</label>
                                                <div class="col-lg-6"  id="pre_alert">
                                                    <input type=""  name="pre_alert" value="{{$o->pre_alert}}" id="pre_alert" class=" date form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">City of Origin</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="city" id="city" value="{{$o->city}}" class=" form-control">
                                                </div>
                                            </div>       

                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="docs_coml_date">Documents Complete</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="docs_coml_date"value="{{$o->docs_coml_date}}" id="docs_coml_date" class="date form-control">
                                                </div>
                                            </div>    
                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="recs_ibd">Invoice Number</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="inv_num"value="{{$o->inv_num}}" id="inv_num" class="form-control">
                                                </div>
                                            </div>    
                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="eta">Invoice Date</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="inv_date"value="{{$o->inv_date}}" id="inv_date" class="date form-control">
                                                </div>
                                            </div>    
                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="ata">Branch</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="branch" value="{{$o->branch}}"id="branch" class="form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                               <label class="col-lg-2 control-label">Port of Discharges</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control"value="{{$o->prtofdiscarge}}" list="prtofdiscarge" name="prtofdiscarge" />
                                                       <datalist id="shipper">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>


                                              <div class="form-group">
                                               <label class="col-lg-2 control-label">Shipper Name</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control"value="{{$o->shipper}}" list="shipper" name="shipper" />
                                                       <datalist id="shipper">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>
                                                       <!---->
                                                        </div>

                                              <div class="form-group">
                                               <label class="col-lg-2 control-label">Consignee Name</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control"value="{{$o->consigne}}" list="consigne" name="consigne" />
                                                       <datalist id="consigne">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>

                                                       <div class="form-group">
                                               <label class="col-lg-2 control-label">Notify Name</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" value="{{$o->notify}}"list="notify" name="notify" />
                                                       <datalist id="notify">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>

                                                          <div class="form-group">
                                               <label class="col-lg-2 control-label">Supplier Name</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" value="{{$o->supplier}}"list="supplier" name="supplier" />
                                                       <datalist id="supplier">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>

                                                        <div class="form-group">
                                               <label class="col-lg-2 control-label">Lartas</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control"value="{{$o->lartas}}" list="lartas" name="lartas" />
                                                       <datalist id="lartas">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                        </div>        
                                                       </div>


                                                        <div class="form-group">
                                               <label class="col-lg-2 control-label">Type Permit</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" value="{{$o->type_permit}}"list="type_permit" name="type_permit" />
                                                       <datalist id="type_permit">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                        </div>        
                                                       </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Permit Start</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="permit_star" value="{{$o->permit_star}}" id="permit_star" class="date form-control">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Permit Ready</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="permit_ready"  value="{{$o->permit_ready}}"id="permit_ready" class="date form-control">
                                                </div>
                                            </div>

                                                <div class="form-group">
                                               <label class="col-lg-2 control-label">Jenis BL</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="jenisbl"value="{{$o->jenisbl}}" name="jenisbl" />
                                                       <datalist id="jenisbl">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                        </div>        
                                                       </div>
                                              
                                              <div id="inf">
                                             

                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Soft Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="softcopy" value="{{$o->softcopy}}" id="softcopy" class="form-control">
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Tgl Terima Soft Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="softcopy" value="{{$o->softcopy}}" id="tglteimasoft" class=" date form-control">
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Hard Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="hardcopy" value="{{$o->hardcopy}}" id="hardcopy" class="form-control">
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Tgl Terima Hard Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tgltrimahard" value="{{$o->tgltrimahard}}" id="tgltrimahard" class=" date form-control">
                                                </div>
                                            </div>
                                              <!---->

                                              <div class="form-group">
                                               <label class="col-lg-2 control-label">Carrier</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="carier" value="{{$o->carier}}" name="carier" />
                                                       <datalist id="carier">
                                                        <option value="Chrome">
                                                        <option value="Firefox">
                                                        <option value="Internet Explorer">
                                                        <option value="Opera">
                                                        <option value="Safari">
                                                        <option value="Microsoft Edge">
                                                       </datalist>
                                                         </div>        
                                                       </div>
                                                       <!---->

                                                  <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Pieces</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->pieces}}"  name="pieces" id="pieces" class=" form-control">
                                                </div>
                                            </div>    


                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Packages</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  value="{{$o->pkg}}"name="pkg" id="pkg" class=" form-control">
                                                </div>
                                            </div>    


                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Gross Weight</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->grossweight}}" name="grossweight" id="grossweight" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Cubic Meter</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  value="{{$o->cubicmeter}}"name="cubicmeter" id="cubicmeter" class=" form-control">
                                                </div>
                                            </div>    


                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Taxable Weight</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  value="{{$o-> texabeleweight}}"name="texabeleweight" id="texabeleweight" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">ATD</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  value="{{$o->atd}}"name="atd" id="atd" class="date form-control">
                                                </div>
                                            </div>    




                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">ETA</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->eta}}" name="eta" id="eta" class="date form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">ATA</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->ata}}" name="ata" id="ata" class="date form-control">
                                                </div>
                                            </div> 

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 20'</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->total_container_20}}" name="total_container_20" id="total_container_20" class="form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 20RF
</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->total_container_20ref}}" name="total_container_20ref" id="total_container_20ref" class="date form-control">
                                                </div>
                                            </div> 

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 40'</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->total_container_40}}" name="total_container_40" id="total_container_40" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 40H</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->total_container_40h}}" name="total_container_40h" id="total_container_40h" class=" form-control">
                                                </div>
                                            </div> 



                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 40RF</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->total_container_40ref}}" name="total_container_40ref" id="total_container_40ref" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Conatiner 45'</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""value="{{$o->total_container_45}}"  name="total_container_45" id="total_container_45" class=" form-control">
                                                </div>
                                            </div> 

                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Jumlah Container</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->sum_container}}" name="sum_container" id="sum_container" class=" form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Total (TEUs)</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  value="{{$o->total_teus}}"name="total_teus" id="total_teus" class=" form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">COO</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->coo}}" name="coo" id="coo" class="date form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Insurance</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  value="{{$o->insurance}}"name="insurance" id="insurance" class="date form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">CIPL</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""value="{{$o->cipl}}" name="cipl" id="cipl" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">COA</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->coa}}" name="coa" id="coa" class="date form-control">
                                                </div>

                                            </div> 

                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Health Certificate</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->hc}}" name="hc" id="hc" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Phytosanitary Certificate</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""value="{{$o->phyto}}"  name="phyto" id="phyto" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Laporan Surveyor</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->ls}}" name="ls" id="ls" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Rekom BPOM</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->rekombpom}}" name="rekombpom" id=" date rekombpom" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">KT-2</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->kt2}}" name="kt2" id="kt2" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">KT-9</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type="" value="{{$o->kt9}}" name="kt9" id="kt9" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Respon Lartas</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""value="{{$o->responlartas}}"  name="responlartas" id="responlartas" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Tgl Respon Lartas</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""value="{{$o->Recs_respon_lartas}}"  name="Recs_respon_lartas" id="Recs_respon_lartas" class="date form-control">
                                                </div>
                                            </div>                                         
                                        <div class="panel-footer text-right">
                                            <button class="btn btn-info" type="submit">Input</button>
                                        </div>
                                    </form>
                                     <form action="{{url('/pending/')}}" method="POST">
                                        @csrf
                                         <input type="hidden" id="job_number" name="jobnumber" value="{{$o->no_job}}">
                                         <input type="hidden" id="f" name="csname" value="{{$o->csname}}">
                                         <input type="hidden" id="job_number" name="token" value="{{ csrf_token() }}">
                                          <center><button class="btn btn-info" type="submit">excute</button></center>
                                    </form>    
                                    <!--===================================================-->
                                    <!--End Horizontal Form-->
                                </div>
@endsection
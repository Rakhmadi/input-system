@extends('layouts.app')
@section('datas')

<div class="panel">
                                    <form id='fo' class="form-horizontal" action="{{ url('/inputs.nitsu')}}" method="post">
                                      @csrf
                                        <div class="panel-body">
                                            <div id="bid">
                                              
                                                <h2><i class="glyphicon glyphicon-chevron-right"> </i> CS Input</h2>
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
                                                <label class="col-lg-2 control-label" for="bl_number">JOB Number</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="no_job"  id="no_job" class="form-control">
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
                                               
                                            <div class="form-group">
                                               <label class="col-lg-2 control-label">Description of Goods</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="descofgoods" name="descofgoods" />
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
                                                    <input type=""  name="pre_alert" id="pre_alert" class=" date form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">City of Origin</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="city" id="city" class=" form-control">
                                                </div>
                                            </div>       

                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="docs_coml_date">Documents Complete</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="docs_coml_date" id="docs_coml_date" class="date form-control">
                                                </div>
                                            </div>    
                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="recs_ibd">Invoice Number</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="inv_num" id="inv_num" class="form-control">
                                                </div>
                                            </div>    
                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="eta">Invoice Date</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="inv_date" id="inv_date" class="date form-control">
                                                </div>
                                            </div>    
                                              <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="ata">Branch</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="branch" id="branch" class="form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                               <label class="col-lg-2 control-label">Port of Discharges</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="prtofdiscarge" name="prtofdiscarge" />
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
                                                 <input class=" form-control" list="shipper" name="shipper" />
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
                                                 <input class=" form-control" list="consigne" name="consigne" />
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
                                                 <input class=" form-control" list="notify" name="notify" />
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
                                                 <input class=" form-control" list="supplier" name="supplier" />
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
                                                 <input class=" form-control" list="lartas" name="lartas" />
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
                                                 <input class=" form-control" list="type_permit" name="type_permit" />
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
                                                    <input type="text" name="permit_star"  id="permit_star" class="date form-control">
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Permit Ready</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="permit_ready"  id="permit_ready" class="date form-control">
                                                </div>
                                            </div>

                                                <div class="form-group">
                                               <label class="col-lg-2 control-label">Jenis BL</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="jenisbl" name="jenisbl" />
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
                                                    <input type="text" name="softcopy"  id="softcopy" class="form-control">
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Tgl Terima Soft Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tglteimasoft"  id="tglteimasoft" class=" date form-control">
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Hard Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="hardcopy"  id="hardcopy" class="form-control">
                                                </div>
                                            </div>


                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="branch">Tgl Terima Hard Copy</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tgltrimahard"  id="tgltrimahard" class=" date form-control">
                                                </div>
                                            </div>
                                              <!---->

                                              <div class="form-group">
                                               <label class="col-lg-2 control-label">Carrier</label>
                                               <div class="col-lg-6">
                                                 <input class=" form-control" list="carier" name="carier" />
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
                                                    <input type=""  name="pieces" id="pieces" class=" form-control">
                                                </div>
                                            </div>    


                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Packages</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="pkg" id="pkg" class=" form-control">
                                                </div>
                                            </div>    


                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Gross Weight</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="grossweight" id="grossweight" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Cubic Meter</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="cubicmeter" id="cubicmeter" class=" form-control">
                                                </div>
                                            </div>    


                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Taxable Weight</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="texabeleweight" id="texabeleweight" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">ATD</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="atd" id="atd" class="date form-control">
                                                </div>
                                            </div>    




                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">ETA</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="eta" id="eta" class="date form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">ATA</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="ata" id="ata" class="date form-control">
                                                </div>
                                            </div> 

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 20'</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_container_20" id="total_container_20" class="form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 20RF
</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_container_20ref" id="total_container_20ref" class="date form-control">
                                                </div>
                                            </div> 

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 40'</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_container_40" id="total_container_40" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 40H</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_container_40h" id="total_container_40h" class=" form-control">
                                                </div>
                                            </div> 



                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Container 40RF</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_container_40ref" id="total_container_40ref" class=" form-control">
                                                </div>
                                            </div>    

                                             <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Conatiner 45'</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_container_45" id="total_container_45" class=" form-control">
                                                </div>
                                            </div> 

                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Jumlah Container</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="sum_container" id="sum_container" class=" form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Total (TEUs)</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="total_teus" id="total_teus" class=" form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">COO</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="coo" id="coo" class="date form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Insurance</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="insurance" id="insurance" class="date form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">CIPL</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="cipl" id="cipl" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">COA</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="coa" id="coa" class="date form-control">
                                                </div>

                                            </div> 

                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Health Certificate</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="hc" id="hc" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Phytosanitary Certificate</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="phyto" id="phyto" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Laporan Surveyor</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="ls" id="ls" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Rekom BPOM</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="rekombpom" id=" date rekombpom" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">KT-2</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="kt2" id="kt2" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">KT-9</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="kt9" id="kt9" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Respon Lartas</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="responlartas" id="responlartas" class="date form-control">
                                                </div>
                                            </div> 


                                            <div class="form-group ">
                                                <label class="col-lg-2 control-label" for="city">Tgl Respon Lartas</label>
                                                <div class="col-lg-6"  id="demo-dp-txtinput">
                                                    <input type=""  name="Recs_respon_lartas" id="Recs_respon_lartas" class="date form-control">
                                                </div>
                                            </div>                                         
                                        <div class="panel-footer text-right">
                                            <a class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter" >Input</a>
                                        </div>

                                    </form>
                                    
                                    <!--===================================================-->
                                    <!--End Horizontal Form-->
                                </div>
                                                                        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Data Akan Di Simpan</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="ikl" class="btn btn-primary" type="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
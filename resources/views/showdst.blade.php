@extends('layouts.app')
@section('datas')

                                                <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                       <h3 class="panel-title">Data</h3>
                                    </div>

                            <div class="panel-body">
                                <table id="" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                          <th scope="col">Name</th>
                                          <th scope="col">Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                           <td>Costumers Name </td>
                                           <td>{{ $o->csname}}</td>
                                        </tr>

                                        <tr>
                                           <td>Bl Number</td>
                                           <td>{{ $o->bl_number}}</td>
                                        </tr>


                                        <tr>
                                           <td>Job Number</td>
                                           <td>{{ $o->no_job}}</td>
                                        </tr>

                                         <tr>
                                           <td>PO Number</td>
                                           <td>{{ $o->ponumber }}</td>
                                        </tr>

                                         <tr>
                                           <td>IBD Number</td>
                                           <td>{{ $o->ibd_num}}</td>
                                        </tr>

                                         <tr>
                                           <td>Tgl Terima IBD</td>
                                           <td>{{ $o->tglterimaibd}}</td>
                                        </tr>

                                         <tr>
                                           <td>Bussines Unit</td>
                                           <td>{{ $o->businesunit}}</td>
                                        </tr>

                                         <tr>
                                           <td>Description of Goods</td>
                                           <td>{{ $o->descofgoods}}</td>
                                        </tr>

                                         <tr>
                                           <td>Tgl Pre-Alert</td>
                                           <td>{{ $o->pre_alert}}</td>
                                        </tr>

                                         <tr>
                                           <td>CITY</td>
                                           <td>{{ $o->city}}</td>
                                        </tr>

                                         <tr>
                                           <td>Documents Complete</td>
                                           <td>{{ $o->docs_coml_date}}</td>
                                        </tr>

                                         <tr>
                                           <td>INVOICE</td>
                                           <td>{{ $o->inv_num}}</td>
                                        </tr>

                                         <tr>
                                           <td>INVOICE DATE</td>
                                           <td>{{ $o->inv_date}}</td>
                                        </tr>

                                        <tr>
                                           <td>Branch</td>
                                           <td>{{ $o->branch}}</td>
                                        </tr>

                                        <tr>
                                           <td>Port of Discharges</td>
                                           <td>{{ $o->prtofdiscarge}}</td>
                                        </tr>

                                        <tr>
                                           <td>Shipper Name</td>
                                           <td>{{ $o->shipper}}</td>
                                        </tr>

                                        <tr>
                                           <td>Consignee Name</td>
                                           <td>{{ $o->consigne}}</td>
                                        </tr>

                                        <tr>
                                           <td>Notify Name</td>
                                           <td>{{ $o->notify}}</td>
                                        </tr>

                                         <tr>
                                           <td> Supplier Name</td>
                                           <td>{{ $o->supplier}}</td>
                                        </tr>

                                         <tr>
                                           <td>Lartas</td>
                                           <td>{{ $o->lartas}}</td>
                                        </tr>

                                         <tr>
                                           <td>Type Permit</td>
                                           <td>{{ $o->type}}</td>
                                        </tr>

                                         <tr>
                                           <td>Permit Start</td>
                                           <td>{{ $o->permit_star}}</td>
                                        </tr>

                                         <tr>
                                           <td>Permit Ready</td>
                                           <td>{{ $o->permit_ready}}</td>
                                        </tr>

                                         <tr>
                                           <td>Jenis BL</td>
                                           <td>{{ $o->jenisbl}}</td>
                                        </tr>

                                         <tr>
                                           <td>Soft Copy</td>
                                           <td>{{ $o->softcopy}}</td>
                                        </tr>

                                         <tr>
                                           <td>Tgl Terima Soft Copy</td>
                                           <td>{{ $o->tglteimasoft}}</td>
                                        </tr>

                                         <tr>
                                           <td>Hard Copy</td>
                                           <td>{{ $o->hardcopy}}</td>
                                        </tr>

                                         <tr>
                                           <td>Tgl Terima Hard Copy</td>
                                           <td>{{ $o->tgltrimahard}}</td>
                                        </tr>

                                         <tr>
                                           <td>Carrier</td>
                                           <td>{{ $o->carier}}</td>
                                        </tr>

                                         <tr>
                                           <td>Pieces</td>
                                           <td>{{ $o->pieces}}</td>
                                        </tr>

                                         <tr>
                                           <td>Packages</td>
                                           <td>{{ $o->pkg}}</td>
                                        </tr>

                                         <tr>
                                           <td>Gross Weight</td>
                                           <td>{{ $o->grossweight}}</td>
                                        </tr>

                                         <tr>
                                           <td>Taxable Weight</td>
                                           <td>{{ $o->texabeleweight }}</td>
                                        </tr>

                                        <tr>
                                          <td>Cubic Meter</td>
                                          <td>{{ $o->cubicmeter }}</td>
                                        </tr>

                                         <tr>
                                           <td>ATD</td>
                                           <td>{{ $o->atd}}</td>
                                        </tr>


                                         <tr>
                                           <td>ETA</td>
                                           <td>{{ $o->eta}}</td>
                                        </tr>


                                         <tr>
                                           <td>ATA</td>
                                           <td>{{ $o->ata}}</td>
                                        </tr>


                                         <tr>
                                           <td>Container 20'</td>
                                           <td>{{ $o->total_container_20}}</td>
                                        </tr>


                                         <tr>
                                           <td>Container 20RF</td>
                                           <td>{{ $o->total_container_20ref}}</td>
                                        </tr>



                                         <tr>
                                           <td>Container 40'</td>
                                           <td>{{ $o->total_container_40}}</td>
                                        </tr>


                                         <tr>
                                           <td>Container 40H</td>
                                           <td>{{ $o->total_container_40h}}</td>
                                        </tr>


                                         <tr>
                                           <td>Container 40RF</td>
                                           <td>{{ $o->total_container_40ref}}</td>
                                        </tr>


                                         <tr>
                                           <td>Conatiner 45'</td>
                                           <td>{{ $o->total_container_45}}</td>
                                        </tr>


                                         <tr>
                                           <td>Jumlah Container</td>
                                           <td>{{ $o->sum_container}}</td>
                                        </tr>


                                         <tr>
                                           <td>Total (TEUs)</td>
                                           <td>{{ $o->total_teus}}</td>
                                        </tr>

                                         <tr>
                                           <td>COO</td>
                                           <td>{{ $o->coo}}</td>
                                        </tr>

                                         <tr>
                                           <td>Insurance</td>
                                           <td>{{ $o->insurance}}</td>
                                        </tr>

                                         <tr>
                                           <td>CIPL</td>
                                           <td>{{ $o->cipl}}</td>
                                        </tr>

                                          <tr>
                                           <td>COA</td>
                                           <td>{{ $o->coa}}</td>
                                        </tr>

                                          <tr>
                                           <td>Health Certificate</td>
                                           <td>{{ $o->hc}}</td>
                                        </tr>

                                          <tr>
                                           <td>Phytosanitary Certificate</td>
                                           <td>{{ $o->phyto}}</td>
                                        </tr>

                                          <tr>
                                           <td>Laporan Surveyor</td>
                                           <td>{{ $o->ls}}</td>
                                          </tr>

                                           <tr>
                                           <td>Rekom BPOM</td>
                                           <td>{{ $o->rekombpom}}</td>
                                           </tr>

                                            <tr>
                                           <td>KT-2</td>
                                           <td>{{ $o->kt2}}</td>
                                        </tr>


                                            <tr>
                                           <td>KT-9</td>
                                           <td>{{ $o->kt9}}</td>
                                        </tr>


                                            <tr>
                                           <td>Respon Lartas</td>
                                           <td>{{ $o->responlartas}}</td>
                                        </tr>


                                            <tr>
                                           <td>Tgl Respon Lartas</td>
                                           <td>{{ $o->Recs_respon_lartas}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
@endsection

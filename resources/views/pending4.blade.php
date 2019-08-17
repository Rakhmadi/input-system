
@extends('layouts.app')
@section('datas')

                        <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                       <h3 class="panel-title">Pending for Costumers clearns</h3>
                                    </div>

                            <div class="panel-body">
                                <table id="demo-dt-selection" class="table table-striped table-bordered" style="text-align:center;">
                                    <thead>
                                        <tr>
                                          <th scope="col">id</th>
                                       
                                           <th scope="col">Job Number</th>
                                          <th scope="col">create</th>
                                          <th scope="col">update</th>
                                           <th scope="col">token</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($ino as $p)
                                        <tr>
                                           <td>{{$p->id}}</td>
                                           <td>{{ $p->job_number}}</td>
                                           <td>{{$p->created_at}}</td>
                                           <td>{{$p->updated_at}}</td>
                                             <td>{{ $p->sesion}}</td>
                                           <td>
                                            <?php
                                                $parameter= Crypt::encrypt($p->id);
                                            ?>
                                    <div class="op">
                                <a href="{{ url('/read.nittsu/' . $parameter)}}">
                                     <button type="button" name="button" class="shadow-drop btn btn-primary btn-sm"><i class="glyphicon glyphicon-eye-open"></i></button>
                               </a>
                                <a href="{{ url('/edit________/cs_ops_______/' . $parameter) }}">
                                <button type="button" name="button" class="shadow-drop  btn btn-info btn-sm">
                                <i class="glyphicon glyphicon-pencil"></i>
                               </button></a>
                                
                                    </div>
                                              </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                                {!! $ino->render() !!}
                            </div>
                        </div>
                        <div id="res"></div>
                        
@endsection

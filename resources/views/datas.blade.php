@extends('layouts.app')
@section('datas')

                        <div class="panel">
                            <div class="panel-heading ui-sortable-handle">
                                       <h3 class="panel-title">Data</h3>
                                    </div>

                            <div class="panel-body">
                                <table id="demo-dt-selection" class="table table-striped table-bordered" style="text-align:center;">
                                    <thead>
                                        <tr>
                                          <th scope="col">id</th>
                                          <th scope="col">Name</th>
                                           <th scope="col">Job Number</th>
                                          <th scope="col">PO Number</th>
                                          <th scope="col">BL Number</th>
                                          <th scope="col">create</th>
                                          <th scope="col">update</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($uu as $e)
                                        <tr>
                                           <td>{{$e->id}}</td>
                                           <td>{{$e->csname}}</td>
                                           <td>{{$e->no_job}}</td>
                                           <td>{{$e->ponumber}}</td>
                                           <td>{{$e->bl_number}}</td>
                                           <td>{{$e->created_at}}</td>
                                           <td>{{$e->updated_at}}</td>
                                           <td>
                                            <?php
                                                $parameter= Crypt::encrypt($e->id);
                                            ?>
                                    
                                <a href="{{ url('/read.nittsu/' . $parameter)}}">
                                     <button type="button" name="button" class="shadow-drop btn btn-primary btn-sm"><i class="glyphicon glyphicon-eye-open"></i></button>
                               </a>
                                <a href="{{ url('/edit/' . $parameter) }}">
                                <button type="button" name="button" class="shadow-drop  btn btn-info btn-sm">
                                <i class="glyphicon glyphicon-pencil"></i>
                               </button></a>
                                <a href="{{ url('dell.dev/' . $parameter) }} ">
                                <button type="button" href="" name="button" class="shadow-drop btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                </a>
                                    
                                              </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                                {!! $uu->render() !!}
                            </div>
                            
                        </div>
                        
@endsection

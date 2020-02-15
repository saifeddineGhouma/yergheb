<div class="col-md-12">
                            <div class="panel">
                                <div class="panel-head">
                                    <h5 class="panel-title">Bordered Table</h5>
                                </div>
                                <div class="panel-body">
                                    <p class="text-muted mb-4">Add Class <code>.table-bordered</code></p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>adresse</th>
                                                <th>description</th>
                                                <th>statu</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reclamations as $reclamation)


                                        @php  
                                 $statu="";
                                        if($reclamation->statu=="0")
                                         {
                                            $statu="Encours";

                                         }elseif($reclamation->statu=="1"){
                                            $statu="Termine";
                                         }else{
                                             $statu="refus";

                                         }

                                        @endphp
                                            <tr>
                                                <td>{{$reclamation->id}}</td>

                                                <td>{{$reclamation->description}}</td>
                                                <td>{{$reclamation->adresse}}</td>
                                                <td>{{$statu}}</td>

                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="show"><i class="fa fa-pencil text-secondary p-1 m-1"></i>show</a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close text-danger text-danger p-1 m-1"></i></a>
                                                </td>
                                            </tr>
                                       
                                            @endforeach
                                 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
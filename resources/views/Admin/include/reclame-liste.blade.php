<div class="col-md-12">
                            <div class="panel">
                                <div class="panel-head">
                                    <h5 class="panel-title">Hoverable Table</h5>
                                </div>
                                <div class="panel-body">
                                    <p class="text-muted mb-4">Add Class <code>.table-hover</code></p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>User</th>
                                                <th>Country</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reclamations as $reclame)
                                            <tr>
                                                <td><a href="#" class="text-primary">{{$reclame->id}}</a></td>
                                                <td>{{$reclame->description}}</td>
                                                <td>{{$reclame->user->name}}</td>
                                                <td><i class="fa fa-clock-o mr-2 text-muted"></i>{{$reclame->adresse}}</td>
                                               
                                                <td><span class="badge badge-primary badge-sm badge-pill">completed</span></td>
                                           <td><a href="{{route('reclame.edit',$reclame->id)}}">EDIT</a></td>
                                          
                                          
                                            </tr>
                                         @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
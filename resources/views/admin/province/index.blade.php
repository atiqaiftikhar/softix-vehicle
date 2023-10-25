
@extends('layouts.master')
@section('content')


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
          <div class="table-wrapper">

                <div class="table-title">

                        <div class="card" style="">
                             <div class="container-fluid">
                               <div class="card-body "  >
                                <div class="row">
                                   <div class="col-sm-6">

                                  <div class="row">
                                    <div class="col-sm-2">
                                        <h3><i class="fa fa-map-signs" aria-hidden="true"></i></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3>Province Details</h3>

                                     </div>
                                    <div class="col-sm-4">

                                    </div>

                                  </div>



                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-info add-new text-light" type="button" href="{{ route('province.create') }}" title="Add"><i class="fa fa-plus"></i>Add New</a>
                                    </div>
                                </div>
                            </div>


                            <table class="table table-borderless table-striped table-earning ">

                                <thead>
                                    <tr>
                                        <th>Province Name</th>

                                        <th>Actions</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Province as $province)
                                    <tr>
                                        <td><td>{{$province->name}}</td></td>
                                        <td> <a class="btn btn-success btn-sm rounded-0 text-light" href="{{ route('province.edit',$province->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>Edit</a>
                                            <a class="btn btn-danger btn-sm rounded-0 text-light" href="{{ route('province.delete',$province->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-trash"></i>Delete</a></td>
                                        <td></td>
                                        <td>

                                        </td>
                                    </tr>



           @endforeach
                                </tbody>

                            </table>


                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>





@endsection


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
                                        <h3><i class="fas fa-street-view"></i></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3>Street Details</h3>

                                     </div>
                                    <div class="col-sm-4">

                                    </div>

                                  </div>



                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-2">
                                        {{-- <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button> --}}
                                        <a class="btn btn-info add-new text-light" href="{{ route('street.create') }}"  type="button"  title="Add"><i class="fa fa-plus"></i>Add New</a>
                                    </div>
                                </div>
                            </div>


                            <table class="table table-borderless table-striped table-earning ">

                                <thead>
                                    <tr>
                                        <th>Street Name</th>

                                        <th>Actions</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Street as $street)
                                    <tr>
                                        <td>{{$street->name}}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm rounded-0 text-light" href="{{ route('street.edit',$street->id)}}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>Edit</a>
                                            <a class="btn btn-danger btn-sm rounded-0 text-light" href="{{ route('street.delete',$street->id)}}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-trash"></i>Delete</a>
                                        </td>
                                        <td></td>
                                        <td> </td>
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

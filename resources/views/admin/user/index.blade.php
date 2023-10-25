@extends('layouts.master')
@section('content')

<div class="container-fluid">

<div class="row m-t-100">
    <div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>user data</h3>
        </div>

    <div class="row">

        </div>
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>DOB</th>
                        <th>Role ID</th>
                        {{-- <th class="text-right">price</th> --}}

                </thead>
                <tbody>
                    <tr>
                        <td>2018-09-29 05:57</td>
                        <td>100398</td>
                        <td>iPhone X 64Gb Grey</td>
                        <td class="text-right">$999.00</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$999.00</td>
                        <td class="text-right">$999.00</td>
                        <td class="text-right">$999.00</td>
                    </tr>


                </tbody>
            </div>
        </div>
        </div>
            </table>
        </div>
        <!-- END DATA TABLE-->






           @endsection

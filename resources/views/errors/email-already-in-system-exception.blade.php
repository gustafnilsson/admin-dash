@extends('layouts.master-guest')

@section('title')

    <title>Email Already In System Exception</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <div class="container">

            <!-- Content Header (Page header) -->

            <section class="content-header">



                <ol class="breadcrumb">

                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li class="active">Email Already In System</li>

                </ol>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="error-page">


                    <div class="error-content">

                        <h2 class="text-red">Email Already In System!</h2>
                        <h3><i class="fa fa-warning text-red"></i> Oops! Your email is already in the system.</h3>

                        <p>
                            <a href="/login">Login</a> to sync your account.
                            {{ $exception->getMessage() }}
                            Otherwise, you may <a href="/">return home</a>.
                        </p>


                    </div>
                    <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
            </section>
            <!-- /.content -->


        </div>

    </div>

@endsection
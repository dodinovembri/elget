@extends('layouts.app')

@section('content')

@include('components.sidebar')

<div class="content">
    <div class="header">
        <div class="header-left">
            <a href="" class="burger-menu"><i data-feather="menu"></i></a>

            <div class="header-search">
                <i data-feather="search"></i>
                <input type="search" class="form-control" placeholder="What are you looking for?">
            </div><!-- header-search -->
        </div><!-- header-left -->

    </div><!-- header -->
    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Library</a></li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Table (DataTable)</li>
                </ol>
            </nav>
        </div>
    </div><!-- content-header -->
    <div class="content-body">

        <div class="component-section">
            <a href="{{ url('youtube/create') }}"><button type="button" class="btn btn-primary mb-2">Add New Subscribe</button></a>
            <table id="example1" class="table">
                <thead>
                    <tr>
                        <th class="wd-20p">Name</th>
                        <th class="wd-25p">Position</th>
                        <th class="wd-20p">Office</th>
                        <th class="wd-15p">Age</th>
                        <th class="wd-20p">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>$170,750</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- component-section -->


    </div><!-- content-body -->
</div><!-- content -->

@endsection
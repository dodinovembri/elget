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
            <table id="example1" class="table">
                <thead>
                    <tr>
                        <th class="wd-10p">No</th>
                        <th class="wd-25p">Youtube Link</th>
                        <th class="wd-20p">Total Request</th>
                        <th class="wd-15p">Status</th>
                        <th class="wd-20p">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; foreach ($users as $key => $value) { $no++; ?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $value->yt_link }}</td>
                            <td>{{ $value->total_request }}</td>
                            <td>{{ $value->status }}</td>
                            <td></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><!-- component-section -->


    </div><!-- content-body -->
</div><!-- content -->

@endsection
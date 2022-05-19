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

        <div class="header-right">
            <a href="" class="header-help-link"><i data-feather="help-circle"></i></a>
            <div class="dropdown dropdown-notification">
                <a href="" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-header">
                        <h6>Notifications</h6>
                        <a href=""><i data-feather="more-vertical"></i></a>
                    </div><!-- dropdown-menu-header -->
                    <div class="dropdown-menu-body">
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                                <span>5 hours ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                                <span>8 hours ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                                <span>a day ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                                <span>2 days ago</span>
                            </div>
                        </a>
                    </div><!-- dropdown-menu-body -->
                    <div class="dropdown-menu-footer">
                        <a href="">View All Notifications</a>
                    </div>
                </div><!-- dropdown-menu -->
            </div>
            <div class="dropdown dropdown-loggeduser">
                <a href="" class="dropdown-link" data-toggle="dropdown">
                    <div class="avatar avatar-sm">
                        <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                    </div><!-- avatar -->
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-header">
                        <div class="media align-items-center">
                            <div class="avatar">
                                <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                            </div><!-- avatar -->
                            <div class="media-body mg-l-10">
                                <h6>Louise Kate Lumaad</h6>
                                <span>Administrator</span>
                            </div>
                        </div><!-- media -->
                    </div>
                    <div class="dropdown-menu-body">
                        <a href="" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                        <a href="" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>
                        <a href="" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a>
                        <a href="" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
                    </div>
                </div><!-- dropdown-menu -->
            </div>
        </div><!-- header-right -->
    </div><!-- header -->
    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Library</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                </ol>
            </nav>
            <h4 class="content-title">Form Elements</h4>
        </div>
    </div><!-- content-header -->
    <div class="content-body">

        <div class="component-section no-code">
            <h5 id="section1" class="tx-semibold">Input Box</h5>
            <p class="mg-b-25">A basic form control with disabled and readonly mode.</p>
            <form action="{{ url('youtube/store') }}" method="POST">
                @csrf
                <div class="row row-sm">
                    <div class="col-sm-6">
                        <input type="text" name="yt_link" class="form-control" placeholder="Youtube Link" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" name="total_request" min="1" class="form-control" placeholder="Total Request" required>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <a href="{{ url('youtube/create') }}"><button type="submit" class="btn btn-primary mb-2">SAVE</button></a>
                    </div>
                </div><!-- row -->
            </form>
        </div><!-- component-section -->

    </div><!-- content-body -->

</div><!-- content -->

@endsection
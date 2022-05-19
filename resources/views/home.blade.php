@extends('layouts.app')

@section('content')

@include('components.sidebar')

<div class="content">
    <div class="header">
        <div class="header-left">
            <a id="mainMenu" href="" class="burger-menu d-none d-lg-flex"><i data-feather="menu"></i></a>
            <a id="profileMenu" href="" class="burger-menu d-lg-none"><i data-feather="arrow-left"></i></a>

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

    <div class="content-body content-body-profile">
        <div class="profile-sidebar">
            <div class="profile-sidebar-header">
                <div class="avatar"><img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt=""></div>

                <h5>Abigail Johnson</h5>
                <p>UI Developer (Savior of Mankind)</p>
                <span>Bay Area, San Francisco, CA</span>

                <div class="d-flex align-self-stretch mg-t-30">
                    <a href="" class="btn btn-brand-01 btn-sm btn-uppercase flex-fill">Follow</a>
                    <a href="" class="btn btn-white btn-sm btn-uppercase flex-fill mg-l-5">Message</a>
                </div>
            </div><!-- profile-sidebar-header -->
            <div class="profile-sidebar-body">

                <label class="content-label">Websites &amp; Social Channel</label>
                <ul class="list-unstyled profile-info-list">
                    <li><i data-feather="globe"></i> <a href="">http://fenchiumao.me/</a></li>
                    <li><i data-feather="github"></i> <a href="">@fenchiumao</a></li>
                    <li><i data-feather="twitter"></i> <a href="">@fenmao</a></li>
                    <li><i data-feather="instagram"></i> <a href="">@fenchiumao</a></li>
                    <li><i data-feather="facebook"></i> <a href="">@fenchiumao</a></li>
                </ul>

                <hr class="mg-y-25">

                <label class="content-label">Contact Information</label>
                <ul class="list-unstyled profile-info-list mg-b-0">
                    <li><i data-feather="briefcase"></i> <span class="tx-color-03">Bay Area, San Francisco, CA</span></li>
                    <li><i data-feather="home"></i> <span class="tx-color-03">Westfield, Oakland, CA</span></li>
                    <li><i data-feather="smartphone"></i> <a href="">(+1) 012 345 6789</a></li>
                    <li><i data-feather="phone"></i> <a href="">(+1) 987 654 3201</a></li>
                    <li><i data-feather="mail"></i> <a href="">me@fenchiumao.me</a></li>
                </ul>
            </div><!-- profile-sidebar-body -->
        </div><!-- profile-sidebar -->
        <div class="profile-body">
            <div class="profile-body-header">
                <div class="nav-wrapper">
                    <ul class="nav nav-line" id="profileTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="projects-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="projects" aria-selected="false">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="people-tab" data-toggle="tab" href="#people" role="tab" aria-controls="people" aria-selected="false">Connections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                </div><!-- nav-wrapper -->
            </div><!-- profile-body-header -->
            <div class="tab-content pd-15 pd-sm-20">
                <div id="overview" class="tab-pane active show">

                    <div class="stat-profile">
                        <div class="stat-profile-body">
                            <div class="row row-xs">
                                <div class="col">
                                    <div class="card card-body pd-10 pd-md-15 bd-0 shadow-none bg-primary-light">
                                        <h1 class="tx-light tx-sans tx-spacing--4 tx-primary mg-b-5">Rp. 102.000</h1>
                                        <p class="tx-13 tx-lg-14 tx-color-02 mg-b-0">Earning Money This Month</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-body pd-10 pd-md-15 bd-0 shadow-none bg-teal-light">
                                        <h1 class="mg-b-5 tx-sans tx-spacing--2 tx-light tx-teal">961</h1>
                                        <p class="tx-13 tx-lg-14 tx-color-03 mg-b-0">Search appearances</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-body pd-10 pd-md-15 bd-0 shadow-none bg-pink-light">
                                        <h1 class="mg-b-5 tx-sans tx-spacing--2 tx-light tx-pink">665</h1>
                                        <p class="tx-13 tx-lg-14 tx-color-03 mg-b-0">Your activity views</p>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- stat-profile-body -->
                    </div><!-- stat-profile -->

                    <hr class="mg-y-15 op-0">

                    <label class="content-label content-label-lg mg-b-15 tx-color-01">Biography</label>
                    <p class="tx-color-03">Redhead, Innovator, Saviour of Mankind, Hopeless Romantic, Attractive 20-something Yogurt Enthusiast. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>

                    <hr class="mg-y-15 op-0">

                    <label class="content-label content-label-lg mg-b-15 tx-color-01">Work Experience</label>
                    <ul class="list-unstyled media-list-profile">
                        <li class="media">
                            <div class="wd-40 ht-40 bg-teal op-5"></div>
                            <div class="media-body">
                                <h6 class="mg-b-5 tx-semibold">Themepixels, Inc. LTD</h6>
                                <p class="tx-color-03 tx-13">January 2016 - Present</p>
                                <p>An online-based high performing web and mobile development company, with a passion for making high quality web-based application and services for businesses and organization. </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="wd-40 ht-40 bg-primary op-5"></div>
                            <div class="media-body">
                                <h6 class="mg-b-5 tx-semibold">Berkeley Systems, Inc.</h6>
                                <p class="tx-color-03 tx-13">December 2012 - November 2015</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="wd-40 ht-40 bg-pink op-5"></div>
                            <div class="media-body">
                                <h6 class="mg-b-5 tx-semibold">Berkeley Systems, Inc.</h6>
                                <p class="tx-color-03 tx-13">December 2012 - November 2015</p>
                            </div>
                        </li>
                    </ul><!-- media-list-profile -->

                    <hr class="mg-y-15 op-0">

                    <label class="content-label content-label-lg mg-b-15 tx-color-01">Educational Background</label>
                    <ul class="list-unstyled media-list-profile">
                        <li class="media">
                            <div class="wd-40 ht-40 bg-gray-400"></div>
                            <div class="media-body">
                                <h6 class="mg-b-5 tx-semibold">Graduate in BS in Computer Science</h6>
                                <p class="tx-color-03 tx-13">Hold Name University class 2006</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="wd-40 ht-40 bg-gray-400"></div>
                            <div class="media-body">
                                <h6 class="mg-b-5 tx-semibold">Sacred Heart Academy</h6>
                                <p class="tx-color-03 tx-13">High school graduate class 2002</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="wd-40 ht-40 bg-gray-400"></div>
                            <div class="media-body">
                                <h6 class="mg-b-5 tx-semibold">Loon Central Elementary School</h6>
                                <p class="tx-color-03 tx-13">Elmentary graduate class 1998</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- tab-content -->
        </div><!-- profile-body -->
    </div><!-- content-body -->
</div><!-- content -->
@endsection
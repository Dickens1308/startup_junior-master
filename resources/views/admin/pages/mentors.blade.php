<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Startup Junions | Admin Dashboard</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/theme.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_style/assets/css/style.css') }}" type="text/css" />
</head>

<body class="layout-row">
    <!-- ############ Aside START-->
    @include('layouts.admin.navigation')
    <div id="main" class="layout-column flex">
        <!-- ############ Header START-->
        @include('layouts.admin.header')
        <!-- ############ Footer END-->


        <!-- ############ Content START-->
        <div id="content" class="flex ">
            <!-- ############ Main START-->
            <div>
                <div class="page-hero page-container " id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Bootstrap</h2>
                            <small class="text-muted">An extended Bootstrap table with radio, checkbox, sort,
                                pagination</small>
                        </div>
                        <div class="flex"></div>
                        <div>
                            <a href="https://themeforest.net/item/basik-responsive-bootstrap-web-admin-template/23365964"
                                class="btn btn-md text-muted">
                                <span class="d-none d-sm-inline mx-1">Buy this Item</span>
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div id="toolbar">
                        </div>
                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable"
                            data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true"
                            data-show-columns="true" data-detail-view="false" data-mobile-responsive="true"
                            data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                            <thead>
                                <tr>
                                    <th data-sortable="true" data-field="id">ID</th>
                                    <th data-sortable="true" data-field="owner">Owner</th>
                                    <th data-sortable="true" data-field="project">Project</th>
                                    <th data-field="task"><span class="d-none d-sm-block">Tasks</span></th>
                                    <th data-field="finish"><span class="d-none d-sm-block">Finish</span></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" " data-id="20">
                                    <td style="min-width:30px;text-align:center">
                                        <small class="text-muted">20</small>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="w-32 avatar gd-warning">
                                                G
                                            </span>
                                        </a>
                                    </td>
                                    <td class="flex">
                                        <a href="#" class="item-title text-color ">Netflix hackathon ios app</a>
                                        <div class="item-except text-muted text-sm h-1x">
                                            Netflix hackathon creates eye tracking option for iOS app
                                        </div>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm ">
                                            120
                                        </span>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm [object Object]">
                                            20
                                        </span>
                                    </td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="#">
                                                    See detail
                                                </a>
                                                <a class="dropdown-item download">
                                                    Download
                                                </a>
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">
                                                    Delete item
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" " data-id="8">
                                    <td style="min-width:30px;text-align:center">
                                        <small class="text-muted">8</small>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="w-32 avatar gd-success">
                                                <img src="../assets/img/a8.jpg" alt=".">
                                            </span>
                                        </a>
                                    </td>
                                    <td class="flex">
                                        <a href="#" class="item-title text-color ">DEV DAY 2018</a>
                                        <div class="item-except text-muted text-sm h-1x">
                                            Working on a research piece on the history of vocational schools in America.
                                        </div>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm ">
                                            220
                                        </span>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm [object Object]">
                                            4
                                        </span>
                                    </td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="#">
                                                    See detail
                                                </a>
                                                <a class="dropdown-item download">
                                                    Download
                                                </a>
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">
                                                    Delete item
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" " data-id="4">
                                    <td style="min-width:30px;text-align:center">
                                        <small class="text-muted">4</small>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="w-32 avatar gd-success">
                                                <img src="../assets/img/a4.jpg" alt=".">
                                            </span>
                                        </a>
                                    </td>
                                    <td class="flex">
                                        <a href="#" class="item-title text-color ">Open source project public
                                            release</a>
                                        <div class="item-except text-muted text-sm h-1x">
                                            New out-of-the box dashboards and enhanced security and compliance
                                        </div>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm ">
                                            20
                                        </span>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm [object Object]">
                                            7
                                        </span>
                                    </td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="#">
                                                    See detail
                                                </a>
                                                <a class="dropdown-item download">
                                                    Download
                                                </a>
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">
                                                    Delete item
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" " data-id="17">
                                    <td style="min-width:30px;text-align:center">
                                        <small class="text-muted">17</small>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="w-32 avatar gd-warning">
                                                H
                                            </span>
                                        </a>
                                    </td>
                                    <td class="flex">
                                        <a href="#" class="item-title text-color ">AI Could Uber</a>
                                        <div class="item-except text-muted text-sm h-1x">
                                            AI will highlight & emphasize key areas where students need help, allowing
                                            teachers to focus on facilitating the learning process
                                        </div>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm ">
                                            200
                                        </span>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm [object Object]">
                                            53
                                        </span>
                                    </td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="#">
                                                    See detail
                                                </a>
                                                <a class="dropdown-item download">
                                                    Download
                                                </a>
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">
                                                    Delete item
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class=" " data-id="15">
                                    <td style="min-width:30px;text-align:center">
                                        <small class="text-muted">15</small>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="w-32 avatar gd-success">
                                                J
                                            </span>
                                        </a>
                                    </td>
                                    <td class="flex">
                                        <a href="#" class="item-title text-color ">Weekend Fun Project</a>
                                        <div class="item-except text-muted text-sm h-1x">
                                            You don’t have to switch tools to review code, share input on projects, or
                                            open up the conversation to the rest of your team.
                                        </div>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm ">
                                            240
                                        </span>
                                    </td>
                                    <td>
                                        <span class="item-amount d-none d-sm-block text-sm [object Object]">
                                            50
                                        </span>
                                    </td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="#">
                                                    See detail
                                                </a>
                                                <a class="dropdown-item download">
                                                    Download
                                                </a>
                                                <a class="dropdown-item edit">
                                                    Edit
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">
                                                    Delete item
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ############ Main END-->
        </div>
        <!-- ############ Content END-->
        @include('layouts.admin.footer')
    </div>
    <!-- build:js ../assets/js/site.min.js -->

    <!-- jQuery -->
    <script src="{{ asset('admin_style/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin_style/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin_style/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ajax page -->
    <script src="{{ asset('admin_style/libs/pjax/pjax.min.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/ajax.js') }}"></script>
    <!-- lazyload plugin -->
    <script src="{{ asset('admin_style/assets/js/lazyload.config.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/lazyload.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/plugin.js') }}"></script>
    <!-- scrollreveal -->
    <script src="{{ asset('admin_style/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
    <!-- feathericon -->
    <script src="{{ asset('admin_style/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/utils.js') }}"></script>
    <!-- theme -->
    <script src="{{ asset('admin_style/assets/js/theme.js') }}"></script>
    <script src="{{ asset('admin_style/assets/js/utils.js') }}"></script>
    <!-- endbuild -->
</body>

</html>

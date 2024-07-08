
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title{{config('app.name')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- third party css -->
        <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Plugins css -->
        <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

        <!-- icons -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <style>
            body, html {
                height: 100%;
                margin: 0;
                overflow: hidden; /* Prevent unwanted scrollbars on the body */
            }

            #wrapper {
                display: flex;
                flex-direction: column;
                height: 100vh; /* Full viewport height */
                overflow: hidden; /* Prevent overflow on the wrapper */
            }

            .navbar-custom {
                flex-shrink: 0; /* Prevent shrinking */
                background-color: #343a40;
                color: #fff;
            }

            .content-page {
                flex: 1;
                display: flex;
                flex-direction: column;
                overflow: hidden; /* Prevent overflow on content page */
            }

            .content {
                flex: 1;
                overflow: auto; /* Enable both vertical and horizontal scroll */
                padding: 20px;
                background-color: #f1f3f5;
            }

            .card-body {
                overflow: auto; /* Enable scrolling inside the card body */
            }

            table {
                width: 100%;
                table-layout: auto;
                overflow: auto;
                white-space: nowrap; /* Prevent table from wrapping */
            }

            .header-title {
                text-align: center;
                font-size: 30px;
            }

            .truncate {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 150px; /* Adjust the width as needed */
            }

            .left-side-menu {
                flex-shrink: 0; /* Prevent shrinking */
                width: 250px; /* Adjust as needed */
                background-color: #495057;
                color: #fff;
                overflow-y: auto; /* Enable vertical scroll */
                padding: 20px;
                box-shadow: 4px 0 6px rgba(0, 0, 0, 0.1);
            }

            .sidebar {
                overflow-y: auto; /* Enable vertical scroll */
                padding: 20px;
            }

            .sidebar ul {
                list-style-type: none;
                padding: 0;
            }

            .sidebar ul li {
                margin: 15px 0;
            }

            .sidebar ul li a {
                color: #fff;
                text-decoration: none;
                font-size: 16px;
                transition: color 0.3s;
            }

            .sidebar ul li a:hover {
                color: #ced4da;
            }
        </style>

    </head>

    <body data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

      @include('admin.include.topbar')

      @include('admin.include.sidebar')


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

            @yield('content')

                </div> <!-- content -->



            </div>



        </div>


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="/assets/js/vendor.min.js"></script>

        <!-- third party js -->
        <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="/assets/js/pages/datatables.init.js"></script>

        <!-- Plugins js-->
        <script src="/assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="/assets/libs/selectize/js/standalone/selectize.min.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="/assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="/assets/js/app.min.js"></script>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>eCommerce</title>

  <!-- Favicons -->
  <link href="{{ url('backend/dashboard_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('backend/dashboard_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ url('backend/dashboard_assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{ url('backend/dashboard_assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{ url('backend/dashboard_assets/lib/advanced-datatable/css/demo_page.css') }}" rel="stylesheet" />
  <link href="{{ url('backend/dashboard_assets/lib/advanced-datatable/css/demo_table.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ url('backend/dashboard_assets/lib/advanced-datatable/css/DT_bootstrap.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ url('backend/dashboard_assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('backend/dashboard_assets/css/style-responsive.css') }}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>ADMIN <span>M+S</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              </a>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              </a>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              </a>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ url('backend/dashboard_assets/img/mokter.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{ Session::get('admin_name') }}</h5>
          <li class="mt">
            <a href="{{ url('dashboard') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{ route('add-category') }}">
              <i class="fa fa-plus"></i>
              <span>Add category</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="{{ route('add-manufacture') }}">
              <i class="fa fa-plus"></i>
              <span>Add Manufacture</span>
              </a>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-list"></i>
              <span>Product</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('add-product') }}">Add Product</a></li>
              <li><a href="{{ route('all-product') }}">All Product</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-image"></i>
              <span>Slider</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('add-slider') }}">Add Slider</a></li>
              <li><a href="{{ route('all-slider') }}">All Slider</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="{{ route('all-category') }}">
              <i class="fa fa-list"></i>
              <span>All Category</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="{{ route('all-manufacture') }}">
              <i class="fa fa-list"></i>
              <span>All Manufacture</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
   @yield('admin_content')
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ url('backend/dashboard_assets/lib/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" language="javascript" src="{{ url('backend/dashboard_assets/lib/advanced-datatable/js/jquery.js') }}"></script>
  <script src="{{ url('backend/dashboard_assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ url('backend/dashboard_assets/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ url('backend/dashboard_assets/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ url('backend/dashboard_assets/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ url('backend/dashboard_assets/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="{{ url('backend/dashboard_assets/lib/advanced-datatable/js/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ url('backend/dashboard_assets/lib/advanced-datatable/js/DT_bootstrap.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ url('backend/dashboard_assets/lib/common-scripts.js') }}"></script>
  <!--script for this page-->

  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";
      
      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>

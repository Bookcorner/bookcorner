<!DOCTYPE html>
<html lang="en">
<head>

		<script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/build/js/global-libs.min.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/js/bootstrap/dropdown.min.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/js/bootstrap/modal.min.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/js/jquery-plugins/bootstrap-growl.min.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/js/jquery-plugins/jquery.print-this.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/js/datagrid/gcrud.datagrid.js"></script>
		<script src="/assets/grocery_crud/themes/bootstrap/js/datagrid/list.js"></script>
		

		<link rel="stylesheet" href="/assets/themes/demo/css/newtab.css" type="text/css" />
		<link rel="stylesheet" href="/assets/grocery_crud/themes/bootstrap/css/bootstrap/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="/assets/grocery_crud/themes/bootstrap/css/font-awesome/css/font-awesome.min.css" type="text/css" />
		<link rel="stylesheet" href="/assets/grocery_crud/themes/bootstrap/css/common.css" type="text/css" />
		<link rel="stylesheet" href="/assets/grocery_crud/themes/bootstrap/css/list.css" type="text/css" />
		<link rel="stylesheet" href="/assets/grocery_crud/themes/bootstrap/css/general.css" type="text/css" />
		<link rel="stylesheet" href="/assets/grocery_crud/themes/bootstrap/css/plugins/animate.min.css" type="text/css" />
	
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="robots" content="noindex, nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /></head>
<body>
<script type="text/javascript">
	var dialog_forms = '';

</script>
<script type='text/javascript'>
    var base_url = '/';

    var subject = 'Customer';
    var ajax_list_info_url = '/demo/bootstrap_theme/ajax_list_info';
    var ajax_list_url = '/demo/bootstrap_theme/ajax_list';
    var unique_hash = 'a2ad475d60b22954085c657a73309b8f';

    var message_alert_delete = "Are you sure that you want to delete this record?";

</script>
    <br/>
    <div class="container gc-container">
        <div class="success-message hidden"></div>

 		<div class="row">
        	<div class="col-md-12 table-section">
                <div class="table-label">
                    <div class="floatL l5">
                        Customers                    </div>                  
                    <div class="floatR r5 minimize-maximize-container minimize-maximize">
                        <i class="fa fa-caret-up"></i>
                    </div>
                    <div class="floatR r5 gc-full-width">
                        <i class="fa fa-expand"></i>                        
                    </div>                      
                    <div class="clear"></div>
                </div>
                <div class="table-container">
                    <form action="/demo/bootstrap_theme" method="post" autocomplete="off" id="gcrud-search-form" accept-charset="utf-8">                        <div class="header-tools">
                                                            <div class="floatL t5">
                                    <a class="btn btn-default" href="/demo/bootstrap_theme/add"><i class="fa fa-plus"></i> &nbsp; Add Customer</a>
                                </div>
                                                        <div class="floatR">
                                                                    <a class="btn btn-default t5 gc-export" data-url="/demo/bootstrap_theme/export">
                                        <i class="fa fa-cloud-download floatL t3"></i>
                                        <span class="hidden-xs floatL l5">
                                            Export                                        </span>
                                        <div class="clear"></div>
                                    </a>
                                                                                                    <a class="btn btn-default t5 gc-print" data-url="/demo/bootstrap_theme/print">
                                        <i class="fa fa-print floatL t3"></i>
                                        <span class="hidden-xs floatL l5">
                                            Print                                        </span>
                                        <div class="clear"></div>
                                    </a>
                                
                                <a class="btn btn-primary search-button t5">
                                    <i class="fa fa-search"></i>
                                    <input type="text" name="search" class="search-input" />
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
        			    <table class="table table-bordered grocery-crud-table table-hover">
        					<thead>
        						<tr>
        							<th colspan="2">
                                        Actions                                    </th>
                                                                            <th class="column-with-ordering" data-order-by="customerName">Name</th>
                                                                            <th class="column-with-ordering" data-order-by="contactLastName">Last Name</th>
                                                                            <th class="column-with-ordering" data-order-by="phone">Phone</th>
                                                                            <th class="column-with-ordering" data-order-by="city">City</th>
                                                                            <th class="column-with-ordering" data-order-by="country">Country</th>
                                                                            <th class="column-with-ordering" data-order-by="s2ce8caf0">from Employeer</th>
                                                                            <th class="column-with-ordering" data-order-by="creditLimit">CreditLimit</th>
                                            						</tr>
        						
        						<tr class="filter-row gc-search-row">
        							<td style="border-right: none;">
        							     <div class="floatL t5">
        							         <input type="checkbox" class="select-all-none" />
        							     </div>
        							 </td>
        							<td style="border-left: none;">
                                        <div class="floatL">
                                            <a href="javascript:void(0);" title="Delete"
                                               class="hidden btn btn-default delete-selected-button">
                                                <i class="fa fa-trash-o text-danger"></i>
                                                <span class="text-danger">Delete</span>
                                            </a>
                                        </div>
                                        <div class="floatR">
                                            <a href="javascript:void(0);" class="btn btn-default gc-refresh">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search Name" name="customerName" />
                                        </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search Last Name" name="contactLastName" />
                                        </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search Phone" name="phone" />
                                        </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search City" name="city" />
                                        </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search Country" name="country" />
                                        </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search from Employeer" name="s2ce8caf0" />
                                        </td>
                                                                            <td>
                                            <input type="text" class="form-control searchable-input floatL" placeholder="Search CreditLimit" name="creditLimit" />
                                        </td>
                                            						</tr>

        					</thead>
        					<tbody>
                                    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="112" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/112"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/112"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/112" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/112">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/112"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/112" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Signal Gift Stores            </td>
                    <td>
                King            </td>
                    <td>
                7025551838            </td>
                    <td>
                Las Vegas            </td>
                    <td>
                USA            </td>
                    <td>
                Thompson            </td>
                    <td>
                71800            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="114" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/114"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/114"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/114" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/114">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/114"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/114" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Australian Collectors, Co.            </td>
                    <td>
                Ferguson            </td>
                    <td>
                03 9520 4555            </td>
                    <td>
                Melbourne            </td>
                    <td>
                Australia            </td>
                    <td>
                Fixter            </td>
                    <td>
                117300            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="119" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/119"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/119"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/119" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/119">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/119"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/119" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                La Rochelle Gifts            </td>
                    <td>
                Labrune            </td>
                    <td>
                40.67.8555            </td>
                    <td>
                Nantes            </td>
                    <td>
                France            </td>
                    <td>
                Hernandez            </td>
                    <td>
                118200            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="121" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/121"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/121"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/121" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/121">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/121"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/121" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Baane Mini Imports            </td>
                    <td>
                Bergulfsen            </td>
                    <td>
                07-98 9555            </td>
                    <td>
                Stavern            </td>
                    <td>
                Norway            </td>
                    <td>
                Jones            </td>
                    <td>
                81700            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="124" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/124"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/124"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/124" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/124">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/124"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/124" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Mini Gifts Distributors Ltd.            </td>
                    <td>
                Nelson            </td>
                    <td>
                4155551450            </td>
                    <td>
                San Rafael            </td>
                    <td>
                USA            </td>
                    <td>
                Jennings            </td>
                    <td>
                210500            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="125" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/125"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/125"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/125" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/125">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/125"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/125" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Havel & Zbyszek Co            </td>
                    <td>
                Piestrzeniewicz            </td>
                    <td>
                (26) 642-7555            </td>
                    <td>
                Warszawa            </td>
                    <td>
                Poland            </td>
                    <td>
                &nbsp;            </td>
                    <td>
                0            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="128" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/128"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/128"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/128" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/128">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/128"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/128" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Blauer See Auto, Co.            </td>
                    <td>
                Keitel            </td>
                    <td>
                +49 69 66 90 2555            </td>
                    <td>
                Frankfurt            </td>
                    <td>
                Germany            </td>
                    <td>
                Jones            </td>
                    <td>
                59700            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="129" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/129"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/129"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/129" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/129">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/129"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/129" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Mini Wheels Co.            </td>
                    <td>
                Murphy            </td>
                    <td>
                6505555787            </td>
                    <td>
                San Francisco            </td>
                    <td>
                USA            </td>
                    <td>
                Jennings            </td>
                    <td>
                64600            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="131" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/131"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/131"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/131" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/131">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/131"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/131" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Land of Toys Inc.            </td>
                    <td>
                Lee            </td>
                    <td>
                2125557818            </td>
                    <td>
                NYC            </td>
                    <td>
                USA            </td>
                    <td>
                Vanauf            </td>
                    <td>
                114900            </td>
            </tr>
    <tr>
        <td>
            <input type="checkbox" class="select-row" data-id="141" />
        </td>
        <td>
                <div class="only-desktops"  style="white-space: nowrap">
                                            <a class="btn btn-default" href="/demo/bootstrap_theme/edit/141"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/141"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/141" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i>
                                        <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
                <div class="only-mobiles">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Actions                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/demo/bootstrap_theme/edit/141">
                                    <i class="fa fa-pencil"></i> Edit                                </a>
                            </li>
                                                                                        <li>
                                    <a href="/demo/bootstrap_theme/read/141"><i class="fa fa-eye"></i> View</a>
                                </li>
                                                                                        <li>
                                    <a data-target="/demo/bootstrap_theme/delete/141" href="javascript:void(0)" title="Delete" class="delete-row">
                                        <i class="fa fa-trash-o text-danger"></i> <span class="text-danger">Delete</span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </td>
                    <td>
                Euro+ Shopping Channel            </td>
                    <td>
                Freyre            </td>
                    <td>
                (91) 555 94 44            </td>
                    <td>
                Madrid            </td>
                    <td>
                Spain            </td>
                    <td>
                Hernandez            </td>
                    <td>
                227600            </td>
            </tr>
        					</tbody>

                            <!-- Table Footer -->
        					<tfoot>
                                <tr>
                                    <td colspan="9">

                                            <!-- "Show 10/25/50/100 entries" (dropdown per-page) -->
                                            <div class="floatL t20 l5">
                                                <div class="floatL t10">
                                                                                                        Show                                                 </div>
                                                <div class="floatL r5 l5 t3">
                                                    <select name="per_page" class="per_page form-control">
                                                                                                                    <option value="10"
                                                                    selected="selected">
                                                                        10&nbsp;&nbsp;
                                                            </option>
                                                                                                                    <option value="25"
                                                                    >
                                                                        25&nbsp;&nbsp;
                                                            </option>
                                                                                                                    <option value="50"
                                                                    >
                                                                        50&nbsp;&nbsp;
                                                            </option>
                                                                                                                    <option value="100"
                                                                    >
                                                                        100&nbsp;&nbsp;
                                                            </option>
                                                                                                            </select>
                                                </div>
                                                <div class="floatL t10">
                                                     entries                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <!-- End of "Show 10/25/50/100 entries" (dropdown per-page) -->

                                            <!-- Buttons - First,Previous,Next,Last Page -->
                                            <div class="floatR r5">

                                                <ul class="pagination">
                                                    <li class="disabled paging-first"><a href="#"><i class="fa fa-step-backward"></i></a></li>
                                                    <li class="prev disabled paging-previous"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                                    <li>
                                                        <span class="page-number-input-container">
                                                            <input type="number" value="1" class="form-control page-number-input" />
                                                        </span>
                                                    </li>
                                                    <li class="next paging-next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                                    <li class="paging-last"><a href="#"><i class="fa fa-step-forward"></i></a></li>
                                                </ul>

                                                <input type="hidden" name="page_number" class="page-number-hidden" value="1" />

                                            </div>
                                            <!-- End of Buttons - First,Previous,Next,Last Page -->

                                            <!-- "Displaying 1 to 10 of 116 items" -->
                                            <div class="floatR r10 t30">
                                                Displaying <span class="paging-starts">1</span> to <span class="paging-ends">10</span> of <span class="current-total-results">121</span> items                                                <span class="full-total-container hidden">
                                                    (filtered from <span class='full-total'>121</span> total entries)                                                </span>
                                            </div>
                                            <!-- End of "Displaying 1 to 10 of 116 items" -->

                                            <div class="clear"></div>
                                    </td>
                                </tr>
        					</tfoot>
                            <!-- End of: Table Footer -->
        			    </table>
                    </form>                </div>
        	</div>

            <!-- Delete confirmation dialog -->
            <div class="delete-confirmation modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure that you want to delete this record?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger delete-confirmation-button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete confirmation dialog -->

            <!-- Delete Multiple confirmation dialog -->
            <div class="delete-multiple-confirmation modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure that you want to delete this record?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel                            </button>
                            <button type="button" class="btn btn-danger delete-multiple-confirmation-button"
                                    data-target="/demo/bootstrap_theme/delete_multiple">
                                Delete                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete Multiple confirmation dialog -->

            </div>
        </div>
	</div><script type="text/javascript">
	var default_javascript_path = '/assets/grocery_crud/js';
	var default_css_path = '/assets/grocery_crud/css';
	var default_texteditor_path = '/assets/grocery_crud/texteditor';
	var default_theme_path = '/assets/grocery_crud/themes';
	var base_url = '/';

</script>
<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-23493740-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script></body>
</html>
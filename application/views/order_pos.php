<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POS</title>
	<link href="<?php echo base_url()?>assets/orderpos/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/orderpos/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/orderpos/css/bootstrap-theme.css" rel="stylesheet">
	<style type="text/css">
	.nav-tabs.nav-justified{    width: 0%;}
    .nav-tabs{    border-bottom: none;}
    .nav > li > a:hover, .nav > li > a:focus{    background-color: rgba(238, 238, 238, 0);}
    .nav-tabs > li > a:hover{    border-color: rgba(238, 238, 238, 0) rgba(238, 238, 238, 0) rgba(221, 221, 221, 0)}
    .nav .open > a, .nav .open > a:hover, .nav .open > a:focus{    background-color: rgba(238, 238, 238, 0);}
    .nav .open > a, .nav .open > a:hover, .nav .open > a:focus{    border-color: rgba(255, 255, 255, 0);}
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{     border: 1px solid rgba(221, 221, 221, 0);   background-color: rgba(255, 255, 255, 0);}
    .dropdown-menu > li > a{padding: 8px 13px;}
    .thumbnail, .box{    margin-bottom: 14px;}
    .col-xs-6, .col-sm-4, .col-md-3, .c1{padding-right: 8px; padding-left: 8px}
</style>
<script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/angular-route.js"></script>
</head>
	<body ng-app="myApp" ng-controller="myCtrl">
<div class="container-fluid" style="">

		<nav id="" class="navbar navbar-fixed-top" style="height: 72px;background-image:linear-gradient(to bottom, #337ab7 0%, #2c5273 100%);">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
	        <div class="collapse navbar-collapse" id="myNavbar">
	            <ul class="nav navbar-nav">
	                <li class="active"><a href="#" style="    font-size: 44px;
    font-weight: bold;
    color: white;">Company</a></li>


	            </ul>

                <ul class="nav navbar-nav navbar-right">
                	<!-- <li ><a href="" style="color: rgb(0, 212, 172)"><span class="glyphicon glyphicon-user" style="font-size: 24px;"></span><p>Users</p></a></li>
                	<li ><a href="" style="color: rgb(0, 212, 172)"><span class="glyphicon glyphicon-text-size" style="font-size: 24px;"></span><p>Tables</p></a></li>
                	<li ><a href="" style="color: rgb(0, 212, 172)"><span class="glyphicon glyphicon-comment" style="font-size: 24px;"></span><p>Orders</p></a></li>
                	<li ><a href="" style="color: rgb(0, 212, 172)"><span class="glyphicon glyphicon-repeat" style="font-size: 24px;"></span><p>History</p></a></li> -->
                   <ul class="nav nav-tabs btn btn-default btn-sm" id="myTab" style="margin-top: 11px">
					    <li class="dropdown">
					    <a class="dropdown-toggle" data-toggle="dropdown" href="#City2">Select Category <span class="caret"></span></a>
					        <ul class="dropdown-menu">
                    <li><a href="#BigMeals" data-toggle="tab" ng-click="loadItem('all')">All Menus</a></li>
                    <?php foreach ($category as $key => $value) {?>
					            <li><a href="#BigMeals" data-toggle="tab" ng-click="loadItem('<?php echo $value->cat_id?>')"><?php echo $value->cat_name ?></a></li>
                      <?php } ?>
					        </ul>
					    </li>
					</ul>

                </ul>
	        </div>
    	</div><!-- /.container-fluid -->
	</nav>

					<div class="col-xs-12 col-sm-7 col-md-7" style=" margin-top: 90px;  overflow: scroll; height: 555px; overflow-x: hidden;">
					<div class="tab-content">
						<div class="row">
							<div class="tab-content">

							    <!-- <div class="tab-pane  active" id="BigMeals"> -->
							       	<div class="col-xs-6 col-sm-4 col-md-3" ng-repeat="x in menus.records">
									    <a href="#" class="thumbnail">
									      <img src="<?php echo base_url()?>assets/uploads/{{x['Img']}}" style="width: 100%;height:147px;">
									      <p style="margin-top: 5px;"><i>{{x['Name']}}</i>   <i style="color: red; float: right;">{{x['Price']|currency}}</i></p>
									    </a>
								  	</div>

						    <!-- </div> -->
							</div>
					    </div>
					   </div>
					</div><!-- tab content -->
					<!-- <div class="col-xs-12 col-sm-5 col-md-5" style="margin-top: 72px; border-left: 1px solid #ddd; border-right: 1px solid #ddd">
						<div class="col-md-5" style="border-right: 1px solid #ddd"><span class="glyphicon glyphicon-flash" style="font-size: 33px; padding: 16px;"></span> dgfgdsgf</div>
						<div class="col-md-5" style="border-right: 1px solid #ddd"><span class="glyphicon glyphicon-edit" style="font-size: 33px; padding: 16px;"></span> Table 10</div>
						<div class="col-md-2"><span class="glyphicon glyphicon-flash" style="font-size: 33px; padding: 16px;"></span></div>
					</div> -->
					<div class="col-xs-12 col-sm-5 col-md-5" style="margin-top: 90px;">
						<div class="row">
							<div class="panel panel-default" style="    border-radius: 0px; overflow: scroll; height: 400px; overflow-x: hidden;">
  								<div class="panel-body">
								<table class="table table-striped table-hover">
								 	<thead>
								 		<tr>
									   		<th>Name</th>
									   		<th>Price</th>
									   		<th>Total Price</th>
									   		<th>Action</th>
								   		</tr>
								 	</thead>
								 	<tbody>
									   <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									   <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									    <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									    <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									    <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									    <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									    <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									   <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									   <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									   <tr>
									   		<td><a href="" style="font-size: 15px; font-weight: bold;">Pizza</a></td>
									   		<td>$ 20.00</td>
									   		<td>$ 20.00</td>
									   		<td><a href="" style="color: red; font-size: 19px;"><span class="glyphicon glyphicon-trash"></span></a></td>
									   </tr>
									</tbody>
								</table>
							</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sx-2 col-sm-12 col-md-12">

								<div class="col-xs-6 col-sm-6 col-md-8">
									<h4>Grend Total:</h4>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<h4 style="text-align: right;">$ 80.00</h4>
								</div>
							</div>
						</div><hr />
						<div class="col-md-10">
								<button class="btn btn-primary btn-lg">Print</button>
							</div>

						<!-- <div class="row" style="background-color: #316ea2; //margin-top: 295px;">
							<div class="col-sx-2 col-sm-12 col-md-12">
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-3" style="background-color: #FF9800">
										<div class="row" style="text-align: center;font-size: 35px;line-height: 1.8;">
											<a href="" style="color: white;"><span class="glyphicon glyphicon-flash"></span></a>
										</div>
									</div>
									<div class="col-xs-7 col-sm-7 col-md-7">
										<a href=""><h2 style="text-align: center;    color: white;">Check Out</h2></a>
									</div>
									<div class="col-xs-2 col-sm-2 col-md-2" style="border-left: 1px solid white;text-align: center;font-size: 35px;line-height: 1.8;">
										<a href="" style="color: white;"><span class="glyphicon glyphicon-cog"></span></a>
									</div>
								</div>
							</div>
						</div> -->
					</div>


		 <script src="<?php echo base_url()?>assets/orderpos/js/jquery-1.11.3.js"></script>
		 <script src="<?php echo base_url()?>assets/orderpos/js/bootstrap.min.js"></script>

     <script type="text/javascript">
       var app = angular.module("myApp",[]);
       app.controller("myCtrl",function($scope,$http){
         $scope.loadItem = function(val){
           $http.get("<?php echo base_url()?>ng/loadMenu.php?cid="+val)
            .then(function(response) {
                $scope.menus = response.data;
            });


         }
       });
     </script>
	</body>
</html>

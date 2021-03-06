    {{-- @php
        $company_id = session('company_id');
    @endphp --}}
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
    	<nav id="sidebar" class="">
    		<div class="sidebar-header">
    			<a href="index.html"><img class="main-logo" src="{{ asset('webassets/img/logo/logo.png')}}" alt="" /></a>
    			<strong><a href="index.html"><img src="" alt="" /></a></strong>
    		</div>
    	</nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="logo-pro">
    					<a href="#"><img class="main-logo" src="{{ asset('webassets/img/logo/logo.png')}}" alt="" /></a>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="header-advance-area">
    		<div class="header-top-area">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<div class="header-top-wraper">
    							<div class="row">
    								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    									<div class="header-right-info">
    										<ul class="nav navbar-nav mai-top-nav header-right-menu">
    											<li class="nav-item">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    													<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
    													<span class="admin-name">{{Auth::user()->user_name}}</span>
    													<img src="img/product/pro4.jpg" alt="" />
    												</a>
    												<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
    													<!-- <li>
															<a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
														</li>
														<li>
															<a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
														</li>
														<li>
															<a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
														</li>
														<li>
															<a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
														</li> -->
    													<li>
    														<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
    														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    															@csrf
    														</form>
    													</li>
    												</ul>
    											</li>
    											<li>
													
													
    												@if(str_replace('_', '-', app()->getLocale())=='ar')
    												<a href="#" class=" text-white"><span>English</span></a><i class="fas fa-globe-africa" style="color:#ffffff"></i>
    												@else
													<i class="fas fa-globe-africa" style="color:#ffffff"></i><a href="#" class=" text-white"><span>عربي</span></a>
												</li>
    											@endif

											</ul>
											
    									</div>
    								</div>
    								<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
    									<div class="header-top-menu tabl-d-n">
    										<ul class="nav navbar-nav mai-top-nav">
    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span> تقارير الحركات </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													@if (Auth::user()->role_id == 102 || Auth::user()->role_id == 104)
    													<a href="{{route('Company-bank-report.index')}}" class="dropdown-item">تقرير حركة بنك</a>
    													<a href="{{route('Company-cashBox-report.index')}}" class="dropdown-item">تقرير حركة خزينة </a>
    													@endif
    													@if (Auth::user()->role_id == 103 || Auth::user()->role_id == 104)
    													<a href="{{route('Company-client-report.index')}}" class="dropdown-item">تقرير حركة العميل</a>
    													<a href="{{route('Company-supplier-report.index')}}" class="dropdown-item">تقرير حركة المورد</a>
    													<a href="{{route('Company-employee-report.index')}}" class="dropdown-item">تقرير حركة موظف</a>
    													<a href="{{route('Company-item-report.index')}}" class="dropdown-item">تقرير حركات الأصناف</a>
    													@endif
    													{{-- <a href="#" class="dropdown-item">تقرير بيانات المتعاملين</a> --}}

    													<!-- <a href="#" class="dropdown-item"> تقرير المقبوضات النقدية </a>
												<a href="#" class="dropdown-item">تقرير المدفوعات النقدية  </a>
                                                <a href="#" class="dropdown-item">تقرير أذونات استيلام النقدية  </a>
                                                <a href="#" class="dropdown-item">تقرير إذن صرف نقدية   </a>
												<a href="#" class="dropdown-item">تقرير أذونات صرف  - استلام شيكات   </a>
                                                <a href="#" class="dropdown-item">تقرير الضريبة على القيمه المضافة </a>
                                                    <a href="#" class="dropdown-item"> إشعارات الخصم</a> -->

    												</div>
    											</li>
    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span> تقارير الشركة </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													@if(Auth::user()->role_id == 104)
    													<a href="#" class="dropdown-item">كشف الشركات</a>
    													<a href="#" class="dropdown-item">تقرير بيانات المتعاملين</a>
    													@elseif (Auth::user()->role_id == 102)
    													<a href="#" class="dropdown-item">كشف الشركات</a>
    													@elseif(Auth::user()->role_id == 103)
    													<a href="#" class="dropdown-item">تقرير بيانات المتعاملين</a>
    													@endif
    													@if (Auth::user()->role_id == 103 || Auth::user()->role_id == 104)
    													<a href="{{url('/Invoices/Purchasing/Report/Create')}}" class="dropdown-item">تقرير المشتريات </a>
    													<a href="{{url('/Invoices/Sales/Report/Create')}}" class="dropdown-item">تقرير المبيعات </a>
    													<a href="#" class="dropdown-item"> إشعارات الخصم</a>
    													@endif
    													@if (Auth::user()->role_id == 102 || Auth::user()->role_id == 104)
    													<a href="{{url('/Cash/Purchasing/Report/Create')}}" class="dropdown-item">تقرير المدفوعات النقدية </a>
    													<a href="{{url('/Cash/Sales/Report/Create')}}" class="dropdown-item">تقرير حركة مقبوضات نقدية </a>
    													<a href="{{url('/Permissions/Receipt/Report/Create')}}" class="dropdown-item">تقرير أذونات استيلام النقدية </a>
    													<a href="{{url('/Permissions/Payment/Report/Create')}}" class="dropdown-item">تقرير أذونات صرف النقدية </a>
    													<a href="{{url('/Cheques/Report/Create')}}" class="dropdown-item">تقرير أذونات صرف - استلام شيكات </a>
    													<a href="#" class="dropdown-item">تقرير الضريبة على القيمه المضافة </a>
    													@endif
    													<a href="#" class="dropdown-item">تقرير الميزانية </a>
    													<a href="#" class="dropdown-item">تقرير قائمه الدخل </a>
    													<a href="{{url('/Clients/Report/Create')}}" class="dropdown-item">تقرير أرصدة العملاء </a>
    													<a href="{{url('/Suppliers/Report/Create')}}" class="dropdown-item">تقرير أرصدة الموردين </a>
    													<a href="{{url('/Items/Report/Create')}}" class="dropdown-item">تقرير الأصناف </a>

    												</div>
    											</li>
    											@if (Auth::user()->role_id == 102)
    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span> الشيكات </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													<a href="{{url('/Cheques')}}" class="dropdown-item"> حركة الشيكات</a>

    												</div>
    											</li>
    											@endif
    											@if (Auth::user()->role_id == 103 || Auth::user()->role_id == 104)
    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span> الفواتير </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													<a href="{{url('Invoices/Purchasing')}}" class="dropdown-item"> مشتريات</a>
    													<a href="{{url('Invoices/Sales')}}" class="dropdown-item"> مبيعات </a>
    												</div>
    											</li>
    											@endif

    											@if (Auth::user()->role_id == 102 || Auth::user()->role_id == 104)
    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span> الخزينة </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													<a href="{{url('/Cash/Purchasing')}}" class="dropdown-item"> مدفوعات نقدية</a>
    													<a href="{{url('/Cash/Sales')}}" class="dropdown-item">مقبوضات نقدية </a>
    												</div>
    											</li>
    											@endif

    											@if (Auth::user()->role_id == 103)
    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span> الشركة </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													{{-- <a href="{{ url("/Company") }}" class="dropdown-item">تفاصيل الشركة</a> --}}
    													<a href="{{ url("/Company/Items")}}" class="dropdown-item">الأصناف</a>
    													<a href="{{ url("/Company/Clients")}}" class="dropdown-item">كشف العملاء</a>
    													<a href="{{ url("/Company/Suppliers")}}" class="dropdown-item">كشف الموردين </a>
    													<a href="{{ url("/Company/Employees")}}" class="dropdown-item">كشف الموظفين</a>
    												</div>
    											</li>
    											@endif

    											<li class="nav-item dropdown res-dis-nn">
    												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span>  {{ __('titles.home') }} </a>
    												<div role="menu" class="dropdown-menu animated zoomIn">
    													<a href="{{ url("/Company") }}" class="dropdown-item">تفاصيل الشركة</a>
    													<!-- <a href="#" class="dropdown-item">إضافة خزنة</a>
												<a href="#" class="dropdown-item">إضافة بنك</a> -->
    												</div>
    											</li>
    										</ul>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- Mobile Menu start -->
    		<div class="mobile-menu-area">
    			<div class="container">
    				<div class="row" style="direction:rtl">
    					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    						<div class="mobile-menu">
    							<nav id="dropdown">
    								<ul class="mobile-menu-nav">
    									<li>
    										<a data-toggle="collapse" data-target="#Charts" href="#"> {{ __('titles.home') }} <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul class="collapse dropdown-header-top">
    											<li><a href="{{ url("/Company") }}" class="dropdown-item">تفاصيل الشركة</a></li>
    											<!--<li><a href="#" class="dropdown-item">إضافة خزنة</a></li>
												<li><a href="#" class="dropdown-item">إضافة بنك</a></li>-->
    										</ul>
    									</li>
    									<li>
    										<a data-toggle="collapse" data-target="#demoevent" href="#">الشركة <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul id="demoevent" class="collapse dropdown-header-top">
    											<li><a href="{{ url("/Company/Items")}}" class="dropdown-item">الأصناف</a></li>
    											<li><a href="{{ url("/Company/Clients")}}" class="dropdown-item">كشف العملاء</a></li>
    											<li><a href="{{ url("/Company/Suppliers")}}" class="dropdown-item">كشف الموردين </a></li>
    											<li><a href="{{ url("/Company/Employees")}}" class="dropdown-item">كشف الموظفين</a></li>
    											<!-- <li><a href="#" class="dropdown-item">مشتريات</a></li>
												<li><a href="#" class="dropdown-item">قيود ألية</a></li> -->
    										</ul>
    									</li>
    									<li>
    										<a data-toggle="collapse" data-target="#demopro" href="#">الخزينة <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul id="demopro" class="collapse dropdown-header-top">
    											<li><a href="{{url('/Cash/Purchasing')}}" class="dropdown-item"> مدفوعات نقدية</a></li>
    											<li><a href="{{url('/Cash/Sales')}}" class="dropdown-item">مقبوضات نقدية </a></li>
    										</ul>
    									</li>
    									<li>
    										<a data-toggle="collapse" data-target="#demopro" href="#">الفواتير <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul id="demopro" class="collapse dropdown-header-top">
    											<li><a href="{{url('/Invoices/Purchasing')}}" class="dropdown-item"> مشتريات</a></li>
    											<li><a href="{{url('/Invoices/Sales')}}" class="dropdown-item"> مبيعات </a></li>
    										</ul>
    									</li>
    									<li>
    										<a data-toggle="collapse" data-target="#demopro" href="#">الشيكات <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul id="demopro" class="collapse dropdown-header-top">
    											<li><a href="{{url('/Cheques')}}" class="dropdown-item"> حركة الشيكات</a></li>
    										</ul>
    									</li>
    									<li>
    										<a data-toggle="collapse" data-target="#democrou" href="#">تقارير الشركة <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul id="democrou" class="collapse dropdown-header-top">
    											<<<<<<< HEAD @if(Auth::user()->role_id == 104)
    												<li><a href="#" class="dropdown-item">كشف الشركات</a></li>
    												<li><a href="#" class="dropdown-item">تقرير بيانات المتعاملين</a></li>
    												@elseif (Auth::user()->role_id == 102)
    												<li><a href="#" class="dropdown-item">كشف الشركات</a></li>
    												@elseif(Auth::user()->role_id == 103)
    												<li><a href="#" class="dropdown-item">تقرير بيانات المتعاملين</a></li>
    												@endif
    												@if (Auth::user()->role_id == 103 || Auth::user()->role_id == 104)
    												<li><a href="{{url('/Invoices/Purchasing/Report/Create')}}" class="dropdown-item">تقرير المشتريات </a></li>
    												<li><a href="{{url('/Invoices/Sales/Report/Create')}}" class="dropdown-item">تقرير المبيعات </a></li>
    												<li><a href="#" class="dropdown-item"> إشعارات الخصم</a></li>
    												@endif
    												@if (Auth::user()->role_id == 102 || Auth::user()->role_id == 104)
    												<li><a href="{{url('/Cash/Purchasing/Report/Create')}}" class="dropdown-item">تقرير المدفوعات النقدية </a></li>
    												<li><a href="{{url('/Cash/Sales/Report/Create')}}" class="dropdown-item">تقرير حركة مقبوضات نقدية </a></li>
    												<li><a href="{{url('/Permissions/Receipt/Report/Create')}}" class="dropdown-item">تقرير أذونات استيلام النقدية </a></li>
    												=======
    												<li><a href="{{route('Company-client-report.index')}}" class="dropdown-item">تقرير حركة العميل</a></li>
    												<li><a href="{{route('Company-supplier-report.index')}}" class="dropdown-item">تقرير حركة المورد</a></li>
    												<li><a href="{{route('Company-employee-report.index')}}" class="dropdown-item">تقرير حركة موظف</a></li>
    												<li><a href="{{route('Company-bank-report.index')}}" class="dropdown-item">تقرير حركة بنك</a></li>
    												<li><a href="{{route('Company-cashBox-report.index')}}" class="dropdown-item">تقرير حركة خزينة </a></li>
    												<li><a href="{{route('Company-item-report.index')}}" class="dropdown-item">تقرير حركات الأصناف</a></li>

    												<li><a href="{{url('/Cash/Sales/Report/Create')}}" class="dropdown-item">تقرير حركة مقبوضات نقدية </a></li>

    												<li><a href="{{url('/Permissions/Receipt/Report/Create')}}" class="dropdown-item">تقرير أذونات استيلام النقدية </a></li>
    												>>>>>>> 2f4657ff444c52626255e487836a86af0fc784e8
    												<li><a href="{{url('/Permissions/Payment/Report/Create')}}" class="dropdown-item">تقرير أذونات صرف النقدية </a></li>
    												<li><a href="{{url('/Cheques/Report/Create')}}" class="dropdown-item">تقرير أذونات صرف - استلام شيكات </a></li>
    												<li><a href="#" class="dropdown-item">تقرير الضريبة على القيمه المضافة </a></li>
    												@endif
    												<li><a href="#" class="dropdown-item">تقرير الميزانية </a></li>
    												<li><a href="#" class="dropdown-item">تقرير قائمه الدخل </a></li>
    												<li><a href="{{url('/Clients/Report/Create')}}" class="dropdown-item">تقرير أرصدة العملاء </a></li>
    												<li><a href="{{url('/Suppliers/Report/Create')}}" class="dropdown-item">تقرير أرصدة الموردين </a></li>
    												<li><a href="{{url('/Items/Report/Create')}}" class="dropdown-item">تقرير الأصناف </a></li>
    										</ul>
    									</li>
    									<li>
    										<a data-toggle="collapse" data-target="#demolibra" href="#"> تقارير الحركات <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
    										<ul id="demolibra" class="collapse dropdown-header-top">
    											@if (Auth::user()->role_id == 102 || Auth::user()->role_id == 104)
    											<li><a href="{{route('Company-bank-report.index')}}" class="dropdown-item">تقرير حركة بنك</a></li>
    											<li><a href="{{route('Company-cashBox-report.index')}}" class="dropdown-item">تقرير حركة خزينة </a></li>
    											@endif
    											@if (Auth::user()->role_id == 103 || Auth::user()->role_id == 104)
    											<li><a href="{{route('Admin-client-report.index')}}" class="dropdown-item">تقرير حركة العميل</a></li>
    											<li><a href="{{route('Company-supplier-report.index')}}" class="dropdown-item">تقرير حركة المورد</a></li>
    											<li><a href="{{route('Company-employee-report.index')}}" class="dropdown-item">تقرير حركة موظف</a></li>
    											<li><a href="{{route('Company-item-report.index')}}" class="dropdown-item">تقرير حركات الأصناف</a></li>
    											@endif


    											{{-- <li><a href="#" class="dropdown-item"> تقرير المقبوضات النقدية </a></li>
												<li><a href="#" class="dropdown-item">تقرير المدفوعات النقدية  </a></li>
                                                <li><a href="#" class="dropdown-item">تقرير أذونات استيلام النقدية  </a></li>
                                                <li><a href="#" class="dropdown-item">تقرير إذن صرف نقدية   </a></li>
												<li><a href="#" class="dropdown-item">تقرير أذونات صرف  - استلام شيكات   </a></li>
                                                <li><a href="#" class="dropdown-item">تقرير الضريبة على القيمه المضافة </a></li> --}}





    										</ul>
    									</li>
    								</ul>
    							</nav>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- Mobile Menu end -->
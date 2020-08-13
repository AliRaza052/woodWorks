@extends('admin.layouts.app')

@section('content')


<ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                </ul>
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">                                    
                                    <h6 class="element-header">Admin Dashboard</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-3 col-xxxl-3"><a class="element-box el-tablo" href="#">
                                                    <div class="label">Total Orders</div>
                                                    <div class="value">0</div>
                                                    <!-- <div class="trending trending-up-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div> -->
                                                </a></div>
                                            <div class="col-sm-3 col-xxxl-3"><a class="element-box el-tablo" href="#">
                                                    <div class="label">Total Products</div>
                                                    <div class="value"></div>
                                                    <!-- <div class="trending trending-down-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-down"></i></div> -->
                                                </a></div>
                                            <div class="col-sm-3 col-xxxl-3"><a class="element-box el-tablo" href="#">
                                                    <div class="label">Users</div>
                                                    <div class="value"></div>
                                                    <!-- <div class="trending trending-down-basic"><span>9%</span><i
                                                            class="os-icon os-icon-arrow-down"></i></div> -->
                                                </a></div>
                                            <div class="col-sm-3 col-xxxl-3"><a class="element-box el-tablo"
                                                    href="#">
                                                    <div class="label">Active orders</div>
                                                    <div class="value">0</div>
                                                    <!-- <div class="trending trending-up-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div> -->
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
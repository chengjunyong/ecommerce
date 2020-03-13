@extends('admin.layout')

@section('layout')

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Orders
                                    <small>Homeu Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Manage Order</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Product</th>
                                        <th>Payment Method</th>
                                        <th>Order Status</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#51240</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/25.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/13.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/16.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Dec 10,20</td>
                                        <td>Rm 54671</td>
                                    </tr>
                                    <tr>
                                        <td>#51241</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/12.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/3.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Feb 15,20</td>
                                        <td>Rm 2136</td>
                                    </tr>
                                    <tr>
                                        <td>#51242</td>
                                        <td><img src="../assets/images/electronics/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Mar 27,20</td>
                                        <td>Rm 8791</td>
                                    </tr>
                                    <tr>
                                        <td>#51243</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/8.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Sep 1,20</td>
                                        <td>Rm 139</td>
                                    </tr>
                                    <tr>
                                        <td>#51244</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/jewellery/pro/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/pro/06.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>May 20,20</td>
                                        <td>Rm 4678</td>
                                    </tr>
                                    <tr>
                                        <td>#51245</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jan 14,20</td>
                                        <td>Rm 6791</td>
                                    </tr>
                                    <tr>
                                        <td>#51246</td>
                                        <td><img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Apr 22,20</td>
                                        <td>Rm 976</td>
                                    </tr>
                                    <tr>
                                        <td>#51247</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/21.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/8.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Mar 26,20</td>
                                        <td>Rm 3212</td>
                                    </tr>
                                    <tr>
                                        <td>#51248</td>
                                        <td><img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Feb 29,20</td>
                                        <td>Rm 6719</td>
                                    </tr>
                                    <tr>
                                        <td>#51249</td>
                                        <td><img src="../assets/images/electronics/product/17.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-secondary">Processing</span></td>
                                        <td>Sep 2,20</td>
                                        <td>Rm 9765</td>
                                    </tr>
                                    <tr>
                                        <td>#51250</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Dec 10,20</td>
                                        <td>Rm 9706</td>
                                    </tr>
                                    <tr>
                                        <td>#51251</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/22.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Feb 15,20</td>
                                        <td>Rm 1500</td>
                                    </tr>
                                    <tr>
                                        <td>#51252</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/3.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Mar 27,20</td>
                                        <td>Rm 20.97</td>
                                    </tr>
                                    <tr>
                                        <td>#51253</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Mar 30,20</td>
                                        <td>Rm 3478</td>
                                    </tr>
                                    <tr>
                                        <td>#51254</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Apr 5,20</td>
                                        <td>Rm 9672</td>
                                    </tr>
                                    <tr>
                                        <td>#51255</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 8,20</td>
                                        <td>Rm 59.76</td>
                                    </tr>
                                    <tr>
                                        <td>#51256</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/7.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Apr 12,20</td>
                                        <td>Rm 37.60</td>
                                    </tr>
                                    <tr>
                                        <td>#51257</td>
                                        <td>
                                            <img src="../assets/images/furniture/product/16.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Apr 15,20</td>
                                        <td>Rm 86.53</td>
                                    </tr>
                                    <tr>
                                        <td>#51258</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 20,20</td>
                                        <td>Rm 97.06</td>
                                    </tr>
                                    <tr>
                                        <td>#51259</td>
                                        <td><img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">processing</span></td>
                                        <td>Apr 24,20</td>
                                        <td>Rm 16.78</td>
                                    </tr>
                                    <tr>
                                        <td>#51260</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/22.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Apr 27,20</td>
                                        <td>Rm 86.00</td>
                                    </tr>
                                    <tr>
                                        <td>#51261</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>May 1,20</td>
                                        <td>Rm 17.84</td>
                                    </tr>
                                    <tr>
                                        <td>#51262</td>
                                        <td><img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>May 8,20</td>
                                        <td>Rm 35.07</td>
                                    </tr>
                                    <tr>
                                        <td>#51263</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jun 4,20</td>
                                        <td>Rm 5.67</td>
                                    </tr>
                                    <tr>
                                        <td>#51264</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">processing</span></td>
                                        <td>Apr 30,20</td>
                                        <td>Rm 6.134</td>
                                    </tr>
                                    <tr>
                                        <td>#51265</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/7.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Jul 16,20</td>
                                        <td>Rm 74.12</td>
                                    </tr>
                                    <tr>
                                        <td>#51266</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Aug 25,20</td>
                                        <td>Rm 16.70</td>
                                    </tr>
                                    <tr>
                                        <td>#51267</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Sep 7,20</td>
                                        <td>Rm 9.706</td>
                                    </tr>
                                    <tr>
                                        <td>#51268</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Oct 19,20</td>
                                        <td>Rm 67.04</td>
                                    </tr>
                                    <tr>
                                        <td>#51269</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 12,20</td>
                                        <td>Rm 867</td>
                                    </tr>
                                    <tr>
                                        <td>#51270</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Sep 13,20</td>
                                        <td>Rm 70.8</td>
                                    </tr>
                                    <tr>
                                        <td>#51271</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Aug 24,20</td>
                                        <td>Rm 70.41</td>
                                    </tr>
                                    <tr>
                                        <td>#51272</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Nov, 6,20</td>
                                        <td>Rm 86.7</td>
                                    </tr>
                                    <tr>
                                        <td>#51273</td>
                                        <td><img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Dec 17,20</td>
                                        <td>Rm 19.47</td>
                                    </tr>
                                    <tr>
                                        <td>#51274</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Nov 29,20</td>
                                        <td>Rm 7.48</td>
                                    </tr>
                                    <tr>
                                        <td>#51275</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jan 11,20</td>
                                        <td>Rm 8.67</td>
                                    </tr>
                                    <tr>
                                        <td>#51276</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Feb 12,20</td>
                                        <td>Rm 8.607</td>
                                    </tr>
                                    <tr>
                                        <td>#51277</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Apr 2,20</td>
                                        <td>Rm 347</td>
                                    </tr>
                                    <tr>
                                        <td>#51278</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>May 5,20</td>
                                        <td>Rm 100</td>
                                    </tr>
                                    <tr>
                                        <td>#51279</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">processing</span></td>
                                        <td>Jun 8,20</td>
                                        <td>Rm 546.01</td>
                                    </tr>
                                    <tr>
                                        <td>#51280</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Jan 19,20</td>
                                        <td>Rm 7.154</td>
                                    </tr>
                                    <tr>
                                        <td>#51281</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/2.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Apr 30,20</td>
                                        <td>Rm 58.47</td>
                                    </tr>
                                    <tr>
                                        <td>#51282</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Jun 6,20</td>
                                        <td>Rm 370.0</td>
                                    </tr>
                                    <tr>
                                        <td>#51283</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Aug 10,20</td>
                                        <td>Rm 9.76</td>
                                    </tr>
                                    <tr>
                                        <td>#51284</td>
                                        <td><img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded"></td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Sep 16,20</td>
                                        <td>Rm 79.14</td>
                                    </tr>
                                    <tr>
                                        <td>#51285</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Jun 7,20</td>
                                        <td>Rm 15.00</td>
                                    </tr>
                                    <tr>
                                        <td>#51286</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Apr 11,20</td>
                                        <td>Rm 94.26</td>
                                    </tr>
                                    <tr>
                                        <td>#51287</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Mar 26,20</td>
                                        <td>Rm 78.86</td>
                                    </tr>
                                    <tr>
                                        <td>#51288</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/pro/4.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/pro/5.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Jun 24,20</td>
                                        <td>Rm 67.20</td>
                                    </tr>
                                    <tr>
                                        <td>#51289</td>
                                        <td>
                                            <img src="../assets/images/electronics/product/24.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Apr 12,20</td>
                                        <td>Rm 96.71</td>
                                    </tr>
                                    <tr>
                                        <td>#51290</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/20.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/23.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>Jul 20,20</td>
                                        <td>Rm 86.7</td>
                                    </tr>
                                    <tr>
                                        <td>#51291</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/7.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/4.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Aug 9,20</td>
                                        <td>Rm 867</td>
                                    </tr>
                                    <tr>
                                        <td>#51292</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/furniture/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/furniture/product/19.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Jan 10,20</td>
                                        <td>Rm 16.78</td>
                                    </tr>
                                    <tr>
                                        <td>#51293</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/25.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/13.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/16.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Sep 5,20</td>
                                        <td>Rm 57.14</td>
                                    </tr>
                                    <tr>
                                        <td>#51294</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/electronics/product/11.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/electronics/product/9.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>Nov 16,20</td>
                                        <td>Rm 74.45</td>
                                    </tr>
                                    <tr>
                                        <td>#51294</td>
                                        <td>
                                            <img src="../assets/images/flower/blog/insta/8.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        </td>
                                        <td><span class="badge badge-danger">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>Apr 12,20</td>
                                        <td>Rm 864</td>
                                    </tr>
                                    <tr>
                                        <td>#51295</td>
                                        <td>
                                            <div class="d-flex">
                                                <img src="../assets/images/fashion/product/19.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                                <img src="../assets/images/fashion/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Cash On Delivery</span></td>
                                        
                                        <td><span class="badge badge-primary">Shipped</span></td>
                                        <td>Dec 19,20</td>
                                        <td>Rm 19.78</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection
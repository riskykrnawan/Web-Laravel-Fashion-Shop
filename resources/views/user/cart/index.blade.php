@extends('user.layout')
@section('content.user')
@include('components.navbar')
<div class="container">
    <main class="">
        <!-- Breadcrumb Start -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb bg-white mb-5 py-3 px-3">
                        <a class="breadcrumb-item text-dark" href="#">Home</a>
                        <a class="breadcrumb-item text-dark" href="#">Products</a>
                        <span class="breadcrumb-item active">Shopping Cart</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Cart Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <tr>
                                <td class="align-middle"><img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/11/27/377509d6-33c2-43cd-bbdf-64ab48bd8cbf.png" alt="" style="width: 50px;"> Product Name</td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle m-auto">
                                    <div class="d-flex align-items-center justify-content-center">
                                      <div class="input-group quantity" style="width: 130px;">
                                          <div class="input-group-btn">
                                              <button class="btn btn-warning rounded-0 btn-minus">
                                                  <i class="fa fa-minus"></i>
                                              </button>
                                          </div>
                                          <input type="text" class="form-control bg-light border-0 text-center" value="1">
                                          <div class="input-group-btn">
                                              <button class="btn btn-warning rounded-0 btn-plus">
                                                  <i class="fa fa-plus"></i>
                                              </button>
                                          </div>
                                      </div>
                                </td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger rounded-0"><i class="fa fa-times"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <form class="mb-5" action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 rounded-0" placeholder="Coupon Code">
                            <div class="input-group-append">
                                <button class="btn btn-warning rounded-0">Apply Coupon</button>
                            </div>
                        </div>
                    </form>
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-light pe-3">Cart Summary</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>$160</h5>
                            </div>
                            <button class="btn btn-block btn-warning rounded-0 font-weight-bold my-3 py-3">Proceed To Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
        </main>
      </div>
    </div>
@endsection
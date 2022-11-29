<div class="py-3 py-md-4 checkout">
    <div class="container">
        <h4>Checkout</h4>
        <hr>
        @if( $this->totalProductAmount !='0')
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        Tổng giá sản phẩm :
                        <span class="float-end"><h1 style="color: #3f81eb !important">${{ $this->totalProductAmount }}</h1></span>
                    </h4>
                    <hr>
                    <small>* Sản phẩm sẽ được gửi đi sau 3 - 5 ngày.</small>
                    <br/>
                    <small>* Đã bao gồm thuế và tất cả chi phí phát sinh !</small>
                </div>
            </div>
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        Thông tin người nhận cơ bản:
                    </h4>
                    <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input type="text" wire:model="full_name" class="form-control" placeholder="Enter Full Name" />
                                @error('full_name') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone Number</label>
                                <input type="number" wire:model="phone" class="form-control" placeholder="Enter Phone Number" />
                                @error('phone') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Address</label>
                                <input type="email" wire:model="email" class="form-control" placeholder="Enter Email Address" />
                                @error('email') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Pin-code (Zip-code)</label>
                                <input type="number" wire:model="pin_code" class="form-control" placeholder="Enter Pin-code" />
                                @error('pin_code') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Full Address</label>
                                <textarea wire:model="address" class="form-control" rows="2"></textarea>
                                @error('address') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Chọn hình thức thanh toán: </label>
                                <div class="d-md-flex align-items-start">
                                    <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Thanh toán khi nhận hàng :</button>
                                        <button class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Thanh toán Online :</button>
                                    </div>
                                    <div class="tab-content col-md-9" id="v-pills-tabContent">
                                        <div class="tab-pane active show fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                            <h6>Thanh toán khi nhận hàng :</h6>
                                            <hr/>
                                            <button type="button" wire:click="codOrder" class="btn btn-primary">Lập hóa đơn (Thanh toán khi nhận hàng)</button>

                                        </div>
                                        <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                            <h6>Thanh toán Online :</h6>
                                            <hr/>
                                            <button type="button" wire:click="codOrder" class="btn btn-warning">Thanh toán ngay (Thanh toán Online)</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>

        </div>
        @else
            <div class="card card-body shadow text-center">
                <h3>No items in cart to checkout !!</h3></br>
                <a href="{{ url('/collections')}}" class="btn btn-warning">Shop now</a>

            </div>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

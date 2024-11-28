<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/imgs/theme/favicon.svg') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css?v=5.3') }}" />
</head>

<body>
    <div class="invoice invoice-content invoice-5">
        <div class="back-top-home hover-up mt-30 ml-30">
            <a class="hover-up" href="{{ asset('index.html') }}"><i class="fi-rs-home mr-5"></i> Homepage</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner">
                        <div class="invoice-info" id="invoice_wrapper">
                            <div class="invoice-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="logo d-flex align-items-center">
                                            <a href="{{ asset('index.html') }}" class="mr-20"><img src="{{ asset('frontend/imgs/theme/favicon.svg') }}" alt="logo" /></a>
                                            <div class="text">
                                                <strong class="text-brand">NestMart Inc</strong> <br />
                                                205 North, Suite 810, Chicago, USA
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h2>INVOICE</h2>
                                        <h6>Order Number: <span class="text-brand">{{ $order->order_number }}</span></h6>
                                        <h6>Payment method: <span class="text-brand">{{ $order->payment_method }}</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-banner">
                                <img src="{{ asset('frontend/imgs/invoice/banner.png') }}" alt="">
                            </div>
                            <div class="invoice-center">
                                <div class="table-responsive">
                                    <table class="table table-striped invoice-table">
                                        <thead class="bg-active">
                                            <tr>
                                                <th>Item Name</th>
                                                <th class="text-center">Unit Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order_items as $row)
                                            <tr>
                                                <td>
                                                    <div class="item-desc-1">
                                                        <span>{{ $row->product->name }}</span>
                                                        <!-- <small>SKU: FWM15VKT</small> -->
                                                    </div>
                                                </td>
                                                <td class="text-center">₹{{ $row->unit_price }}</td>
                                                <td class="text-center">{{ $row->qty }}</td>
                                                <td class="text-right">₹{{ $row->amount }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">SubTotal</td>
                                                <td class="text-right">₹{{ $order->total_amount_without_SGST_CGST() }} <br>{{ $order->getTotalAmountInWords()}}</td>                                                
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">CGST</td>
                                                <td class="text-right">₹{{ $order->calculaterCGST()}} <br>{{ $order->calculaterCGSTInWords() }} </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">SGST</td>
                                                <td class="text-right">₹{{ $order->calculaterSGST()}} <br> {{ $order->calculaterSGSTInWords() }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">TAX</td>
                                                <td class="text-right">{{ $order->calculate_SGST_CGST() }} <br>{{ $order->convertTaxAmountInWords()}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">Grand Total</td>
                                                <td class="text-right f-w-600">{{ $order->total_amount_with_SGST_CGST()}} <br>{{ $order->total_amount_with_SGST_CGSTInWords() }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom pb-80">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-15">Invoice Infor</h6>
                                        <p class="font-sm">
                                            <strong>Issue date:</strong> 20 march, 2022<br />
                                            <strong>Invoice To:</strong> NestMart Inc<br />
                                            <strong>Swift Code:</strong> BFTV VNVXS
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h6 class="mb-15">Total Amount</h6>
                                        <h3 class="mt-0 mb-0 text-brand">₹{{ $order->total_amount_with_SGST_CGST()}} <br>{{ $order->total_amount_with_SGST_CGSTInWords() }}</h3>
                                        <p class="mb-0 text-muted">Taxes Included</p>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="hr mt-30 mb-30"></div>
                                    <p class="mb-0 text-muted"><strong>Note:</strong>This is computer generated receipt and does not require physical signature.</p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a href="{{ asset('javascript:window.print()') }}" class="btn btn-lg btn-custom btn-print hover-up"> <img src="{{ asset('frontend/imgs/theme/icons/icon-print.svg') }}" alt="" /> Print </a>
                            <a id="invoice_download_btn" class="btn btn-lg btn-custom btn-download hover-up"> <img src="{{ asset('frontend/imgs/theme/icons/icon-download.svg') }}" alt="" /> Download </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Invoice JS -->
    <script src="{{ asset('frontend/js/invoice/jspdf.min.js') }}"></script>
    <script src="{{ asset('frontend/js/invoice/invoice.js') }}"></script>
</body>

</html>
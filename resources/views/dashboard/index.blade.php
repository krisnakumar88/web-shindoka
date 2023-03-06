@extends('template')

@section('body')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Dashboard</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
                {{-- <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
                <i class="fe fe-download mr-2"></i> Import
            </button>
            <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
                <i class="fe fe-filter mr-2"></i> Filter
            </button>
            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                <i class="fe fe-download-cloud mr-2"></i> Download Report
            </button> --}}
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    @can('isAdmin')
        <div class="row row-sm">
            <div class="col-xl-3 col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h3 class="main-content-label">Dojo</h3>
                    </div>
                    <div class="card-body text-center item-user">
                        <div class="profile-pic">
                            <div class="profile-pic-img">
                                <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
                                <img src="{{ asset('file/shindoka-logo.png') }}" class="rounded-circle" width="200" alt="user">
                            </div>
                            <a href="#" class="text-dark">
                                <h5 class="mt-3 mb-0 font-weight-semibold">{{ $dojo->nama_dojo }}</h5>
                            </a>
                        </div>
                    </div>
                    <ul class="item1-links nav nav-tabs  mb-0">
                        <li class="nav-item">
                            <a data-target="#profil" class="nav-link active" data-toggle="tab" role="tablist"><i
                                    class="ti-user icon1"></i> Profil Dojo</a>
                        </li>
                        <li class="nav-item">
                            <a data-target="#admin_tab" class="nav-link" data-toggle="tab" role="tablist"><i
                                    class="ti-wallet icon1"></i> Admin Dojo</a>
                        </li>
                        <li class="nav-item">
                            <a data-target="#anggota_tab" class="nav-link" data-toggle="tab" role="tablist"><i
                                    class="ti-credit-card icon1"></i> Anggota Dojo</a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profil" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">My Dojo</label>
                                </div>
                                <div class="py-2">
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_dojo">Nama Dojo</label> <input type="text"
                                                class="bg-white form-control" placeholder="" value="{{ $dojo->nama_dojo }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Pengurus Cabang</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="{{ $dojo->pengcap->nama_pengcap }}" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Penanggung Jawab</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="{{ $dojo->pic }}" readonly> </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Pengurus Daerah</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="{{ $pengda->nama_pengda }}" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            <label for="country">Alamat</label>
                                            <textarea id="" cols="30" rows="6" class="bg-white form-control" readonly style="resize: none;">{{ $dojo->lokasi }}</textarea>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3" id="lang">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="admin_tab" role="tabpanel">
                                <div class="d-flex mb-4 ">
                                    <label class="main-content-label my-auto">Admin</label>

                                </div>
                                {{-- <div class="table-responsive">
                                    <table class="table border text-md-nowrap text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom">
                                                <th scope="row">#34350</th>
                                                <td><img src="{{ asset('assets/img/pngs/17.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Plastic Outdoor Chair</td>
                                                <td>1</td>
                                                <td>$200</td>
                                                <td class="text-right">$200</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <th scope="row">#34351</th>
                                                <td><img src="{{ asset('assets/img/pngs/18.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Black Digital smart watch</td>
                                                <td>2</td>
                                                <td>$500</td>
                                                <td class="text-right">$500</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <th scope="row">#34352</th>
                                                <td><img src="{{ asset('assets/img/pngs/15.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Women Pink Heels Sandal</td>
                                                <td>2</td>
                                                <td>$400</td>
                                                <td class="text-right">$400</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#34353</th>
                                                <td><img src="{{ asset('assets/img/pngs/19.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Apple iPhone(Black, 128 GB)</td>
                                                <td>2</td>
                                                <td>$800</td>
                                                <td class="text-right">$800</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> --}}
                                <div class="table-responsive">
                                    <table class="table border text-md-nowrap text-nowrap" id="tableAdmin">
                                        <thead>
                                            <tr>
                                                <th class="wd-20p">Nama</th>
                                                <th class="wd-20p">Username</th>
                                                <th class="wd-20p">Email</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $item)
                                                <tr>

                                                    <td class="">{{ $item->user->name }}</td>
                                                    <td>{{ $item->user->username }}<i class=""></i></td>
                                                    <td>{{ $item->user->email }}</td>




                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="anggota_tab" role="tabpanel">
                                <div class="d-flex mb-4">
                                    <label class="main-content-label my-auto">Anggota</label>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table border text-md-nowrap text-nowrap" id="tableAnggota">
                                        <thead>
                                            <tr>
                                                <th class="wd-20p">Nama</th>
                                                {{-- <th class="wd-20p text-center">Alamat</th> --}}
                                                <th class="wd-20p">No Hp</th>
                                                <th class="wd-20p">Tahun Masuk</th>
                                                <th class="wd-20p">Sabut Terakhir</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($anggota as $item)
                                                <tr>

                                                    <td class="">{{ $item->user->name }}</td>
                                                    <td>{{ $item->no_hp }}<i class=""></i></td>
                                                    <td>{{ $item->tahun_masuk }}</td>
                                                    <td>{{ $item->sabut_terakhir }}</td>


                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="myaddres" role="tabpanel">
                                <button type="button" class="btn btn-round btn-success mb-3"><i
                                        class="fe fe-plus-circle  mr-2"></i>Add New Address</button>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="card custom-card border mb-lg-0">
                                            <div class="card-header pb-3">
                                                <h6 class="mb-0"><i class="ti-home mr-2"></i>Default Address</h6>
                                            </div>
                                            <div class="card-body">
                                                <p>+91 08023310451</p>
                                                <p>3-15/10/403 Newark, Street no 5, Next To Pizza Hut, Bangalore, Karnataka,
                                                    560003, India.</p>
                                                <p class="mb-0">soniataylor344@example.com</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-block btn-primary mb-1"><i
                                                                class="ti ti-pencil"></i></button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button"
                                                            class="btn btn-block btn-outline-primary mb-1"><i
                                                                class="ti ti-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="card custom-card border mb-0">
                                            <div class="card-header pb-3">
                                                <h6 class="mb-0"><i class="ti-home mr-2"></i>Office Address</h6>
                                            </div>
                                            <div class="card-body">
                                                <p>+91 02228346362</p>
                                                <p>2-15A-12 , Steriling Chambers, S Radhakrishnana Marg, J B Nagar, Andheri
                                                    (west), Mumbai , Maharashtra</p>
                                                <p class="mb-0">john54@gmail.com</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-block btn-primary mb-1"><i
                                                                class="ti ti-pencil"></i></button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button"
                                                            class="btn btn-block btn-outline-primary mb-1"><i
                                                                class="ti ti-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="trackorder" role="tabpanel">
                                <h6 class="mb-4">ORDER ID: <b>OD45345345435</b></h6>
                                <div class="card">
                                    <div class="card-body row">
                                        <div class="col-sm-12 col-md-3 mb-3 mb-md-0"> <strong>Estimated Delivery time:</strong>
                                            <br>29 Dec 2020
                                        </div>
                                        <div class="col-sm-12 col-md-3 mb-3 mb-md-0"> <strong>Shipping BY:</strong> <br>
                                            BLUEDART, | <i class="fa fa-phone"></i> +1598675986 </div>
                                        <div class="col-sm-12 col-md-3 mb-3 mb-md-"> <strong>Status:</strong> <br> Picked by
                                            the courier </div>
                                        <div class="col-sm-12 col-md-3"> <strong>Tracking #:</strong> <br> BD045903594656
                                        </div>
                                    </div>
                                </div>
                                <div class="track mb-5">
                                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span
                                            class="text d-none d-md-block">Order confirmed</span> </div>
                                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span
                                            class="text d-none d-md-block"> Picked by courier</span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span
                                            class="text d-none d-md-block"> On the way </span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span
                                            class="text d-none d-md-block">Ready for pickup</span> </div>
                                </div>
                                <br>
                                <div class="row mt-3">
                                    <div class="col-xl-4">
                                        <figure class="itemside mb-3">
                                            <div class="aside"><img src="{{ asset('assets/img/pngs/19.png') }}"
                                                    class="img-sm product-image border" alt="product-img"></div>
                                            <figcaption class="info align-self-center">
                                                <p class="title mb-1">Apple iPhone(Black, 128 GB) <br> 8GB RAM</p> <span
                                                    class="text-muted">$950 </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-4">
                                        <figure class="itemside mb-3">
                                            <div class="aside"><img src="{{ asset('assets/img/pngs/16.png') }}"
                                                    class="img-sm product-image border" alt="product-img"></div>
                                            <figcaption class="info align-self-center">
                                                <p class="title mb-1">Designer Hand Decorative <br> flower Pot </p><span
                                                    class="text-muted">$850 </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xl-4">
                                        <figure class="itemside mb-3">
                                            <div class="aside"><img src="{{ asset('assets/img/pngs/14.png') }}"
                                                    class="img-sm product-image border" alt="product-img"></div>
                                            <figcaption class="info align-self-center">
                                                <p class="title mb-1">Regular waterproof <br>(24 L) Backpack</p> <span
                                                    class="text-muted">$650 </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="whishlist" role="tabpanel">
                                <div class="d-flex mb-4">
                                    <label class="main-content-label my-auto">Wishlist</label>
                                </div>
                                <div class="table-responsive">
                                    <table class="table border text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="{{ asset('assets/img/pngs/14.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Regular waterproof (24 L) Backpack</td>
                                                <td>
                                                    <div class="handle-counter" id="handleCounter">
                                                        <button class="counter-minus btn btn-light">-</button>
                                                        <input type="text" value="2" class="">
                                                        <button class="counter-plus btn btn-light">+</button>
                                                    </div>
                                                </td>
                                                <td>$10</td>
                                                <td>$500</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary mb-1 mr-1"><i
                                                            class="ti-shopping-cart mr-2"></i>Move to cart</button>
                                                    <button type="button" class="btn btn-danger mb-1"><i
                                                            class="ti-trash mr-2"></i>Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><img src="{{ asset('assets/img/pngs/16.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Designer Hand Decorative flower Pot</td>
                                                <td>
                                                    <div class="handle-counter" id="handleCounter1">
                                                        <button class="counter-minus btn btn-light">-</button>
                                                        <input type="text" value="2" class="">
                                                        <button class="counter-plus btn btn-light">+</button>
                                                    </div>
                                                </td>
                                                <td>$20</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary mb-1 mr-1"><i
                                                            class="ti-shopping-cart mr-2"></i>Move to cart</button>
                                                    <button type="button" class="btn btn-danger mb-1"><i
                                                            class="ti-trash mr-2"></i>Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><img src="{{ asset('assets/img/pngs/19.png') }}"
                                                        class="img-sm product-image border" alt="product-img"></td>
                                                <td>Apple iPhone(Black, 128 GB) 8GB RAM</td>
                                                <td>
                                                    <div class="handle-counter" id="handleCounter2">
                                                        <button class="counter-minus btn btn-light">-</button>
                                                        <input type="text" value="2" class="">
                                                        <button class="counter-plus btn btn-light">+</button>
                                                    </div>
                                                </td>
                                                <td>$30</td>
                                                <td>$300</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary mb-1 mr-1"><i
                                                            class="ti-shopping-cart mr-2"></i>Move to cart</button>
                                                    <button type="button" class="btn btn-danger mb-1"><i
                                                            class="ti-trash mr-2"></i>Remove</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wallet" role="tabpanel">
                                <div class="border p-4 text-center">
                                    <span class="text-uppercase tx-14 mt-4 text-muted">Available</span>
                                    <h1 class="my-3">$245465</h1>
                                    <a href="#" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add Money</a>
                                </div>
                                <ul class="list-group tx-13">
                                    <li class="list-group-item border-top-0 pd-x-0 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent mr-3"><i
                                                    class="fe fe-arrow-down-left text-primary"></i></span>
                                            <span class="my-auto font-weight-semibold tx-15">Received</span>
                                        </div>
                                        <span class="font-weight-semibold my-auto text-success tx-15">+0.00004564</span>
                                    </li>
                                    <li class="list-group-item pd-x-0 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent mr-3"><i
                                                    class="fe fe-arrow-up-right text-primary"></i></span>
                                            <span class="my-auto font-weight-semibold tx-15">Sent</span>
                                        </div>
                                        <span class="font-weight-semibold my-auto text-danger tx-15">-0.03445436</span>
                                    </li>
                                    <li class="list-group-item pd-x-0 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent mr-3"><i
                                                    class="fe fe-arrow-down-left text-primary"></i></span>
                                            <span class="my-auto font-weight-semibold tx-15">Received</span>
                                        </div>
                                        <span class="font-weight-semibold my-auto text-success tx-15">+4.2543</span>
                                    </li>
                                    <li class="list-group-item pd-x-0 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent mr-3"><i
                                                    class="fe fe-arrow-up-right text-primary"></i></span>
                                            <span class="my-auto font-weight-semibold tx-15">Sent</span>
                                        </div>
                                        <span class="font-weight-semibold my-auto text-danger tx-15">+0.00255423</span>
                                    </li>
                                    <li class="list-group-item pd-x-0 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <span class="crypto-icon bg-primary-transparent mr-3"><i
                                                    class="fe fe-arrow-down-left text-primary"></i></span>
                                            <span class="my-auto font-weight-semibold tx-15">Received</span>
                                        </div>
                                        <span class="font-weight-semibold my-auto text-success tx-15">-0.02434525</span>
                                    </li>
                                </ul>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row row-sm">
            <div class="col-sm-12 col-lg-12 col-xl-12">

                <!--Row-->
                {{-- <div class="row row-sm  mt-lg-4">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <div class="card bg-primary custom-card card-box">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                <h4 class="d-flex  mb-3">
                                    <span class="font-weight-bold text-white ">Sonia
                                        Taylor!</span>
                                </h4>
                                <p class="tx-white-7 mb-1">You have two projects to finish, you
                                    had
                                    completed <b class="text-warning">57%</b> from your montly
                                    level,
                                    Keep going to your level
                            </div>
                            <img src="{{ asset('/assets/img/pngs/work3.png') }}" alt="user-img"
                                class="wd-200">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
                <!--Row -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24"
                                            width="24">
                                            <g>
                                                <rect height="14" opacity=".3" width="14" x="5"
                                                    y="5" />
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                    <g>
                                                        <path
                                                            d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
                                                        <rect height="5" width="2" x="7" y="12" />
                                                        <rect height="10" width="2" x="15" y="7" />
                                                        <rect height="3" width="2" x="11" y="14" />
                                                        <rect height="2" width="2" x="11" y="10" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label class="main-content-label tx-13 font-weight-bold mb-1">Total
                                            Pengurus Daerah</label>
                                        <span class="d-block tx-12 mb-0 text-muted"></span>
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold">{{ $pengda->count() }}</h4>
                                            {{-- <small><b class="text-success">55%</b> higher</small> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                            width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z"
                                                opacity=".3" />
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                        </svg>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label class="main-content-label tx-13 font-weight-bold mb-1">Pengurus Cabang</label>
                                        {{-- <span class="d-block tx-12 mb-0 text-muted">Employees joined this
                                    month</span> --}}
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold">{{ $pengcab->count() }}</h4>
                                            {{-- <small><b class="text-success">5%</b> Increased</small> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z"
                                                opacity=".3" />
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z" />
                                        </svg>
                                    </div>
                                    <div class="card-item-title  mb-2">
                                        <label class="main-content-label tx-13 font-weight-bold mb-1">Total
                                            Dojo</label>
                                        {{-- <span class="d-block tx-12 mb-0 text-muted">Previous month vs this
                                    months</span> --}}
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold">{{ $dojo->count() }}</h4>
                                            {{-- <small><b class="text-danger">12%</b> decrease</small> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="card-item">
                                    <div class="card-item-icon card-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                            width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z"
                                                opacity=".3" />
                                            <path
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                        </svg>
                                    </div>
                                    <div class="card-item-title mb-2">
                                        <label class="main-content-label tx-13 font-weight-bold mb-1">Total Anggota</label>
                                        {{-- <span class="d-block tx-12 mb-0 text-muted">Employees joined this
                                    month</span> --}}
                                    </div>
                                    <div class="card-item-body">
                                        <div class="card-item-stat">
                                            <h4 class="font-weight-bold">{{ $anggota->count() }}</h4>
                                            {{-- <small><b class="text-success">5%</b> Increased</small> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card custom-card mg-b-20">
                                    
                                    <div class="card-body">
                                        <div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
                                            <label class="main-content-label tx-13 font-weight-bold mb-4">Tabel Pengurus Daerah</label>
            
            
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="tablePengda">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-20p">Nama Pengurus Daerah</th>
                                                        <th class="wd-20p">Penanggung Jawab</th>
                                                        <th class="wd-20p text-center">Alamat</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pengda as $item)
                                                        <tr>
                                                            <td class="">{{ $item->nama_pengda }}</td>
                                                            <td>{{ $item->pic }}<i class=""></i></td>
                                                            <td class="text-center">
                                                                <textarea class="form-control" readonly cols="30" rows="2">{{ $item->lokasi }}</textarea>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
            
            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card custom-card mg-b-20">
                                    <div class="card-body">
                                        <div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
                                            <label class="main-content-label tx-13 font-weight-bold mb-4">Tabel Pengurus Cabang</label>
            
            
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="tablePengcab">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-20p">Nama Pengurus Cabang</th>
                                                        <th class="wd-20p">Penanggung Jawab</th>
                                                        <th class="wd-20p text-center">Alamat</th>
                                                        <th class="wd-20p">Pengurus Daerah</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pengcab as $item)
                                                        <tr>
                                                            <td class="">{{ $item->nama_pengcap }}</td>
                                                            <td>{{ $item->pic }}<i class=""></i></td>
                                                            <td class="text-center">
                                                                <textarea class="form-control" readonly cols="30" rows="2">{{ $item->lokasi }}</textarea>
                                                            </td>
                                                            <td>
                                                                {{ $item->pengda->nama_pengda }}
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
            
            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card custom-card mg-b-20">
                                    <div class="card-body">
                                        <div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
                                            <label class="main-content-label tx-13 font-weight-bold mb-4">Tabel Dojo</label>
            
            
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="tableDojo">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-20p">Nama Dojo</th>
                                                        <th class="wd-20p">Penanggung Jawab</th>
                                                        <th class="wd-20p text-center">Alamat</th>
                                                        <th class="wd-20p">Pengurus Cabang</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dojo as $item)
                                                        <tr>
                                                            <td class="">{{ $item->nama_dojo }}</td>
                                                            <td>{{ $item->pic }}<i class=""></i></td>
                                                            <td class="text-center">
                                                                <textarea class="form-control" readonly cols="30" rows="2">{{ $item->lokasi }}</textarea>
                                                            </td>
                                                            <td>
                                                                {{ $item->pengcap->nama_pengcap }}
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
            
            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card custom-card mg-b-20">
                                    <div class="card-body">
                                        <div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
                                            <label class="main-content-label tx-13 font-weight-bold mb-4">Tabel Anggota</label>
            
            
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="tableAnggota">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-20p">Nama</th>
                                                        {{-- <th class="wd-20p text-center">Alamat</th> --}}
                                                        <th class="wd-20p">No Hp</th>
                                                        <th class="wd-20p">Tahun Masuk</th>
                                                        <th class="wd-20p">Sabut Terakhir</th>
            
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($anggota as $item)
                                                        <tr>
            
                                                            <td class="">{{ $item->user->name }}</td>
                                                            <td>{{ $item->no_hp }}<i class=""></i></td>
                                                            <td>{{ $item->tahun_masuk }}</td>
                                                            <td>{{ $item->sabut_terakhir }}</td>
            
                                                            
                                                        </tr>
                                                    @endforeach
            
            
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--End row-->

                <!--row-->

            </div><!-- col end -->

        </div>
    @endcan
    <!--Row-->
    <!-- Row end -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#tableAnggota').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#tableDojo').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#tablePengda').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#tablePengcab').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            



        });
    </script>
@endsection

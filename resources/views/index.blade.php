@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-marketing d-table w-100" style="background: url('images/marketing/marketing-shape.png')" id="home">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-7 col-md-7 text-center">
                        <img src="images/marketing/marketing.png" class="img-fluid" style="max-height: 400px" alt="">

                        <div class="title-heading mt-0 mt-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h1 class="heading mb-3">Social Media Marketing is the Best Ever</h1>
                            <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="mt-4 pt-2">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2 mr-2">Get Started</a>
                                <a href="page-contact-one.html" class="btn btn-outline-primary mt-2"><i class="mdi mdi-phone"></i> Contact us</a>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->



        <!-- Feature Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4"> Bảng Điểm Sao Đỏ</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table id="dtBasicExample" class="table table-sm table-bordered table-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="th-sm">#</th>
                                    <th class="th-sm">Lớp</th>
                                    <th class="th-sm">Tuần Số</th>
                                    <th class="th-sm">Điểm học tập</th>
                                    <th class="th-sm">Điểm đạo đức</th>
                                    <th class="th-sm">Điểm văn thế mĩ</th>
                                    <th class="th-sm">Điểm hoạt động khác</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($diems))
                            <?php $stt=1 ?>
                                @foreach($diems as $diem)
                                    <tr>
                                        <td>{{$stt}}</td>
                                        <td>
                                             <span>Lớp  </span><span><span>{{$diem->tenlop}}</span>
                                             <ul style="margin-left: -30px">
                                                <li><span>Khối  :</span><span><span>{{$diem->lopkhoi}}</span></li>
                                             <ul>
                                        </td>
                                        <td>Tuần {{ $diem->tentuan}}</td>
                                        <td> 
                                            <span>{{ $diem->hoctap}} điểm</span>
                                            <ul style="margin-left: -30px">
                                                <li><span>Điểm trừ</span><span>{{ $diem->truhoctap*$diem->slhoctap}}</span></li>
                                                <li><span>Số lần trừ:</span><span>{{$diem->slhoctap}}</span></li>
                                            </ul>
                                        </td>

                                        <td>
                                         <span>{{ $diem->daoduc}} điểm</span>
                                            <ul style="margin-left: -30px">
                                                <li><span>Điểm trừ</span><span>{{ $diem->trudaoduc*$diem->sldaoduc}}</span></li>
                                                <li><span>Số lần trừ:</span><span>{{$diem->sldaoduc}}</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                             <span>{{ $diem->vanthe}} điểm</span>
                                            <ul style="margin-left: -30px">
                                                <li><span>Điểm trừ</span><span>{{ $diem->truvanthe*$diem->slvanthe}}</span></li>
                                                <li><span>Số lần trừ:</span><span>{{$diem->slvanthe}}</span></li>
                                            </ul>
                                        </td>
                                         <td>
                                            <span>{{ $diem->hoatdongkhac}} điểm</span>
                                            <ul style="margin-left: -30px">
                                                <li><span>Điểm trừ:</span><span>{{ $diem->truhoatdongkhac*$diem->slhoatdongkhac}}</span></li>
                                                <li><span>Số lần trừ:</span><span>{{$diem->slhoatdongkhac}}</span></li>
                                            </ul>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                <?php $stt++ ?>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="col-12 mt-4 pt-2 text-center">
                        <a href="{{ route('export') }}" class="btn btn-primary">Xuất File Excel </a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <img src="images/illustrator/youtube-media.svg" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-lg-5">
                            <h4 class="title mb-4">A better compose with landrick marketing</h4>
                            <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Feature End -->

@stop

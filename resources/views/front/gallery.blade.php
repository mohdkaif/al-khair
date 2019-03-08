
    <section class="medica-doctors-area bg-gray section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <img class="gallery-icon" src="{{url('front/img/icons/photos.png')}}" alt="">
                        <h2>Gallery</h2>
                        <p>Several Images related to our works</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(!empty($gallery))
                    @foreach($gallery as $gallery_item)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="centertext single-hospital-area wow fadeInUp" data-wow-delay="0.2s" height="400px">
                                <div class="doctor-thumbnail centertext" height="300px">
                                    @if($gallery_item['photo']!=null)
                                        <img src="{{url('uploads/gallery/'.$gallery_item['photo'])}}" alt="" style="height: 170px">
                                    @else
                                        <img src="{{url('uploads/avatar.png')}}" alt="" width="200" height="190" class="img-circle">
                                    @endif
                                </div>
                                <div class="doctor-meta centertext" style="align:center">
                                    <h5>{{$gallery_item['name']}}</h5>
                                    @php if(!empty($gallery_item['description'])){
                                            $desc = strlen($gallery_item['description']) > 50 ? substr($gallery_item['description'],0,50)."..." : $gallery_item['description'];
                                        }
                                        else{
                                            $desc = '';
                                        }
                                    @endphp
                                    <h6>{{!empty($desc)?$desc:''}}</h6>
                                    <a style="color:black;align:center;margin-bottom:15px" href="{{url(sprintf('detail?id=%s&type=gallery',___encrypt($gallery_item['id'])))}}" class="read-more custom">View More...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
               
            </div>
        </div>
    </section>

  
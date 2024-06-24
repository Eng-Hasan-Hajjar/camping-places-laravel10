


                     <div class="row mt-5 ref"style="border: 5px solid ;">
                            <div class="col-12">
                                <h2 class="h4 text-black mb-3"style="margin-buttom:100px;color:blue"> معرض الصور</h2>
                            </div>
                                  @foreach($images as $image)
                                        <div class="col-sm-6 col-md-4 col-lg-3 mb-6 ref">
                                            <a href="{{asset($image->image)}}" class="image-popup gal-item">
                                                <img style="width:400px; height:200px; border: 5px solid #1a8804;" src="{{asset($image->image)}}"
                                                    alt="Image" class="img-fluid"></a>
                                        </div>
                                    @endforeach
                            <div class="col-11"style="margin:20px;">
                                <h2 style="margin:5px;color:rgb(24, 117, 30)"> اذا أردت أنشئ معرض للصور من أجل هذا المكان
                                <a href="{{url('/imageview/'.$campinfo->id)}}" class="btn btn-info" style="margin:20px;background-color:#ffffff;color:blue;border: 5px solid #278207;">اضافة معرض للصور </a>
                                </h2>
                            </div>

                     </div>









































{{--@if(count($images)>0)--}}
{{--<div class="row">--}}
        {{--@foreach($images as $image )--}}
            {{--<div class="col-6">--}}
                {{--<figure >--}}
                    {{--<div  style="width: 500px;height: 300px">--}}
                        {{--<img src="{{url(checkIfImageexist($image->image))}}"  style="width: 100%;height: 100%" alt="Image" class="img-fluid">--}}
                    {{--</div>--}}
                {{--</figure>--}}
               {{--</div>--}}
{{--</div>--}}
    {{--@endforeach--}}

{{--@else--}}
    {{--<div class="alert alert-danger">--}}
        {{--there is no estates now--}}
    {{--</div>--}}
{{--@endif--}}

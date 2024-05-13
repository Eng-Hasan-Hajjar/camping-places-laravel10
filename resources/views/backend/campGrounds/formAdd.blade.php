


<div class="form-group">
    <label for="name"> الاسم  </label>
    <input type="text" name="name" class="form-control" id="name" >
</div>



<div class="form-group">
    <label for="description"> الوصف  </label>
    <input type="text" name="description" class="form-control" id="description">
</div>



<div class="form-group">
    <label for="country"> البلد  </label>
    <input type="text" name="country" class="form-control" id="country" >
</div>





<div class="form-group">
    <label for="city">المدينة   </label>
    <input type="text" name="city" class="form-control" id="city" >
</div>


<div class="form-group">
    <label for="region"> المنطقة  </label>
    <input type="text" name="region" class="form-control" id="region" >
</div>

<div class="form-group">

    {!! Form::label('cm_type', 'نوع الرحلة', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::select('cm_type', cm_type_func(), null, ['class' => 'col-md-12']) !!}
</div>

<div class="form-group">

    {!! Form::label('cm_season', 'الفصل ', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::select('cm_season', cm_season_func(), null, ['class' => 'col-md-12']) !!}

</div>




<div class="form-group">
    <label for="image" class="col-md-4 col-form-label text-md-right"> الصورة </label>
    <div class="col-md-6">
        <div style="">
            @if (isset($campGround))
                @if ($campGround->campGround_image != '')
                    <img src="{{ Request::root() . '/website/campgroundimages/' . $campGround->campGround_image }}"
                         />
                    <br>
                @endif
            @endif
            {!! Form::file('campGround_image', null, ['class' => 'form-control', 'style' => '']) !!}

            @error('campGround_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>

<div class="form-group">
    <label for="image" class="col-md-4 col-form-label text-md-right"> صورة غوغل للموقع </label>
    <div class="col-md-6">
        <div style="">
            @if (isset($campGround))
                @if ($campGround->google_image != '')
                    <img src="{{ Request::root() . '/website/campgroundgoogleimages/' . $campGround->google_image }}"
                         />
                    <br>
                @endif
            @endif
            {!! Form::file('google_image', null, ['class' => 'form-control', 'style' => '']) !!}

            @error('google_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>



<div class="form-group">
    <label for="forecast"> حالة الطقس  </label>
    <input type="text" name="forecast" class="form-control" id="forecast" >
</div>
















<!-- Submit Button -->
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit('حفظ', ['class' => 'btn btn-primary  pull-right']) !!}
        <a href="{{ url('/adminpanel/campground') }}" class="btn btn-secondary" >  أماكن التخييم  </a>
    </div>
</div>



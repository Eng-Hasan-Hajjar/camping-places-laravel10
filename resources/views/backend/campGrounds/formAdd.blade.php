


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
    <label for="image" style="padding-right: 100px;padding-bottom: 30px;"
        class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
    <div class="col-md-6">
        <div style="width:500px;height:300px; padding-bottom:30px;">
            @if (isset($estate))
                @if ($estate->campGround_image != '')
                    <img src="{{ Request::root() . '/website/estateimages/' . $estate->campGround_image }}"
                        style="width: 100%;height: 100%" />
                    <br>
                @endif
            @endif
            {!! Form::file('campGround_image', null, ['class' => 'form-control', 'style' => 'width: 100%;height: 100%']) !!}

            @error('es_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>












<!--

<div class="form-group">
{!! Form::label('campGround_image', 'Image for Estate:', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
{!! Form::file('campGround_image', null, ['class' => 'col-md-6']) !!}
</div>

-->







<!-- Submit Button -->
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit('Add Camp ground', ['class' => 'btn btn-primary  pull-right']) !!}
    </div>
</div>



<div class="form-group">
    <label for="work">العمل  </label>
    <input type="text" name="work" class="form-control" id="work" value="{{ old('work') }}">
</div>
<div class="form-group">
    <label for="hobby">الهواية  </label>
    <input type="text" name="hobby" class="form-control" id="hobby" value="{{ old('hobby') }}">
</div>
<div class="form-group">
    <label for="nationality">الجنسية  </label>
    <input type="text" name="nationality" class="form-control" id="nationality" value="{{ old('nationality') }}">
</div>
<div class="form-group">
    <label for="current_location">الموقع الحالي  </label>
    <input type="text" name="current_location" class="form-control" id="current_location" value="{{ old('current_location') }}">
</div>

<div class="form-group">
    <label for="gender"> الجنس </label>
    <select name="gender" class="form-control" id="gender">
            <option value="1">ذكر </option>
            <option value="0"> أنثى </option>
    </select>
</div>

<div class="form-group">
    <label for="num_companion"> عدد المرافقين  </label>
    <select name="num_companion" class="form-control" id="num_companion">
            <option value="0"> 0 </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>

    </select>
</div>
<div class="form-group">
    <label for="is_phobia_dark"> فوبيا الظلام   </label>
    <select name="is_phobia_dark" class="form-control" id="is_phobia_dark">
            <option value="1"> يوجد </option>
            <option value="0"> لايوجد </option>
    </select>
</div>

<div class="form-group">
    <label for="is_phobia_animals"> فوبيا الحيوانات  </label>
    <select name="is_phobia_animals" class="form-control" id="is_phobia_animals">
        <option value="1"> يوجد </option>
        <option value="0"> لايوجد </option>
    </select>
</div>

<div class="form-group">
    <label for="is_phobia_fly">  فوبيا الطيران  </label>
    <select name="is_phobia_fly" class="form-control" id="is_phobia_fly">
        <option value="1"> يوجد </option>
        <option value="0"> لايوجد </option>
    </select>
</div>

<div class="form-group">
    <label for="is_phobia_see"> فوبيا البحر   </label>
    <select name="is_phobia_see" class="form-control" id="is_phobia_see">
        <option value="1"> يوجد </option>
        <option value="0"> لايوجد </option>
    </select>
</div>

<div class="form-group">
    <label for="is_phobia_open_space">  فوبيا الأماكن المفتوحة  </label>
    <select name="is_phobia_open_space" class="form-control" id="is_phobia_open_space">
        <option value="1"> يوجد </option>
        <option value="0"> لايوجد </option>
    </select>
</div>

<div class="form-group">
    <label for="is_phobia_hights">  فوبيا المرتفعات  </label>
    <select name="is_phobia_hights" class="form-control" id="is_phobia_hights">
        <option value="1"> يوجد </option>
        <option value="0"> لايوجد </option>
    </select>
</div>

<div class="form-group">
    <label for="birthday">الميلاد  </label>
    <input type="date" name="birthday" class="form-control" id="birthday" value="{{ old('birthday') }}">
</div>


<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="direction: rtl;">
    <div class="container">
        <div class="booking p-5 bg-dark text-white">
            <div class="row g-5 align-items-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <h2 class="text-center mb-4 form-label text-white " >احجز رحلتك </h2>
                        <form method="POST" action="{{ route('reservations.store') }}">
                            @csrf
                            <div class="row g-4">
                                <!-- User Name (Disabled) -->
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="user_name" class="form-label">اسم المستخدم</label>
                                        <input type="text" name="user_name" class="form-control bg-light" id="user_name" value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                </div>

                                <!-- User ID (Disabled) -->
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="user_id" class="form-label">رقم المستخدم</label>
                                        <input type="text" name="user_id" class="form-control bg-light" id="user_id" value="{{ Auth::user()->id }}" disabled>
                                    </div>
                                </div>

                                <!-- Camp Doctor Guid with Details Button -->
                                <div class="col-md-12">
                                    <div class="form-group mb-4 d-flex align-items-center">
                                        <label for="camp_doctor_guid_id" class="form-label me-2" style="margin-left:29%" >مجموعة المكان والطبيب والدليل: </label>
                                        <div class="flex-grow-1">
                                            <select name="camp_doctor_guid_id" class="form-select bg-light" id="camp_doctor_guid_id" required>
                                                @foreach($campDoctorGuids as $cdg)
                                                    <option value="{{ $cdg->id }}">{{ $cdg->display_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('camp_doctor_guid_id')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="button" class="btn btn-outline-light ms-2" data-bs-toggle="modal" data-bs-target="#detailsModal"> التفاصيل</button>
                                    </div>
                                </div>


                                <!-- Start Date -->
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="start_date" class="form-label">تاريخ البداية</label>
                                        <input type="date" name="start_date" class="form-control bg-light" id="start_date" value="{{ old('start_date') }}" required>
                                        @error('start_date')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- End Date -->
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="end_date" class="form-label">تاريخ الانتهاء</label>
                                        <input type="date" name="end_date" class="form-control bg-light" id="end_date" value="{{ old('end_date') }}" required>
                                        @error('end_date')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3">احجز الآن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Optional: Add additional content or information in the other column -->
                <div class="col-md-0">
                    <!-- Additional content could go here, if needed -->
                </div>
            </div>
        </div>
    </div>
</div>

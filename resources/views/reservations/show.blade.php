<!-- resources/views/reservations/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">تفاصيل الحجز</div>

            <div class="card-body">
                <!-- تفاصيل الحجز -->

                <p><strong>رقم المستخدم:</strong> {{ $reservation->user_id }}</p>
                <p><strong>رقم المكان:</strong> {{ $reservation->camp_ground_id }}</p>
                <p><strong>تاريخ البداية:</strong> {{ $reservation->start_date }}</p>
                <p><strong>تاريخ الانتهاء:</strong> {{ $reservation->end_date }}</p>

                <!-- أزرار التحكم -->
                <div class="btn-group">
                    <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-primary">تعديل</a>
                    <form action="{{ route('reservations.destroy', $reservation) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
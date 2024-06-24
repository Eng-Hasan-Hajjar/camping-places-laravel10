<div class="container my-5">
    <h1 class="text-center mb-4">التقييمات والتعليقات</h1>
    <div class="row" >
        @foreach($ratings as $rating)
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="card-title mb-0">{{ $rating->user->name }}</h5>
                        <span class="text-muted ms-auto" >{{ $rating->campground->name }}</span>
                    </div>

                    <div class="mb-3" style="direction:rtl">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa{{ $i <= $rating->rating ? 's' : 'r' }} fa-star text-warning"></i>
                        @endfor
                    </div>
                    <p class="card-text"style="direction:rtl">{{ $rating->comment }}</p>
                </div>
                <div class="card-footer text-muted"style="direction:rtl">
                    {{ $rating->created_at->format('d-m-Y H:i') }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

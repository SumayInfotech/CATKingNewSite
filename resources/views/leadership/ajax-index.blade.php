<div class="stories-grid">
    @forelse($leaderShipPrograms as $program)
        @php
            $imgUrl = asset('assets/new-frontend/image/user_profile.jpg');
            if(!empty($program['image_url'])){
                $imgUrl = $program['image_url'];
            } elseif(!empty($program['file']['full'])){
                $path = $program['file']['full'];
                $imgUrl = str_starts_with($path, 'http') ? $path : 'https://catking.in/storage/'.$path;
            }

            if(!str_starts_with($imgUrl, 'http') && !empty($imgUrl)){
                $imgUrl = 'https://catking.in' . (str_starts_with($imgUrl, '/') ? '' : '/') . $imgUrl;
            }
        @endphp

        @if($type == 'mlp')
            <div class="story-card">
                <div class="story-card-inner">
                    <div class="card-front">
                        <div class="student-img-wrapper">
                            <img src="{{ $imgUrl }}" alt="{{ $program['name'] }}" class="student-img">
                        </div>
                        <h3>{{ $program['name'] }}</h3>
                        <p class="college">{{ $program['college'] }}</p>
                    </div>

                    <div class="card-back">
                        <h3>{{ $program['name'] }}</h3>
                        <p class="student-testimony">
                            {!! !empty($program['description']) ? Str::limit(strip_tags($program['description']), 120) : 'MLP provided me with practical experience that will help me a lot in my career development' !!}
                        </p>
                        <a href="{{ $program['linked_in_url'] ?? '#' }}" class="view-profile-link" target="_blank">
                            View Profile - <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" class="li-icon">
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="static-card">
                <div class="student-img-wrapper">
                    <img src="{{ $imgUrl }}" alt="{{ $program['name'] }}" class="student-img">
                </div>
                <h3 class="student-name">{{ $program['name'] }}</h3>
                <p class="college">{{ $program['college'] }}</p>
            </div>
        @endif
    @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">No success stories found for this year.</p>
        </div>
    @endforelse
</div>

{{--@if($type == 'mlp' && count($leaderShipPrograms) > 0)
    <div class="text-center mt-4" style="font-size: 14px; color: #999;">
        Showing {{ count($leaderShipPrograms) }} student cards for {{ $year ?? '' }} batch.
    </div>
@endif--}}

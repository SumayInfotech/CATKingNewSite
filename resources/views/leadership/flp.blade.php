@extends('leadership.layout')

@section('leadership_content')
    {{-- Hero Section --}}
    <section class="leadership-hero">
        <div class="hero-content">
            <p class="hero-description">
                CATKing Educare's <strong>Future Leaders Program (FLP)</strong> aims to cultivate the leaders of the future. It is designed to provide participants with rich exposure to the workings of one of the fastest-growing edtech companies in the country. Through a combination of mentorship, practical experience, and industry insights, FLP aims to cultivate the next generation of leaders who will drive innovation and success.
            </p>
            <p class="hero-description">To know more about the program and to apply click below.</p>
            <div class="hero-actions">
                <a href="https://forms.gle/PP32UKKZKWwbGqcs5" target="_blank" class="btn-primary-ck">Apply to FLP</a>
                <a href="https://catking.in/storage/media_library/7351/67189b7824ed0.pdf" target="_blank" class="btn-secondary-ck">Download the Brochure</a>
            </div>
        </div>
    </section>

    {{-- Year Filter --}}
    <section class="year-filter-wrapper">
        <p class="hero-description">Over the years, FLP has changed the lives of several enthusiastic individuals. Check out the success stories of past batches below.</p>

        <div class="year-bubbles">
            @foreach($years as $y)
                <a href="{{ route('flp', $y) }}" class="year-bubble {{ $year == $y ? 'active' : '' }}" data-year="{{ $y }}">{{ $y }}</a>
            @endforeach
        </div>
    </section>

    {{-- Program Grid --}}
    <div id="program-container">
        @include('leadership.ajax-index', ['leaderShipPrograms' => $leaderShipPrograms, 'type' => 'flp'])
    </div>
@endsection

@section('leadership_scripts')
<script>
    $(document).ready(function() {
        $('.year-bubble').on('click', function(e) {
            e.preventDefault();
            const year = $(this).data('year');
            const url = $(this).attr('href');

            $('.year-bubble').removeClass('active');
            $(this).addClass('active');

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#program-container').html(response.html);
                }
            });
        });
    });
</script>
@endsection

@extends('leadership.layout')

@section('leadership_content')
    {{-- Hero Banner --}}
    <div class="mlp-hero-banner">
        <div class="banner-flex">
            <div class="banner-text">
                {{--<p class="edition">MLP 8.0 2023</p>--}}
                <h2>14 MLPs joined us from <span>Top B-Schools.</span></h2>
            </div>
            <div class="banner-students">
                <img src="https://catking.in/storage/media_manager/FLPs/Abhishek-2023.jpg" class="banner-circle">
                <img src="https://catking.in/storage/media_manager/FLPs/Tushar_Sarkar-2023.jfif" class="banner-circle">
                <img src="https://catking.in/storage/media_manager/FLPs/Riya_lalwani-2023.jfif" class="banner-circle">
                <img src="https://catking.in/storage/media_manager/FLPs/Ujjwal-2023.jpg" class="banner-circle">
            </div>
        </div>
    </div>

    <section class="leadership-hero">
        <div class="hero-content text-center">
            <h4 style="margin-bottom: 20px; font-weight: 700;">We have closed apps for 2026 MLP program. (You may apply if you'd like to be considered for further opportunities.)</h4>
            <h2 style="font-size: 28px; font-weight: 800; margin-bottom: 15px;">MLP 11.0</h2>
            <p class="hero-description">
                CATKing's 11th Year of MLP — Management Leadership Program (on the lines of GE's Leadership Program). The MLP program is a 2-3 month internship program for students pursuing MBA from a reputed B-school. It aims at providing quality work exposure to students & seeks to learn from their MBA knowledge.
            </p>
            <p class="hero-description">This year the MLP program is centered around the theme of "AI in MBA" (CATKing AI), empowering teams with the right process and products to enhance productivity, innovation, and build world-class tech and content.</p>
            <div class="hero-actions" style="justify-content: center;">
                <a href="#mlp-form" class="btn-primary-ck">Apply to MLP</a>
                <a href="https://catking.in/storage/media_library/7296/6716035063602.pdf" target="_blank" class="btn-secondary-ck">Job Descriptions</a>
                <a href="#training-schedule" class="btn-secondary-ck">Training Schedule</a>
            </div>
        </div>
    </section>

    {{-- Testimonials Carousel --}}
    <section class="testimonials-section">
        <div class="section-title-center">
            <h2>Transforming <span>Ambitions</span> into <span>Leadership</span></h2>
            <p>Explore how our candidates have gained the skills and confidence to lead through CATKing's MLP program.</p>
        </div>

        <div class="owl-carousel testimonial-carousel owl-theme">
            {{-- Card 1: Yogesh Kumar --}}
            <div class="item">
                <div class="testimonial-card-ck">
                    <div class="user-meta">
                        <img src="https://catking.in/storage/media_library/7292/6716008046e9b.jpg" class="user-img" alt="Yogesh Kumar">
                        <div class="user-info">
                            <h5>Yogesh Kumar</h5>
                            <p>IIM Lucknow</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <div class="testimonial-excerpt">
                            MLP gave me a sense of ownership which is sometimes rare during internships. I enjoyed leading a project crucial to the firm. Helped me gaining some leadership skills. The work culture was key highlight of the program for me
                        </div>
                        <span class="read-more-btn">Read More</span>
                    </div>
                </div>
            </div>

            {{-- Card 2: Shweta Verma --}}
            <div class="item">
                <div class="testimonial-card-ck">
                    <div class="user-meta">
                        <img src="https://catking.in/storage/media_library/7293/671600e819cc2.jpg" class="user-img" alt="Shweta Verma">
                        <div class="user-info">
                            <h5>Shweta Verma</h5>
                            <p>IIM Sambalpur</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <div class="testimonial-excerpt">
                            MLP 9.0 had helped me to be visible whenever needed and also gave me the confidence to lead a team and to communicate effectively. Their core values will forever remain with me like strive to be visible, Rome is burning, punctuality, no blood on the floor. I want to thank Sumit sir and Anisha Maam for always been their to help and motivate us whenever needed.As a fresher i enjoyed and learned a lot working together with the other MLPs, running behind Sumit sir for approval and then running back to my deck after getting scold from him ,going on trips with all the MLPs , learning about each other and then working together. These are some pointers that helped me grew and sustain as a fresher in between those who were having work experience.
                        </div>
                        <span class="read-more-btn">Read More</span>
                    </div>
                </div>
            </div>

            {{-- Card 3: Manjot Kaur --}}
            <div class="item">
                <div class="testimonial-card-ck">
                    <div class="user-meta">
                        <img src="https://catking.in/storage/media_library/7294/67160144eb7ae.jpg" class="user-img" alt="Manjot Kaur">
                        <div class="user-info">
                            <h5>Manjot Kaur</h5>
                            <p>IIM Sambalpur</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <div class="testimonial-excerpt">
                            The best part of the MLP was not being limited to a particular project. It holistically involved me in different innovational aspects of product management, which actually gave an overview of what 'Prodman' is and if I were the right fit for it or not! It helped me secure college placement in the product role itself in HDFC! (grateful for that)
                        </div>
                        <span class="read-more-btn">Read More</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Year Filter --}}
    <section class="year-filter-wrapper">
        <p class="hero-description text-center">Over the years, MLP has changed the lives of several enthusiastic individuals. Check out the success stories of past batches below.</p>

        <div class="year-bubbles" style="justify-content: center;">
            @foreach($years as $y)
                <a href="{{ route('mlp', $y) }}" class="year-bubble {{ $year == $y ? 'active' : '' }}" data-year="{{ $y }}">{{ $y }}</a>
            @endforeach
        </div>
    </section>

    {{-- Program Grid --}}
    <div id="program-container">
        @include('leadership.ajax-index', ['leaderShipPrograms' => $leaderShipPrograms, 'type' => 'mlp'])
    </div>

    {{-- Form Section --}}
    <section class="leadership-form-section" id="mlp-form">
        <div class="section-title-center">
            <h2 style="font-size: 24px;">Apply <span>Now</span> to Become the Next <span>MLP</span></h2>
        </div>
        <form action="#" method="POST">
            <div class="form-row-ck">
                <div class="form-col-ck">
                    <label class="form-label">Full Name *</label>
                    <input type="text" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-col-ck">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row-ck">
                <div class="form-col-ck">
                    <label class="form-label">Mobile Number *</label>
                    <input type="tel" class="form-control" placeholder="Mobile Number" required>
                </div>
                <div class="form-col-ck">
                    <label class="form-label">Gender *</label>
                    <select class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-row-ck">
                <div class="form-col-ck">
                    <label class="form-label">MBA/PGDM College Name *</label>
                    <input type="text" class="form-control" placeholder="College Name" required>
                </div>
                <div class="form-col-ck">
                    <label class="form-label">College Base City *</label>
                    <input type="text" class="form-control" placeholder="City" required>
                </div>
            </div>

            <div class="form-row-ck">
                <div class="form-col-ck">
                    <label class="form-label">Year of Graduation *</label>
                    <input type="text" class="form-control" placeholder="Year" required>
                </div>
                <div class="form-col-ck">
                    <label class="form-label">Work Experience (Months) *</label>
                    <input type="number" class="form-control" placeholder="Months" required>
                </div>
            </div>

            <div class="form-row-ck">
                <div class="form-col-ck">
                    <label class="form-label">Last Company</label>
                    <input type="text" class="form-control" placeholder="Company Name">
                </div>
                <div class="form-col-ck">
                    <label class="form-label">LinkedIn Profile URL *</label>
                    <input type="url" class="form-control" placeholder="LinkedIn URL" required>
                </div>
            </div>

            <div class="form-row-ck">
                <div class="form-col-ck">
                    <label class="form-label">Upload Resume (PDF only) *</label>
                    <input type="file" class="form-control" accept=".pdf" required>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn-primary-ck" style="border:none; cursor:pointer; width: 100%; max-width: 200px; padding: 15px;">Submit</button>
            </div>
        </form>
    </section>

    {{-- Training Schedule --}}
    <section class="schedule-wrapper" id="training-schedule">
        <div class="section-title-center">
            <h2>MLP Training <span>Schedule</span></h2>
        </div>
        <div class="table-responsive">
            <table class="ck-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Topic</th>
                        <th>Trainer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01 Apr, 2025</td>
                        <td>12:00 PM</td>
                        <td>CATKing Values Training</td>
                        <td>Sumit Singh Gandhi (CEO)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Trainers Section --}}
    <section class="trainers-section">
        <div class="section-title-center">
            <h2>Meet the <span>Trainers</span></h2>
        </div>
        <div class="owl-carousel trainers-carousel owl-theme">
            {{-- Trainer 1 --}}
            <div class="item">
                <div class="trainer-card">
                    <img src="https://catking.in/file/media_library/7330/671746078f9ad.jpg" alt="Sumit Singh">
                    <h5>Sumit Singh</h5>
                    <p>SPJIMR, HSB(Ex.), EX. GE</p>
                </div>
            </div>
            {{-- Trainer 2 --}}
            <div class="item">
                <div class="trainer-card">
                    <img src="https://catking.in/file/media_library/7341/671749f5b6acc.jpg" alt="Anisha Mukhija">
                    <h5>Anisha Mukhija</h5>
                    <p>NMIMS, HSB(Ex.)</p>
                </div>
            </div>
            {{-- Trainer 3 --}}
            <div class="item">
                <div class="trainer-card">
                    <img src="https://catking.in/file/media_library/7348/67179ac00a8db.jpg" alt="Utpal Upadhyay">
                    <h5>Utpal Upadhyay</h5>
                    <p>CTO, Ex J P Morgan</p>
                </div>
            </div>
            {{-- Trainer 4 --}}
            <div class="item">
                <div class="trainer-card">
                    <img src="https://catking.in/file/media_library/7332/671746d86c64c.jpg" alt="Radhika Sule">
                    <h5>Radhika Sule</h5>
                    <p>JBIMS, IBM</p>
                </div>
            </div>
            {{-- Trainer 5 --}}
            <div class="item">
                <div class="trainer-card">
                    <img src="https://catking.in/file/media_library/7334/6717485073b5f.jpeg" alt="Ankita Singhania">
                    <h5>Ankita Singhania</h5>
                    <p>IIM A, Mastercard</p>
                </div>
            </div>
            {{-- Trainer 6 --}}
            <div class="item">
                <div class="trainer-card">
                    <img src="https://catking.in/file/media_library/7335/6717489657544.jpg" alt="Amika Kumawat">
                    <h5>Amika Kumawat</h5>
                    <p>NMIMS, Dabur</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('leadership_scripts')
<script>
    $(document).ready(function() {
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1024: { items: 3 }
            }
        });

        $('.trainers-carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            dots: false,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive: {
                0: { items: 1 },
                480: { items: 2 },
                768: { items: 4 },
                1024: { items: 5 }
            }
        });

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

        // Robust Read More Toggle using Event Delegation
        $(document).on('click', '.read-more-btn', function() {
            const btn = $(this);
            const excerpt = btn.siblings('.testimonial-excerpt');

            excerpt.toggleClass('expanded');

            if (excerpt.hasClass('expanded')) {
                btn.text('Read Less');
            } else {
                btn.text('Read More');
            }

            // Refresh Owl Carousel to handle height changes
            $('.testimonial-carousel').trigger('refresh.owl.carousel');
        });

        // Function to check and hide Read More buttons if text doesn't overflow
        function checkReadMoreVisibility() {
            $('.testimonial-excerpt').each(function() {
                // If scrollHeight is greater than clientHeight, it overflows
                if (this.scrollHeight > this.clientHeight + 5) {
                    $(this).siblings('.read-more-btn').css('display', 'inline-block');
                } else {
                    $(this).siblings('.read-more-btn').css('display', 'none');
                }
            });
        }

        // Run after carousel initialization and on every change
        $('.testimonial-carousel').on('initialized.owl.carousel translated.owl.carousel', function() {
            checkReadMoreVisibility();
        });

        // Initial check
        setTimeout(checkReadMoreVisibility, 500);
    });
</script>
@endsection

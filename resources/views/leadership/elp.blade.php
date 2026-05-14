@extends('leadership.layout')

@section('title', 'Executive Leadership Program - CATKing')

@section('leadership_content')
    <section class="leadership-hero">
        <div class="hero-content">
            <div class="section-title-center">
                <h2 style="font-size: 36px; font-weight: 800; margin-bottom: 25px;">Executive Leadership <span>Program</span></h2>
            </div>

            <div class="elp-intro-text" style="color: #333; line-height: 1.8; text-align: left; max-width: 1000px; margin: 0 auto; font-size: 16px;">
                <p style="font-weight: 500; font-size: 17px; margin-bottom: 40px;">
                    <strong>CATKing Educare’s Executive Leadership Program (ELP)</strong> is a prestigious, full-time leadership development program
                    designed for MBA graduates who aspire to shape the future of education. ELP is more than just a career opportunity,
                    it’s a <strong>fast-track journey to becoming a leader</strong> within one of India’s fastest-growing edtech companies.
                </p>

                <div class="elp-highlights">
                    <h4 class="elp-title">Why <span>ELP?</span></h4>
                    <p class="elp-para">
                        ELP is designed for ambitious, high-potential MBA graduates who are ready to take on strategic, cross-functional
                        roles right after their degree. Unlike internships or short-term exposures, this program is career-defining, giving
                        you the platform to lead projects, manage teams, and make business-critical decisions from day one.
                    </p>

                    <h4 class="elp-title">What You'll <span>Gain</span></h4>
                    <div class="elp-custom-list">
                        <div class="elp-list-item">
                            <div class="elp-circle">1</div>
                            <p><strong>Strategic Exposure:</strong> Work closely with CXOs and senior leadership on high-impact projects.</p>
                        </div>
                        <div class="elp-list-item">
                            <div class="elp-circle">2</div>
                            <p><strong>Cross-functional Experience:</strong> Rotational stints across Marketing, Operations, Product, and Strategy.</p>
                        </div>
                        <div class="elp-list-item">
                            <div class="elp-circle">3</div>
                            <p><strong>Global Mentorship:</strong> Learn directly from leaders with experiences at GE, Bain, IBM & Mastercard.</p>
                        </div>
                        <div class="elp-list-item">
                            <div class="elp-circle">4</div>
                            <p><strong>Leadership Development:</strong> Structured learning modules designed on the lines of GE’s leadership program, focused on decision-making, problem-solving, and innovation.</p>
                        </div>
                        <div class="elp-list-item">
                            <div class="elp-circle">5</div>
                            <p><strong>Career Acceleration:</strong> A fast-tracked path to management and leadership positions within CATKing.</p>
                        </div>
                    </div>

                    <h4 class="elp-title">Who Can <span>Apply?</span></h4>
                    <p class="elp-para">
                        Fresh MBA graduates or professionals with up to 2 years of experience from reputed B-Schools with a strong track
                        record of leadership and innovation. Individuals passionate about edtech, business transformation, and building
                        impact at scale.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Alumni Grid (Static - No Flip) --}}
    <section class="past-batches-section">
        <div class="section-title-center">
            <h2>Our <span>Elite</span> Alumni</h2>
            <p>Discover the journey of our ELP graduates who are now leading key business verticals.</p>
        </div>

        <div class="stories-grid mt-5">
            {{-- Elite Alumnus 1 --}}
            <div class="story-card static-card">
                <div class="student-img-wrapper">
                    <img src="https://catking.in/assets/elp/01.png" alt="Anisha Mukhija" class="student-img">
                </div>
                <h3 class="student-name">Anisha Mukhija</h3>
                <p class="college">NMIMS Mumbai 2015</p>
            </div>

            {{-- Elite Alumnus 2 --}}
            <div class="story-card static-card">
                <div class="student-img-wrapper">
                    <img src="https://catking.in/assets/elp/03.png" alt="Anukool Srivastava" class="student-img">
                </div>
                <h3 class="student-name">Anukool Srivastava</h3>
                <p class="college">NMIMS Mumbai 2024</p>
            </div>

            {{-- Elite Alumnus 3 --}}
            <div class="story-card static-card">
                <div class="student-img-wrapper">
                    <img src="https://catking.in/assets/elp/02.jpeg" alt="Preet Bhayani" class="student-img">
                </div>
                <h3 class="student-name">Preet Bhayani</h3>
                <p class="college">Welingkar Business School 2021</p>
            </div>

            {{-- Elite Alumnus 4 --}}
            <div class="story-card static-card">
                <div class="student-img-wrapper">
                    <img src="https://catking.in/assets/elp/04.png" alt="Vaishnavi Belgamwar" class="student-img">
                </div>
                <h3 class="student-name">Vaishnavi Belgamwar</h3>
                <p class="college">Welingkar Business School 2025</p>
            </div>
        </div>
    </section>


@endsection

@section('leadership_scripts')
<script>
    $(document).ready(function() {
        // Scripts for ELP specific interactions if any
    });
</script>
@endsection

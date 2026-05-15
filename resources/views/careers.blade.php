@extends('layouts.master')

@section('title', 'Careers at CATKing - Join our Mission to Transform Education')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/careers.css') }}">
@endpush

@section('content')
<main class="careers-page">
    <div class="section-inner">
        
        {{-- ══════════════════════════════════════
             ABOUT SECTION
        ══════════════════════════════════════ --}}
        <section class="careers-intro-clean">
            <h1 class="page-title">About <span>CATKing</span></h1>
            <div class="intro-text">
                <p>CATKing is a leading coaching institute in Mumbai and Pune which focuses on strategic, engaging and high-quality education. We at CATKing believe that Education with a blend of strategy can change the way Education is perceived globally. At CATKing Online, our purpose is to improve the quality of education, PAN India by developing ourselves in one vision which is <strong>"Empowering with knowledge."</strong></p>
                <p>The CATKing family is made up of Academic faculties hailing from <strong>IIMs, SP Jain, JBIMS and NMIMS</strong>, to Marketing and Career Counselling Experts. Our teams are part of a transformative, innovative and cross-cultural work environment that is dedicated to supporting students in their transformation to business leaders of the 21st century.</p>
                <p class="apply-email">Interested in any of the openings, please email your resume on: <a href="mailto:hr@catking.in">hr@catking.in</a></p>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             OPENINGS SECTION
        ══════════════════════════════════════ --}}
        <section class="openings-section-clean">
            <div class="openings-header-clean">
                <h2>Current <span>Openings</span></h2>
                <div class="header-line"></div>
            </div>

            <div class="job-grid">
                
                <!-- Academic Positions -->
                <article class="job-card">
                    <h3>Academic Positions <span>(Part Time Faculties)</span></h3>
                    <div class="job-body">
                        <p>CATKing's faculty members are at the heart of our academic programs and we take immense pride in their passion for teaching. With a well-balanced career portfolio that spreads over decades of experience within industries, our professors bring with them not only a wealth of knowledge base, but also relevant industry knowledge.</p>
                        
                        <div class="job-sub-section">
                            <h4>Job Description</h4>
                            <p>We are looking for a committed Faculty to complement our qualified workforce of educators. You will be responsible for implementing a full educational teaching plan according to the institute's requirements.</p>
                        </div>

                        <div class="job-sub-section">
                            <h4>Responsibilities</h4>
                            <ul class="clean-list">
                                <li>Present lessons in a comprehensive manner and use visual / audio means to facilitate learning</li>
                                <li>Provide individualized instruction to each student by promoting interactive learning</li>
                                <li>Distribute educational content (notes, summaries, assignments)</li>
                                <li>Assess and record students' progress and provide grades and feedback</li>
                                <li>Maintain a tidy and orderly classroom</li>
                                <li>Collaborate with other teachers and stakeholders</li>
                            </ul>
                        </div>

                        <div class="job-sub-section">
                            <h4>Requirements</h4>
                            <ul class="clean-list">
                                <li>Proven experience as a teacher</li>
                                <li>Thorough knowledge of teaching best practices</li>
                                <li>Excellent communicability and interpersonal skills</li>
                                <li>Well-organized and committed</li>
                                <li>Strong moral values and discipline</li>
                            </ul>
                        </div>

                        <div class="apply-box">
                            <p>Interested in applying? Email the following details to <span>hr@catking.in</span></p>
                            <ul class="clean-list small">
                                <li>Detailed curriculum vitae</li>
                                <li>A statement of teaching interests and why you wish to be a part of CATKing</li>
                            </ul>
                        </div>
                    </div>
                </article>

                <!-- Financial Analyst -->
                <article class="job-card">
                    <h3>Financial <span>Analyst</span></h3>
                    <div class="job-body">
                        <div class="job-sub-section">
                            <h4>Financial Operations</h4>
                            <ol class="numbered-list">
                                <li>Leads the monthly / weekly reviews and analysis of the client's financial performance.</li>
                                <li>Cash flow planning and ensure financial stability of the company (Cost Benefit Analysis).</li>
                                <li>Cash and investment management at all corporate offices and branches.</li>
                                <li>Development of tools and systems to provide critical financial and operational information to the Strategic Partners.</li>
                                <li>Engages the Board, Strategic Partners and appropriate committees around financial issues, trends, and changes in the operating model.</li>
                            </ol>
                        </div>

                        <div class="job-sub-section">
                            <h4>Compliance</h4>
                            <ol class="numbered-list">
                                <li>Ensures that effective internal controls are in place and ensures compliance with all applicable laws, state and local regulatory laws.</li>
                                <li>Ensures all secretarial records are in order and do necessary filings to bridge gaps.</li>
                            </ol>
                        </div>

                        <div class="job-sub-section">
                            <h4>Experience and Qualifications</h4>
                            <ul class="clean-list">
                                <li>Experience in a financial management role, partnering with executive staff</li>
                                <li>Polished and sophisticated executive presence</li>
                                <li>Prowess with legal and contractual agreements</li>
                                <li>Effectively manage complicated loan transactions</li>
                                <li>Proven team leader with high level of energy and motivation</li>
                            </ul>
                        </div>

                        <div class="apply-box">
                            <p>Interested in applying? Email the following details to <span>hr@catking.in</span></p>
                        </div>
                    </div>
                </article>

                <!-- Digital Marketing -->
                <article class="job-card">
                    <h3>Digital Marketing <span>Executive</span></h3>
                    <div class="job-body">
                        <p>Driving digital marketing strategy for CATKing. Areas of focus include digital content management, keyword research, search engine optimization (SEO), analyzing web analytics, all social media platform & online outreach programs.</p>
                        
                        <div class="job-sub-section">
                            <h4>Responsibilities</h4>
                            <ul class="clean-list">
                                <li>Develop strategies that increase traffic, demand and conversion</li>
                                <li>Suggest digital strategies that complement the company's sales and marketing efforts to enhance brand</li>
                                <li>Provide direction and direct team members in the performance of their duties</li>
                                <li><strong>Digital campaigns</strong> — Develop and execute high impact digital campaigns for all ATL channels</li>
                                <li><strong>Manage all owned media channels</strong> — Complete ownership of social media channels</li>
                                <li><strong>Social media marketing</strong> — Creating, managing and growing the company's presence through blogs, YouTube, Instagram, Twitter, Facebook</li>
                                <li><strong>Digital Analytics</strong> — Maintaining processes to track conversion rates</li>
                            </ul>
                        </div>

                        <div class="apply-box">
                            <p>Interested in applying? Email the following details to <span>hr@catking.in</span></p>
                        </div>
                    </div>
                </article>

                <!-- Centre Manager -->
                <article class="job-card">
                    <h3>Centre <span>Manager</span></h3>
                    <div class="job-body">
                        <div class="job-sub-section">
                            <h4>Job Description</h4>
                            <p>Centre managers are at the heart of our educational programs and we take immense pride in their passion for learning and career development of students. As a centre manager, you are responsible for running the centre and managing the business operations for individual CATKing centers.</p>
                        </div>
                        <div class="job-sub-section">
                            <h4>Responsibilities</h4>
                            <ul class="clean-list">
                                <li>Presenting product information to potential students in a clear and convincing manner</li>
                                <li>Providing individualized instruction to each student by promoting interactive learning</li>
                                <li>Distribute educational content (notes, summaries, assignments)</li>
                                <li>Maintain a record of students' progress and provide feedback to the head office</li>
                                <li>Maintain a tidy and orderly classroom</li>
                                <li>Communicate and handle individual student requests and escalate if required</li>
                                <li>Managing general admin, attendance and petty cash for the individual CATKing centers</li>
                                <li>Handling individual sales requests for students and potential walk-ins</li>
                            </ul>
                        </div>
                        <div class="job-sub-section">
                            <h4>Requirements</h4>
                            <ul class="clean-list">
                                <li>Proven experience in front office or client management</li>
                                <li>Thorough knowledge of office and petty cash management</li>
                                <li>Excellent communication and interpersonal skills</li>
                                <li>Well-organized and committed</li>
                                <li>Strong moral values and discipline</li>
                            </ul>
                        </div>
                        <div class="apply-box">
                            <p>Interested in applying? Email the following details to <span>hr@catking.in</span></p>
                        </div>
                    </div>
                </article>

                <!-- Content Writer (Added for completeness based on SS) -->
                <article class="job-card">
                    <h3>Content <span>Writer</span></h3>
                    <div class="job-body">
                        <p>We are looking for Content Writers who have an eye for details and are ready to learn, create content, and edit existing contents so as to ensure content value for the members of the CATKing family.</p>
                        
                        <div class="job-sub-section">
                            <h4>Responsibilities</h4>
                            <ul class="clean-list">
                                <li>Creating content for the CATKing website / blog</li>
                                <li>Editing and finalizing academic content in relation to the academic curriculum</li>
                                <li>Preparing academic handouts as per the curriculum for CATKing offline and online students</li>
                                <li>Researching relevant information as per CAT and non-CAT exams</li>
                            </ul>
                        </div>

                        <div class="job-sub-section">
                            <h4>Experience and Qualifications</h4>
                            <ul class="clean-list">
                                <li>Excellent command over English</li>
                                <li>Previous experience as a content writer/editor preferred at CATKing</li>
                            </ul>
                        </div>

                        <div class="apply-box">
                            <p>Interested in applying? Email the following details to <span>hr@catking.in</span></p>
                        </div>
                    </div>
                </article>

            </div>
        </section>

    </div>
</main>
@endsection

@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/privacy-policy.css') }}">
@endpush

@section('content')
    <main class="privacy-page">
        <div class="section-inner">
            <header class="privacy-header">
                <h1>Refund <span>Policy</span></h1>
            </header>

            <div class="privacy-content">
                <section>
                    <h2>CATKing Guarantees – Refund Policy</h2>
                    <p>Thank you for choosing CATKing Educare. We are dedicated to providing quality education and value-driven services to every student. The following Refund Policy governs your use and subscription to CATKing programs, including our special CATKing Guarantee Program.</p>
                    <p>This policy applies to all purchases made directly with CATKing Educare, either online or via our official representatives.</p>
                </section>

                <section>
                    <h2>1. No Refund Policy</h2>
                    <p>CATKing follows a strict no-refund policy unless explicitly stated under the CATKing Guarantee Program. Once payment has been made toward any course (whether in full or part), no refunds shall be entertained under the following circumstances:</p>
                    <ul>
                        <li>Non-attendance or missed sessions</li>
                        <li>Change of personal goals, schedules, or plans</li>
                        <li>Technical issues (device/internet-related) from the student’s side</li>
                        <li>Access of partial content from the learning platform</li>
                        <li>Non-utilization of services or study materials</li>
                    </ul>
                    <p>By enrolling, you agree to abide by this policy and waive any claim for refund except as mentioned under the CATKing Guarantee Program.</p>
                </section>

                <section>
                    <h2>2. CATKing Guarantee Program – 6-Day Refund Policy</h2>
                    <p><strong>Eligible Courses:</strong></p>
                    <ul>
                        <li>CAT Intensive 2025</li>
                        <li>CAT Intensive 2026</li>
                        <li>CAT Turbo 2025</li>
                        <li>CAT Turbo 2026</li>
                    </ul>
                    <p><strong>Eligibility Conditions:</strong></p>
                    <p>You may apply for a refund only on the 6th day after the batch starts (typically a Saturday if the batch begins on a Monday), provided all of the following conditions are met:</p>
                    <ul>
                        <li><strong>Full Fee Paid:</strong> You have made a one-time payment without opting for any EMI or installment plan.</li>
                        <li><strong>Induction Attendance:</strong> You attended the mandatory Induction Session at 6 PM on Day 1 (Monday).</li>
                        <li><strong>Complete First Week Attendance:</strong> You have attended all sessions conducted in the first week.</li>
                    </ul>
                    <p><strong>How to Apply:</strong></p>
                    <p><strong>Email:</strong> Send to <a href="mailto:support@catking.in">support@catking.in</a></p>
                    <p><strong>Subject Line:</strong> Refund Request – &lt;Your Batch Code&gt; (e.g., Refund Request – B1)</p>
                    <p><strong>Attachment:</strong> Include a screenshot showing your full attendance for the week, including the Induction.</p>
                    <p><em>Note: The refund request must be submitted only on Day 6 (Saturday). Requests before or after this date will not be entertained. Refunds, once approved, will be processed within 28 working days.</em></p>
                </section>

                <section>
                    <h2>3. Additional Pointers</h2>
                    <h3>3.1 Force Majeure</h3>
                    <p>If due to any force majeure event (e.g., natural disasters, government regulations, pandemics, etc.), CATKing is unable to continue delivering the enrolled services, no refund will be issued for the services already availed. CATKing is not obligated to offer compensatory services in such cases.</p>

                    <h3>3.2 Overriding Clause</h3>
                    <p>Any other refund policy mentioned elsewhere—on our website, marketing material, or via verbal communication—will not be valid unless explicitly included in this policy. Only this document governs refund-related decisions.</p>

                    <h3>3.3 Mode of Refund</h3>
                    <p>All approved refunds shall be processed via online bank transfer in INR to the original payment account within 28 working days from the confirmation of cancellation.</p>

                    <h3>3.4 Alternate Bank Account Clause</h3>
                    <p>If the original payment source is inactive or does not support refunds, you must provide an alternate account belonging to you. CATKing will not be responsible for errors due to incorrect account details. A declaration may be required in the specified format.</p>

                    <h3>3.5 Refund Not Received?</h3>
                    <p>If you do not receive your refund within 28 working days from approval, contact support@catking.in for assistance.</p>

                    <h3>3.6 GST Credit Note</h3>
                    <p>On eligible cancellations, a GST credit note will be issued for unutilized services. If the cancellation is made after the statutory GST issuance timeline, CATKing may issue a commercial credit note upon request, subject to declaration submission.</p>

                    <h3>3.7 Policy Modification</h3>
                    <p>CATKing Educare reserves the right to update or revise this policy at any time, without prior notice. The revised policy will be effective immediately upon being published.</p>

                    <h3>3.8 Consent</h3>
                    <p>By enrolling in any course or program at CATKing Educare, you confirm that you have read, understood, and agreed to all terms stated in this Refund Policy.</p>
                </section>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.master')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/meet-the-directors.css') }}">
@endpush

@section('content')
    <main class="directors-page">

        {{-- ══════════════════════════════════════
             HERO SECTION
        ══════════════════════════════════════ --}}
        <section class="directors-hero">
            <div class="section-inner">
                <div class="hero-arrows">
                    <h1>Meet the <span>Directors</span></h1>
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             GRID SECTION
        ══════════════════════════════════════ --}}
        <section class="grid-section">
            <div class="section-inner">
                <div class="section-heading">
                    <h2>Directors, Department Heads & Faculty We Met</h2>
                </div>

                <div class="directors-grid">
                    @php
                        $directors = [
                            ['id' => '4', 'name' => 'Dr. Srinivasan Iyengar', 'role' => 'Director of JBIMS', 'img' => 'https://catking.in/storage/media_manager/23.png'],
                            ['id' => '6', 'name' => 'Fr. Sebastian George', 'role' => 'Director of XLRI', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/seb1ok.png'],
                            ['id' => '1', 'name' => 'Dr. Atish', 'role' => 'Director of JAGSOM', 'img' => 'https://catking.in/storage/media_manager/DR.ATISH (1).png'],
                            ['id' => '11', 'name' => 'Prof. Manoj Kumar Tiwari', 'role' => 'Director of IIM, Mumbai', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/16-1.png'],
                            ['id' => '3', 'name' => 'Debashis Chatterjee', 'role' => 'Director of IIM Kozhikode', 'img' => 'https://catking.in/storage/media_manager/5-IMTK.png'],
                            ['id' => '10', 'name' => 'Fr. KS Casimir', 'role' => 'Director of XLRI Delhi', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/15a.jpg'],
                            ['id' => '14', 'name' => 'Dr. Pawan Kumar Singh', 'role' => 'Director of IIM Tiruchirappalli', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/21.png'],
                            ['id' => '13', 'name' => 'Vishal Talwar', 'role' => 'Director of IMT Ghaziabad', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/19.png'],
                            ['id' => '15', 'name' => 'Dr. Ranjan Banerjee', 'role' => 'Director of BITSoM', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/22.png'],
                            ['id' => '17', 'name' => 'Dr. Ajit Parulekar', 'role' => 'Director of GIMK', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/Ajit.png'],
                            ['id' => '12', 'name' => 'Dr Madhvi Sethi', 'role' => 'Director of SIBM Bangalore', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/18-1.png'],
                            ['id' => '2', 'name' => 'Mr. Suraj', 'role' => 'Ex-SPJIMR Alumni', 'img' => 'https://catking.in/storage/media_manager/MR-SURAJ_ok.png'],
                            ['id' => '7', 'name' => 'Gurunathan Sir', 'role' => 'Ex-Convenor of XAT and XLRI Faculty', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/11ok.png'],
                            ['id' => '41', 'name' => 'Dr. Davendranath Gokulnath Jha', 'role' => 'Faculty at Somaiya Vidyavihar', 'img' => 'https://catking.in/storage/media_manager/Dr-Davendranath.png'],
                            ['id' => '8', 'name' => 'Dr. Rachana Patil', 'role' => 'Head of Rural Management at Welingkar Business School', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/13ok.jpg'],
                            ['id' => '9', 'name' => 'Dr. Aparna Khare', 'role' => 'Media and Entertainment Head at Welingkar Business School', 'img' => 'https://old1.catking.in/wp-content/uploads/2023/12/14ok.jpg'],
                        ];
                    @endphp

                    @foreach($directors as $d)
                        <div class="director-card">
                            <div class="card-photo">
                                <img src="{{ $d['img'] }}" alt="{{ $d['name'] }}">
                            </div>
                            <div class="card-info">
                                <h3>{{ $d['name'] }}</h3>
                                <p>{{ $d['role'] }}</p>
                                <a href="#director-{{ $d['id'] }}" class="btn-view">View More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════
             DETAILS SECTION
        ══════════════════════════════════════ --}}
        <section class="details-section">
            <div class="section-inner">
                <div class="section-heading">
                    <h2>Director's <span>Details</span></h2>
                </div>

                <div class="details-container">

                    {{-- Dr. Srinivasan Iyengar --}}
                    <div class="director-detail-row" id="director-4">
                        <div class="detail-photo">
                            <img src="https://catking.in/storage/media_manager/23.png" alt="Dr. Srinivasan Iyengar">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Srinivasan Iyengar</h3>
                            <div class="subtitle">Director of JBIMS</div>
                            <div class="detail-text">
                                <p>I had the privilege of meeting Dr. Srinivasan .R Iyengar, Director at Jamnalal Bajaj Institute of Management Studies (JBIMS) during CATKing Educare Directors Adda, Telecast Partner ET NOW</p>
                                <p>Insights from Dr. Srinivasan .R Iyengar , JBIMS: Creativity and Innovation Fueling the Future. He gave valuable insights on the future of management and the key factors driving success in the business world. Here are some key takeaways: Scarcity to Surplus: Dr. Srinivasan emphasized that businesses need to shift their mindset from scarcity to surplus. In an evolving landscape, those who adapt and innovate will thrive.</p>
                                <p>Market Survival: Each market has its own space, and survival depends on finding and owning that space. Understanding and leveraging core competencies is crucial for sustainable success.</p>
                                <p>Core Competency & Value Players: Organizations should focus on their core competencies and position themselves as value players. This strategy helps build a competitive edge and deliver exceptional value to customers.</p>
                                <p>Learning-Focused Future: Dr. Srinivasan highlighted that the future of management is full of continuous learning. As aspiring MBA students, we have the opportunity to acquire versatile experience and embrace a growth mindset.</p>
                                <p>Consistency is Key: B-School performance and reputation are heavily influenced by consistency. It's not just about excelling in one area but maintaining a track record of delivering excellence consistently.</p>
                                <p>Let's embrace the wisdom shared by Dr. Srinivasan and apply these insights to our own professional journeys. As the future leaders of business, let's foster creativity, innovation, and a commitment to lifelong learning. Together, we can shape a dynamic and thriving business landscape.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Fr. Sebastian George --}}
                    <div class="director-detail-row" id="director-6">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/seb1ok.png" alt="Fr. Sebastian George">
                        </div>
                        <div class="detail-content">
                            <h3>Fr. Sebastian George</h3>
                            <div class="subtitle">Director of XLRI</div>
                            <div class="detail-text">
                                <p>"Exploring the Intersection of Organizational Behavior and HR”</p>
                                <p>Transformation: A Meeting with XLRI Director Fr. Sebastian George, S.J. As a leader in the business world, I understand the importance of staying ahead of the curve and staying competitive. That's why I was thrilled to have the opportunity to sit down with Fr. Sebastian George, S.J., the Director of XLRI Jamshedpur, to discuss the critical role of organizational behavior and HR transformation in driving business success.</p>
                                <p>During our meeting, we delved into the importance of creating a positive and inclusive work culture, as well as the need to provide employees with the skills and resources they need to adapt to new ways of working. We also discussed the importance of HR leading change management initiatives and partnering with other departments to identify areas for improvement.</p>
                                <p>I was impressed by Fr. George's insights and knowledge on the topic, and I am grateful for the opportunity to share my own thoughts and ideas. As Fr. George noted, "Bringing HR and transformation together is a critical aspect of organizational success. By understanding the behavior of individuals and groups within organizations, we can create a workforce that is engaged, productive, and committed to the success of the business.“</p>
                                <p>This meeting was a valuable opportunity to explore the intersection of organizational behavior and HR transformation, and I am excited to continue this conversation and drive the future of business forward.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Atish --}}
                    <div class="director-detail-row" id="director-1">
                        <div class="detail-photo">
                            <img src="https://catking.in/storage/media_manager/DR.ATISH (1).png" alt="Dr. Atish">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Atish</h3>
                            <div class="subtitle">Director of JAGSOM</div>
                            <div class="detail-text">
                                <p>As a former mentor and now Director of JAGSOM, Dr. Atish has had a profound impact on my career growth and development. I recently had the opportunity to reconnect with him and gain valuable insights into the world of digital marketing.</p>
                                <p>During our meeting, Dr. Atish shared his wealth of knowledge and experience from his time at institutions like IMT Ghaziabad, MICA, and SPJIMR. He discussed the latest trends and best practices in the field, providing a comprehensive overview of the industry. I was especially grateful to hear his perspective on the evolution of digital marketing and where the industry is headed.</p>
                                <p>Aside from the technical aspects of digital marketing, Dr. Atish also shared his thoughts on the importance of mentorship and guidance in advancing one's career. He encouraged me to continue seeking out new learning opportunities and challenged me to think critically about my goals and aspirations.</p>
                                <p>Overall, the meeting with Dr. Atish was a valuable experience and a great opportunity to reconnect with a former mentor. I am grateful for the chance to learn from his expertise and wisdom. I look forward to staying in touch and continuing to grow and learn in my career.</p>
                                <p>In conclusion, networking and connecting with professionals in your field can provide a wealth of new insights and learning opportunities. I encourage others to take advantage of opportunities like this and seek out mentorship and guidance from seasoned professionals in their industry.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Prof. Manoj Kumar Tiwari --}}
                    <div class="director-detail-row" id="director-11">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/16-1.png" alt="Prof. Manoj Kumar Tiwari">
                        </div>
                        <div class="detail-content">
                            <h3>Prof. Manoj Kumar Tiwari</h3>
                            <div class="subtitle">Director of IIM, Mumbai</div>
                            <div class="detail-text">
                                <p>Exciting news! We had the privilege of interacting with Prof. Manoj Kumar Tiwari (FNAE, FNASc, FIIIE, FIISE, and FIETI), Director of the Indian Institute of Management Mumbai ).</p>
                                <p>His humility and expertise left us in awe.</p>
                                <p>Stay tuned for our upcoming podcast on NITIE and the admission process, which will be available soon on our CATKing YouTube channel.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Debashis Chatterjee --}}
                    <div class="director-detail-row" id="director-3">
                        <div class="detail-photo">
                            <img src="https://catking.in/storage/media_manager/5-IMTK.png" alt="Debashis Chatterjee">
                        </div>
                        <div class="detail-content">
                            <h3>Debashis Chatterjee</h3>
                            <div class="subtitle">Director of IIM Kozhikode</div>
                            <div class="detail-text">
                                <p>"Transforming MBA Education: A Meeting with Director Debashis Chatterjee at IIM Kozhikode” Yesterday, I had the privilege of meeting with Director Debashis Chatterjee at the new Gurukul at IIM Kozhikode.</p>
                                <p>The creation of this innovative learning space is a testament to Director Chatterjee's vision for transforming MBA education.</p>
                                <p>During our meeting, Director Chatterjee shared his insights on the challenges faced by traditional MBA programs and the need for a new approach.</p>
                                <p>He spoke about the Gurukul and how it is designed to make MBA education less aggressive and more focused on the holistic development of students. The new approach places a strong emphasis on mentorship, personal growth, and experiential learning. It was clear from our conversation that Director Chatterjee has a deep commitment to empowering the next generation of business leaders. His passion for education and drive for innovation was truly inspiring. In conclusion, the creation of the Gurukul at IIM Kozhikode represents a major step forward in the evolution of MBA education.</p>
                                <p>I am grateful for the opportunity to learn from Director Chatterjee and to be part of this transformative initiative.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Fr. KS Casimir --}}
                    <div class="director-detail-row" id="director-10">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/15a.jpg" alt="Fr. KS Casimir">
                        </div>
                        <div class="detail-content">
                            <h3>Fr. KS Casimir</h3>
                            <div class="subtitle">Director of XLRI Delhi</div>
                            <div class="detail-text">
                                <p>Grateful for the opportunity to meet and converse with Fr. KS Casimir, the visionary Director of the XLRI Delhi-NCR-NCR campus.</p>
                                <p>His commitment to education and leadership is truly remarkable and it was an honor to engage in insightful discussions.</p>
                                <p>Our interaction was so enriching that we decided to capture it in a podcast, now available on our YouTube channel. Delving into topics from education to leadership, it was a conversation that left me inspired and motivated.</p>
                                <p>Thank you, Fr. KS Casimir, for sharing your wisdom and guiding light with us!</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Pawan Kumar Singh --}}
                    <div class="director-detail-row" id="director-14">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/21.png" alt="Dr. Pawan Kumar Singh">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Pawan Kumar Singh</h3>
                            <div class="subtitle">Director of IIM Tiruchirappalli</div>
                            <div class="detail-text">
                                <p>Immensely grateful to Dr. Pawan Kumar Singh, Director at Indian Institute of Management Tiruchirappalli, for his invaluable insights on hashtag#Innovation and hashtag#Entrepreneurship, as well as the Relevance of MBA in today's world! His profound knowledge left us inspired and captivated.</p>
                                <p>During our discussion at Director's Adda, Telecast Partner ET NOW, we explored the potential of hashtag#MBA programs in nurturing a culture of innovation among students. Dr. Pawan emphasized the significance of leisure as the mother of creativity and highlighted the ultimate flowering of science in art.</p>
                                <p>Furthermore, Dr. Pawan shed light on common challenges faced by entrepreneurs in India and how MBA education can play a pivotal role in overcoming them. MBA programs empower aspiring entrepreneurs to embrace innovative ideas and drive positive change in the business landscape.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Vishal Talwar --}}
                    <div class="director-detail-row" id="director-13">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/19.png" alt="Vishal Talwar">
                        </div>
                        <div class="detail-content">
                            <h3>Vishal Talwar</h3>
                            <div class="subtitle">Director of IMT Ghaziabad</div>
                            <div class="detail-text">
                                <p>"Navigating the World of Investment Banking, Global Marketing, and Social Responsibility: A Meeting with Dr. Vishal Talwar, Director of IMT Ghaziabad.”</p>
                                <p>Investment banking, global marketing, and social responsibility are three of the most important and rapidly evolving fields in the business world today. To better understand these dynamic industries, I had the opportunity to meet with Dr. Vishal Talwar, Director of IMT Ghaziabad.</p>
                                <p>In our discussion, Dr. Talwar shared his insights and expertise on a wide range of topics, including investment banking, global marketing, and social responsibility. He emphasized the importance of having a well-rounded profile that includes both technical skills and soft skills, such as the ability to think creatively and work effectively with people from different cultures.</p>
                                <p>Dr. Talwar also spoke about the importance of social responsibility in the business world and how companies can contribute to society in meaningful ways. He discussed the challenges of global marketing and the need to understand the cultural differences that exist across different countries and regions.</p>
                                <p>This meeting with Dr. Talwar was a valuable opportunity for me to gain a deeper understanding of investment banking, global marketing, and social responsibility. I am grateful for the chance to learn from his insights and experiences, and wish all those pursuing careers in these exciting and dynamic industries the best of luck on their journey.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Ranjan Banerjee --}}
                    <div class="director-detail-row" id="director-15">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/22.png" alt="Dr. Ranjan Banerjee">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Ranjan Banerjee</h3>
                            <div class="subtitle">Director of BITSoM</div>
                            <div class="detail-text">
                                <p>Life is beautiful when you meet your Ex Director. It was lovely connecting with Dr. Ranjan Banerjee. BE from the Indian Institute of Technology, Bombay Bombay, and MBA from the Indian Institute of Management, Calcutta! Thank you sir for your contribution to SPJIMR PGPDM and now leading the pack BITSoM - BITS School of Management Keep up the good work sir! You are amazing.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Ajit Parulekar --}}
                    <div class="director-detail-row" id="director-17">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/Ajit.png" alt="Dr. Ajit Parulekar">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Ajit Parulekar</h3>
                            <div class="subtitle">Director of GIMK</div>
                            <div class="detail-text">
                                <p>"Leading the Charge in Management Education: A Meeting with Dr. Ajit Parulekar, Director of GIMK.”</p>
                                <p>As the world continues to evolve and change, so too does the field of management and management education. To better understand these dynamic industries, I had the opportunity to meet with Dr. Ajit Parulekar, Director of GIMK.</p>
                                <p>In our discussion, Dr. Parulekar shared his insights and expertise on how to be a change leader in management education. He emphasized the importance of embracing new ideas and approaches in order to stay ahead of the curve and drive innovation in the field.</p>
                                <p>Dr. Parulekar also spoke about his experience as a faculty member at SP Jain, and how he has seen the field of management education change over the years. He discussed the challenges of bringing about change in management education, and the need to be proactive and adaptive in order to succeed in this rapidly evolving field.</p>
                                <p>This meeting with Dr. Parulekar was a valuable opportunity for me to gain a deeper understanding of the role of change leaders in management education. I am grateful for the chance to learn from his insights and experiences, and wish all those pursuing careers in this exciting and dynamic industry the best of luck on their journey.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr Madhvi Sethi --}}
                    <div class="director-detail-row" id="director-12">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/18-1.png" alt="Dr Madhvi Sethi">
                        </div>
                        <div class="detail-content">
                            <h3>Dr Madhvi Sethi</h3>
                            <div class="subtitle">Director of SIBM Bangalore</div>
                            <div class="detail-text">
                                <p>It was amazing to meet Director SIBM Bangalore Dr Madhvi Sethi (Ex XLRI , ISB) and Deputy Director Prof Vidyasagar (Ex NIT Surathkal) our bonding over the surathkal campus and hostel stories was amazing ! Honoured to meet them both who are bringing in Years of experience and expertise in the Mergers and Acquisition and Marketing classes at SIBM Bangalore</p>
                            </div>
                        </div>
                    </div>

                    {{-- Mr. Suraj --}}
                    <div class="director-detail-row" id="director-2">
                        <div class="detail-photo">
                            <img src="https://catking.in/storage/media_manager/MR-SURAJ_ok.png" alt="Mr. Suraj">
                        </div>
                        <div class="detail-content">
                            <h3>Mr. Suraj</h3>
                            <div class="subtitle">Ex-SPJIMR Alumni</div>
                            <div class="detail-text">
                                <p>"Inspiring Discussion with Mr. Suraj, Ex-SPJIMR Alumni</p>
                                <p>Yesterday, I had the privilege of meeting with Mr. Suraj, an accomplished ex-SPJIMR alumni. Our conversation centered around case studies and the legacy of Shrikant sir, and it was truly inspiring.</p>
                                <p>Mr.Suraj shared his insights on various case studies and how they can be used to enhance one's learning and growth. He also spoke highly of Shrikant sir and his impact on the field of business education. It was clear that Mr. Suraj holds Shrikant sir in high esteem and has been greatly influenced by his teachings.</p>
                                <p>Throughout our discussion, I was struck by Mr. Suraj's passion for learning and growth. He shared his own journey and offered guidance on how to continue developing and refining one's skills. It was clear that he has a strong drive to succeed and is constantly striving to improve.</p>
                                <p>In conclusion, meeting with professionals like Mr. Suraj provides an opportunity to gain new perspectives and insights. I am grateful for the opportunity to learn from his experiences and to be inspired by his drive and dedication to growth. I look forward to staying in touch and continuing to learn and grow in my career.</p>
                                <p>#Networking #Learning #Inspiration.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Gurunathan Sir --}}
                    <div class="director-detail-row" id="director-7">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/11ok.png" alt="Gurunathan Sir">
                        </div>
                        <div class="detail-content">
                            <h3>Gurunathan Sir</h3>
                            <div class="subtitle">Ex-Convenor of XAT and XLRI Faculty</div>
                            <div class="detail-text">
                                <p>"The Transitional Power of HR: Insights from Gurunathan Sir, Ex-Convenor of XAT and XLRI Faculty.”</p>
                                <p>HR is a critical function in any organization, but its role is often misunderstood. Many view it simply as a support function, tasked with managing the day-to-day needs of employees. However, as Gurunathan Sir, the ex-convenor of XAT and one of the most loved faculties at XLRI, notes, HR is much more than that.</p>
                                <p>According to Sir, HR is not just about people management skills, but about bringing in systems and processes and driving them to drive organizational success. He emphasizes that HR is a transitional function, not a transactional one. It's about creating and implementing initiatives that drive organizational change and improvement.</p>
                                <p>Sir's teachings are a testament to his deep understanding of the role of HR in organizations. He highlights the importance of thinking beyond traditional HR practices and embracing new ideas and approaches to drive business transformation and success.</p>
                                <p>This is a timely reminder for those in the HR field, as well as for organizations as a whole, to recognize the true power and potential of HR. By embracing a more transitional approach to HR, organizations can unleash their full potential and remain competitive in today's fast-paced business landscape.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Davendranath Gokulnath Jha --}}
                    <div class="director-detail-row" id="director-41">
                        <div class="detail-photo">
                            <img src="https://catking.in/storage/media_manager/Dr-Davendranath.png" alt="Dr. Davendranath Gokulnath Jha">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Davendranath Gokulnath Jha</h3>
                            <div class="subtitle">Faculty at Somaiya Vidyavihar</div>
                            <div class="detail-text">
                                <p>"A Reunion with a Marketing Pioneer: Dr. Davendranath Gokulnath Jha”</p>
                                <p>Today, I had the opportunity to reconnect with Dr. Davendranath Gokulnath Jha, a pioneer in the field of marketing and now a faculty member at Somaiya Vidyavihar teaching data analytics. It was truly inspiring to meet with him after so many years and learn about his journey and insights.</p>
                                <p>Dr. Jha shared his experiences and observations from his time in the business world and as a faculty member. He spoke about the changes he has seen in the business education landscape and the challenges facing today's students. Despite these challenges, Dr. Jha remains optimistic about the future and continues to be a strong advocate for the power of education.</p>
                                <p>Throughout our conversation, I was struck by Dr. Jha's passion for learning and his commitment to helping students succeed. His insights on the business world and his teachings on data analytics have undoubtedly had a positive impact on countless students over the years.</p>
                                <p>In conclusion, it was a privilege to reconnect with Dr. Jha and to learn from his experiences. He is a true inspiration and a testament to the power of education and mentorship.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Rachana Patil --}}
                    <div class="director-detail-row" id="director-8">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/13ok.jpg" alt="Dr. Rachana Patil">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Rachana Patil</h3>
                            <div class="subtitle">Head of Rural Management at Welingkar Business School</div>
                            <div class="detail-text">
                                <p>Exploring the Frontiers of Agri Business Management: A Meeting with Dr. Rachana Patil, Head of Rural Management at Welingkar Business School.”</p>
                                <p>Agriculture is one of the most important industries in the world, and agri business management is a field that is growing in importance. To better understand this dynamic and rapidly evolving field, I had the opportunity to meet with Dr. Rachana Patil, Head of Rural Management at Welingkar Business School.</p>
                                <p>In our discussion, Dr. Patil shared her insights and expertise on agri business management, and provided valuable insights into the opportunities and challenges facing this critical industry. She emphasized the importance of understanding the intricacies of the business and being able to effectively manage the various stakeholders involved, including farmers, consumers, and government agencies.</p>
                                <p>Dr. Patil also spoke about the importance of staying current with the latest developments and trends in the field, and developing the skills and knowledge necessary to succeed in this competitive and constantly evolving industry.</p>
                                <p>This meeting with Dr. Patil was a valuable opportunity for me to gain a deeper understanding of agri business management and learn from a true expert in the field. I am grateful for the chance to learn from her and wish all those pursuing a career in agri business management the best of luck on their journey."</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dr. Aparna Khare --}}
                    <div class="director-detail-row" id="director-9">
                        <div class="detail-photo">
                            <img src="https://old1.catking.in/wp-content/uploads/2023/12/14ok.jpg" alt="Dr. Aparna Khare">
                        </div>
                        <div class="detail-content">
                            <h3>Dr. Aparna Khare</h3>
                            <div class="subtitle">Media and Entertainment Head at Welingkar Business School</div>
                            <div class="detail-text">
                                <p>Getting Hands-on with Media and Marketing Management: A Meeting with Dr. Aparna Khare, Media and Entertainment Head at Welingkar Business School.”</p>
                                <p>In today's rapidly changing and highly competitive business world, media and marketing management are critical skills for success. To better understand this dynamic field, I had the opportunity to meet with Dr. Aparna Khare, Media and Entertainment Head at Welingkar Business School.</p>
                                <p>In our discussion, Dr. Khare shared her expertise and passion for media and marketing management, and provided valuable insights into the theoretical and practical aspects of the field. She emphasized the importance of not just understanding the theories, but also being able to apply them in real-world situations and make informed decisions based on data and analysis.</p>
                                <p>Dr. Khare also spoke about the need to stay current with the latest developments and trends in the field, and to develop the skills and knowledge necessary to succeed in this constantly evolving industry.</p>
                                <p>This meeting with Dr. Khare was a valuable opportunity for me to gain a deeper understanding of media and marketing management and learn from a true expert in the field. I am grateful for the chance to learn from her and wish all those pursuing a career in this exciting and dynamic industry the best of luck on their journey.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection

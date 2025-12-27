@extends('front.layout.master')

@section('content')

<div class="blogs_resources_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/about-us.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>About</span>
                <br>
                <span class="bold">Orbit Eye Hospital</span>
            </div>
            <div class="banner_title">Mumbai’s Premier Eye Care Center Since 2006</div>
            <div class="banner_btns">
                <a class="purple_hollow_btn request_callback">Book An Appoinment</a>
                <a href="tel:+919820504546" class="purple_hollow_btn">Call emergency care</a>
            </div>
        </div>
    </div>
</div>

<!--@include('front.includes.features')-->

<div class="our_story">
    <!-- <div class="container"> -->
        <div class="inner_container">
            
            <div class="img_box">
                <img src="{{ asset('front/images/our-story.png') }}">
            </div>
            <div class="text_box">
                <div class="title">Our Story</div>
                <p class="sub_title">Founded in 2006, Orbit Eye Hospital started with a vision to provide world-class eye care services to Mumbai and surrounding areas. Over the years, it has evolved from a small clinic to a leading comprehensive eye care center equipped with the latest technology and highly skilled ophthalmologists.</p>
            </div>

        </div>
    <!-- </div> -->
</div>
<!-- our_story -->

<div class="mission_vision_values">
    <div class="container">
        <div class="inner_container">
            
            <div class="upper_sec">
                <div class="pane left_pane">
                    <div class="title">Our Mission</div>
                    <div class="text">To deliver exceptional eye care services through clinical excellence, advanced technology, and compassionate patient care. We strive to preserve and restore vision while upholding the highest standards of ethics and affordability.</div>
                </div>
                <div class="pane right_pane">
                    <div class="title">Our Vision</div>
                    <div class="text">To be recognized as Mumbai’s top eye care institution, setting benchmarks in patient satisfaction, clinical outcomes, and innovation.</div>
                </div>
            </div>
            <div class="lower_sec">
                <div class="left_pane">
                    <div class="title">Our Values</div>
                </div>
                <div class="right_pane">
                    <div class="info_boxes">
                        <div class="info_box">
                            <div class="sub_title">Excellence:</div>
                            <div class="text">Commitment to superior medical care standards</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Innovation:</div>
                            <div class="text">Embracing cutting-edge technologies & techniques</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Accessibility:</div>
                            <div class="text">Making quality eye care affordable and available</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Compassion:</div>
                            <div class="text">Treating every patient with empathy and respect</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Integrity:</div>
                            <div class="text">Maintaining transparency and ethical practice</div>
                        </div>
                        <div class="info_box">
                            <div class="sub_title">Excellence:</div>
                            <div class="text">Commitment to superior medical care standards</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- mission_vision_values -->

<div class="founders">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading center">Know about our founders</div>

            <div class="info_boxes">
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/founders/dr-amjad-umer-furniturewala.png') }}">
                    </div>
                    <div class="text_box">
                        <div class="title">Dr. Amjad Umer Furniturewala </div>
                        <div class="sub_title">Medical Director, Orbit Eye Hospital</div>
                        <p>Dr. Amjad Umer Furniturewala is the Proprietor and Medical Director of Orbit Eye Hospital, one of Mumbai's premier eye care institutions. A Gold Medalist in the Diploma in Ophthalmic Medicine and Surgery (DOMS) and holding qualifications including MS Ophthalmology from the UK and FRCS from the Royal College of Surgeons, Dr. Amjad is widely recognized for his extensive expertise in cataract and refractive surgeries. With over 20,000 cataract surgeries and more than 10,000 LASIK procedures performed, he has vast experience in advanced laser eye surgeries including SMILE. He is skilled in managing complex ophthalmic trauma cases, including intraocular foreign bodies, chemical burns, and corneo-scleral tear repairs.</p>
                        <p>Dr. Amjad is also proficient in lacrimal sac surgeries, oculoplasty, strabismus correction, keratoplasty, glaucoma filtering surgeries, and administering intravitreal injections for the management of endophthalmitis. He leads a competent team at Orbit Eye Hospital, committed to employing cutting-edge technologies and maintaining the highest standards of patient care.</p>
                        <p>Under his leadership, Orbit Eye Hospital was the first center in Maharashtra to introduce the Smart Pulse technology for touchless LASIK and has been awarded for excellence in eye care by prominent authorities.</p>
                    </div>
                </div>
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/founders/dr-lakshmi-hari-bipin-kattana.png') }}">
                    </div>
                    <div class="text_box">
                        <div class="title">Dr. Lakshmi Hari Bipin Kattana</div>
                        <div class="sub_title">Anterior Segment & Cornea Specialist</div>
                        <p>Dr. Lakshmi Hari Bipin Kattana is a seasoned ophthalmologist at Orbit Eye Hospital with over 15 years of expertise in anterior segment and corneal diseases. Holding an MS degree, DNB qualifications, and a Fellowship in Anterior Segment and Cornea, she brings deep knowledge and skill to her practice.</p>
                        <p>She expertly performs a variety of surgeries including cataract extraction, LASIK refractive surgery, pterygium removal, corneal transplantation, and repair of corneal and scleral tears. Dr. Lakshmi's patient-focused care combines advanced surgical techniques with compassionate treatment, ensuring the best possible outcomes.</p>
                        <p>As a dedicated member of the Orbit Eye Hospital team, Dr. Lakshmi continually updates her training to incorporate the latest innovations, positioning her as a reliable and trusted doctor for complex anterior segment issues.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- founders -->

<div class="added_feature_boxes">
    <div class="container">
        <div class="inner_container">
            
            <div class="info_box">
                <div class="icon"><img src="{{ asset('front/images/icons/experience.png') }}"></div>
                <div class="text">19+ Years of Dedicated<br> Eye Care Service</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="{{ asset('front/images/icons/surgeries.png') }}"></div>
                <div class="text">Over 50,000 Successful<br> Surgeries Performed</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="{{ asset('front/images/icons/technology.png') }}"></div>
                <div class="text">State-of-the-art Facility <br> in Mumbai Suburbs</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="{{ asset('front/images/icons/team.png') }}"></div>
                <div class="text">Highly Qualified  <br> Specialist Team</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="{{ asset('front/images/icons/ratings.png') }}"></div>
                <div class="text">High Patient  <br> Satisfaction Ratings</div>
            </div>
            <div class="info_box">
                <div class="icon"><img src="{{ asset('front/images/icons/insurance.png') }}"></div>
                <div class="text">Affiliated With Major  <br> Insurance Providers</div>
            </div>

        </div>
    </div>
</div>
<!-- feature_boxes -->

<div class="why_trust">
    <div class="container">
        <div class="inner_container">

            <div class="heading">Why Patients Trust Us</div>
            
            <div class="info_boxes">
                <div class="info_box">
                    <div class="text">Experienced medical team <br> trained at premier institutions</div>
                </div>
                <div class="info_box">
                    <div class="text">Advanced infrastructure with latest <br> diagnostic and surgical equipment</div>
                </div>
                <div class="info_box">
                    <div class="text">Comprehensive care from <br> pediatric to geriatric patients</div>
                </div>
                <div class="info_box">
                    <div class="text">Thousands of <br> successful surgeries</div>
                </div>
                <div class="info_box">
                    <div class="text">Surgeries annually with <br> excellent outcomes</div>
                </div>
                <div class="info_box">
                    <div class="text">Patient-centric service <br> focus and affordable care</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- why_trust -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection
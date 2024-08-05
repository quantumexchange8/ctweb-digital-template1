@extends('layout.master')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Service Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="/home_Esports">Home</a></li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Service Area
==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single mb-40">
                    <div class="page-content">
                        <h2 class="sec-title page-title h3">We give the best Services</h2>
                        <p class="">Business consultants offer a range of services, including strategic planning, analysis, process improvement, financial man organizational development to help businesses achieve their goals. Improving market positioning involves services understanding customer needs, differentiating from competitors, and effectively communicating unique value proposition sadaptability, and a sense of purpose.</p>
                        <p class="mb-30"> Strategies may include product innovation, targeted marketing, and strategic partnerships. A strong business strategy provides a roadmap for success, guiding decision-making, resource allocation, and goal-setting. </p>
                        <div class="row gy-4">
                            <div class="col-xxl-auto col-lg-5">
                                <img class="w-100" src="assets/img/service/service_inner_1.png" alt="img">
                            </div>
                            <div class="col-xxl-auto col-lg-7">
                                <img class="w-100" src="assets/img/service/service_inner_2.png" alt="img">
                            </div>
                        </div>

                        <h3 class="sec-title page-title mt-35">Solutions We Offer</h3>
                        <p class="mb-30">Technology can be leveraged for business growth through digital transformation, automation, data analytics, and innovative solutions. These tools enhance efficiency, customer experience, and overall competitiveness Organizational culture influences employee morale, innovation, and overall performance</p>
                        <div class="row gy-30 gx-30 justify-content-center">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="service-card">
                                    <div class="box-img">
                                        <img src="assets/img/bg/service_card_bg_1.jpg" alt="Service">
                                    </div>
                                    <div class="service-card-icon">
                                        <div class="icon">
                                            <img src="assets/img/icon/service_card_1.svg" alt="Icon">
                                        </div>
                                        <div class="service-card-num">
                                            <span>01</span>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="/home_serviceDetails">Growth Force Consulting</a></h3>
                                        <p class="box-text">Effective cash flow management involves man monitoring expenses, maintaining a buffer for emergencies, timely invoicing</p>
                                        <a href="/home_serviceDetails" class="link-btn">Read More<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="service-card">
                                    <div class="box-img">
                                        <img src="assets/img/bg/service_card_bg_1.jpg" alt="Service">
                                    </div>
                                    <div class="service-card-icon">
                                        <div class="icon">
                                            <img src="assets/img/icon/service_card_2.svg" alt="Icon">
                                        </div>
                                        <div class="service-card-num">
                                            <span>02</span>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <h3 class="box-title"><a href="/home_serviceDetails">Market Insight Analytics</a></h3>
                                        <p class="box-text">Business consulting involves providing expert advice and services to businesses improve their performance and achieve.</p>
                                        <a href="/home_serviceDetails" class="link-btn">Read More<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav product-tab-style1 mt-40 pb-0" id="productTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Insightful Strategies</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link th-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Opti Serve Solutions</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link th-btn" id="tech-tab" data-bs-toggle="tab" href="#tech" role="tab" aria-controls="tech" aria-selected="true">Tech Flex Strategies</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p>Business consulting firms offer a range of services, including strategic planning, market analysis, financial advisory, and operational improvement. Market research services help businesses understand their target</p>
                                <p class="mb-30">A business strategist focuses on developing long-term plans to achieve business goals, considering factors such as market dynamics, competitive landscape, and internal capabilities. Technology consulting assists businesses in adopting and leveraging advanced technologies to enhance efficiency, streamline processes, and stay competitive in the digital landscape Financial advisory services help businesses.</p>
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-6">
                                        <img class="w-100" src="assets/img/service/service_inner_3.png" alt="img">
                                    </div>
                                    <div class="col-xxl-3 col-6">
                                        <img class="w-100" src="assets/img/service/service_inner_4.png" alt="img">
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="service-details-inner-wrap">
                                            <div class="service-icon">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                            <div class="service-inner-details">
                                                <p class="service-inner-wrap-text">CALL US TO GET A FREE QUOTE</p>
                                                <h4 class="service-inner-wrap-title">+112 (789) 568 25</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <p> Implementing strong firewalls, regularly updating software, conducting employee training on security practices, and employing encryption methods are effective ways to enhance the cybersecurity. Identifying target audiences, crafting a compelling message, choosing effective channels, monitoring and adapting to market trends, and measuring campaign goods performance are crucial components of a successful marketing strategy.</p>
                                <p class="mb-30"> Businesses can adopt sustainable practices by reducing waste, optimizing energy usage, sourcing eco-friendly materials, and engaging in community initiatives.</p>
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-6">
                                        <img class="w-100" src="assets/img/service/service_inner_5.png" alt="img">
                                    </div>
                                    <div class="col-xxl-3 col-6">
                                        <img class="w-100" src="assets/img/service/service_inner_6.png" alt="img">
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="service-details-inner-wrap">
                                            <div class="service-icon">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                            <div class="service-inner-details">
                                                <p class="service-inner-wrap-text">CALL US TO GET A FREE QUOTE</p>
                                                <h4 class="service-inner-wrap-title">+514 (854) 325 64</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tech" role="tabpanel" aria-labelledby="tech-tab">
                                <p>Technology can be leveraged for business growth through digital transformation, automation, data analytics, and innovative solutions. These tools enhance efficiency, customer experience, and overall competitiveness Organizational culture influences employee morale, innovation, and overall performance</p>
                                <p class="mb-30">Companies can enhance efficiency through streamlined processes, employee training, adopting technology, continuous performance evaluation. Market research helps corporation businesses understand consumer needs, market trends, an competition, enabling informed decision-making strategic planning.</p>
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-6">
                                        <img class="w-100" src="assets/img/service/service_inner_7.png" alt="img">
                                    </div>
                                    <div class="col-xxl-3 col-6">
                                        <img class="w-100" src="assets/img/service/service_inner_8.png" alt="img">
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="service-details-inner-wrap">
                                            <div class="service-icon">
                                                <i class="fal fa-phone"></i>
                                            </div>
                                            <div class="service-inner-details">
                                                <p class="service-inner-wrap-text">CALL US TO GET A FREE QUOTE</p>
                                                <h4 class="service-inner-wrap-title">+934 (245) 122 62</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">All Services</h3>
                        <ul>
                            <li>
                                <a href="/blog">Visionary Vantage</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="/blog">Apex Accelerate</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="/blog">Catalyst Connect</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="/blog">Ascend Xpertise</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="/blog">Strato Sync Solutions</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="/blog">Innovate Hub Connect</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_download  ">
                        <h4 class="widget_title">Download</h4>
                        <div class="download-widget-wrap">
                            <a href="/home_serviceDetails" class="th-btn">DOWNLOAD PDF</a>
                            <a href="/home_serviceDetails" class="th-btn style4">DOWNLOAD DOC</a>
                        </div>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Winner of Last Session</h3>
                        <div class="widget-banner text-center">
                            <div class="logo">
                                <img src="assets/img/tournament/1-9.png" alt="img">
                            </div>
                            <h4 class="title text-white mb-n2 mt-20">Score: 16000</h4>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
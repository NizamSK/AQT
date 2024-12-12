@extends('website.common.main')
@section('content')

<section class="hbanner">
    <div class="banner-slider">
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide1.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide1-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide1.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide1logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">SERIES</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">When a struggling immigrant inherits a mysterious gift from a stranger, he believes it will  bring him fame and fortune, only to discover it is the start of a dark and violent curse</p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">SUPERNATURAL THRILLER</div>
                                <a href="javascript:;" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide2.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide2-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide2.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide2logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">SERIES</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">It is an action adventure set in the forgotten glory of the Arab World  in today’s timeline.  It aims at celebrating the idea of Arabic pride (Fakhr) - the Arabic emotion of honoring the glories of Arabic history, tied together by common culture, ethos, language, civilization, history, individuality, geography, politics & Fantasy!</p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">ADVENTURE | ACTION | FANTASY</div>
                                <a href="javascript:;" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide3.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide3-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide3.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide3logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">MOVIE</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">Greed & Power overstep in to the Macabre Antecedents of the “Black Tongue”: a Phenomenon unleashes in retribution with never before Fury</p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">HORROR | CRIME | THRILLER | SUPARNATURAL</div>
                                <a href="javascript:;" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide4.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide4-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide4.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide4logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">MOVIE</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">Buddha reborn today as a teenager<br>The Outcaste | The Rebel | The Deliverer!</p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">DRAMA | HUMOUR</div>
                                <a href="javascript:;" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide5.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide5-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide5.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide5logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">SERIES</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">Seemingly ordinary reunions take a dark and often times deadly turn in a seven-part anthology series that explores how time and fate can be a dreadful mix!</p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">ANTHOLOGY</div>
                                <a href="{{route('website.apply',['returnurl'=>'seven-encounters'])}}" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide6.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide6-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide6.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide6logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">MOVIE</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">A struggling musician becomes obsessed with finding his lost girlfriend when she suddenly disappears the morning after he records the song destined to change his life!</p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">DRAMA</div>
                                <a href="javascript:;" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="bimgwrap">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('website/assets/images/slide7.jpg')}}">
                    <source media="(max-width: 768px)" srcset="{{asset('website/assets/images/slide7-mobile.jpg')}}">
                    <img src="{{asset('website/assets/images/slide7.jpg')}}" alt="Slide" class="w-100">
                </picture>
            </div>
            <div class="position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-end">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 pb-4 pb-xl-5">
                            <img src="{{asset('website/assets/images/slide7logo.png')}}" alt="Slide Logo" class="img-fluid mb-4 mb-xl-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <img src="{{asset('website/assets/images/aqt.png')}}" alt="AQT" class="img-fluid me-2">
                                <span class="desc lg">SERIES</span>
                            </div>
                            <p class="desc text-second mb-4 mb-xl-5">2 Teens start as petty criminals! As young Adults  terrorize the law and the masses across towns & cities with Car-Jacking, Illicit liquor, Drugs, Kidnapping, Rape, Murder… Eventually, their last exploit escalates to Prime ministers Office!. </p>
                            <div class="d-flex align-items-center">
                                <div class="primary-btn nohover">CRIME | THRILLER</div>
                                <a href="javascript:;" class="colored-btn ms-3 ms-xl-4">
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3386 1.16091L1.66098 18.8386M19.3386 1.16091L18.8336 15.8081M19.3386 1.16091L4.69143 1.66599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="coming-soon">
    <img src="{{asset('website/assets/images/coming-soon.jpg')}}" alt="Coming soon" class="w-100">
</section>
<section class="projects bg-black">
    <div class="container py-5">
        <h2 class="sec-title text-uppercase mb-4 mb-lg-5">Our Projects</h2>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project1.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">The Beneficiary</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-6 mb-3">Supernatural Thriller</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">1 Ep-60 minutes </span></div>
                        <div class="col-md-6 mb-3">Episodes: <span class="text-second">08</span></div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vikram Dasgupta</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Scott Larson</span></div>
                        <div class="col-12 text-second mt-2 mb-4">When a struggling immigrant inherits a mysterious gift from a stranger, he believes it will  bring him fame and fortune, only to discover it is the start of a dark and violent curse</div>
                        <div class="col-12">
                            <a href="javascript:;" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row flex-md-row-reverse">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project2.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">Abbasid Chronicles</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-6 mb-3">Adventure | Action | Fantasy</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English & Arabic</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">1 Ep-60 minutes </span></div>
                        <div class="col-md-6 mb-3">Episodes: <span class="text-second">10</span></div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vikram Dasgupta</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Vinod Raman Nair</span></div>
                        <div class="col-12 text-second mt-2 mb-4">The Abbasid Chronicles is an action-packed adventure set in the forgotten glory of the Arab world, blending mystery, conspiracy, and fantasy. Unveiling a global plot that threatens the world, it celebrates Arabic pride, history, and culture while exploring themes of honor, identity, and existentialism. A thrilling journey where past and present collide.</div>
                        <div class="col-12">
                            <a href="javascript:;" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project3.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">Stitched</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-6 mb-3">Horror | Crime | Thriller | Supernatural</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">115 minutes </span></div>
                        <div class="col-md-6 mb-3">Movie</div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vikram Dasgupta</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Scott Larson</span></div>
                        <div class="col-12 text-second mt-2 mb-4">When a struggling immigrant inherits a mysterious gift from a stranger, he believes it will  bring him fame and fortune, only to discover it is the start of a dark and violent curse</div>
                        <div class="col-12">
                            <a href="javascript:;" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row flex-md-row-reverse">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project4.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">Mlecchan</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-6 mb-3">Drama | Humor</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">130 minutes </span></div>
                        <div class="col-md-6 mb-3">Movie</div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vinod Raman Nair</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Vinod Raman Nair</span></div>
                        <div class="col-12 text-second mt-2 mb-4">Buddha reborn today as a teenager<br>The Outcaste | The Rebel | The Deliverer!</div>
                        <div class="col-12">
                            <a href="javascript:;" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project5.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">7 Encounters</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-6 mb-3">Anthology</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">1 Ep-30 minutes </span></div>
                        <div class="col-md-6 mb-3">Episodes: <span class="text-second">07</span></div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vikram Dasgupta</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Scott Larson</span></div>
                        <div class="col-md-6 mb-3">Executive Producers: <span class="text-second">Mathew Hart</span></div>
                        <div class="col-12 text-second mt-2 mb-4">Seemingly ordinary reunions take a dark and often times deadly turn in a seven part anthology series that explores how time and fate can be a dreadful mix!</div>
                        <div class="col-12">
                            <a href="{{route('website.apply',['returnurl'=>'seven-encounters'])}}" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row flex-md-row-reverse">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project6.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">Lucy Kills Dragonflies</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-6 mb-3">Romance | Drama</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">120 minutes </span></div>
                        <div class="col-md-6 mb-3">Movie</div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vikram Dasgupta</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Scott Larson</span></div>
                        <div class="col-12 text-second mt-2 mb-4">A struggling musician becomes obsessed with finding his lost girlfriend when she suddenly disappears the morning after he records the song destined to change his life!<br>“A Star is Born” meets “Eternal Sunshine of the Spotless Mind”</div>
                        <div class="col-12">
                            <a href="javascript:;" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-single mb-5 pb-lg-5">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="{{asset('website/assets/images/projects/project7.jpg')}}" alt="Project" class="w-100 br20">
                </div>
                <div class="col-md-7">
                    <div class="sec-title fw-medium mb-4">F-Law</div>
                    <div class="row gx-xl-5 desc md fw-medium">
                        <div class="col-md-12 mb-3">Crime | Thriller</div>
                        <div class="col-md-6 mb-3">Language: <span class="text-second">English</span></div>
                        <div class="col-md-6 mb-3">Duration: <span class="text-second">1 Ep-45 minutes </span></div>
                        <div class="col-md-6 mb-3">Episodes: <span class="text-second">08</span></div>
                        <div class="col-md-6 mb-3">Directed by: <span class="text-second">Vikram Dasgupta</span></div>
                        <div class="col-md-6 mb-3">Written by: <span class="text-second">Sanjeev Kotnala</span></div>
                        <div class="col-md-6 mb-3">Executive Producers: <span class="text-second">Mathew Hart</span></div>
                        <div class="col-md-12 mb-3">Key Points: <span class="text-second">Based in New Delhi, India a true crime story</span></div>
                        <div class="col-12 text-second mt-2 mb-4">2 Teens start as petty criminals! As young Adults  terrorize the law and the masses across towns & cities with Car-Jacking, Illicit liquor, Drugs, Kidnapping, Rape, Murder… Eventually, their last exploit escalates to Prime ministers Office!. </div>
                        <div class="col-12">
                            <a href="javascript:;" class="primary-btn hovered">
                                Explore
                                <svg class="ms-2" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9H1M18 9L10.7143 17M18 9L10.7143 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('customjs')

@endsection
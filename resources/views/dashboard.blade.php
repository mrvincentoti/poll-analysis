@extends('layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">Welcome!</h2>
                    </div>
                    <div class="col-auto">
                        <form class="form-inline">
                            <div class="form-group d-none d-lg-inline">
                                <label for="reportrange" class="sr-only">Date Ranges</label>
                                <div id="reportrange" class="px-2 py-2 text-muted">
                                    <span class="small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <!-- Recent Activity -->
                    <div class="col-md-12 col-lg-4 mb-4">
                        <div class="card timeline shadow">
                            <div class="card-header">
                                <strong class="card-title">Influencers - Today</strong>
                            </div>
                            <div class="card-body" data-simplebar style="height:355px; overflow-y: auto; overflow-x: hidden;">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <a href="profile-posts.html" class="avatar avatar-sm">
                                                    <img src="{{asset('assets/images/obi.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <p class="small mb-0"><strong>Peter Obi</strong></p>
                                                <small>
                                                    <a href="profile-posts.html" class="avatar avatar-sm">
                                                        <img src="{{asset('assets/images/lp.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </small>
                                            </div>
                                            <div class="col-6">
                                                <h3 class="card-title mb-0 text-right counter-count">1987</h3>
                                                <p class="small text-muted mb-0 text-right">
                                                    <span class="fe fe-arrow-up fe-12 text-success"></span>
                                                    <span>+2.9%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <a href="profile-posts.html" class="avatar avatar-sm">
                                                    <img src="{{asset('assets/images/tinubu.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <p class="small mb-0"><strong>Bola Tinubu</strong></p>
                                                <small>
                                                    <a href="profile-posts.html" class="avatar avatar-sm">
                                                        <img src="{{asset('assets/images/apc.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </small>
                                            </div>
                                            <div class="col-6">
                                                <h3 class="card-title mb-0 text-right counter-count">1789</h3>
                                                <p class="small text-muted mb-0 text-right">
                                                    <span class="fe fe-arrow-up fe-12 text-success"></span>
                                                    <span>+1.9%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <a href="profile-posts.html" class="avatar avatar-sm">
                                                    <img src="{{asset('assets/images/atiku.jpg')}}" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <p class="small mb-0"><strong>Atiku Abubakar</strong></p>
                                                <small>
                                                    <a href="profile-posts.html" class="avatar avatar-sm">
                                                        <img src="{{asset('assets/images/pdp.png')}}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </small>
                                            </div>
                                            <div class="col-6">
                                                <h3 class="card-title mb-0 text-right counter-count">807</h3>
                                                <p class="small text-muted mb-0 text-right">
                                                    <span class="fe fe-arrow-up fe-12 text-success"></span>
                                                    <span>-0.3%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / .list-group -->
                            </div> <!-- / .card-body -->
                        </div> <!-- / .card -->
                    </div> <!-- / .col-md-6 -->
                    <!-- Striped rows -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Competition</strong>
                            </div>
                            <div class="card-body my-n2">
                                <!--div id="sentimentByCandidateChart" style="height: 332px;"></div-->
                                <div id="sentimentByCandidateChart-2" style="height: 332px;"></div>
                            </div>
                        </div>
                    </div> <!-- Striped rows -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Geographic</strong>
                            </div>
                            <div class="card-body my-n2">
                                <!--div id="sentimentByCandidateChart" style="height: 332px;"></div-->
                                <div id="geographic-map" style="height: 332px;"></div>
                            </div>
                        </div>
                    </div> <!-- Striped rows -->
                </div> <!-- .row-->

                <div class="row items-align-baseline">
                    <div class="col-md-12 col-lg-3">
                        <div class="card shadow eq-card timeline">
                            <div class="card-header">
                                <strong class="card-title">Tweets</strong>
                                <a class="float-right small text-muted" href="{{ route('geodata') }}">Geo Data</a>
                            </div>
                            <div class="card-body" data-simplebar="init" style="height: 360px; overflow-y: auto; overflow-x: hidden;">
                                <div class="simplebar-wrapper" style="margin: -20px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Jagaban is the answer to the questions on many Nigerian lips.
                                                                    #Tinubu for better future of Nigerians.
                                                                    Good morning all!
                                                                    #TinubuShettima2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Campaigning for #Tinubu is so easy, highly sellable, widely accepted.
                                                                    I don't envy OBIdients, they are selling a product they once called trash😀😀😀
                                                                    We are following the man that knows the way.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley</strong>
                                                                <span class="text-muted mx-2">
                                                                    Video: Lagos
                                                                    Photos: Jigawa
                                                                    When you are blessed you are blessed.
                                                                    Continue to hate and watch #Asiwaju become president.
                                                                    #Tinubu is a natural mobilizer.
                                                                    #TinubuShettima2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@officialABAT</strong>
                                                                <span class="text-muted mx-2">
                                                                    Vote #Tinubu 2023# he's taking us through the future with smiles and hope...
                                                                </span>
                                                                <strong>Tiny Admin</strong>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">47m</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley</strong>
                                                                <span class="text-muted mx-2">
                                                                    Indigbos in Lagos are BATified, they know it is not by tribe, it is about who can deliver the divided of democracy.
                                                                    #Tinubu is way ahead of all
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Oceediary</strong>
                                                                <span class="text-muted mx-2">
                                                                    OTA… Are you ready?
                                                                    We had a nice outing yesterday in preparation for our own rally… We will appreciate a retweet from all OBIdients. #Obidatti4ota
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 9</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>
                                                                    @Babatoclean1
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Where is #Tinubu?
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 8</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Jessehallidaygi
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Our Asaba Obidient child has been offered a Scholarship till the University level. 🥰🥰
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 3</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@mgbikss
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Congratulations 🎊 PETER OBI BECOMES HONORARY CITIZEN OF DALLAS 💟🍾.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@PeterObiUpdates</strong>
                                                                <span class="text-muted mx-2">
                                                                    Gen John Enenche. Former Defense spokesman endorse HE Peter Obi. We keep moving forward ⏩⏩
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@CHIJIOKE013
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Just Retweet #Tinubu
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 4</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ije86</strong>
                                                                <span class="text-muted mx-2">
                                                                    Calabar People are Pressing The necks of BATified and Atikulated members.

                                                                    Tinubu and ATIKU Don Enter wahala this season 😅🤣😂😂
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 3</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley</strong>
                                                                <span class="text-muted mx-2">
                                                                    Indigbos in Lagos are BATified, they know it is not by tribe, it is about who can deliver the divided of democracy.
                                                                    #Tinubu is way ahead of all
                                                                </span>
                                                                <strong>Tiny Admin</strong>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@multimeverse
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Let's do this guys! Talk to two people about peter obi today. This way we can reach more people. & You can also call people in rural areas & educate them too about vote buying & giving out their pvc numbers.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>
                                                                    @maryam_shehu_
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    I'm so proud of Nigerian Youth. We have to put this madness to a stop!

                                                                    Together, we can retire these monsters
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 1</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Omenka7Crown</strong>
                                                                <span class="text-muted mx-2">
                                                                    This 7 point agenda is all encompassing and this is exactly what Nigeria needs right now.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 8</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@AO23NG</strong>
                                                                <span class="text-muted mx-2">
                                                                    Support Atiku x Okowa 2023. #AO23 Join the movement to #Rescue, #Reset and #Rebuild Nigeria.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@tjaybit</strong>
                                                                <span class="text-muted mx-2">
                                                                    Ko wane gida akwai Baba, A Najeria kuma, akwai ATIKU. Atikun kuma, na kowa ne. ATIKU….NAKOWA #AtikuOkowa2023
                                                                </span>
                                                                <strong>Tiny Admin</strong>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 4</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Rasheethe
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Uyo standstill for Atiku, as the PDP formally flags its 2023 presidential campaign at the city's nest of champions.

                                                                    #AtikuOkowa2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 10</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley</strong>
                                                                <span class="text-muted mx-2">
                                                                    United we are! 👏👏👏

                                                                    #AtikuOkowa2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">21m</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@Iam_Adekunley</strong>
                                                                <span class="text-muted mx-2">
                                                                    Indigbos in Lagos are BATified, they know it is not by tribe, it is about who can deliver the divided of democracy.
                                                                    #Tinubu is way ahead of all
                                                                </span>
                                                                <strong>Tiny Admin</strong>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@IAOkowa</strong>
                                                                <span class="text-muted mx-2">
                                                                    Game on!

                                                                    #AtikuOkowa2023
                                                                </span>
                                                                <strong>Tiny Admin</strong>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>





                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@abuson001
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Meet the next President federal Republic of Nigeria come 2023 Insha Allah.
                                                                    @atiku019

                                                                    @Atikuhub

                                                                    @fkeyamo

                                                                    @atiku

                                                                    @abbalala3

                                                                    @renoomokri

                                                                    @realFFK

                                                                    @Rasheethe

                                                                    @jrnaib2

                                                                    @emmaikumeh

                                                                    #AtikuOkowa2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">10h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@iyorchiayu
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    At the newly furnished People's Democratic Institute (PDI), ready for commissioning.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">16h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@JustinIke111
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Atiku is Coming With a vision to foster a united Nigeria in which all citizens can live a happy, healthy and productive life.
                                                                    #AtikuOkowa2023
                                                                    #IStandWithAtiku
                                                                    #USEED
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">15h</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@IAOkowa
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    After the North-East Consultative Meeting in Bauchi State today, we received thousands of decamped members of the APC to our party, the
                                                                    @OfficialPDPNig
                                                                    !
                                                                    #AtikuInBauchi #AO23 #AtikuOkowa2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@bukolasaraki

                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    The energy and atmosphere in Uyo ahead of the #PDPCampaignFlagOff is exhilarating!

                                                                    Our mission to rescue and rebuild this nation has only just begun.

                                                                    #PowerToThePeople #AtikuOkowa2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 10</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@AWaziri7

                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    Ready and fit for the job. He knows it and can do it better. Nigeria's youth are committed for your project come 2023.

                                                                    #AtikuOkowa2023..✌🏽
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">23h</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@AWaziri7

                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    2023: Victory for Atiku is victory to OneNigeria & UnitedCitizens

                                                                    LET'S MAKE IT HAPPEN!! 💯✔️
                                                                    #AtikuOkowa2023
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">Oct 12</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="pb-3 timeline-item item-primary">
                                                        <div class="pl-5">
                                                            <div class="mb-1 small">
                                                                <strong>@ABBAADA47983410
                                                                </strong>
                                                                <span class="text-muted mx-2">
                                                                    A New Working Nigeria is Possible with Alhaji
                                                                    @atiku
                                                                    Abubakar.

                                                                    #VotePDP2023
                                                                    #AtikuKawai
                                                                    #AtikuOkowa2023 Insha Allahu.
                                                                </span>
                                                            </div>
                                                            <p class="small text-muted"><span class="badge badge-light">1h</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 360px; height: 448px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 346px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div> <!-- / .card-body -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-header">
                                <strong class="card-title">Most popular hasgtag</strong>
                            </div>
                            <div class="card-body">
                                <div id="mostPopularHashtag"></div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                    <div class="col-md-12 col-lg-5">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-header">
                                <strong class="card-title">Daily tweets( Past 10 days)</strong>
                            </div>
                            <div class="card-body">
                                <div class="chart-widget mb-2">
                                    <div id="dailyTweet"></div>
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

</main> <!-- main -->
@endsection
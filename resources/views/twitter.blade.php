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
                                    <div id="sentimentByCandidateChart-3" style="height: 332px;"></div>
                                </div>
                            </div>
                        </div> <!-- Striped rows -->
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
                        <!-- <div class="col-md-12 col-lg-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">Geographic</strong>
                            </div>
                            <div class="card-body my-n2">
                                <div id="geographic-map" style="height: 332px;"></div>
                            </div>
                        </div>
                    </div> Striped rows -->
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
                                                        <!---->


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
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Nobsdaslushhkid
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        When Peter Obi’s supporters started with the rallies, these people kept saying “ Wait,until campaign starts nah, you’d see”.
                                                                        Nna’ it’s been 3 years since campaign started and even with your structure all over the world,noting is being felt.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@DavidHundeyin
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        I support Peter Obi because I believe in his mission and candidacy.
                                                                        I also believe that anyone directly involved in Lekki Massacre denialism should be drowned in a vat of hydrochloric acid.
                                                                        Both of these statements are true at the same time, and I mentioned only one name here.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@firstladyship
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Peter Obi was with #EndSARS through & through. He never shied away from Responsibilities. There’ll be no crass dereliction of duty on his watch. Give Obi a break, he is no Jesus for Christ’s sake!
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@obi_Nwosu
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        One thing I admire about Peter Obi, is the fact that he sees the role of President, like a serious job and he has been going from place to another trying to convince millions of Nigerians to employ him. The presidency is not by turn by turn or inheritance. PO wants to serve
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@drpenking
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        A Presidential candidate that removes a controversial figure from his campaign team..
                                                                        Is someone that listens to the youth..
                                                                        A country that considers it youth is a country that priotises it future.
                                                                        One again, Peter Obi is clear..
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Iam_Adekunley
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Osun people defy heavy down pour to march for #Tinubu and #Shettima.
                                                                        The love is real!
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Ahmy_ng
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Evans the Kidnapper left #PeterObi’s Anambra state for #Tinubu’s Lagos state b’cos Anambra’s security architecture set up by
                                                                        @PeterObi made it impossible 4 such elements to operate successfully” unlike Tinubu’s lagos where they saw a safe heaven 4 their operations.
                                                                        Go & verify!!
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->

                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Oyefin_Oba
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        There are 371 tribes in Nigeria. #Tinubu is the only candidate that's tested and can be trusted to work with all tribes without any form of discrimination. But you see that "naanu"...his presidency will be an igbo presidency. Discrimination everywhere. Olorun maje ka ribi.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Ahmy_ng
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
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Ahmy_ng
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Peter Obi appointed Gen. John Enenche, a man who discredited the Lekki massacre as a campaign team member & Obidients are trying to defend this; But if other candidates especially Atiku or Tinubu had done this, the internet will be on f!re. Y'all need to stop being hypocrites.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@DanielRegha
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Peter Obi appointed Gen. John Enenche, a man who discredited the Lekki massacre as a campaign team member & Obidients are trying to defend this; But if other candidates especially Atiku or Tinubu had done this, the internet will be on f!re. Y'all need to stop being hypocrites.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Wizebaba
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Some of you want Peter Obi to fail so bad... He can't be perfect, the truth remains that he is a better choice than your Atiku and Tinubu.
                                                                        PO or nothing.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@fisayosoyombo
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        When we criticise Tinubu or Atiku, we know the things you say.
                                                                        But when we criticise Peter Obi, you go "do you want to vote Jesus Christ"?
                                                                        I'm just watching your hypcrisy in 5D
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@517p705
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        You're expecting too much.
                                                                        Atiku was dishonest about Deborah's murder,
                                                                        Dishonest on North vs South Presidential Zoning
                                                                        Dishonest on party Chairmanship
                                                                        Dishonest in Primaries
                                                                        You want his followers to be honest about anything?
                                                                        Bold of you. 😂😂
                                                                        PDP is a cesspit of corruption.
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Nkemchor_
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Wike was asked if he is campaigning for Atiku Abubakar,
                                                                        Wike's response was "we are campaigning for PDP in Rivers state. He is not the only one in PDP. We have governorship candidate and Assembly members."
                                                                        LoL Mikano Boys Wike won't release Rivers state money for your boss
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@NengeTerna
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Apart from Obi, I won't even leave my house on election day. I've voted Atiku more than once. There's no way I can vote APC. The issues that the PCC is generating are genuine but not enough to make not vote for Obi. My mind is made. We all have our faults. No going back
                                                                    </span>
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->

                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@jagganiyu
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Of the three major presidential candidates i.e. Atiku, Shettima and Peter Obi, Peter Obi is the best among them.
                                                                        We never called PO a messiah, we don’t expect him to fix the country overnight but we expect him to do a really good job.
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@DanielRegha
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Obasanjo supported Buhari in 2015 & endorsed Atiku for president in 2018; We Nigerians criticized him over the years, but suddenly he's now the best ex-president cos he's endorsing ur faves. We d¤n't learn. Y'all want a new Nigeria when godfatherism is still at play? R!diculous.
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@ManLikeIcey
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        My fellow 4 Governors are very formidable, Atiku is very arrogant and has not won election yet.

                                                                        - Nyesome Wike live on Channels Tv.
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@itzz_blitz1
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Atiku deleting a tweet that was made from his handle condemning the killing of innocent Deborah and subsequently denying to have consented to the tweet is simply saying to the perpetrators "go ahead i dey your back".
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@VictorIsrael_
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        At this point Atiku and Tinubu should step down for Peter Obi and apologise to Nigerians for wasting their time. We will forgive them 📌
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Tope_soft
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Lowkey Atiku is uncharismatic and Boring.
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@FS_Yusuf_
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        PDP boys don finish meeting, them don come out dey defend Atiku deleting Deborah Tweet.🤣🤣🤣
                                                                        Una fingers go brèak for typing today. 🤣
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@Aboki_Nagari
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        I joined the Obidient movement mainly because I believed in PO's philosophy, if I'll join money politics I'll have join Atiku's train or BAT (which I still have the chance) and I'll get millions but I decided to be here to see a new Nigeria.
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@enevene2003
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Best Man for the Job.
                                                                        Retweet for Tinubu
                                                                        Like for Atiku.
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->


                                                        <div class="pb-3 timeline-item item-primary">
                                                            <div class="pl-5">
                                                                <div class="mb-1 small">
                                                                    <strong>@enevene2003
                                                                    </strong>
                                                                    <span class="text-muted mx-2">
                                                                        Some of you want Peter Obi to fail so bad... He can't be perfect, the truth remains that he is a better choice than your Atiku and Tinubu.
                                                                        PO or nothing
                                                                </div>
                                                                <p class="small text-muted"><span class="badge badge-light">6h</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!---->
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

                        <div class="col-md-12 col-lg-9">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-header">
                                    <strong class="card-title">Daily tweets( Past 10 days)</strong>
                                </div>
                                <div class="card-body">
                                    <div class="chart-widget mb-2 mr-2">
                                        <div id="dailyTweet" style="padding: 10px;"></div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->
                    </div> <!-- .row -->
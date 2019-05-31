<?php get_header() ?>
        <!-- =====================================
        ==== Start Hero -->

        <section class="hero section-padding" data-scroll-index="1">
            <div class="container">
                <div class="row">

                  <div class="section-head text-center col-lg-12">
                      <h3>About</h3>
                      <span><i></i><i></i><i></i></span>
                  </div>

                    <div class="col-lg-5">
                      <div class="hero-img mb-md50">
                        <div class="img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg" alt="">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-7">
                      <div class="content">
                          <h3>自己紹介</h3>
                          <span>僕自身の簡単な紹介です</span>
                          <p class="mb-10">和歌山県在住の30代後半の男性です。現在は地元に密着した仕事をしていますが、以前は県外で組み込み系開発の仕事に従事していました。</p>
                          <p class="mb-10">現職場のホームページ更新の担当になったことがきっかけでHTML、CSS等のフロントエンドに興味を持ち知見を広めるために現在学習中です。</p>
                          <p class="mb-10">趣味というほどではありませんが、和歌山にUターンしてからは超小規模ですが、家庭菜園で野菜を育てています。</p>
                        </div>
                      </div>

                    </div>
                </div>
        </section>

        <!-- End Hero ====
        ======================================= -->


        <!-- =====================================
        ==== Start Services -->

        <section class="hero section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-lg-12">
                        <h3>Achievement</h3>
                        <span><i></i><i></i><i></i></span>
                    </div>

                    <div class="col-lg-5">
                      <div class="hero-img mb-md50">
                        <div class="img">
                          <a class="linkImage" href="https://haruyuma.com" target="_blank"><img src="img/link.jpg" alt=""></a>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-7">
                      <div class="content">
                          <span>はじめてのホームページです</span>
                          <p class="mb-10">WordPressを使ってたちあげたはじめてのホームページです</p>
                          <p class="mb-10">⇦ 画像をクリックしてください</p>
                        </div>
                      </div>


                </div>
            </div>
        </section>

        <!-- End Services ====
        ======================================= -->


        <!-- =====================================
        ==== Start Blog -->

        <section class="blog section-padding bg-gray" data-scroll-index="5">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-lg-12">
                        <h3>Latest News</h3>
                        <span><i></i><i></i><i></i></span>
                    </div>

                    <div class="col-lg-4">
                        <div class="item mb-md50">
                            <div class="post-img">
                                <div class="img">
                                    <img src="img/blog/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <a href="#0">06 Aug 2017</a>
                                    <a href="#0">WordPress</a>
                                </div>
                                <h6><a href="#0">Master These Awesome New Skills in March 2018</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item mb-md50">
                            <div class="post-img">
                                <div class="img">
                                    <img src="img/blog/2.jpg" alt="">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <a href="#0">06 Aug 2017</a>
                                    <a href="#0">WordPress</a>
                                </div>
                                <h6><a href="#0">Best Design Items to Appeal to the Millennial Generation</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item">
                            <div class="post-img">
                                <div class="img">
                                    <img src="img/blog/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <a href="#0">06 Aug 2017</a>
                                    <a href="#0">WordPress</a>
                                </div>
                                <h6><a href="#0">The 20 Best Lightroom Presets You Need to Know About</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Blog ====
        ======================================= -->


        <!-- =====================================
        ==== Start Contact -->

        <section class="contact section-padding" data-scroll-index="6">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-lg-12">
                        <h3>Get In Touch</h3>
                        <span><i></i><i></i><i></i></span>
                    </div>

                    <div class="offset-lg-1 col-lg-10">
                      <form class="form" name="contact" method="POST" netlify>
                        <div class="messages"></div>
                          <div class="controls">
                            <div class="row">

                              <div class="col-md-6"><div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Name">
                              </div></div>

                              <div class="col-md-6"><div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email">
                              </div></div>

                              <div class="col-md-12"><div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Message" rows="4"></textarea>
                              </div></div>

                              <div class="col-md-12 text-center">
                                <button type="submit" id="sendMessageBtn" onclick="return OnSubmitClick();"><span>Send Message</span></button>
                              </div>

                          </div>
                        </div>
                      </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Contact ====
        ======================================= -->

<?php get_footer() ?>

 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.10&appId=367072603733280";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

   <section class="section section-blog-fw">

            <!--Section heading-->
           

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12"  >
                    <!--Featured image-->
                    <div class="card card-cascade wider reverse" style="max-width: 960px;">
                        <div class="view overlay hm-white-slight z-depth-1" style="max-width: 960px;align-self: center;" ">
                            <img src="<?= $hir['img'];?>" alt="Wide sample post image">
                            <a>
                                <div class=""></div>
                            </a>
                        </div>

                        <!--Post data-->
                        <div class="card-body text-center" style="max-width: 660px; min-width: 500px; align-self: center;">
                            <h2><a><?= $hir['cim'];?></a></h2>
                            <p>Írta: <a><?= $hir['szerzo'];?></a>,<?= $hir['datum'];?></p>

                            <!--Social shares-->
                            <div class="social-counters">

                                <!--Facebook-->
                             <div class="fb-share-button" data-href="http://localhost/index.php?r=hir/hir/&lt;?= $hir[&#039;id&#039;]?&gt;" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Findex.php%3Fr%3Dhir%252Fhir%252F%253C%253F%253D%2B%2524hir%255B%2527id%2527%255D%253F%253E&amp;src=sdkpreparse">Megosztás</a></div>

                                <!--Comments-->
                                <a class="btn btn-default">
                                    <i class="fa fa-comments-o left"></i>
                                    <span class="hidden-md-down">Komment</span>
                                </a>

                            </div>
                            <!--Social shares-->

                        </div>
                    <!--Post data-->
                    </div>

                    <!--Excerpt-->
                    <div class="col-lg-12">
                        <p><?= $hir['szoveg'];?></p>
                        <div class="fb-comments" data-href="http://localhost/index.php?r=hir/hir/<?= $hir['id']?>" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
            </div>
            <!--Grid row-->

        
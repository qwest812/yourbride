<!DOCTYPE html>
<html lang="en-US">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#
                  website: http://ogp.me/ns/website#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="google-site-verification" content="1CaBkLHREoyLnTJawsUBSzT30tyjvB3SG2G66peQHwA"/>
    <title>Ukrainian Women - Real Mail Order Brides From Ukraine</title>
    <link rel="icon" href="/favicon_main.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="/css/beforestyles.css" rel="stylesheet">
    <link href="/css/category.css" rel="stylesheet">


    <meta property="og:title" content="Ukrainian Women - Real Mail Order Brides From Ukraine"/>
    <meta property="og:url" content="https://yourbride.com/ukrainian-brides-sites/"/>
    <meta property="og:site_name" content="YourBride.com"/>
    <meta property="og:description"
          content="Finding the right mail order bride from Ukraine can be very difficult especially when there is a lot of scam sites around these days. But at Yourbride.com you can choose from a list of legitimate dating sites where you can meet pretty Ukraine women for marriage."/>
    <meta name="description"
          content="Finding the right mail order bride from Ukraine can be very difficult especially when there is a lot of scam sites around these days. But at Yourbride.com you can choose from a list of legitimate dating sites where you can meet pretty Ukraine women for marriage.">
    <meta name="keywords" content="Ukrainian bride">
    <link rel="canonical" href="https://yourbride.com/ukrainian-brides-sites/">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $.fn.counting = function (opts) {
            let defaults = {
                from: 0,
                to: null,
                easing: 'swing',
                fade: true,
                complete: null
            };
            let options = $.extend(defaults, opts);

            function format(num) {
                num = num.toFixed();
                return num
            }

            return this.each(function () {
                let obj = $(this);
                let from = options.from;
                if (obj.attr('data-from')) {
                    from = parseFloat(obj.attr('data-from'));
                }
                let to = options.to;
                if (obj.attr('data-to')) {
                    to = parseFloat(obj.attr('data-to'));
                }
                let duration = options.duration;

                obj.css('counter', from);
                if (options.fade) obj.css('opacity', 0.7);
                obj.animate(
                    {
                        counter: to,
                        opacity: 1
                    },
                    {
                        easing: options.easing,
                        duration: duration,

                        step: function (progress) {
                            obj.html(format(progress * to));
                        },
                        complete: function () {
                            obj.css('counter', null);
                            obj.html(format(to));
                            if (options.complete) {
                                options.complete(obj)
                            }
                        }
                    }
                )
            })
        }
    </script>
</head>
<body>

<nav class="header sticky" id="topMenu">

    <div>
        <a class="hamburger hide_on_large"></a>
        <a class="cross hide_on_large" style="display: none;"></a>
        <a href="/">
            <div class="logo"></div>
        </a>

    </div>
    <div class="header_link hide_on_mobile">
        <a href="/">top 10 sites</a>
        <div class="drop">
            <a class="drop_menu">All Countries Mail Order Bride</a>
            <div class="dropdown_content">
                <a href="/russian-brides-sites/">Russian Brides Sites</a>
                <a href="/ukrainian-brides-sites/">Ukrainian Brides Sites</a>
                <a href="/asian-brides-sites/">Asian Brides Sites</a>
                <a href="/latin-brides-sites/">Latin Brides Sites</a>
            </div>
        </div>
        <a href="/success-stories/">Success Stories</a>
        <a href="/blog/">blog</a>
        <a href="/quizzes/">Quizzes</a>
    </div>
    <div class="header_link1" style="display: none;">
        <a href="/">top 10 sites</a>
        <a href="/russian-brides-sites/">Russian Brides Sites</a>
        <a href="/ukrainian-brides-sites/">Ukrainian Brides Sites</a>
        <a href="/asian-brides-sites/">Asian Brides Sites</a>
        <a href="/latin-brides-sites/">Latin Brides Sites</a>
        <a href="/success-stories/">Success Stories</a>
        <a href="/blog/">blog</a>
        <a href="/quizzes/">Quizzes</a>

    </div>

</nav>


<div class="header_image clearfixCust category_header">
    <div class="cat_desc"><h1> {{$category['h1']}}</h1>
        <p> {{$category['short_content']}}</p></div>
    <div id="but_learn">
        <a href="#artiles_list_top" class="go_to">
            <span id="learnmore">
                Learn more
            </span>
        </a>
    </div>
    <form class="subscribe_form" method="post">
        <div class="row">
            <div class="subscribe_image col s12 center">
                <div class="image_form"></div>
            </div>
            <div class="sbscr_text center">
            </div>
            <div class="inner_contact">
                <input id="email" type="email" class="input_cont" name="email" placeholder="Email"/>
            </div>
        </div>
        <input type="hidden" class="form_text" name="form_text" value="">
        <input type="hidden" class="form_position" name="form_position" value="ukrainian-brides-sites_desktop_top">
        <div class="error"></div>
        <div class="row">
            <div class="col s12 center">
                <input type="submit" value="Subscribe" class="subscribe">
            </div>
        </div>
    </form>
</div>

<div class="articles_list" id="artiles_list_top" itemscope itemtype="http://schema.org/Table">
    @dump($pagesThisCategory)
    @dump($countPages)
    @if($countPages<=0)
        @include ('bright/contactForm')
    @else
        @foreach($pagesThisCategory as $key=>$page)
            <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
                <div class="product_image_col">
                    @if($key==0)
                        <div class="top_choice"></div>
                    @endif
                    <div class="image_article">
                        <a href="{{$page['local_url']}}">
                            <img src="{{$page['image']}}" alt="Victoria Brides" title="{{$page['title']}}"
                                 id="image_single_article" itemprop="logo">
                        </a>
                    </div>
                    <div class="main_stars">
                        <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                             itemtype="http://schema.org/AggregateRating">
                            <div style="display: none" itemprop="reviewCount">1</div>
                            <div style="display: none" itemprop="bestRating">10</div>
                            <div id="total_score" itemprop="ratingValue">{{$page['rating_site']}} </div>
                            <div class="stars"><span class="glyphicon glyphicon-star"
                                                     style="color: #fba735;"></span><span
                                        class="glyphicon glyphicon-star" style="color: #fba735;"></span><span
                                        class="glyphicon glyphicon-star" style="color: #fba735;"></span><span
                                        class="glyphicon glyphicon-star" style="color: #fba735;"></span><span
                                        class="glyphicon glyphicon-star half"></span></div>
                        </div>
                        <div class="votes small_votes">
                            ({{$page['votes']}} votes)
                        </div>
                    </div>
                    <a href="{{$page['visit_site']}}" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                        Visit Site
                    </a>
                </div>

                <div class="column_buttons">
                    <a href="{{$page['visit_site']}}" target="_blank" class="v_btn hide_on_mobile" rel="nofollow"
                       style="display: block;">
                        Visit Site
                    </a>

                    <div class="read_review_btn hide_on_mobile"><a href="{{$page['local_url']}}" target="_blank"
                                                                   class="read_full">Read review</a></div>
                </div>
                <div class="column_content">
                    <div class="cell_title">{{$key+1}} <span itemprop="name">{{$page['h1']}}</span></div>
                    <div class="cell_content">
                        {{$page['short_content']}}
                    </div>
                    <div class="rates row" style="margin-left: 0;">
                        <div class="green_number">{{$page['reply_rate']}}%
                            <div class="number_text"> Girl's reply rate</div>
                        </div>
                        <div class="green_number green_2"><span class="counter" data-from="0"
                                                                data-to="{{$page['girls_online']}}"></span>
                            <div class="number_text">Girl's online</div>
                        </div>
                    </div>
                    <div class="read_review_btn hide_on_large"><a href="{{$page['local_url']}}" target="_blank"
                                                                  class="read_full">Read review</a></div>
                </div>
            </div>


            {{-------}}

            <div class="line clearfixCust" id="line_article"></div>
            {{-------}}
            @if(($countPages==1 AND $key== $countPages-1) OR ($countPages>1 AND $key== 1))
                @include ('bright/contactForm')
                @endif
        @endforeach
    @endif


    <form class="hide_on_large form_on_mobile" method="post" style="background-color: #ffffff;">
        <div class="row">
            <div class="mobile_close_form"></div>

            <div class="subscribe_image col s12 center">
                <div class="image_form"></div>
            </div>
            <div class="sbscr_text center">
            </div>
            <div class="inner_contact center">
                <input id="email" type="email" class="input_cont" name="email" placeholder="Email"/>
            </div>
        </div>
        <input type="hidden" class="form_text" name="form_text" value="">
        <input type="hidden" class="form_position" name="form_position" value="ukrainian-brides-sites_mobile_articles">
        <div class="error"></div>

        <div class="row">
            <div class="col s12 center">
                <input type="submit" value="Subscribe" class="subscribe">
            </div>
        </div>

    </form>
    <div class="line clearfixCust" id="line_article"></div>

</div>

<div class="content_main clearfixCust" id="main_page_text">
    <div class="content_entry">
        <ul class="table_of_content">
            <li>
                <a href="#ukrainian_mail_order_bride" data-target="ukrainian_mail_order_bride" class="go_to">
                    Ukrainian Mail Order Bride - Find Beautiful Woman for Marriage
                </a>
            </li>
            <li>
                <a href="#why_are_ukrainian_women_good_for_marriage"
                   data-target="why_are_ukrainian_women_good_for_marriage" class="go_to">
                    Why Are Ukrainian Women Good for Marriage?
                </a>
            </li>
            <li>
                <a href="#tips_for_dating" data-target="tips_for_dating" class="go_to">
                    Tips for Dating Women from Ukraine
                </a>
            </li>
            <li>
                <a href="#are_ukrainian_mail_order_bride_real" data-target="are_ukrainian_mail_order_bride_real"
                   class="go_to">
                    Are Ukrainian Mail Order Bride Real?
                </a>
            </li>
            <li>
                <a href="#what_customers_say" data-target="what_customers_say" class="go_to">
                    What customers say about Ukrainian Mail Order Brides
                </a>
            </li>
        </ul>
        <div>
            {!! $category['content']!!}
        </div>
    </div>
    <div class="related_posts clearfixCust">
        <div class="content_header">
            <h3 style="text-align: center;">Dating Tips for Men Seeking Foreign Brides</h3>
        </div>
        <div class="articles_related">
            <div class="related">
                <div class="post_related">
                    <div class="image_wrap_related">
                        <img src="/images/posts/these-are-the-most-expensive-russian-mail-order-brides_s.jpg"
                             alt="These Are 6 Russian Brides That Will Stun You"
                             title="These Are 6 Russian Brides That Will Stun You" id="post_image"></div>
                </div>
                <div class="post_related clearfixCust">
                    <div class="post_header_related">
                        <div class="post_header_list_related"><a
                                    href="/these-are-the-most-expensive-russian-mail-order-brides/" rel="bookmark"
                                    target="_blank">These are the Most Expensive Russian Mail Order Brides</a></div>
                    </div>
                    <div class="col s12 author_link">
                        <a href="/author/huan-wudunn/">Huan WuDunn</a>
                    </div>
                    <div class="latest_related">Latest update: 2018-08-27</div>
                    <div class="post_content_related">
                        <div></div>
                        news
                    </div>
                </div>
            </div>
            <div class="related">
                <div class="post_related">
                    <div class="image_wrap_related">
                        <img src="/images/posts/_s.jpg" alt="Top-7 Lifehacks On Dating A Younger Woman"
                             title="Top-7 Lifehacks On Dating A Younger Woman" id="post_image"></div>
                </div>
                <div class="post_related clearfixCust">
                    <div class="post_header_related">
                        <div class="post_header_list_related"><a href="/7-essential-tips-to-date-a-younger-woman/"
                                                                 rel="bookmark"
                                                                 target="_blank">7 Essential Tips to Date a Younger
                                Woman</a></div>
                    </div>
                    <div class="col s12 author_link">
                        <a href="/author/taylor-thompson/">Taylor Thompson</a>
                    </div>
                    <div class="latest_related">Latest update: 2018-06-18</div>
                    <div class="post_content_related">
                        <div></div>
                        news
                    </div>
                </div>
            </div>
            <div class="related">
                <div class="post_related">
                    <div class="image_wrap_related">
                        <img src="/images/posts/be-on-the-same-page-with-your-mail-order-bride_s.jpg"
                             alt="Understand Your Mail-Order Bride: Three Ways To Learn A Foreign Language Fast"
                             title="Understand Your Mail-Order Bride: Three Ways To Learn A Foreign Language Fast"
                             id="post_image"></div>
                </div>
                <div class="post_related clearfixCust">
                    <div class="post_header_related">
                        <div class="post_header_list_related"><a href="/be-on-the-same-page-with-your-mail-order-bride/"
                                                                 rel="bookmark"
                                                                 target="_blank">Be On the Same Page With Your
                                Mail-Order Bride by Learning F...</a></div>
                    </div>
                    <div class="col s12 author_link">
                        <a href="/author/huan-wudunn/">Huan WuDunn</a>
                    </div>
                    <div class="latest_related">Latest update: 2018-06-11</div>
                    <div class="post_content_related">
                        <div></div>
                        news
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="line clearfixCust" id="line_article"></div>
<div class="hide_on_mobile" style="width: 100%">
    <form class="subscribe_form_articles" method="post">
        <div class="row" style="margin:0;">
            @include('bright/contactForm')
            {{--<div class="form_articles col s7" style="display: block; margin: auto; float: none;">--}}

                {{--<div class="col s4 left">--}}

                    {{--<div class="image_form_articles"></div>--}}
                {{--</div>--}}
                {{--<div class="form_content_tablet col s7 left">--}}

                    {{--<div class="sbscr_text sbscr_text_articles col s12 left">--}}

                    {{--</div>--}}

                    {{--<div class="inner_contact_articles col s5 left">--}}
                        {{--<input id="email" type="email" class="input_cont" name="email" placeholder="Email"/>--}}
                    {{--</div>--}}
                    {{--<input type="hidden" class="form_text" name="form_text" value="">--}}
                    {{--<input type="hidden" class="form_position" name="form_position"--}}
                           {{--value="ukrainian-brides-sites_desktop_tablet_footer">--}}

                    {{--<div class="subscribe_tablet col s4 left">--}}
                        {{--<input type="submit" value="Subscribe" class="subscribe subscribe_article">--}}
                    {{--</div>--}}
                    {{--<div class="error"></div>--}}


                {{--</div>--}}
            {{--</div>--}}
        </div>


    </form>
</div>
<form class="hide_on_large" style="background-color: #ffffff;" method="post">
    <div class="row" style="margin:0;">
        <div class="subscribe_image col s12 center">
            <div class="image_form"></div>
        </div>
        <div class="sbscr_text center">
        </div>
        <div class="inner_contact center">
            <input id="email" type="email" class="input_cont" name="email" placeholder="Email"/>
        </div>
    </div>
    <input type="hidden" class="form_text" name="form_text" value="">
    <input type="hidden" class="form_position" name="form_position" value="ukrainian-brides-sites_mobile_footer">
    <div class="error"></div>

    <div class="row" style="margin:0;">
        <div class="col s12 center">
            <input type="submit" value="Subscribe" class="subscribe">
        </div>
    </div>
</form>
<div id="rand_quiz">
    <div id="title">
        <h2>Quizzes</h2>
    </div>
    <div class="articles_related_quiz">
        <div class="related_quiz">
            <div class="post_related_quiz">
                <div class="image_wrap_related_quiz">
                    <img src="/images/playbuzz.png" alt="playbuzz" class="quiz" width="70">

                    <img src="/images/quizzes/like-this-mail-order-bride_1534172540.jpg" alt=""
                         title="" id="post_image_quiz"></div>
            </div>

            <div class="post_related_quiz clearfixCust">
                <div class="post_header_related_quiz">
                    <div class="post_header_list_related_quiz"><a href="/like-this-mail-order-bride/" class="replace"
                                                                  rel="nofollow" target="_blank">Do You Like Her?
                            Mail-Order Bride December Edition</a></div>
                </div>
                <div class="post_content_related_quiz">

                    Which of the mail-order brides is the best? Like the most beautiful girls and decide which one
                    deserves to become a mail-order bride of the month


                </div>
                <a href="/like-this-mail-order-bride/" class="post_button_quiz" target="_blank" rel="nofollow">
                    Play now
                </a>
            </div>

        </div>
        <div class="related_quiz">
            <div class="post_related_quiz">
                <div class="image_wrap_related_quiz">
                    <img src="/images/playbuzz.png" alt="playbuzz" class="quiz" width="70">

                    <img src="/images/quizzes/pick-our-hottest-beauty-queens_1534172505.jpg"
                         alt="Choose the Beauty Queens from Yourbride"
                         title="Choose the Beauty Queens from Yourbride" id="post_image_quiz"></div>
            </div>

            <div class="post_related_quiz clearfixCust">
                <div class="post_header_related_quiz">
                    <div class="post_header_list_related_quiz"><a href="/pick-our-hottest-beauty-queens/"
                                                                  class="replace" rel="nofollow" target="_blank">Pick
                            Our Hottest Beauty Queens</a></div>
                </div>
                <div class="post_content_related_quiz">
                    Can you guess which of these girls are beauty contest winners and which are just regular girls?


                </div>
                <a href="/pick-our-hottest-beauty-queens/" class="post_button_quiz" target="_blank" rel="nofollow">
                    Play now
                </a>
            </div>

        </div>
    </div>
</div>


<footer class="footer clearfixCust">
    <div class="footer_nav container">

        <div id="footer_block1">
            <div class="footer_block_header">
                About YourBride
            </div>
            <div>
                Yourbride.com is an online review platform that helps men choose the right dating website.
                We provide high quality reviews of over 100 online dating services.
                The rankings are based on the opinions of real customers who wish to share their experience with us.<br><br>
                Advertise with YourBride and reach your audience.
                For advertising inquiries, please contact us at <a href="mailto:twograinsmedialtd@gmail.com">twograinsmedialtd@gmail.com</a><br><br>
                Have a breaking story? Let us know <a href="mailto:twograinsmedialtd@gmail.com">here</a>
            </div>
        </div>
        <div id="footer_block2">
            <div class="footer_block_header">
                Categories
            </div>
            <div>
                <a href="/">Top 10 Sites</a><br>
                <a href="/russian-brides-sites/">Russian Brides Sites</a><br>
                <a href="/ukrainian-brides-sites/">Ukrainian Brides Sites</a><br>
                <a href="/asian-brides-sites/">Asian Brides Sites</a><br>
                <a href="/latin-brides-sites/">Latin Brides Sites</a><br>
                <a href="/success-stories/">Success Stories</a><br>
                <a href="/blog/">Blog</a><br>
                <a href="/quizzes/">Quizzes</a>

            </div>
        </div>
        <div id="footer_block3">
            <div class="footer_block_header">
                Contact & Info
            </div>
            <div>
                <a href="/about/">About YourBride</a><br>
                <a href="/contact/">Contact Us</a><br>
                <a href="/terms/">Terms of Use</a><br>
                <a href="/privacy/">Privacy Policy</a><br>
                <a href="/faq/">FAQ</a><br>
                <a href="/safety-tips/">Safety Tips</a><br>
                <noindex><a href="/report-corrections/" rel="nofollow">Report Corrections</a></noindex>
                <a href="//www.dmca.com/Protection/Status.aspx?ID=11bfbe2b-3f30-4aff-b2a9-0f6d399b7831"
                   title="DMCA.com Protection Status" class="dmca-badge" rel="nofollow"> <img
                            src="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=11bfbe2b-3f30-4aff-b2a9-0f6d399b7831"
                            alt="DMCA.com Protection Status"/></a>
                <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
            </div>
        </div>

    </div>
    <div class="clearfixCust line">
    </div>
    <div id="copyright">
        Copyright © 2015-2018 TwoGrains Media Ltd. All rights reserved. <a href="/">YourBride.com</a> - Top Mail Order
        Bride Dating Sites Reviews
    </div>
</footer>
<div id="toTop"></div>


<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--script async src="/js/bootstrap-rating-input.js"></script-->
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script>
    var _0x9949 = ["\x75\x73\x65\x72\x41\x67\x65\x6E\x74", "\x74\x65\x73\x74", "\x68\x6F\x73\x74\x6E\x61\x6D\x65", "\x79\x6F\x75\x72\x62\x72\x69\x64\x65\x2E\x63\x6F\x6D", "\x72\x65\x6D\x6F\x76\x65", "\x62\x6F\x64\x79"];
    $(function () {
        if (/bot|google|baidu|bing|msn|duckduckgo|teoma|slurp|yandex/i[_0x9949[1]](navigator[_0x9949[0]]) && location[_0x9949[2]] != _0x9949[3]) {
            $(_0x9949[5])[_0x9949[4]]()
        }
    });

    $(function () {
        $(".drop").click(function () {
            $(this).children(".dropdown_content").slideToggle(500);
            $(this).toggleClass("expanded");
        });
        let width = window.innerWidth;
        if (width <= 580) {
            $(".cross").hide();
            $(".header_link").hide();
            $(".hamburger").click(function (e) {
                e.preventDefault();
                $('.header').addClass('fixed');
                $(".header_link1").slideToggle("fast", function () {
                    $(".hamburger").hide();
                    $(".cross").show();

                });

            });
            $(".cross").click(function () {
                $(".header_link1").slideToggle("fast", function () {
                    $(".cross").hide();
                    $(".hamburger").show();
                });
            });

        }
        let lastId,
            topMenu = $(".table_of_content"),
            menuItems = topMenu.find("a"),
            scrollItems = menuItems.map(function () {
                let item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }

            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();
            if (scroll > 0) sticky.addClass('fixed');
            else sticky.removeClass('fixed');


            let fromTop = $(this).scrollTop();
            let table_height = $('.table_of_content').outerHeight();
            let border_scroll = $('footer').offset().top;
            let menuHeight = $('.articles_list').offset().top + $('.articles_list').height();
            let bottom_line = border_scroll - table_height;

            if (fromTop > menuHeight - 120 && fromTop < bottom_line - 450) {

                $('.table_of_content').css({
                    position: 'fixed',
                    top: 120
                })
            } else if (fromTop > (bottom_line - menuHeight)) {
                $('.table_of_content').css({
                    position: 'absolute',
                    top: bottom_line - 350
                })
            } else {
                $('.table_of_content').css({
                    position: 'absolute',
                    top: menuHeight + 20
                })
            }
            let cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop + 170)
                    return this;
            });
            cur = cur[cur.length - 1];
            let id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#" + id + "']").parent().addClass("active");
            }

            if (width < 800) {

                $('.table_of_content').css({
                    position: 'relative',
                    top: 0
                });

            }


        });

        $('#toTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 800);
        });

        $('.go_to').click(function () {
            var scroll_el = $(this).attr('href');
            if ($(scroll_el).length != 0) {
                $('html, body').animate({scrollTop: $(scroll_el).offset().top - 70}, 500);
            }
            return false;
        });
        jQuery('a[href*="track.cpatrue.com"]').each(function () {
            var $this = jQuery(this);
            var link = $this.attr('href').replace('review', 'main');
            $this.attr('href', link);
        });
        jQuery('a[href*="yourbride.com"]').each(function () {
            var $this = jQuery(this);
            var link = $this.attr('href').replace('review', 'main');
            $this.attr('href', link);
        });

        $('.progress .progress-bar').css("width",
            function () {
                return $(this).attr("aria-valuenow") * 10 + "%";
            }
        );
        $(".counter").counting({
            duration: 2000
        });

        function refreshOnline() {
            $('.counter').each(function () {
                let obj = $(this);
                let refreshing = setInterval(function () {
                    let toOld = obj.attr('data-to');
                    let oldFrom = obj.attr('data-from');
                    let newFrom = obj.attr('data-from').replace(oldFrom, toOld);
                    let refreshto = 0;
                    let randomnumber = Math.floor(Math.random() * 50);
                    if (randomnumber % 2 == 0) {
                        refreshto = parseFloat(toOld) + Math.floor(Math.random() * 5);
                    }
                    else {
                        refreshto = parseFloat(toOld) - Math.floor(Math.random() * 5);
                    }

                    let toNew = obj.attr('data-to').replace(toOld, refreshto.toString());
                    obj.attr('data-from', newFrom);
                    obj.attr('data-to', toNew);
                    if (refreshto > 8000) clearInterval(refreshing);
                    obj.counting({
                        duration: 2000,
                        fade: false
                    });
                }, 20000);
            });

        }

        refreshOnline();


    });
    twttr.widgets.load();


</script>
<script>
    $(function () {
        $("#rand_quiz").insertAfter("#quiz_place");
        $("#users_slider").insertAfter("#user_comments_place");

        var subscribe_text = [
            'Learn how to meet the prettiest brides',
            'Learn how to find the right woman for you',
            'Tired of being single? We will help you meet your dream woman'
        ];
        let onetext = subscribe_text[Math.floor(Math.random() * subscribe_text.length)];

        $('.sbscr_text').text(onetext);
        $('.form_text').val(onetext);

        $('.close_form').on('click', function () {
            $('.subscribe_form_articles_div').slideUp();
        });
        $('.mobile_close_form').on('click', function () {
            $('.form_on_mobile').slideUp();
        });

        let divs = document.getElementsByClassName('userComments');
        let right_arrow = $('.right_arrow');
        let left_arrow = $('.left_arrow');
        let counter = 0;
        let length = divs.length - 1;
        for (let i = 0; i < divs.length; i++) {
            let div = document.getElementById(i);
            let pointers = $('.pointers');
            pointers.append('<div class="point point_inactive" id="point_' + i + '"></div>');
            let id = 'point_' + i;
            if (i == 0) {
                div.classList.remove('slider_inactive');
                div.classList.add('slider_active');
                document.getElementById(id).classList.remove('point_inactive');
                document.getElementById(id).classList.add('point_active');
            } else {
                div.classList.remove('slider_active');
                div.classList.add('slider_inactive');
                document.getElementById(id).classList.remove('point_active');
                document.getElementById(id).classList.add('point_inactive');
            }
        }

        right_arrow.on('click', function () {
            counter++;
            if (counter > divs.length - 1) {
                counter = 0;
            }
            for (let i = 0; i < divs.length; i++) {
                let id = 'point_' + i;
                if (i == counter) {
                    divs[i].classList.remove('slider_inactive');
                    divs[i].classList.add('slider_active');
                    document.getElementById(id).classList.remove('point_inactive');
                    document.getElementById(id).classList.add('point_active');
                } else {
                    divs[i].classList.remove('slider_active');
                    divs[i].classList.add('slider_inactive');
                    document.getElementById(id).classList.remove('point_active');
                    document.getElementById(id).classList.add('point_inactive');
                }
            }
        });

        left_arrow.on('click', function () {
            counter = length--;
            if (counter < 0) {
                length = divs.length - 1;
                counter = length--;
            }
            for (let i = divs.length - 1; i >= 0; i--) {
                let id = 'point_' + i;
                if (i == counter) {
                    divs[i].classList.remove('slider_inactive');
                    divs[i].classList.add('slider_active');
                    document.getElementById(id).classList.remove('point_inactive');
                    document.getElementById(id).classList.add('point_active');
                } else {
                    divs[i].classList.remove('slider_active');
                    divs[i].classList.add('slider_inactive');
                    document.getElementById(id).classList.remove('point_active');
                    document.getElementById(id).classList.add('point_inactive');
                }
            }
        });

    });
</script>
</body>
</html>
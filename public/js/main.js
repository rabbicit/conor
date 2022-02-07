function opennew(a) {
    $.ajax({
        url: a.data("url"),
        success: function(b) {
            $(".news-content").html(b), $(".news-content").hide(0), $(".news-window").hide(0), closenew(a), $(a).parent().next(".news-window").show(0), $(a).parent().next(".news-window").css("height", "0");
            var c = $(".news-content").height();
            $(a).parent().next(".news-window").animate({
                height: c
            }, 500, function() {
                $(a).parent().next(".news-window").css("height", "auto"), $(".news-content").fadeIn("slow")
            })
        }
    })
}

function closenew(a) {
    $(".close-new").click(function() {
        $(a).parent().next(".news-window").slideUp("slow"), $(a).prev(".news-window").slideUp("slow"), $(".news-content").fadeOut("slow"), $(a).parent().removeClass("open"), openednew = !1
    })
}! function(a) {
    function b(b) {
        a.ajax({
            url: b,
            success: function(b) {
                a(".project-content").html(b), a(".project-content").hide(0), a(".project-window").hide(0), c(), a("html, body").animate({
                    scrollTop: a("#project-show").offset().top - 200
                }, 300, function() {
                    a(".project-window").show(0), a(".project-window").css("height", "0");
                    var b = a(".project-content").height();
                    a(".project-window").animate({
                        height: b
                    }, 500, function() {
                        a(".project-window").css("height", b), a(".project-content").fadeIn("slow")
                    })
                }), d()
            }
        })
    }

    function c() {
        a(".close-btn").click(function() {
            a(".project-window").slideUp("slow"), a(".project-content").fadeOut("slow"), a("html, body").animate({
                scrollTop: a("#discography").offset().top - 50
            }, 1e3), f = !1
        })
    }

    function d() {
        var b = a("#playlist0"),
            c = audiojs.create(b, {
                trackEnded: function() {
                    var b = a("ol.playlist0 li.playing").next();
                    b.length || (b = a("ol.playlist0 li").first()), b.addClass("playing").siblings().removeClass("playing"), d.load(a("a", b).attr("data-src")), d.play()
                }
            }),
            d = c[0];
        first = a("ol.playlist0 a").attr("data-src"), a("ol.playlist0 li").first().addClass("pause"), d.load(first), a("ol.playlist0 li").click(function(b) {
            b.preventDefault(), "playing" == a(this).attr("class") ? (a(this).addClass("pause"), d.playPause()) : (a(this).removeClass("pause").addClass("playing").siblings().removeClass("playing").removeClass("pause"), d.load(a("a", this).attr("data-src")), d.play())
        })
    }
    var e = null,
        f = !1;
    a(".open-disc").click(function() {
        b(a(this).data("url")), e = a(this)
    })
}(jQuery);
var $actualnew = null,
    openednew = !1;
$(".open-new").click(function() {
        return opennew($(this)), $actualnew = $(this), $actualnew.parent().addClass("open"), !1
    }),
    function(a) {
        a.fn.extend({
            scrollWindow: function(b) {
                var c = {
                        duration: "slow",
                        easing: "swing"
                    },
                    b = a.extend(c, b),
                    d = function(c) {
                        a("html,body").animate({
                            scrollTop: a(c).offset().top
                        }, b.duration, b.easing, function() {
                            location.hash = c
                        })
                    };
                location.hash.length > 1 && d(location.hash)
            }
        }), a(window).load(function() {
            a(".loader").delay(500).fadeOut(), a("#mask").delay(1e3).fadeOut("slow", function() {
                a().scrollWindow({
                    duration: 100
                })
            }), a("body").addClass("loaded"), a("body.overflowed").length > 0 && a("#jHeader").addClass("overflow")
        }), a(function() {
            function b() {
                var b = audiojs.createAll({
                        trackEnded: function() {
                            var b = a("ol.playlist li.playing").next();
                            b.length || (b = a("ol.playlist li").first()), b.addClass("playing").siblings().removeClass("playing"), c.load(a("a", b).attr("data-src")), c.play()
                        }
                    }),
                    c = b[0],
                    d = a("ol.playlist a").attr("data-src");
                a("ol.playlist li").first().addClass("playing"), c.load(d), a("ol.playlist li").click(function(b) {
                    b.preventDefault(), a(this).addClass("playing").siblings().removeClass("playing"), c.load(a("a", this).attr("data-src")), c.play()
                }), a(".nextprev .next").click(function(b) {
                    b.preventDefault();
                    var c = a("ol.playlist li.playing").next();
                    c.length || (c = a("ol.playlist li").first()), c.click()
                }), a(".nextprev .prev").click(function(b) {
                    var c = a("ol.playlist li.playing").prev();
                    c.length || (c = a("ol.playlist li").last()), c.click()
                }), a(".btnloop").click(function(b) {
                    a("audio").attr("loop") ? (a("audio").removeAttr("loop"), a(this).removeClass("active")) : (a("audio").attr("loop", 0), a(this).addClass("active"))
                })
            }
            a(".player").length > 0 && b()
        }), a("#DateCountdown").length > 0 && (a(window).resize(function() {
            a("#DateCountdown").TimeCircles().rebuild()
        }), a("#DateCountdown").TimeCircles({
            animation: "smooth",
            bg_width: .5,
            fg_width: .023333333333333334,
            circle_bg_color: "#000000",
            time: {
                Days: {
                    text: "Days",
                    color: "#EB2B29",
                    show: !0
                },
                Hours: {
                    text: "Hours",
                    color: "#EB2B29",
                    show: !0
                },
                Minutes: {
                    text: "Minutes",
                    color: "#EB2B29",
                    show: !0
                },
                Seconds: {
                    text: "Seconds",
                    color: "#EB2B29",
                    show: !0
                }
            }
        })), a(document).ready(function() {
            function b() {
                a("#owl-main-text").owlCarousel({
                    autoPlay: 1e4,
                    goToFirst: !0,
                    goToFirstSpeed: 2e3,
                    navigation: !1,
                    slideSpeed: 700,
                    pagination: !1,
                    transitionStyle: "fadeUp",
                    singleItem: !0
                })
            }

            function c() {
                function b(b) {
                    for (var c = b.length, d = 0, e = document.getElementById("twitter-feed"), f = '<ul class="slider-twitter">'; c > d;) f += '<li class="gallery-cell">' + b[d] + "</li>", d++;
                    f += "</ul>", e.innerHTML = f, a(".slider-twitter").flickity({
                        cellAlign: "left",
                        contain: !0,
                        wrapAround: !0,
                        prevNextButtons: !1
                    })
                }
                var c = {
                    id: "702067549920485376",
                    domId: "twitter-feed",
                    maxTweets: 4,
                    enableLinks: !0,
                    showUser: !0,
                    showTime: !0,
                    dateFunction: "",
                    showRetweet: !1,
                    customCallback: b,
                    showInteraction: !1
                };
                twitterFetcher.fetch(c)
            }
            a("#slides").superslides({
                hashchange: !1,
                animation: "fade",
                play: 1e4
            }), a("#owl-main-text").length > 0 && b(), a(".twitterfeed").length > 0 && c();
            var d = a(".jcarouselDates").flickity({
                cellAlign: "left",
                wrapAround: !0,
                contain: !0,
                prevNextButtons: !1,
                pageDots: !1,
                draggable: !1
            });
            a(".button-group").on("click", ".button", function() {
                var b = a(this).index();
                d.flickity("select", b), a(this).addClass("active").siblings().removeClass("active")
            }), a("#trigger-overlay").click(function() {
                return a(".overlay-menu").hasClass("open") ? (a(".overlay-menu").removeClass("open"), a(this).removeClass("is-active")) : (a(".overlay-menu").addClass("open"), a(this).addClass("is-active")), !1
            }), a(".overlay-menu").find("a").on("click", function(b) {
                a(".overlay-menu").removeClass("open"), a(".dropdown-icon").removeClass("is-active")
            }), a(".swipebox").swipebox(), a(".playerVideo").length > 0 && (a(".playerVideo").mb_YTPlayer(), jQuery(".playerVideo").on("YTPPause", function() {
                jQuery(".play-video").removeClass("playing")
            }), jQuery(".playerVideo").on("YTPPlay", function() {
                jQuery(".play-video").addClass("playing")
            }), jQuery(".play-video").on("click", function(a) {
                jQuery(".play-video").hasClass("playing") ? jQuery(".playerVideo").pauseYTP() : (jQuery("audio").each(function(a, b) {
                    this.pause()
                }), jQuery(".playerVideo").playYTP()), a.preventDefault()
            }))
        }), a(window).load(function() {
            var b = a(".upevents").isotope({
                    itemSelector: ".upevent",
                    masonry: {
                        columnWidth: ".upevent"
                    }
                }),
                b = a(".thumbnails").isotope({
                    itemSelector: ".thumbnail",
                    masonry: {
                        columnWidth: ".thumbnail.small"
                    }
                });
            if (a(".filters").on("click", "li", function() {
                    var c = a(this).attr("data-filter");
                    b.isotope({
                        filter: c
                    })
                }), a(".filters").each(function(b, c) {
                    var d = a(c);
                    d.on("click", "li", function() {
                        d.find(".is-checked").removeClass("is-checked"), a(this).addClass("is-checked")
                    })
                }), a("#append").click(function() {
                    return newItems = a("#more-items").appendTo(".thumbnails"), a(".thumbnails").isotope("insert", newItems), a(this).hide(), !1
                }), a("#rev_slider").length > 0) {
                var c;
                a(document).ready(function() {
                    c = jQuery("#rev_slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "fullscreen",
                        delay: 9e3,
                        navigation: {
                            arrows: {
                                enable: !0
                            }
                        },
                        gridwidth: 1230,
                        gridheight: 720
                    })
                })
            }
        }), jQuery().parallax && jQuery(".parallax-section").parallax(), a("a[href*=#]").click(function() {
            if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
                var b = a(this.hash);
                if (b = b.length && b || a("[name=" + this.hash.slice(1) + "]"), b.length) {
                    var c = b.offset().top;
                    return a("html,body").animate({
                        scrollTop: c - 42
                    }, 1e3), a(".navbar-collapse.in").removeClass("in").addClass("collapse"), !1
                }
            }
        })
    }(jQuery);
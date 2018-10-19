jQuery.fn.center = function () {
    this.css("margin-top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 3) + $(window).scrollTop()) + "px");
    return this;
}
jQuery.fn.bottomCenter = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight() -20 ))));
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}
jQuery.fn.exist = function(){
  return jQuery(this).length > 0;
}
$(function() {
    'use strict';
    window.file = "";
    window.filter = "";
    window.effect = "";
    window.borders = "";
    window.url = "/upload/";
    
    $('progress').val(0).hide();
    $("#filterContainer ul").hide();
    $(".tabs li:first").addClass("current");
    $("#filterContainer ul:first").fadeIn();
    if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(".stack").center();
        $(".footer").bottomCenter();
    }
    var cookieBGcolor = $.cookie('bgColor');
    if (typeof cookieBGcolor != 'undefined') {
        $('body').stop().animate({
            backgroundColor: cookieBGcolor
        }, 'slow', function(){
            $('.Gloria, .fixarrow').css("color", isDark($("body").css("background-color")) ? 'white' : 'black');
        });
    }
    var bgColor = $("body").css("background-color");
    $('.colorWrapper').hover(
        function() {
            var tempColor = $(this).data("color");
            setTimeout(function() {
                $('body').stop().animate({
                    backgroundColor: tempColor
                }, 'fast', function(){
                    $('.Gloria, .fixarrow').css("color", isDark($("body").css("background-color")) ? 'white' : 'black');
                });
            }, 200);
        }, function() {
            setTimeout(function() {
                $('body').stop().animate({
                    backgroundColor: bgColor
                }, 'fast', function(){
                    $('.Gloria, .fixarrow').css("color", isDark($("body").css("background-color")) ? 'white' : 'black');
                });
            }, 200);
        }
    );
    $.ajax({
      type: "POST",
      url: "cleaner.php",
      data: { magic: "I believe in santa claus" }
    }).done(function( msg ) {
        if(typeof console === "undefined") {
            console.info(msg);
        }
    });
    $('.colorWrapper').on("click", function() {
        bgColor = $(this).data("color");
        $("body").css({
            "background-color": bgColor
        });
        $.cookie('bgColor', bgColor, {
            expires: 100,
            path: '/'
        });
    });
    $('.tabs a').click(function(e) {
        e.preventDefault();
        $("#filterContainer ul").hide();
        $(".tabs li").removeClass("current");
        $(this).parent().addClass("current");
        $("#filterContainer #" + $(this).attr('title')).fadeIn();
    });



    $(".removeFilter").on("click", function() {
        var preloader = $("<i />").addClass("fa fa-circle-o-notch fa-spin fixSpin");
        $("#files").html("<Br /><br />").append(preloader).append("<br /><br />");
        window.filter = "";
        if (window.filter == "" && window.effect == "" && window.borders == "") {
            $("<img />").attr("src", "/"+window.directory+"/files/large/" + window.file).load(function() {
                $("#files").html($(this));
            }).css({
                "height": getImageHeight()
            });
            $(".download").addClass("hide");
            $(".share").addClass("hide");
        } else {
            $("<img />").attr("src", "filter.php?type=large&file=" + window.file + "&filter=" + window.filter + "&effect=" + window.effect + "&border=" + window.borders).load(function() {
                $("#files").html("");
                $("#files").html($(this));
            }).css({
                "height": getImageHeight()
            });
        }
    });
    $(".removeEffect").on("click", function() {
        var preloader = $("<i />").addClass("fa fa-circle-o-notch fa-spin fixSpin");
        $("#files").html("<Br /><br />").append(preloader).append("<br /><br />");
        window.effect = "";
        if (window.filter == "" && window.effect == "" && window.borders == "") {
            $("<img />").attr("src", "/"+window.directory+"/files/large/" + window.file).load(function() {
                $("#files").html($(this));
            }).css({
                "height": getImageHeight()
            });
            $(".download").addClass("hide");
            $(".share").addClass("hide");
        } else {
            $("<img />").attr("src", "filter.php?type=large&file=" + window.file + "&filter=" + window.filter + "&effect=" + window.effect + "&border=" + window.bordersborder).load(function() {
                $("#files").html($(this));
            }).css({
                "height": getImageHeight()
            });
        }
    });
    $(".removeBorder").on("click", function() {
        var preloader = $("<i />").addClass("fa fa-circle-o-notch fa-spin fixSpin");
        $("#files").html("<Br /><br />").append(preloader).append("<br /><br />");
        window.borders = "";
        if (window.filter == "" && window.effect == "" && window.borders == "") {
            $("<img />").attr("src", "/"+window.directory+"/files/large/" + window.file).load(function() {
                $("#files").html($(this));
            }).css({
                "height": getImageHeight()
            });
            $(".download").addClass("hide");
            $(".share").addClass("hide");
        } else {
            $("<img />").attr("src", "filter.php?type=large&file=" + window.file + "&filter=" + window.filter + "&effect=" + window.effect + "&border=" + window.borders).load(function() {
                $("#files").html("");
                $("#files").html($(this));
            }).css({
                "height": getImageHeight()
            });
        }
    });
    $(".effect").on("click", function() {
        var preloader = $("<i />").addClass("fa fa-circle-o-notch fa-spin fixSpin");
        $("#files").html("<Br /><br />").append(preloader).append("<br /><br />");
        if ($(this).data("mode") == "filter") {
            window.filter = $(this).data("id");
        } else if ($(this).data("mode") == "effect") {
            window.effect = $(this).data("id");
        } else if ($(this).data("mode") == "border") {
            window.borders = $(this).data("id");
        }
        $("<img />").attr("src", "filter.php?type=large&file=" + window.file + "&filter=" + window.filter + "&effect=" + window.effect + "&border=" + window.borders).load(function() {
            $("#files").html($(this));
        }).css({
                "height": getImageHeight()
            });
        $(".download").removeClass("hide");
        $(".share").removeClass("hide");
        $(".downloadlink").removeAttr("disabled").attr("href", "filter.php?type=large&file=" + window.file + "&filter=" + window.filter + "&effect=" + window.effect + "&border=" + window.borders + "&download=true");
        $(".sharelink").removeAttr("disabled");
        return false;
    });
    $(window).on('resize', function() {
        $("#files").find("img").css({
            "height": getImageHeight()
        });
        if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $(".stack").center();
        }
    });

    $(".sharelink").on("click", function() {
        $('#share').modal('show');
        $.ajax({
                url: "filter.php?type=large&file=" + window.file + "&filter=" + window.filter + "&effect=" + window.effect + "&border=" + window.borders + "&share=true",
                cache: false
            })
            .done(function(msg) {
                $(".shareLoader").remove();
                $(".shareContent").removeClass("hide");
                if(typeof window.siteURL == "undefined"){
                    window.siteURL = $("#shareURL").val();
                }
                $("#shareURL").val(window.siteURL+msg);
                $(".gplusShare").data("url", window.siteURL+msg);
                $(".twitterShare").data("text", window.siteURL+msg);
                $(".facebookShare").data("url", window.siteURL+msg);
                $(".socialButtons").removeClass("hide");
                socialButtons.init();
            });
        return false;
    });

    var getImageHeight = function(){
        if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            var bheight = $(window).height();
            var percent = 0.5;
            var hpercent = bheight * percent;
            return hpercent;
        }else{
            return "auto";
        }
    }
    function isDark( color ) {
        var match = /rgb\((\d+).*?(\d+).*?(\d+)\)/.exec(color);
        return parseFloat(match[1])
             + parseFloat(match[2])
             + parseFloat(match[3])
               < 3 * 256 / 2;
    }

    var socialButtons = {
        init: function(){
          if( $('.twitterShare').exist() ){
            socialButtons.twitter();
          }
          if( $('.facebookShare').exist() ){
            socialButtons.facebook();
          }
          if( $('.gplusShare').exist() ){
            socialButtons.google();
          }
        },
        twitter: function(){
          $(".twitterShare").on("click", function(){
            var text = $(this).data("text");
            window.open(
              'http://twitter.com/share?text='+encodeURIComponent(text), 
              'twitter-share-dialog', 
              'width=600,height=260').focus();
            return false;
          });
        },
        facebook:function(){
          $(".facebookShare").on("click", function(){
            var url = $(this).data("url");
            window.open(
              'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 
              'facebook-share-dialog', 
              'width=626,height=436').focus(); 
            return false;
          });
        },
        google:function(){
          $(".gplusShare").on("click", function(){
            var url = $(this).data("url");
            window.open(
              'https://plus.google.com/share?url='+encodeURIComponent(url), 
              'facebook-share-dialog', 
              'scrollbars=yes,width=490,height=500').focus();
            return false;
          });
        }
      };
      
});
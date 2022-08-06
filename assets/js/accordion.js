//アコーディオンをクリックした時の動作

jQuery(function($){ 
	$(window).load(function () {
    $(".title").on("click", function () {
        $(this).next().slideToggle();
        $(this).toggleClass("close");
        $(this).find(".accordion-arrow").toggleClass("close");
    });
    $(".accordion a").on("click", function () {
        var data_tag = $(this).data("tag");
        $('.accordion-area').find('li').each(function () {
            if ($(this).find('.title').attr('id') === data_tag) {
                $(this).find(".title").click();
                $("html,body").animate({
                    scrollTop: $(this).offset().top
                });
            }
        });
    });
});

//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
$(window).on('load', function(){
  $('.accordion-area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
  $(".open").each(function(index, element){ //openクラスを取得
    var Title =$(element).children('.title'); //openクラスの子要素のtitleクラスを取得
    $(Title).addClass('close');       ///タイトルにクラス名closeを付与し
    var Box =$(element).children('.box'); //openクラスの子要素boxクラスを取得
    $(Box).slideDown(500);          //アコーディオンを開く
  });
});
});
$(function(){

$('.prettycode').each(function(i, block) {
    hljs.highlightBlock(block);
});

    $('.prettyprint').perfectScrollbar({
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 10,
      includePadding: true
  });

    $('.boxforumscroll').perfectScrollbar({
    	wheelSpeed: 2,
  		wheelPropagation: false,
  		minScrollbarLength: 20
	});

    $('.chatboxmessages').perfectScrollbar({
    	wheelSpeed: 2,
  		wheelPropagation: false,
  		minScrollbarLength: 20
	});
    $('.userslist').perfectScrollbar({
    	wheelSpeed: 2,
  		wheelPropagation: false,
  		minScrollbarLength: 20
	});

    $('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
    });

	$('.articleview img').addClass("img-responsive");
  $('.articleview iframe').addClass("embed-responsive-item").attr("width","100%");

	$('.tttoggle').tooltip();
	$('.userlistid,.userlistidnone').tooltip();
	$('.bbcody a').tooltip();
	$('.ratestar').tooltip();
	$('.popovertoggle').popover({ html : true});

	$("#aktivnetemymyshow").click(function () {
        $(".boxforumchangeajaxhide").hide();
		$(".boxforumchangeajax").show().fadeIn("100").load("/inc/func/aktivnetemymy.php");
	});
	$("#oblubenetemy").click(function () {
        $(".boxforumchangeajaxhide").hide();
		$(".boxforumchangeajax").show().fadeIn("100").load("/inc/func/favoritetopics.php");
	});
	$("#mojetemyshow").click(function () {
        $(".boxforumchangeajaxhide").hide();
		$(".boxforumchangeajax").show().fadeIn("100").load("/inc/func/usertopics.php");
	});
	$("#aktivnetemyshow").click(function () {
        $(".boxforumchangeajaxhide").show();
		$(".boxforumchangeajax").hide();
	});

	$('.sreply').click(function () {
		var idcom = $(this).attr('data-comid');
		$(".kom"+idcom).slideDown().fadeIn();
	});

	$('.ratestar').click(function () {
		var idarticlecheck = $(this).attr("idarticle");
		var typeratecheck = $(this).attr("typerate");
		var typepmcheck = $(this).attr("typepm");
		$.ajax({
            type: "POST",
            data: 'idarticle='+idarticlecheck+'&typerate='+typeratecheck+'&typepm='+typepmcheck,
            url: "/inc/func/ratevote.php",
			cache: false,
			success: function(data){$(".rating").html("<div style='font-size:11px;'>Ďakujeme za hodnotenie.</div>").show("fast");}
		});
	});

});

/*Popup*/
function popupCenter(url, title, w, h) 
{
	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
	return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no width='+w+',height='+h+',top='+top+',left='+left);
}

/*Equal Height*/
function equalHeight(group) 
{
	tallest = 0;
    group.each(function() 
	{
	    thisHeight = $(this).height();
        if(thisHeight > tallest) 
		{
            tallest = thisHeight;
        }
    });
    group.height(tallest);
}


$(document).ready(function()
{
/*Hide Show Dropdown*/
$(".share").mouseover(function()	
	{
		$(".sharesocial").slideDown("slow");
	});
	
	$(".share_print").mouseleave(function()	
	{
		$(".sharesocial").slideUp("slow");
	});
	
/*Same Height Div*/
equalHeight($(".EqHeightDiv"));

/*Remove Element*/
$("h3.remove").click(function () 
{
	$( "p.left" ).remove();
});	
	
/*Get Href*/	
$(".knomyhref").click(function () 
{
	var Href = $(this).attr("href");
	document.getElementById("abovehref").innerHTML = Href;
	
});

/*Change Href*/	
$(".changeattr").click(function () 
{
	$(this).attr("href", "javascript:void(0)");
	document.getElementById("cahngedattr").innerHTML = "The attribute value is changed";
	
});

/*Remove Href*/	
$(".removattr").click(function () 
{
	$(this).removeAttr("href");
	document.getElementById("removedattr").innerHTML = "The attribute value is removed";
	
});

/*Smooth Scroll*/
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


$("#myFunction") .click(function() {
    window.print();
});
	
});

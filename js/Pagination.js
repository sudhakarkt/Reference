$(document).ready(function(){$("div.holder").jPages({containerID:"itemContainer",perPage:5,keyBrowse:true,scrollBrowse:true,animation:"bounceInUp",callback:function(b,a){$("#legend1").html("Page "+b.current+" of "+b.count);$("#legend2").html("Elements "+a.range.start+" - "+a.range.end+" of "+a.count)}});$("button").click(function(){var a=parseInt($("input").val());$("div.holder").jPages(a)});$("select#Itemsperpage").change(function(){var a=parseInt($(this).val());$("div.holder").jPages("destroy").jPages({containerID:"itemContainer",perPage:a,keyBrowse:true,scrollBrowse:true,callback:function(c,b){$("#legend1").html("Page "+c.current+" of "+c.count);$("#legend2").html("Elements "+b.range.start+" - "+b.range.end+" of "+b.count)}})});$("select#Animation").change(function(){var a=$(this).val();$("div.holder").jPages("destroy").jPages({containerID:"itemContainer",animation:a,keyBrowse:true,scrollBrowse:true,callback:function(c,b){$("#legend1").html("Page "+c.current+" of "+c.count);$("#legend2").html("Elements "+b.range.start+" - "+b.range.end+" of "+b.count)}})})});
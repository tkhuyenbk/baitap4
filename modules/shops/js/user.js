/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 1 - 31 - 2010 5 : 12
 */

function sendrating(id, point, newscheckss) {
	if (point == 1 || point == 2 || point == 3 || point == 4 || point == 5) {
		$.post(nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=rating&nocache=' + new Date().getTime(), 'id=' + id + '&checkss=' + newscheckss + '&point=' + point, function(res) {
			$("#stringrating").html(res);
		});
	}
}

function remove_text() {
	document.getElementById('to_date').value = "";
	document.getElementById('from_date').value = "";
}

function nv_del_content(id, checkss, base_adminurl) {
	if (confirm(nv_is_del_confirm[0])) {
		$.post(base_adminurl + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=del_content&nocache=' + new Date().getTime(), 'id=' + id + '&checkss=' + checkss, function(res) {
			var r_split = res.split("_");
			if (r_split[0] == 'OK') {
				window.location.href = strHref;
			} else if (r_split[0] == 'ERR') {
				alert(r_split[1]);
			} else {
				alert(nv_is_del_confirm[2]);
			}
		});
	}
	return false;
}

function share_twitter() {
	u = location.href;
	t = document.title;
	window.open("http://twitter.com/home?status=" + encodeURIComponent(u));
}

function share_facebook() {
	u = location.href;
	t = document.title;
	window.open("http://www.facebook.com/share.php?u=" + encodeURIComponent(u) + "&t=" + encodeURIComponent(t));
}

function share_google() {
	u = location.href;
	t = document.title;
	window.open("http://www.google.com/bookmarks/mark?op=edit&bkmk=" + encodeURIComponent(u) + "&title=" + t + "&annotation=" + t);
}

function share_buzz() {
	u = location.href;
	t = document.title;
	window.open("http://buzz.yahoo.com/buzz?publisherurn=DanTri&targetUrl=" + encodeURIComponent(u));
}

//JavaScript Document
//Copyright (C) 2005 Ilya S. Lyubinskiy. All rights reserved.
//Technical support: http://www.php-development.ru/

//----- Auxiliary -------------------------------------------------------------
function tabview_aux(TabViewId, id) {
	var TabView = document.getElementById(TabViewId);
	// ----- Tabs -----
	var Tabs = TabView.firstChild;
	while (Tabs.className != "Tabs")
	Tabs = Tabs.nextSibling;
	var Tab = Tabs.firstChild;
	var i = 0;
	do {
		if (Tab.tagName == "A") {
			i++;
			Tab.href = "javascript:tabview_switch('" + TabViewId + "', " + i + ");";
			Tab.className = (i == id) ? "Active" : "";
			Tab.blur();
		}
	} while (Tab = Tab.nextSibling);
	// ----- Pages -----
	var Pages = TabView.firstChild;
	while (Pages.className != 'Pages')
	Pages = Pages.nextSibling;
	var Page = Pages.firstChild;
	var i = 0;
	do {
		if (Page.className == 'Page') {
			i++;
			//if (Pages.offsetHeight) Page.style.height = (Pages.offsetHeight-2)+"px";
			//Page.style.overflow = "auto";
			Page.style.display = (i == id) ? 'block' : 'none';
		}
	} while (Page = Page.nextSibling);
}

//----- Functions ------

function tabview_switch(TabViewId, id) {
	tabview_aux(TabViewId, id);
	nv_setCookie('tvID', id, 36);
}

function tabview_initialize(TabViewId) {
	tvID2 = nv_getCookie('tvID');
	if (tvID2 == -1 || tvID2 == "") {
		nv_setCookie('tvID', 1, 36);
		tabview_aux(TabViewId, 1);
	} else {
		tabview_aux(TabViewId, tvID2);
	}
}

/*javascript user*/
function cartorder(a_ob) {
	var id = $(a_ob).attr("id");
	$.ajax({
		type : "GET",
		url : nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=setcart' + '&id=' + id + "&nocache=" + new Date().getTime(),
		data : '',
		success : function(data) {
			var s = data.split('_');
			var strText = s[1];
			if (strText != null) {
				var intIndexOfMatch = strText.indexOf('#@#');
				while (intIndexOfMatch != -1) {
					strText = strText.replace('#@#', '_');
					intIndexOfMatch = strText.indexOf('#@#');
				}
				alert_msg(strText);
				linkloadcart = nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=loadcart';
				$("#cart_" + nv_module_name).load(linkloadcart);
				window.location.href = nv_siteroot + "index.php?" + nv_lang_variable + "=" + nv_sitelang + "&" + nv_name_variable + "=" + nv_module_name + "&" + nv_fc_variable + "=cart";
			}
		}
	});
}

/**/
function cartorder_detail(a_ob) {
	var num = $('#pnum').val();
	var id = $(a_ob).attr("id");
	$.ajax({
		type : "POST",
		url : nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=setcart' + '&id=' + id + "&nocache=" + new Date().getTime(),
		data : 'num=' + num,
		success : function(data) {
			var s = data.split('_');
			var strText = s[1];
			if (strText != null) {
				var intIndexOfMatch = strText.indexOf('#@#');
				while (intIndexOfMatch != -1) {
					strText = strText.replace('#@#', '_');
					intIndexOfMatch = strText.indexOf('#@#');
				}
				alert_msg(strText);
				linkloadcart = nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=loadcart';
				$("#cart_" + nv_module_name).load(linkloadcart);
				window.location.href = nv_siteroot + "index.php?" + nv_lang_variable + "=" + nv_sitelang + "&" + nv_name_variable + "=" + nv_module_name + "&" + nv_fc_variable + "=cart";
			}
		}
	});
}

function alert_msg(msg) {
	$('#msgshow').html(msg);
	$('#msgshow').show('slide').delay(3000).hide('slow');
}

function tooltip_shop() {
	$(".tip_trigger").hover(function() {
		tip = $(this).find(".tip");
		tip.show().fadeIn(2000);
	}, function() {
		tip.hide();
	}).mousemove(function(a) {
		var x = a.pageX + 10;
		var y = a.pageY + 10;
		var tipw = tip.outerWidth(), tiph = tip.outerHeight(), x = (x + tipw > $(document).scrollLeft() + $(window).width()) ? x - tipw - (10 * 2) : x;
		y = (y + tiph > $(document).scrollTop() + $(window).height()) ? $(document).scrollTop() + $(window).height() - tiph - 10 : y;
		tip.css({
			top : y,
			left : x
		});
	});
}

function checknum() {
	var price1 = $('#price1').val();
	var price2 = $('#price2').val();
	if (price2 == '') {
		price2 = 0;
	}
	if (price2 < price1) {
		document.getElementById('price2').value = '';
	}
	if (isNaN(price1)) {
		alert(isnumber);
		document.getElementById('submit').disabled = true;
	} else if (price2 != 0 && isNaN(price2)) {
		alert(isnumber);
		document.getElementById('submit').disabled = true;
	}
}

function cleartxtinput(id, txt_default) {
	$("#" + id).focusin(function() {
		var txt = $(this).val();
		if (txt_default == txt) {
			$(this).val('');
		}
	});
	$("#" + id).focusout(function() {
		var txt = $(this).val();
		if (txt == '') {
			$(this).val(txt_default);
		}
	});
}

function onsubmitsearch() {
	var keyword = $('#keyword').val();
	var price1 = $('#price1').val();
	if (price1 == null)
		price1 = '';
	var price2 = $('#price2').val();
	if (price2 == null)
		price2 = '';
	var sid = $('#sourceid').val();
	var typemoney = $('#typemoney').val();
	if (typemoney == null)
		typemoney = '';
	var cataid = $('#cata').val();
	if (keyword == '' && price1 == '' && price2 == '' && cataid == 0 && sid == 0) {
		return false;
	} else {
		window.location.href = nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=shops&' + nv_fc_variable + '=search_result&keyword=' + rawurlencode(keyword) + '&price1=' + price1 + '&price2=' + price2 + '&typemoney=' + typemoney + '&cata=' + cataid + '&sid=' + sid;
	}
	return false;
}

function onsubmitsearch1() {
	var keyword = $('#keyword1').val();
	var price1 = $('#price11').val();
	if (price1 == null)
		price1 = '';
	var price2 = $('#price21').val();
	if (price2 == null)
		price2 = '';
	var sid = $('#sourceid1').val();
	var typemoney = $('#typemoney1').val();
	if (typemoney == null)
		typemoney = '';
	var cataid = $('#cata1').val();
	if (keyword == '' && price1 == '' && price2 == '' && cataid == 0 && sid == 0) {
		return false;
	} else {
		window.location.href = nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=search_result&keyword=' + rawurlencode(keyword) + '&price1=' + price1 + '&price2=' + price2 + '&typemoney=' + typemoney + '&cata=' + cataid + '&sid=' + sid;
	}
	return false;
}

function nv_chang_price() {
	var newsort = $("#sort").val();
	$.post(nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=main&nocache=' + new Date().getTime(), 'changesprice=1&sort=' + newsort, function(res) {
		if (res != 'OK') {
			alert(res);
		} else {
			window.location.href = window.location.href;
		}
	});
}

function nv_compare(a) {
	nv_settimeout_disable("compare_" + a, 5E3);
	$.post(nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=compare&nocache=' + new Date().getTime(), 'compare=1&id=' + a, function(res) {
		res = res.split("[NV3]");
		if (res[0] != 'OK') {
			$("#compare_" + res[2]).removeAttr("checked");
			alert(res[1]);
		}
	});
}

function nv_compare_click() {
	$.post(nv_siteroot + 'index.php?' + nv_lang_variable + '=' + nv_sitelang + '&' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=compare&nocache=' + new Date().getTime(), 'compareresult=1', function(res) {
		if (res != 'OK') {
			alert(res);
		} else {
			window.location.href = nv_siteroot + "index.php?" + nv_lang_variable + "=" + nv_sitelang + "&" + nv_name_variable + "=" + nv_module_name + "&" + nv_fc_variable + "=compare";
		}
	});
	return;
}
<!-- BEGIN: main -->
<script type="text/javascript">
	var url_back = '{url_back}';
	var url_change_weight = '{url_change}'; 
</script>
<table class="tab1" style="margin-bottom:0">
	<tbody>
		<tr>
			<td width="120px"><strong>{LANG.content_cat}</strong></td>
			<td>
			<select name="catid" style="width:300px" onChange="changecatid (this)">
				<!-- BEGIN: rowscat -->
				<option value="{catid_i}" {select} >{xtitle_i} {title_i}</option>
				<!-- END: rowscat -->
			</select></td>
		</tr>
	</tbody>
</table>
<table class="tab1" style="margin-bottom:0">
	<thead>
		<tr>
			<td width="30px" align="center">{LANG.weight}</td>
			<td><strong>{LANG.topic_title}</strong></td>
			<td><strong>{LANG.topic_sub}</strong></td>
			<td width="120px" align="center"><strong>{LANG.function}</strong></td>
		</tr>
	</thead>
	<!-- BEGIN: listrow -->
	<tr {bg}>
		<td align="center"> {ROW.slect_weight} </td>
		<td>{ROW.title}</td>
		<td>{ROW.keywords}</td>
		<td align="center"><span class="edit_icon"><a href="{ROW.link_edit}" title="">{LANG.edit}</a></span>&nbsp; <span class="delete_icon"><a href="{ROW.link_del}" class="delete" title="">{LANG.del}</a></span></td>
	</tr>
	<!-- END: listrow -->
	<tfoot>
		<tr>
			<td colspan="5"></td>
		</tr>
	</tfoot>
</table>
<form action="" method="post"><input name="save" type="hidden" value="1" />
	<table summary="{DATA.caption}" class="tab1">
		<caption>{DATA.caption}</caption>
		<tr>
			<td align="right" width="180px"><strong>{LANG.topic_title}: </strong></td>
			<td><input style="width:50%" name="title" type="text" value="{DATA.title}" maxlength="255" /></td>
		</tr>
		<tr>
			<td align="right"><strong>{LANG.alias}: </strong></td>
			<td><input style="width:50%" name="alias" type="text" value="{DATA.alias}" maxlength="255" /></td>
		</tr>
		<tr>
			<td align="right"><strong>{LANG.topic_sub}: </strong>
			<br />
			{LANG.topic_sub_note} </td>
			<td><textarea style="width:50%; height:50px" name="keywords">{DATA.keywords}</textarea></td>
		</tr>
	</table>
	<br>
	<center><input name="submit" type="submit" value="{LANG.prounit_save}" />
	</center>
</form>
<script type="text/javascript">
	function changecatid(ob) {
		catid = $(ob).val();
		window.location = '{LINK_CHANGE}' + catid;
	}


	$('a.delete').click(function(event) {
		event.preventDefault();
		if (confirm("{LANG.topic_delete_confirm}")) {
			var href = $(this).attr('href');
			$.ajax({
				type : 'POST',
				url : href,
				data : '',
				success : function(data) {
					window.location = url_back;
				}
			});
		}
	}); 
</script>
<!-- END: main -->
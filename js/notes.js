$.post(baseurl+"cnotes/getNotes",
	function(data){
		//alert(data);
		var obj = JSON.parse(data);
		var stl = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
		$.each(obj, function(i, item){
			$('#tblNotes').append(
				'<tr>'+
				    '<td></td>'+
				    '<td>1</td>'+
				    '<td>'+item.alumno+'</td>'+
				    '<td><input type="text" value="'+item.Primerbimestre+'" style="'+stl+'" maxlength="2"></td>'+
				    '<td><input type="text" value="'+item.Segundobimestre+'" style="'+stl+'" maxlength="2"></td>'+
				    '<td><input type="text" value="'+item.Tercerbimestre+'" style="'+stl+'" maxlength="2"></td>'+
				    '<td><input type="text" value="'+item.Cuartobimestre+'" style="'+stl+'" maxlength="2"></td>'+
				    '<td><input type="text" value="'+item.Notafinal+'" style="'+stl+'" maxlength="2"></td>'+
				'</tr>'

				);

		});
		$('input[type=text]').focus(function(){
				$(this).select();
			
		});

		$('input[type=text]').focusout(function(){
			if ($(this).val()>10){
				
				$(this).focus();
				$(this).select();
			}
		});
	});
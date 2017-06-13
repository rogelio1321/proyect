$.post(baseurl+"cnotes/getNotes",
	function(data){
		//alert(data);
		var obj = JSON.parse(data);
		$.each(obj, function(i, item){
			$('#tblNotes').append(
				'<tr>'+
				    '<td></td>'+
				    '<td>1</td>'+
				    '<td>'+item.alumno+'</td>'+
				    '<td>'+item.Primerbimestre+'</td>'+
				    '<td>'+item.Segundobimestre+'</td>'+
				    '<td>'+item.Tercerbimestre+'</td>'+
				    '<td>'+item.Cuartobimestre+'</td>'+
				    '<td>'+item.Notafinal+'</td>'+
				'</tr>'

				);

		});
	});
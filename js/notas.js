$.post(baseurl+"cnotes/getNotes",
	function(data){
		//alert(data);
		var obj = JSON.parse(data);
		var stl = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
		$.each(obj, function(i, item){
			$('#tblNotes').append(
				'<tr class="rownotes">'+
				    '<td></td>'+
				    '<td>1</td>'+
				    '<td><div class="student" id="'+item.idPersona+'"></div>'+item.alumno+'</td>'+
				    '<td><input type="text" value="'+item.Primerbimestre+'" style="'+stl+'" maxlength="2" class="note1"></td>'+
				    '<td><input type="text" value="'+item.Segundobimestre+'" style="'+stl+'" maxlength="2" class="note2"></td>'+
				    '<td><input type="text" value="'+item.Tercerbimestre+'" style="'+stl+'" maxlength="2" class="note3"></td>'+
				    '<td><input type="text" value="'+item.Cuartobimestre+'" style="'+stl+'" maxlength="2" class="note4"></td>'+
				    '<td><input type="text" value="'+item.Notafinal+'" style="'+stl+'" maxlength="2" class="finalnote"></td>'+
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
		$('#tblNotes .note4').keyup(function(){
			var index = $('.note4').index(this);

			var noteone = $('.note1:eq('+index+')').val();
			var notetwo = $('.note2:eq('+index+')').val();
			var notethree = $('.note3:eq('+index+')').val();
			
			var average = (parseFloat(noteone)+parseFloat(notetwo)+parseFloat(notethree)+parseFloat($(this).val()))/4;
			
			$('.finalnote:eq('+index+')').val(average);
		});
	});

$('#btnSave').click(function(){
	var index=0;
	$('#tblNotes .rownotes').each(function(){
		var idperson = $('.student').attr('id');
		var noteone = $('.note1:eq('+index+')').val();
		var notetwo = $('.note2:eq('+index+')').val();
		var notethree = $('.note3:eq('+index+')').val();
		var notefour = $('.note4:eq('+index+')').val();
		var notefinal = $('.finalnote:eq('+index+')').val();
		$.post(baseurl+"cnotes/saveNotes",
			{
				idperson:idperson,
				noteone:noteone,
				notetwo:notetwo,
				notethree:notethree,
				notefour:notefour,
				notefinal:notefinal
			},
			function(data){
				alert (data);
			});
		index++;

  
	});
});
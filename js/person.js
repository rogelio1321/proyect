$.post(baseurl+"cciudad/getCiudades",
   {
	"sitReg" : 1
   },
	function (data) {
		var city = JSON.parse(data);
		$.each(city,function(i,item){
			$('#cboCity').append('<option value="'+item.idCiudad+'">'+item.ciudad+'</option>');

		});
     
	});

$('#cboCity').change(function(){
	$('#cboCity option:selected').each(function(){
		var id=$('#cboCity').val();
        alert(id);
	});

});

$('#btnGetPerson').click(function(){
    //alert('entro al boton');

    $.post(baseurl+"cpersona/getPerson",
       function(data){
           $('#tblPerson').html(
           	    'tr>'+
                  '<th style="width: 10px">#</th>'+
                  
                  '<th>nombre</th>'+
                  '<th>paterno</th>'+
                  '<th>materno</th>'+
                  '<th>DNI</th>'+
                  '<th>ciudad</th>'+
                  
                '</tr>'

           	);
          var readJson=JSON.parse(data);
          $.each(readJson, function(i, item){
             $('#tblPerson').append(
             	'<tr>'+
                   '<td> 1 </td>'+
                   '<td>'+item.nombre+' </td>'+
                   '<td>'+item.appaterno+' </td>'+
                   '<td>'+item.apmaterno+' </td>'+
                   '<td>'+item.dni+' </td>'+
                   '<td>'+item.ciudad+' </td>'+
                '</tr> '
             	);
          });
       });
});
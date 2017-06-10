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
          alert(data);
       });
});
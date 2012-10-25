
var Premio=function(){
	var url="http://localhost:8082/0903001/";
	var url_admin="admin_sistema";
	var url_empresa="admin_empresa";
	var url_sucursal="admin_sucursal";
	var urls={
		'cargar_registro_de_empresa':url+url_admin+"/form_registrar_empresa",
		'registrar_empresa':url+url_admin+"",
		'ver_lista_empresas':url+url_admin+"",
		'cargar_editar_empresa':url+url_admin+"",
		'editar_empresa':url+url_admin+"",
		'eliminar_empresa':url+url_admin+"",
		"cargar_validacion_cupon":url+url_sucursal+'',
		'verificacion_de_codigo':url+url_sucursal+"",
		'validacion_cupon':url+url_sucursal+"",
		'historial_cupones':url+url_sucursal+"",
		'cargar_registrar_sucursal':url+url_empresa+"",
		'registrar_sucursal':url+url_empresa+"",
		'ver_sucursales':url+url_empresa+"",
		'cargar_editar_sucursal':url+url_empresa+"",
		'editar_sucursal':url+url_empresa+"",
		'eliminar_sucursal':url+url_empresa+"",
		'cargar_liberacion_de_cupones':url+url_empresa+"",
		'registrar_liberacion_de_cupones':url+url_empresa+"",
		'ver_cupones_liberados':url+url_empresa+"",
		'eliminar_cupones_liberados':url+url_empresa+"",
		'cargar_seguimiento_cupones':url+"",
		'seguimiento_cupones':url+"",
		'cargar_seguimiento_cupones':url+""
	};
	
	/*Admin General*/
	function cargar_registro_de_empresa(){
		
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_registro_de_empresa'], 
			success: function(data){ 
				$("#content").html(data);
			},
			error:function(){
		
			}
		});
	}
	function registrar_empresa(){
		
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['registrar_empresa'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function ver_lista_empresas(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['ver_lista_empresas'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function cargar_editar_empresa(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_editar_empresa'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function editar_empresa($id){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['editar_empresa'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function eliminar_empresa($id){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['eliminar_empresa'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	/*Admin Sucursal*/
	function cargar_validacion_cupon(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_validacion_cupon'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function verificacion_codigo($cod){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['verificacion_de_codigo'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function validacion_cupon($id){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['validacion_cupon'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function historial_cupones(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['historial_cupones'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	/*Admin empresa*/
	//administrar sucursal
	function cargar_registrar_sucursal(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_registrar_sucursal'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function registrar_sucursal(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['registrar_sucursal'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function ver_sucursales(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['ver_sucursales'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function cargar_editar_sucursal($id){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_editar_sucursal'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function editar_sucursal($id){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['editar_sucursal'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function eliminar_sucursal($id){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['eliminar_sucursal'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	//cupones
	function cargar_liberacion_de_cupones(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_liberacion_de_cupones'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function registrar_liberacion_de_cupones(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['registrar_liberacion_de_cupones'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function ver_cupones_liberados(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['ver_cupones_liberados'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	
	function eliminar_cupones_liberados(){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['eliminar_cupones_liberados'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	//seguimiento
	function cargar_seguimiento_cupones($tipo){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['cargar_seguimiento_cupones'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
	function seguimiento_cupones($tipo){
		$.ajax({ 
			data: '', 
			type: "GET", 
			url: urls['seguimiento_cupones'], 
			success: function(data){ 
				
			},
			error:function(){
		
			}
		});
	}
}
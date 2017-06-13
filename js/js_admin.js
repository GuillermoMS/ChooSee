$('document').ready(function() {

	//firstView();
	$('.button-adm').on('click',menu);
	
	// Login
    $('#btn-login').on('click',login);
	function login(){
		$.ajax({
		  type: 'POST',
		  async:true,
		  url: '../src/controller/c_adm.php',
		  data: 'usu='+$('#usu').val()+'&pass='+$('#pass').val(),
		  beforeSend: function () {
                $('body').append('<img src="../../mm/img/app/loading.gif">');
            },
		  success: function(response)
		  	{
				$('body').html(response);
			},
		  dataType: 'html'
		});
	}

	// Menu
	function menu(){
		$.ajax({
		  type: 'POST',
		  async:true,
		  url: '../src/controller/c_adm.php',
		  data: 'view='+$(this).attr('id'),
          beforeSend: function () {
              $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
		  success: function(response)
		  	{
				$('.cont-dinamic').html(response);
				$('.btn-bane img').on('click',bane($(this).attr('id')));
			},
		  dataType: 'text'
		});
	}
	
	// Vista al iniciar
	function firstView(){
		$.ajax({
		  type: 'POST',
		  async:true,
		  url: '../src/controller/c_adm.php',
		  data: 'view=regs',
          beforeSend: function () {
              $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
		  success: function(response)
		  	{
				$('.cont-dinamic').html(response);
				
			},
		  dataType: 'text'
		});
	}
	
	// Cerrar sesion 
	$('#closeSesion').on('click',cerrarSesion);
	function cerrarSesion(){
		$.ajax({
		  type: 'POST',
		  async:true,
		  url: '../src/controller/c_adm.php',
		  data: 'clsesion=true',
          beforeSend: function () {
              $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
		  success: function(response)
		  	{
				$('body').html(response);
			},
		  dataType: 'html'
		});
	}	
	
	// PROBLEMAS
	
	function bane(view){
		$.ajax({
		  type: 'POST',
		  async:true,
		  url: '../src/controller/c_adm.php',
		  data: 'view='+view+'&bane='+$(this).attr('id'),
          beforeSend: function () {
              $('#cont').html('<img src="../../mm/img/app/loading.gif" id="loading">');
            },
		  success: function(response)
		  	{
				$('.cont-dinamic').html(response);
			},
		  dataType: 'html'
		});
	}	
	
	
	
	
	
	
	
		
});
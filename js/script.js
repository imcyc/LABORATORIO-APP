$(document).ready(function(){

	$('input').click(function(){
		$('.resultado').fadeIn();
		calcscore();
	});

	function calcscore(){
		var score = 0;
                var lacantidad = $('.resultado p.sup').data('porcentaje');
		$('input:checked').each(function(){
			score += parseFloat($(this).val(),10);
		});
                var promedio = parseFloat((score * 100)/lacantidad).toFixed(2);
                console.log("El promedio " + promedio);
                if(promedio >= 59){
                    $("input[name=sum]").addClass('verde');
                } else {
                    $("input[name=sum]").addClass('rojo');
                }
		$("input[name=sum]").val(promedio + " %");
		progress(score, $('#progressBar'));
	}

	function progress(percent, $element){
		var progressBarWidth = percent * $element.width()/24;
		$element.find('div').animate({width: progressBarWidth}, 500).html(percent + ' %');
	}

	$('.row.cuestionario.res').each(function(){
		var numx = $(this).html();
		//console.log(numx);
		$(this).find('.resultarnum').each(function() {
	        var rex = $(this).html();
			console.log(rex);
			if(rex == 1 || rex == 2 || rex == 0.5){
				$(this).parents('.col-md-1.resultar').css('background','#2d5e07');
				$(this).siblings('h3.resultarres').html('Sí');
				//$('.col-md-1.resultar.a').css('background','#2d5e07');
				//$('.col-md-1.resultar.a').css('color','#ffffff');
			} else {
				$(this).parents('.col-md-1.resultar').css('background','#ff0000');
				$(this).siblings('h3.resultarres').html('No');
			}
	    });
	});

	//console.log(mvar);
        $('ul#tabs li').click(function(e){
            if(!$(this).hasClass("active")){
                var tabNum = $(this).index();
                var ntChild = tabNum+1;
                $('ul#tabs li.active').removeClass("active");
                $(this).addClass("active");
                $('div.tab div').removeClass("active");
                $('div.tab div:nth-child('+ntChild+')').addClass("active");
            }
        });
        
        
        $("#login-form").validate({
            rules:
                    {
                      usuario: { required:true },
                      password: {required:true}
                    },
            messages:
                    {
                      usuario: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>El nombre de usuario es requerido.</span>",
                      password: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>Por favor ingrese su contraseña.</span>"
                    },
            submitHandler : submitFormx
        });
        
        function submitFormx(){
            var data = $("#login-form").serialize();
            $.ajax({
               type: "POST",
               url: "inc/login.php",
               data: data,
               beforeSend: function(){
                   $("#error").fadeOut();
                   $("#btn.login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
               },
               success: function(response){
                    if(response==="admin"){
                        $("#btn.login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
                        setTimeout('window.location.href = "mezcladora.php"', 2000);
                    } else {
                        $("#error").fadeIn(1000, function(){
                           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
                           $("#btn-login").html('Sus datos no son correctos!');
                        });
                    }
               }
            });
            return false;
        };
        
        
        
        $("#login-formpersonal").validate({
            rules:
                    {
                      usuario: { required:true },
                      password: {required:true}
                    },
            messages:
                    {
                      usuario: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>El nombre de usuario es requerido.</span>",
                      password: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>Por favor ingrese su contraseña.</span>"
                    },
            submitHandler : submitFormy
        });
        
        function submitFormy(){
            var data = $("#login-formpersonal").serialize();
            $.ajax({
               type: "POST",
               url: "inc/login.php",
               data: data,
               beforeSend: function(){
                   $("#error").fadeOut();
                   $("#btn-loginpersonal").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
               },
               success: function(response){
                    if(response==="admin"){
                        $("#btn-loginpersonal").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
                        setTimeout('window.location.href = "personal/index.php"', 2000);
                    } else {
                        $("#error").fadeIn(1000, function(){
                           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
                           $("#btn-loginpersonal").html('Sus datos no son correctos!');
                        });
                    }
               }
            });
            return false;
        };
        
        
        $("#login-formlaboratorio").validate({
            rules:
                    {
                      usuario: { required:true },
                      password: {required:true}
                    },
            messages:
                    {
                      usuario: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>El nombre de usuario es requerido.</span>",
                      password: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>Por favor ingrese su contraseña.</span>"
                    },
            submitHandler : submitFormz
        });
        
        
        function submitFormz(){
            var data = $("#login-formlaboratorio").serialize();
            $.ajax({
               type: "POST",
               url: "inc/login.php",
               data: data,
               beforeSend: function(){
                   $("#error").fadeOut();
                   $("#btn-loginlaboratorio").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
               },
               success: function(response){
                    if(response==="admin"){
                        $("#btn-loginlaboratorio").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
                        setTimeout('window.location.href = "menulaboratorio.php"', 2000);
                    } else {
                        $("#error").fadeIn(1000, function(){
                           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
                           $("#btn-loginlaboratorio").html('Sus datos no son correctos!');
                        });
                    }
               }
            });
            return false;
        };
        
        
        $("#login-formaditivos").validate({
            rules:
                    {
                      usuario: { required:true },
                      password: {required:true}
                    },
            messages:
                    {
                      usuario: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>El nombre de usuario es requerido.</span>",
                      password: "<span style='background:#ff0000;color:#ffffff;padding:3px 20px;'>Por favor ingrese su contraseña.</span>"
                    },
            submitHandler : submitForma
        });
        
        
        function submitForma(){
            var data = $("#login-formaditivos").serialize();
            $.ajax({
               type: "POST",
               url: "inc/login.php",
               data: data,
               beforeSend: function(){
                   $("#error").fadeOut();
                   $("#btn-loginaditivos").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
               },
               success: function(response){
                    if(response==="admin"){
                        $("#btn-loginaditivos").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
                        setTimeout('window.location.href = "aditivos.php"', 2000);
                    } else {
                        $("#error").fadeIn(1000, function(){
                           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
                           $("#btn-loginaditivos").html('Sus datos no son correctos!');
                        });
                    }
               }
            });
            return false;
        };
 
        $('button.btn.entrada').click(function(){
            $('.jumbotron.vertical-center.seccion').fadeOut('fast'); 
            $('.jumbotron.vertical-center.id').fadeIn('slow');
            var elvalor = $(this).data('seq');
            var linker = $(this).data('ref');
            $('h3.laevaluacion').html(elvalor);
            $('a.linker').attr("href", linker);
            $('a.btn.azul.tecnico').attr("href", "pro" + linker);
            console.log(elvalor);
            console.log(linker);
        });
        
        $('button.btn.resultadogral').click(function(e){
            $('body').addClass('vampire');
            $('.jumbotron.vertical-center.seccion').fadeOut('fast');
            $('.jumbotron.vertical-center.resultadosgrales').fadeIn('slow');
            $.get('includes/resultadosgrales.php', function(data){
                $('.resultadosgrales .resultmix').html(data);
            });
            e.preventDefault();
        });
        
        $('.btn.btn-default.azul.regresar.resultax').click(function(e){
            $('.jumbotron.vertical-center.resultadosgrales').fadeOut('fast');
            $('.jumbotron.vertical-center.seccion').fadeIn('slow');
            e.preventDefault();
        });
        
        $('button.btn.regresar').click(function(){
            window.history.back();
        });
        
        $('form#usuarioequipo').submit(function(e){
            
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "inc/elid.php",
                data: data,
                beforeSend: function(){
                    $('.felid').fadeOut();
                    $('.loader').html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Enviando...');
                },
                success: function(response){
                    if(response==="admin"){
                        $('.loader').html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Ingresando...');
                        setTimeout('window.location.href = "includes/revenimiento.php"', 2000);
                    } else {
                        $("#error").fadeIn(1000, function(){
                           $('.loader').fadeOut();
                           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
                           $("#btn-loginaditivos").html('Sus datos no son correctos!');
                        });
                    }
                }
            });
            console.log(data);
            e.preventDefault();
        });
        
        $('form#Rrevenimiento').submit(function(e){
            var data = $(this).serialize();
            console.log(data);
            $('.resultado').fadeOut();
            
            $.ajax({
               type: "POST",
               url: "Rrevenimiento.php",
               data: data,
               beforeSend: function(){
                   $('form#Rrevenimiento').fadeOut();
                   $('.row.resultados').fadeIn();
                   $('.row.resultados').html('<div align="center"><img src="../images/loader.gif" alt="cargando" title="cargando" style="width:100px;margin-top:50px;"></div>');
               },
               success: function(response){
                   $('html, body').animate({ scrollTop: 0 }, 2000);
                   $('.row.resultados').html(response);
               }
            });

            e.preventDefault();
        });
        
        $('.btn.btn-success.enviar').click(function(){
            $(window).animate({
                scrollTop: 0
            }, 2000);
        });
        

        
        
});
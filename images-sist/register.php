<?



if ($config['reg_allow'] == 0 ) {



		



			alerta('Error el registro esta inhabilitado\nporfavor contacta al administrador\n'.$config["admin_mail"].'');



			redirect("index.php");



			



}else{



?>



<STYLE type=text/css>







.mainoptionzzz{







CURSOR: hand;



width:71px;



height:20px;



border:0px;



background-image:url(<?php echo $imgpath; ?>img/modules/register/member_ok.gif) !important;







}







#floater {



	POSITION: absolute



}



</STYLE>







 <META http-equiv=Content-Type content="text/html; charset=iso-8859-1">



<LINK href="<?php echo $imgpath; ?>img/modules/register/link.css" type=text/css rel=stylesheet>







<SCRIPT language=javascript src="<?php echo $imgpath; ?>img/img_web/Message.js"></SCRIPT>







<SCRIPT language=javascript src="<?php echo $imgpath; ?>img/img_web/member.js"></SCRIPT>















<STYLE type=text/css>







.style1 {



	COLOR: yellow



}



</STYLE>







<?PHP



if($_GET['AgreeTerm']!='Yes'){



?>



<title><?=$config['server_name']?></title><table border="0" cellpadding="0" cellspacing="0" width="455"><FORM name=Frm1>

        <tbody><tr bgcolor="#517791"> 

          <td colspan="3" height="4"></td>

        </tr>

        <tr bgcolor="#517791"> 

          <td width="4">&nbsp;</td>

          <td width="447"><table class="text2" border="0" cellpadding="0" cellspacing="0" width="447">

              <tbody><tr>





                <TD bgColor=#77a0bd><IMG height=26 



                  src="<?php echo $imgpath; ?>img/modules/register/term_of_use01.gif" width=447></TD></TR>



              <TR>



                <TD align=middle bgColor=#77a0bd>



                  <TABLE class=text2 cellSpacing=0 cellPadding=0 width=427 



                  border=0>



                    <TBODY>



                    <TR>



                      <TD width=419>Membership registration and use free of 



                        charge.<BR>Please read the Terms of Service and click [ 



                        Agree] button in order to 



                register.</TD></TR></TBODY></TABLE></TD></TR>



              <TR>



                <TD bgColor=#77a0bd><IMG height=6 



                  src="<?php echo $imgpath; ?>img/modules/register/term_of_use_line.gif" width=447></TD></TR>



              <TR>



                <TD align=middle bgColor=#77a0bd><TEXTAREA style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; WIDTH: 427px; COLOR: #666666; BORDER-BOTTOM: 1px solid; BACKGROUND-COLOR: #c7deee" name=textfield3 rows=15 readOnly>Acuerdo de Uso 







Actualizado al 1� de Diciembre del 2003







1. T�rminos del acuerdo



Softnyx Co. Ltd. (SOFTNYX) le permite jugar su juego de computadora multi-jugador en l�nea "GunBound" y/o el juego de rol multi jugador masivo en l�nea (MMORPG) Rakion, con previa aceptaci�n de todos los t�rminos y condiciones contenidas en este acuerdo y a ce�irse conjuntamente a su c�digo de conducta. El uso de GunBound y/o Rakion constituye la aceptaci�n de dichos t�rminos y condiciones as� como del c�digo de conducta para el mismo. El hecho de hacer clic en "Agree" (Acepto) al final de este acuerdo constituye su aceptaci�n. Si no acepta debe hacer clic en "Cancel" (Cancelar) al final de este acuerdo, en se�al de que reh�sa los t�rminos y no le ser� permitido jugar GunBound ni Rakion. Si tiene alguna pregunta con respecto a estos t�rminos y condiciones o del C�digo de Conducta favor ponerse en contacto con un representante de atenci�n al cliente de Gb Universal a Bujito@msn.com







2. Definiciones



(A) "Propiedad Intelectual" que significa que todas las patentes, dise�os, modelos, derechos de autor, conocimiento laboral, secreto comercial, marcas registradas, marcas de servicio, vestimentas y otros derechos de propiedad intelectual relacionadas al juego o informaci�n t�cnica



(B) "Informaci�n t�cnica" que significa que el Software (programa), conocimiento laboral, datos, resultados de pruebas, dise�os, arte gr�fico, procesos, escrituras, conceptos e informaci�n t�cnica de otra �ndole o con referencia al juego y a la instalaci�n del mismo, su operaci�n, mantenimiento, servicio y uso del mismo.



(C) "Usuarios finales" que significa que los usuarios del juego a trav�s del sistema de juegos en red establecidos y operados individualmente asignados por n�meros de identificaci�n (ID) para cada usuario.







3. Rectificaciones o enmiendas



El presente acuerdo de uso ("El Acuerdo") comprende la completa aceptaci�n entre Gb Universal y el Usuario, y substituye cualquier acuerdo anterior entre el Usuario y SOFTNYX con respecto al contenido del mismo. Este acuerdo no reemplaza otros t�rminos y condiciones adicionales para lo cual el usuario ser� notificado por SOFTNYX y/o los cuales podr�an aplicar cuando se use los servicios de terceros. SOFTNYX puede rectificar o revisar este acuerdo en cualquier momento a su propia discreci�n, y dichas rectificaciones o revisiones ser�n efectivas previa publicaci�n del acuerdo que contiene tales modificaciones en el sitio web de Gb Universal. El usuario por este medio acepta el revisar dicho acuerdo ingresando al sitio web peri�dicamente y estar al tanto de cualquier modificaci�n. Si cualquier modificaci�n es inaceptable por el usuario, el usuario puede resolver el acuerdo. La continuidad del uso de los servicios esta sujeta a la aceptaci�n de un posible nuevo acuerdo publicado en �el sitio web�







4. Descripci�n del servicio



SOFTNYX ofrece "GunBound" y/o Rakion como un juego en l�nea (el servicio) accesible a trav�s de Internet en "http://gbc.sytes.nett" (el "Sitio Web"). SOFTNYX se reserva el derecho de cambiar la direcci�n URL del sitio Web en cualquier momento y de vez en cuando. Para usar los servicios necesita instalar el programa el cual SOFTNYX pone a disposici�n a trav�s del sitio Web (El programa). Cualquiera que desee usar el servicio debe obtener una cuenta de usuario con Gb Universal (la "cuenta de usuario") Gb Universal no provee el acceso a Internet, y usted es responsable por todos pagos concernientes a su conexi�n a Internet. El sitio Web localizado en http://gbc.sytes.net que es una parte activa del servicio y cualquier uso del mismo esta sujeta a los mismos t�rminos y condiciones conjuntamente al c�digo de conducta.







5. Registro, obligaciones y seguridad del usuario.



Con el fin de acceder al servicio, es necesario completar un formulario de registro el cual contiene el nombre de usuario (ID), contrase�a, g�nero, direcci�n de correo electr�nico y pa�s. En consideraci�n al uso del servicio acepta proveer informaci�n completa, verdadera y actualizada con respecto a su persona como si fuera cualquier otra forma de registro para mantener una informaci�n actualizada la misma que es completa correcta y fidedigna haciendo los cambios, adiciones o supresiones a su perfil de usuario. Si cualquier informaci�n provista no es verdadera, inexacta y no actualizada, SOFTNYX tendr� el derecho de suspender o terminar su derecho al uso del servicio y negarle el uso de otros o futuros servicios.







Queda de su conocimiento que Gb Universal se reserva el derecho de negarle un nombre de usuario que se encuentre en uso, el cual puede ser ilegal, pueda ser una marca registrada, si es obsceno o vulgar o de otra manera determinado como inapropiado por SOFTNYX a su sola discreci�n. Usted acepta ser responsable por todos los actos y omisiones que pueda ocurrir vinculados a su contrase�a. Usted acepta mantener su contrase�a de forma confidencial y dar aviso a Gb Universal si cree que la seguridad de su contrase�a ha sido comprometida.



Es de su conocimiento que Gb Universal no lo protege del uso no autorizado de su contrase�a.







(a) Elegibilidad. Las cuentas est�n disponibles para cualquier individuo. Si desea hacer uso del servicio, debe completar el formulario de registro, abrir una cuenta a su nombre y aceptar la entera responsabilidad por todas las obligaciones dentro del presente contrato.



Aquellos que hayan completado este proceso y quienes mantienen en buen estado sus cuentas son usualmente mencionados en este acuerdo como "Miembros". Haciendo clic en el bot�n "Agree" (Acepto) el usuario registrado de una cuenta puede hacer uso de la misma. Solo una persona puede usar una cuenta y es responsable de todas las actividades hechas por medio de su cuenta.







(b) ID de la cuenta. Al momento de que se apertura una cuenta, usted debe escoger un nombre que permita identificarlo ante el personal de Gb Universal (su ID de cuenta) No puede escoger como un ID de cuenta los nombres de otras personas, o nombres los cuales violen los derechos de autor de marcas registradas de terceros, o la propiedad de otros o los que SOFTNYX considere a su sola discreci�n como vulgares u ofensivos. SOFTNYX se reserva el derecho de borrar o cambiar cualquier ID de cuenta que sea ofensivo u vulgar. Usted es el �nico responsable por todas las actividades hechas por medio de su cuenta o por su ID de cuenta.







(c) Cuenta. El aceptar el acuerdo de uso tambi�n acepta que usted no es el due�o de la cuenta que usa para acceder al servicio, los personajes de Gb Universal que almacena en sus servidores, los �tems almacenados en esos servidores o cualquier informaci�n en la cual los servidores y las cuentas est�n comprometidos. La cuenta que usted cree es necesaria para ingresar al servicio y para facturarle el costo que pagar� para continuar accediendo al servicio.







(d) Contrase�as. Al momento de que se apertura una cuenta, usted debe elegir una contrase�a, usted es responsable de mantenerla en secreto y tambi�n es responsable por cualquier da�o como resultado de la revelaci�n o permitir la revelaci�n de su contrase�a o por el uso de que le pueda dar cualquier persona para tener acceso por medio de su contrase�a, cuenta o ID de cuenta.



Nunca debe responder a un requerimiento en l�nea de su contrase�a. Gb Universal nunca le solicitara su contrase�a estando o no en l�nea, solo se le pedir� la contrase�a en el proceso de ingreso al sistema.







(e) Miembros anteriores. Miembros a los cuales sus cuentas fueron cerradas por Gb Universal, pueden no acceder al servicio por ninguna manera o por ninguna raz�n, incluso por medio de otra cuenta, sin el expreso permiso de SOFTNYX.







(f) Cuentas relacionadas. Si Gb Universal cierra una cuenta, Gb Universal puede cerrar otras cuentas que comparten el mismo nombre del miembro en cuesti�n, n�mero telef�nico, direcci�n de correo, direcci�n postal, direcci�n IP o numero de tarjeta de cr�dito con una cuenta que haya sido cerrada.







6. Cargos por el servicio



(a) Costo por membrec�a. Actualmente no hay costo por membrec�a.



(b) Cargos opcionales. Si un miembro desea comprar alg�n avatar e �tem de juego, los costos de los mismos ser�n cobrados.



Todos los precios est�n expresados en D�lares americanos (US$) LOS COSTOS OPCIONALES NO SON REEMBOLSABLES EN TODO O EN PARTE.







7. Compensaci�n



Usted acepta compensar, defender y mantener libre de da�os a Gb Universal y sus subsidiarias y afiliadas y sus respectivos directivos, funcionarios, accionistas, empleados, agentes, proveedores de servicios, clientes y contratistas contra cualquier perdida, reclamaci�n, demanda, costos y costas (incluyendo gastos legales) impuestos por terceros debido a la desobediencia o al no cumplimiento de las reglas del uso del servicio o la violaci�n de los derechos de otros usuarios.



SOFTNYX se reserva el derecho de asumir la exclusiva defensa y control de cualquier problema, lo anterior no lo excluye de sus obligaciones compensatorias.







8. Resoluci�n



SOFTNYX o usted pueden cerrar su cuenta en cualquier momento sin ninguna obligaci�n por parte del otro. SOFTNYX se reserva el derecho de darle fin al servicio en cualquier momento sin ninguna obligaci�n para con usted. SI el servicio o su cuenta es cerrada o cancelada en cualquier momento, usted acepta lo siguiente: (1) No estar� facultado de reclamar ning�n reembolso completo o parcial de cualquier pago. (2) Perder� cualquier avatar o �tem conseguido y no tendr� el derecho de transferirlo, venderlo o darle cualquier avatar o �tem a otra persona. (3) Es posible que no tenga acceso al servicio por ning�n motivo o raz�n, esto incluye el acceso por otra cuenta, en caso sucediera esto, dicha cuenta ser� cerrada, SOFTNYX puede cerrar una o todas las cuentas que compartan el nombre del miembro, numero telef�nico, direcci�n de correo electr�nico, direcci�n IP o n�mero de tarjeta de cr�dito con la cuenta cerrada. (4) Podemos dar por terminado el presente acuerdo (incluyendo su licencia de uso de software y su cuenta inmediatamente sin notificaci�n alguna, si usted incumple este acuerdo o infringe deliberadamente la propiedad intelectual de terceros, o si no nos es posible verificar o autenticar cualquier informaci�n que nos haya prove�do, o sobre el juego, sala de Chat o cualquier actividad inapropiada cualesquiera que fuera a nuestra discreci�n, y/o violaci�n de las reglas de conducta descritas para GunBound y Rakion. Si damos por terminado este acuerdo bajo cualquier motivo, perder� el acceso a su cuenta y cualquier pago que haya realizado no ser� reembolsado.







9. Propiedad Intelectual



SOFTNYX, incluye sin limitaciones, todas comunicaciones de Gb Universal que contengan material protegido por los derechos de autor, marcas registradas o cualquier otra informaci�n sin ninguna limitaci�n sea texto, software, fotograf�as, videos, gr�ficos, m�sica y sonido y todo el cometido publicado por SOFTNYX se encuentra bajo los derechos de propiedad intelectual la cual trabaja colectivamente bajo las leyes de la Rep�blica de Corea. SOFTNYX es due�o de los derechos en la selecci�n, coordinaci�n, disposici�n y mejoras de tales contenidos. Los usuarios no pueden modificar, publicar, transmitir, participar en una transferencia o venta, crear trabajos derivados, o cualquier tipo de explotaci�n de cualquier contenido de la cual SOFTNYX es due�o (incluye sin limitaciones el contenido del Sitio Web que esta apto para descarga) sin permiso expreso por escrito de SOFTNYX y sus due�os de dichos contenidos. En cualquier caso de copia, redistribuci�n o publicaci�n autorizada de material protegido por los derechos de autor, ning�n cambio, supresi�n o atribuci�n de autor, marcas registradas, legendas o noticias de derechos de autor, deben ser realizadas. La descarga de material protegido por los derechos de autor de SOFTNYX por los usuarios esta permitido siempre y cuando sea para su solo uso. Los usuarios admiten que SOFTNYX y/o terceras personas que provean dicho contenido siguen siendo los due�os de todo material publicado en SOFTNYX y los usuarios no adquieren ning�n tipo de propiedad por el solo hecho de descargar material protegido por los derechos de autor.







10. Limitaciones de responsabilidad



EL USUARIO ES CONSCIENTE DE QUE SOFTNYX NO ASUME O NO TIENE NINGUNA RESPONSABILIDAD POR CUALQUIER ACCI�N QUE SOFTNYX O SUS PROVEEDORES DE CONTADO U OTRAS AUTORIDADES CON RESPECTO A LA CONDUCTA, COMUNICACI�N O CONTENIDO DE LOS SERVICIOS. SOFTNYX NO DEBER� SER RESPONSABLE POR CUALQUIER DA�O INDIRECTO, INCIDENTAL, ESPECIAL PUNITIVO, EJEMPLAR O DA�OS CONSIGUIENTES (INCLUYENDO SIN LIMITACIONES, PERDIDA DEL NEGOCIO, GANANCIAS, INTERRUPCI�N DEL NEGOCIO, PERDIDA DE INFORMACI�N, O CUALQUIER OTRA PERDIDA FINANCIERA) VINCULADA CON LOS SERVICIOS O CUALQUIER PRODUCTO PROVE�DO POR SOFTNYX. LA RESPONSABILIDAD DE SOFTNYX Y LA SOLUCI�N EXCLUSIVA PARA LOS USUARIOS CON RESPECTO AL USO DE LOS SERVICIOS Y DE TODO EL CONTENIDO Y SOFTWARE DESARROLLADO POR O PARA LOS SERVICIOS DE SOFTNYX EL CUAL FUERA ENCONTRADO DEFECTUOSO USANDO EL MEDIO ESCOGIDO POR SOFTNYX DEBE ESTAR LIMITADO A UNA CANTIDAD SEMEJANTE A LA CANTIDAD PAGADA POR EL USUARIO POR UN SERVICIO DEFECTUOSO, MENOS UNA CANTIDAD IGUAL AL VALOR DEL SERVICIO POR EL TIEMPO EN EL CUAL FUE USADO CORRECTAMENTE. LA RESPONSABILIDAD DE SOFTNYX PARA CON LOS USUARIOS POR CUALQUIER OTRO INCUMPLIMIENTO DE ESTE ACUERDO ESTA LIMITADA SOLAMENTE AL TOTAL DEL MONTO PAGADO ACUMULADO PARA EL ACCESO Y USO DE LOS SERVICIOS.







Usted acepta que SOFTNYX no puede ser responsable por lo que ocurra o sea resultado del hecho de acceder o suscribirse al servicio de GunBound y/o Rakion.







11. Privacidad



La informaci�n personal que usted nos provea durante el registro es usado para nuestro prop�sitos �nicamente. Usamos la informaci�n, la reunimos para saber que es lo que le gusta y as� mejorar el servicio. Excepto, aparte de lo expresamente permitido por este acuerdo o lo permitido por usted, no daremos la informaci�n entregada por usted a terceras personas sin su expresa aprobaci�n. No garantizamos la seguridad por cualquier transmisi�n privada de usted contra intercepciones o accesos no autorizados o ilegales por parte de terceros. Podemos (y usted si nos autoriza) mantener esta informaci�n en privado acerca de usted a entidades privadas, legales o agencias de cumplimiento de la ley u oficiales gubernamentales, as� como a nuestra discreci�n creemos necesario o apropiado investigar o resolver posibles problemas o pesquisas, o lo contrario requerido por la ley. Si usted solicita soporte t�cnico, nos da su consentimiento de acceso remoto y revisi�n de la computadora donde ejecuta el software con fines de soporte y eliminaci�n de errores. Acepta, que podremos comunicarnos con usted v�a correo electr�nico o su similar por los motivos relacionados a tal soporte requerido por usted. El software y cualquier servicio o software el cual podr�a en el futuro ser prove�do por parte nuestra o por nuestro patrocinio.







12. Renuncia a las garant�as



USTED ACEPTA EXPRESAMENTE QUE EL SERVICIO Y EL CONTENIDO ES PROVE�DO BAJO EL MODO DE "AS IS" ("TAL COMO ESTA") Y "AS AVAILABLE (TAL COMO EST� DISPONIBLE) Y EL USO DEL SERVICIO ES A SU RIESGO. SOFTNYX Y TODOS LOS PROVEEDORES DE SERVICIOS AL CLIENTE EXPRESAMENTE RENUNCIAN A TODAS LAS GARANT�AS DE CUALQUIER TIPO, INCLUSO LA EXPL�CITA O IMPL�CITA. INCLUYENDO SIN LIMITACIONES, GARANT�AS DE COMERCIALIDAD, O HABILIDAD POR UN PROP�SITO EN PARTICULAR, NO INFRINGIENDO LA PROPIEDAD INTELECTUAL O LA VIOLACI�N DE OTROS DERECHOS. SOFTNYX Y TODOS LOS PROVEEDORES DE SERVICIO AL CLIENTE NO GARANTIZAN DE QUE EL SERVICIO SATISFAGA SUS REQUERIMIENTOS O DE QUE EL SERVICIO SEA ININTERRUMPIDO. OPORTUNO, SEGURO O LIBRE DE ERRORES. SOFTNYX Y TODOS LOS PROVEEDORES DE SERVICIO NO REPRESENTAN O GARANTIZAN ESTO COMO RESULTADOS OBTENIDOS DEL USO DEL SERVICIO SEA EL RESULTADO QUE PODR�A SER OBTENIDO DE DICHO USO EL CUAL SERIA CONFIABLE, O EXACTO O QUE LA CALIDAD DE CUALQUIERA DE LOS PRODUCTOS, SERVICIOS, INFORMACI�N U OTRO MATERIAL COMPRADO O ADQUIRIDO POR USTED A TRAV�S DEL SERVICIO LLENAR� SUS EXPECTATIVAS. SOFTNYX NO GARANTIZA QUE LOS DEFECTOS EN EL SOFTWARE SER�N CORREGIDOS O QUE EL SITIO WEB O EL SERVIDOR QUE HACE LO HACE DISPONIBLE ESTE LIBRE DE VIRUS O DE OTROS COMPONENTES DA�INOS.







USTED ENTIENDE Y ACEPTA QUE CUALQUIER MATERIAL Y/O OTRA INFORMACI�N DESCARGADA O DE OTRO MODO OBTENIDO A TRAV�S DEL SERVICIO ES REALIZADO A SU PROPIO JUICIO Y RIESGO EL CUAL USTED SER� EL �NICO RESPONSABLE POR CUALQUIER DA�O A SU COMPUTADORA O PERDIDA DE INFORMACI�N COMO RESULTADO DE LA DESCARGA DE DICHO MATERIAL O INFORMACI�N.







NING�N AVISO O INFORMACI�N TANTO SEA ORAL O ESCRITA, OBTENIDA POR USTED PROVENIENTE DE SOFTNYX O CUALQUIERA DE SUS PROVEEDORES DE SERVICIO O A TRAV�S DEL SERVICIO DAR�A COMO ORIGEN UNA GARANT�A IMPL�CITA DENTRO DE ESTOS T�RMINOS DE USO.







13. Conducta Inaceptable



El usuario, mientras use el servicio, no puede mantener ninguna conducta o comunicaci�n la cual vaya contra la ley o no permitir que otros usuarios disfruten de dicho servicio, El usuario conviene y acepta usar el servicio dentro de la ley. SOFTNYX se reserva el derecho de ponerle fin a su estado de usuario si as� lo determina y a su propia discreci�n a aquellos usuarios que tengan una conducta inaceptable. La lista de conducta prohibida se menciona en la sub-secci�n (b); l�neas abajo provee ejemplos de conducta inaceptable, la misma que no es una lista completa y SOFTNYX se reserva el derecho, m�s no la responsabilidad de restringir tipos de conducta que SOFTNYX as� lo estime a su sola discreci�n, que podr�a ser perjudicial para los usuarios, cause da�o al servicio o viole los derechos de SOFTNYX o de terceros. SOFTNYX puede prohibir o eliminar tipos de conducta, medio de comunicaci�n o contenido transmitido por medio de los servicios SOFTNYX los cuales estime que viola la ley o haga alg�n da�o a otros usuarios, el servicio a la comunidad de SOFTNYX o a sus derechos en general. El usuario declara conocer sin embargo que la comunicaci�n v�a los servicios, puede ser incluso en tiempo real y SOFTNYX no puede y no pretende filtrar la comunicaci�n en curso.







NO PUEDE USAR EL SERVICIO PARA



A) Acosar, amenazar o poner en verg�enza a otro usuario del servicio o causar distracci�n, llamar la atenci�n en forma no deseada, causar incomodidad al usuario o a cualquier otra persona o entidad. SOFTNYX no perdona el hostigamiento de ninguna clase y podr� suspender o cerrar la cuenta de cualquier usuario que hostigue a otros usuarios. Ataques personales ligados al raza, origen, etnicidad, religi�n, genero, estilo de vida, incapacidad u de otra �ndole esta terminantemente prohibido.







B) Publicar o transmitir im�genes de sexo explicito, o hacer referencia a ese tipo de im�genes. SOFTNYX proh�be la transferencia o publicaci�n de im�genes de contenido sexual explicito u otro contenido ofensivo.







C) Transmitir cualquier contenido que este fuera de la ley, sea da�ino, amenazante, abusivo, hostigante, difamatorio, vulgar, obsceno, enconoso, racista, �tnico o de otra forma inaceptable o censurable. Si el usuario emplea lenguaje vulgar u ofensivo en l�nea, incluso si se usa s�mbolos u otros caracteres para ocultarlo u tenga un comportamiento inaceptable, el usuario podr� recibir una advertencia, o ser temporal o permanentemente excluido de uno o mas juegos, boletines, �reas de charla (Chat), o su estatus de usuario podr�a tener un fin inmediato y podr�a estar sujeto al pago por da�os y/o proceso judicial por las autoridades competentes.







D) Causar "scrolling" o incitar a cualquier acci�n con efectos destructivos similares. "Scrolling" es definido como causar que repetidamente avance la pantalla m�s r�pido de que los usuarios sean capaces de escribir en la misma.







E) Impresionar a cualquier persona, incluyendo pero no limitado a los empleados, observadores o anfitriones de SOFTNYX. El usuario no deber� por si mismo o hacerse pasar como parte del personal o empleado de SOFTNYX mientras se comunique en l�nea, incluyendo pero no limitado a los nombres, perfiles, voz, texto o gr�ficos, mensajes publicados o cualquier otra forma de comunicaci�n en l�nea. La personificaci�n de un personal de SOFTNYX traer� como consecuente el cierre inmediato de la cuenta.







F) Incentivar el "comportamiento disruptivo" en las salas de charla, �reas de juego, boletines o en cualquier otra �rea del servicio. El comportamiento disruptivo debe ser incluido pero no ser� limitado a la conducta que deliberadamente interfiere la normar circulaci�n del dialogo en el �rea de servicio.



El comportamiento disruptivo tambi�n incluye pero no esta limitado a anuncios comerciales, solicitudes y publicidad.







G) Publicar o transmitir cadenas o modelo de publicidad pir�mide (referir a otros con espera de recibir ganancias). Este tipo de material causa una carga innecesaria en el servicio y es considerado una molestia para muchos usuarios.



Ciertos tipos de cadenas y modelo de publicidad pir�mide (referir a otros con espera de recibir ganancias) son tambi�n ilegales, Estos tipos de conducta prohibidas incluyen pero no esta limitada a la transmisi�n de cartas o mensajes los cuales ofrecen un producto o servicio el cual esta basado en la estructura de una cadena







H) Publicar o transmitir publicidad no solicitada, material promocional, u otras formas. Los servicios de SOFTNYX no deben ser usados para enviar publicidad no solicitada o material de promoci�n u otras formas a los usuarios. El usuario no puede usar los servicios de SOFTNYX para recolectar o �recoger� nombres de usuario sin el permiso expreso de esos usuarios. SOFTNYX se reserva el derecho de bloquear y/o filtrar solicitudes de correo masivo en o a trav�s del servicio.







I) El quebrantar cualquier regla, pol�tica o directiva de cualquier otro servicio en l�nea. Los usuarios adicionalmente aceptan el acatar las reglas del proveedor de servicios de Internet.







J) Quebrantar, intencional o no intencionalmente cualquier ley o regulaci�n local, estatal o nacional.







K) Modificar cualquier archivo que SOFTNYX no haya dado autorizaci�n a los usuarios. El uso del material esta sujeto a los derechos de cualquier persona o entidad sin permiso expreso de sus respectivos due�os, esta prohibido y tendr� como resultado la terminaci�n del estado de usuario y posible acci�n civil o legal.







L) El publicar muchos boletines a la vez y/o enviar correos m�ltiples no solicitados a una sola direcci�n, algunas veces llamado "spam" esta prohibido. SOFTNYX puede tomar acciones sobre la cuenta del usuario por cualquiera de estas ofensas si son reportadas: (a) Publicar un mensaje id�ntico o similar m�s de 5 veces en un tabl�n. (b) Enviar correo no solicitado a m�s de 30 personas o (c) Enviar m�s de dos (2) correos no solicitados a la misma direcci�n de correo electr�nico. El spam repetitivo traer� como consecuencia la terminaci�n de la cuenta de usuario. En algunos casos seg�n los patrones de conducta o de un conjunto de cuentas relacionadas pueden ser determinados como disruptivos o abusivos, incluso si ning�n acto viola expl�citamente cualquier policita. En estos casos SOFTNYX se reserva el derecho de determinar que patrones de conducta son definidos como "alto mantenimiento" o "disruptivo" y puede tomar acciones en contra de las cuentas empezando desde un simple requerimiento a moderar el comportamiento de alto mantenimiento, hasta la clausura de todas las cuentas vinculadas.







14. Interrupci�n del servicio



(a) SOFTNYX se reserva el derecho de interrumpir el servicio de vez en cuando dentro de un horario establecido o por alg�n otro motivo con o sin previo aviso precio para realizar tareas de mantenimiento







(b) Es de su conocimiento que el servicio puede ser interrumpido por razones de fuerza mayor no atribuibles a SOFTNYX, y SOFTNYX no garantiza que podr� acceder al servicio o a su cuenta cuando usted decida hacerlo. SOFTNYX no podr� ser responsable por ninguna interrupci�n del servicio, falla o retraso del mismo como resultado de causas que se encuentren fuera del control de SOFTNYX.







15. General



La falla de SOFTNYX o del proveedor del servicio para ejercer sus derechos o insistir las obligaciones del los derechos del usuario no constituye una renuncia de esos u otros derechos que se encuentren dentro de estos t�rminos de uso







Si cualquier cl�usula presente dentro de estos t�rminos de uso es encontrada invalida por un juzgado, tribunal de la jurisdicci�n competente, las partes no obstante acuerdan que la corte debe empe�arse en darle efecto las intenciones de las partes involucradas tal como son se�aladas en la cl�usula y en las otras cl�usulas del presente acuerdo de uso continuaran teniendo el mismo efecto y validez.







Los t�rminos de uso, en conjunto con cualquier otro acuerdo escrito o "en l�nea" por separado entre usted, SOFTNYX y/o el proveedor de servicio (incluido sin limitaciones el contrato de contenido adulto ser� aplicable a usted) constituye un contrato �nico y completo y prevalece sobre cualquier acuerdo anterior entre usted, SOFTNYX y/o el proveedor de servicio (incluido sin limitaci�n todas las versiones anteriores de Contrato de uso, t�rminos generales de uso, y contrato de uso donde sea aplicable) 







Los t�rminos de uso y la relaci�n entre usted, Gb Universal y/o el proveedor de servicio deben estar regidos e interpretados en acuerdo con las leyes de la Rep�blica de Corea y las partes acuerdan someterse a la jurisdicci�n de tales cortes







Usted acepta que independientemente de cualquier estatuto o ley en contrario, cualquier acci�n, proceso o procedimiento relacionado al uso del servicio o al acuerdo de uso debe comenzar un (1) a�o despu�s de tal alegato o causa de acci�n o ser eliminado para siempre







T�tulos de las secciones en el acuerdo de uso son para conveniencia y no tiene efecto o significado legal.







Es de deseo expreso de las partes que el acuerdo de uso y todos los documentos relacionados han sido escritos en ingl�s. Cualquier incoherencia en esta versi�n del Acuerdo de Uso, ser� la versi�n en ingl�s la que prevalecer�.







SOFTNYX acepta pagar cierta cantidad en "dinero virtual (cash)" o "dinero de juego (oro)" cuando se haga uso de alg�n articulo publicado en la pagina de GunBound, Rakion o en la secci�n Q&amp;A (Preguntas y Respuestas) por el usuario y usarlos para hacer una funci�n del juego o un avatar.



SOFTNYX considera este acto como pago a cambio de la idea de satisfacer nuestra obligaci�n de compensaci�n por el uso de una propiedad intelectual y el usuario no podr� reclamar tales derechos de propiedad en el futuro.







16. Notificaciones



Las notificaciones pueden ser enviadas a usted o puede mandar notificaciones a Gb Universal ya sea por correo electr�nico o correo regular. El servicio puede tambi�n proveer notificaciones de cualquier cambio en los t�rminos de uso u otros relacionados al servicio o enlaces (links) en general sobre el servicio.







17. Violaciones



Por favor reporte cualquier violaci�n de los t�rminos de uso a nuestro departamento de conformidad legal al correo electr�nico: gunbound_latino@softnyx.co.kr







He le�do y entendido los anteriores t�rminos de uso y acepto cumplir todos y cada uno de dichos t�rminos.</TEXTAREA></TD></TR>







              <TR>



                <TD align=middle bgColor=#77a0bd>



                  <TABLE cellSpacing=0 cellPadding=0 width=437 border=0>



                    <TBODY>



                    <TR align=middle>



                      <TD class=text2 colSpan=3 height=20>



                        <TABLE class=text2 cellSpacing=0 cellPadding=0 width=281 



                        border=0>



                          <TBODY>



                          <TR>



                            <TD align=right width=374>Si, he leid y acordado 



                              con las condiciones. </TD>



                            <TD width=53><INPUT type=checkbox value=Yes 



                              name=AgreeTerm></TD></TR></TBODY></TABLE></TD></TR>



                    <TR>



                      <TD align=right width=215 height=40><A 



                        href="javascript:validateAgreeTerm(document.Frm1)"><IMG 



                        height=20 src="<?php echo $imgpath; ?>img/modules/register/term_of_use_agree.gif" 



                        width=77 border=0></A></TD>



                      <TD width=7 height=40>&nbsp;</TD>



                      <TD width=215 height=40><A 



                        href="javascript:history.back()"><IMG height=20 



                        src="<?php echo $imgpath; ?>img/modules/register/term_of_use_cancel.gif" width=80 



                        border=0></A></TD></TR></TBODY></TABLE></TD></FORM>



                        </TR></TBODY></TABLE></TD>



          <TD width=4>&nbsp;</TD></TR>



        <TR bgColor=#517791>



          <TD colSpan=3 height=4></TD></TR></TBODY></TABLE></TD>



<?



}



//if (!stristr($_SERVER['PHP_SELF'], "bone.php") AND !stristr($_SERVER['SCRIPT_NAME'], "bone.php")) { die ("Access Denied"); }







//print_r($_POST);



if($_GET['AgreeTerm']=='Yes'){







function reg_form() {



global $config;



$reg_form = '';



if (isset($_POST)) { $POST= $_POST; }



if ($config['reg_mail_check'] == 1) $reg_form .= notice('Admin Has enabled Email Verification...<br> After registration it is required that u will have to click on the <b>Registration LINK</b> that is sent to your email address. <br> It is Important that you input a valid email address above!','Email Verification Required');







$reg_form .= '<TABLE cellSpacing=0 cellPadding=0 width=455 border=0><TBODY>



        <TR bgColor=#517791>



          <TD colSpan=3 height=4></TD></TR>



        <TR bgColor=#517791>



          <TD width=4>&nbsp;</TD>



          <TD width=447>



		  <TABLE class=text2 cellSpacing=0 cellPadding=0 width=447 border=0>



              <TBODY>



              <TR>



                <TD bgColor=#77a0bd><IMG height=26 



                  src="'.$config['template'].'/images/modules/register/registration01.gif" width=449></TD></TR>



              <TR>



                <TD align=middle bgColor=#77a0bd>



                  <TABLE class=text2 cellSpacing=0 cellPadding=0 width=427 



                  border=0>



                    <TBODY>



                    <TR>



                      <TD width=419>Este servidor es 



                            ajeno al original de Gb Universal, pero ello no quiere 



                            decir que seamos ilegales. Trataremos de dar el 



                            mejor servicio que usted merece. Este servidor es 



                            mas que nada una forma de protesta a Softnyx� co,.ltd 



                            por el mal servicio que han brindado a miles de 



                            usuarios, una prueba fehaciente son las miles de 



                            quejas que colocan en la comunidad. Si usted esta de 



                            acuerdo y desea jugar termine su registro. Esperamos 



                            siempre su apoyo.<br></TD></TR></TBODY></TABLE></TD></TR>



              <TR>



                <TD bgColor=#77a0bd><IMG height=6 



                  src="'.$config['template'].'/images/modules/register/term_of_use_line.gif" width=447></TD></TR>



<form method="post" action="?M=3&mode=user&op=register&AgreeTerm=Yes&act=proc" name="FrmReg" onsubmit="return registrationValidate(this)">



              <TR>



                <TD align=middle bgColor=#77a0bd>



                  <TABLE class=text2 cellSpacing=0 cellPadding=0 width=437 



                  border=0>



                    <TBODY>











<TR>



                      <TD width=164 height=20>ID de ingreso&nbsp;*</TD>



                      <TD width=200 height=20><input style="WIDTH: 165px; HEIGHT: 18px" class="post" name="Id" type="text" size="10" autocomplete="off"> </TD>



                      <TD width=73 height=20><IMG id=btnID 



                        style="CURSOR: hand" onclick=Id_Check() height=20 



                        src="'.$config['template'].'/images/modules/register/registration02.gif" 



                    width=71></TD></TR>



<TR>



                      <TD colSpan=3 height=20><FONT color=#b3cbdc>Los ID de 



                        ingreso deben tener 6~16 car�cteres</FONT></TD></TR>



                    <TR>















<TR>



                      <TD width=164 height=20>ID de Juego&nbsp;*</td>



  <TD width=200 height=20><input style="WIDTH: 165px; HEIGHT: 18px" class="post" name="nickname" type="text" size="10" autocomplete="off"></td>



  <TD width=73 height=20><IMG id=btnID 



                        style="CURSOR: hand" onclick=NickName_Check() height=20 



                        src="'.$config['template'].'/images/modules/register/registration02.gif" 



                    width=71></TD>



</tr>



<TR>



                      <TD colSpan=3 height=20><FONT color=#b3cbdc>Los ID de 



                        Juego deben tener 6~16 car�cteres</FONT></TD></TR>



                    <TR>















                    <TR>



                      <TD height=20>Contrase�a&nbsp;*</TD>



                      <TD height=20><INPUT style="WIDTH: 165px; HEIGHT: 18px" class="post" name="Passwd" type="password" size="10"> </TD>



                      <TD height=20>&nbsp;</TD></TR>



                    <TR>















                    <TR>



                      <TD height=20>Repite la Contrase�a&nbsp;*</TD>



                      <TD height=20><INPUT style="WIDTH: 165px; HEIGHT: 18px" class="post" name="RePasswd" type="password" size="10"> </TD>



                      <TD height=20>&nbsp;</TD></TR>



                    <TR>



                    <TR>



                      <TD colSpan=3 height=20><FONT color=#b3cbdc>Las 



                        contrase�as deben tener 6~16 car�cteres</FONT></TD></TR>



                    <TR>







                    <TR>



                      <TD height=20><FONT color=yellow>Fecha de 



                        nacimiento</FONT>&nbsp;*</TD>



                      <TD height=20>







<SELECT onchange=changeMonth(document.FrmReg.birth_m.value); name=birth_m> <OPTION value=0 selected>Mes</OPTION> 



                          <OPTION value=1>01</OPTION> <OPTION 



                          value=2>02</OPTION> <OPTION value=3>03</OPTION> 



                          <OPTION value=4>04</OPTION> <OPTION 



                          value=5>05</OPTION> <OPTION value=6>06</OPTION> 



                          <OPTION value=7>07</OPTION> <OPTION 



                          value=8>08</OPTION> <OPTION value=9>09</OPTION> 



                          <OPTION value=10>10</OPTION> <OPTION 



                          value=11>11</OPTION> <OPTION 



                        value=12>12</OPTION></SELECT> <SELECT name=birth_d> 



                          <OPTION value=0 selected>D�a</OPTION> 



                          <OPTION>1</OPTION> <OPTION>2</OPTION> 



                          <OPTION>3</OPTION> <OPTION>4</OPTION> 



                          <OPTION>5</OPTION> <OPTION>6</OPTION> 



                          <OPTION>7</OPTION> <OPTION>8</OPTION> 



                          <OPTION>9</OPTION> <OPTION>10</OPTION> 



                          <OPTION>11</OPTION> <OPTION>12</OPTION> 



                          <OPTION>13</OPTION> <OPTION>14</OPTION> 



                          <OPTION>15</OPTION> <OPTION>16</OPTION> 



                          <OPTION>17</OPTION> <OPTION>18</OPTION> 



                          <OPTION>19</OPTION> <OPTION>20</OPTION> 



                          <OPTION>21</OPTION> <OPTION>22</OPTION> 



                          <OPTION>23</OPTION> <OPTION>24</OPTION> 



                          <OPTION>25</OPTION> <OPTION>26</OPTION> 



                          <OPTION>27</OPTION> <OPTION>28</OPTION> 



                          <OPTION>29</OPTION> <OPTION>30</OPTION> 



                          <OPTION>31</OPTION></SELECT> <SELECT name=birth_y> 



                          <OPTION value=0 selected>A�o</OPTION> <OPTION 



                          value=2007>2007</OPTION> <OPTION 



                          value=2006>2006</OPTION> <OPTION 



                          value=2005>2005</OPTION> <OPTION 



                          value=2004>2004</OPTION> <OPTION 



                          value=2003>2003</OPTION> <OPTION 



                          value=2002>2002</OPTION> <OPTION 



                          value=2001>2001</OPTION> <OPTION 



                          value=2000>2000</OPTION> <OPTION 



                          value=1999>1999</OPTION> <OPTION 



                          value=1998>1998</OPTION> <OPTION 



                          value=1997>1997</OPTION> <OPTION 



                          value=1996>1996</OPTION> <OPTION 



                          value=1995>1995</OPTION> <OPTION 



                          value=1994>1994</OPTION> <OPTION 



                          value=1993>1993</OPTION> <OPTION 



                          value=1992>1992</OPTION> <OPTION 



                          value=1991>1991</OPTION> <OPTION 



                          value=1990>1990</OPTION> <OPTION 



                          value=1989>1989</OPTION> <OPTION 



                          value=1988>1988</OPTION> <OPTION 



                          value=1987>1987</OPTION> <OPTION 



                          value=1986>1986</OPTION> <OPTION 



                          value=1985>1985</OPTION> <OPTION 



                          value=1984>1984</OPTION> <OPTION 



                          value=1983>1983</OPTION> <OPTION 



                          value=1982>1982</OPTION> <OPTION 



                          value=1981>1981</OPTION> <OPTION 



                          value=1980>1980</OPTION> <OPTION 



                          value=1979>1979</OPTION> <OPTION 



                          value=1978>1978</OPTION> <OPTION 



                          value=1977>1977</OPTION> <OPTION 



                          value=1976>1976</OPTION> <OPTION 



                          value=1975>1975</OPTION> <OPTION 



                          value=1974>1974</OPTION> <OPTION 



                          value=1973>1973</OPTION> <OPTION 



                          value=1972>1972</OPTION> <OPTION 



                          value=1971>1971</OPTION> <OPTION 



                          value=1970>1970</OPTION> <OPTION 



                          value=1969>1969</OPTION> <OPTION 



                          value=1968>1968</OPTION> <OPTION 



                          value=1967>1967</OPTION> <OPTION 



                          value=1966>1966</OPTION> <OPTION 



                          value=1965>1965</OPTION> <OPTION 



                          value=1964>1964</OPTION> <OPTION 



                          value=1963>1963</OPTION> <OPTION 



                          value=1962>1962</OPTION> <OPTION 



                          value=1961>1961</OPTION> <OPTION 



                          value=1960>1960</OPTION> <OPTION 



                          value=1959>1959</OPTION> <OPTION 



                          value=1958>1958</OPTION> <OPTION 



                          value=1957>1957</OPTION> <OPTION 



                          value=1956>1956</OPTION> <OPTION 



                          value=1955>1955</OPTION> <OPTION 



                          value=1954>1954</OPTION> <OPTION 



                          value=1953>1953</OPTION> <OPTION 



                          value=1952>1952</OPTION> <OPTION 



                          value=1951>1951</OPTION> <OPTION 



                          value=1950>1950</OPTION> <OPTION 



                          value=1949>1949</OPTION> <OPTION 



                          value=1948>1948</OPTION> <OPTION 



                          value=1947>1947</OPTION> <OPTION 



                          value=1946>1946</OPTION> <OPTION 



                          value=1945>1945</OPTION> <OPTION 



                          value=1944>1944</OPTION> <OPTION 



                          value=1943>1943</OPTION> <OPTION 



                          value=1942>1942</OPTION> <OPTION 



                          value=1941>1941</OPTION> <OPTION 



                          value=1940>1940</OPTION> <OPTION 



                          value=1939>1939</OPTION> <OPTION 



                          value=1938>1938</OPTION> <OPTION 



                          value=1937>1937</OPTION> <OPTION 



                          value=1936>1936</OPTION> <OPTION 



                          value=1935>1935</OPTION> <OPTION 



                          value=1934>1934</OPTION> <OPTION 



                          value=1933>1933</OPTION> <OPTION 



                          value=1932>1932</OPTION> <OPTION 



                          value=1931>1931</OPTION> <OPTION 



                          value=1930>1930</OPTION> <OPTION 



                          value=1929>1929</OPTION> <OPTION 



                          value=1928>1928</OPTION> <OPTION 



                          value=1927>1927</OPTION> <OPTION 



                          value=1926>1926</OPTION> <OPTION 



                          value=1925>1925</OPTION> <OPTION 



                          value=1924>1924</OPTION> <OPTION 



                          value=1923>1923</OPTION> <OPTION 



                          value=1922>1922</OPTION> <OPTION 



                          value=1921>1921</OPTION> <OPTION 



                          value=1920>1920</OPTION> <OPTION 



                          value=1919>1919</OPTION> <OPTION 



                          value=1918>1918</OPTION> <OPTION 



                          value=1917>1917</OPTION> <OPTION 



                          value=1916>1916</OPTION> <OPTION 



                          value=1915>1915</OPTION> <OPTION 



                          value=1914>1914</OPTION> <OPTION 



                          value=1913>1913</OPTION> <OPTION 



                          value=1912>1912</OPTION> <OPTION 



                          value=1911>1911</OPTION> <OPTION 



                          value=1910>1910</OPTION> <OPTION 



                          value=1909>1909</OPTION> <OPTION 



                          value=1908>1908</OPTION> <OPTION 



                          value=1907>1907</OPTION> <OPTION 



                          value=1906>1906</OPTION> <OPTION 



                          value=1905>1905</OPTION></SELECT> </TD>



                      <TD height=20>&nbsp;</TD></TR>



                    <TR>



                      <TD height=20>&nbsp;</TD>



                      <TD colSpan=2><FONT color=yellow>Si escribe su 



                        cumplea�os una vez, no podr� cambiarlo..</FONT></TD></TR>















                    <TR>



                      <TD height=20>G�nero&nbsp;*</TD>



                      <TD height=20>



                        <TABLE class=text2 cellSpacing=0 cellPadding=0 width=186 



                        border=0>



                          <TBODY>



                          <TR>



                            <TD width=20><INPUT type=radio CHECKED value=0 



                              class="post" name="Gender"></TD>



                            <TD width=82>Masculino</TD>



                            <TD width=20><INPUT type=radio value=1 



                            class="post" name="Gender"></TD>



                            <TD width=78>Femenino</TD></TR></TBODY></TABLE></TD>



                      <TD height=20>&nbsp;</TD></TR>



















                    <TR>



                      <TD height=20>Correo electr�nico&nbsp;*</TD>



                      <TD height=20><INPUT style="WIDTH: 165px; HEIGHT: 18px" 



                         class="post" name="E_Mail" type="text" autocomplete="off"></TD>



                      <TD height=20>&nbsp;</TD></TR>



                    <TR>















                    <TR>



                      <TD height=20>Pa�s&nbsp;*</td>



                      <TD height=20><select style="WIDTH: 165px; HEIGHT: 18px" class="mainoption" name="Country" size="1">';



  $c = getcountry('get');



  foreach ($c as $cc => $v) {



  $reg_form .= "<option value=$cc>$v</option>";



  



  }



  







$reg_form .= '</select></td>



</tr>











                    <TR>



                      <TD height=20>ID Del Que Te Invito Al Juego:</td>



                      <TD height=20><input style="WIDTH: 165px; HEIGHT: 18px" class="post" name="Ref" type="text" size="32"></td>



</tr>















                    <TR>



                      <TD height=20>Verifique su registro&nbsp;*</TD>



                      <TD colSpan=2 height=100><label><img src="includes/image_verify.php" width="170" height="45"></label><BR>Por favor, 



                        escriba lo que esta puesto en el cuadro de 



                        arriba<BR><input style="WIDTH: 140px; HEIGHT: 18px" class=editbox type="text" name="CaptchaKey" maxlength=6 size=8></TD></TR>



                    <TR>



                      <TD height=20>&nbsp;</TD>



                      <TD height=20>&nbsp;</TD>



                      <TD height=20>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>



              <TR>



                <TD align=middle bgColor=#77a0bd>



                  <TABLE cellSpacing=0 cellPadding=0 width=437 border=0>



                    <TBODY>



                    <TR>



                      <TD align=right width=215 height=40><input name="submit" type="submit"  value="" class="mainoptionzzz" height=20 width=71 border=0></A></TD>



                      <TD width=7 height=40>&nbsp;</TD>



                      <TD width=215 height=40><IMG onclick=history.back() height=20 



                        src="'.$config['template'].'/images/modules/register/term_of_use_cancel.gif" width=80 



                        border=0></TD></TR></TBODY></TABLE></TD></TR>







<IFRAME id=ifrm_chk_id name=ifrm_chk_id 



src="about:blank" frameBorder=0 width=0 scrolling=no 



height=0></IFRAME>



</form>';











return $reg_form;







}







if($_GET['act']!='proc'){



echo reg_form();



}







if($_GET['act']=='proc'){







/****************************************/



/* register codes		        */



/****************************************/



/*if (isset($_GET['activate'])) {







$uname = clean_variable(md5_decrypt($_GET['activate']));



echo notice("<strong>$uname</strong> Your account has been activated thank you for registering");







$activate = $GLOBALS['db']->Execute("Update Memb_info set bloc_code = 0, mail_chek=1 where mail_chek=0 and bloc_code = 1 and memb___id = ?",array($uname));



writelog("$uname successfull activation","regsiter");







mailer('', "Registration Activated",$uname. " You account has been successfully activated\n\nThank you!",$uname);







} else {



*/



 if (!isset($_POST['submit'])) {



	//echo reg_form();



 } elseif (isset($_POST['submit'])) {



	$elems[] = array('name'=>'Id','label'=>'Username Is Invalid ('.$config['reg_min_len'].'-'.$config['reg_max_len'].' Alpha-Numeric Characters)', 'type'=>'text','uname'=>'true', 'required'=>true, 'len_min'=>$config['reg_min_len'],'len_max'=>$config['reg_max_len'], 'cont' =>'alpha');



	$elems[] = array('name'=>'nickname','label'=>'Nickname Is Invalid ('.$config['reg_min_len'].'-'.$config['reg_max_len'].' Alpha-Numeric Characters)', 'type'=>'text','uname'=>'true', 'required'=>true, 'len_min'=>$config['reg_min_len'],'len_max'=>$config['reg_max_len'], 'cont' =>'alpha');



	$elems[] = array('name'=>'E_Mail', 'label'=>'Email Is Invalid (ex. sombody@yahoo.com MAX: '.$config['reg_max_mail'].')', 'type'=>'text', 'required'=>true, 'len_max'=>$config['reg_max_mail'], 'cont' => 'E_Mail');



	$elems[] = array('name'=>'Passwd', 'label'=>'Password Is Invalid ('.$config['reg_min_len'].'-'.$config['reg_max_len'].' Alpha-Numeric Characters)', 'type'=>'text', 'required'=>true, 'len_min'=>$config['reg_min_len'],'len_max'=>$config['reg_max_len'], 'cont' =>'alpha');



	$elems[] = array('name'=>'RePasswd', 'label'=>'Passwords Did not Match','type'=>'text', 'required'=>true, 'len_min'=>$config['reg_min_len'],'len_max'=>$config['reg_max_len'], 'cont' =>'alpha','equal'=> array('Passwd'));



	



	$f = new FormValidator($elems);



	$err = $f->validate($_POST);



	



	if ( $err === true ) {



		



		$valid = $f->getValidElems();



		



		foreach ( $valid as $k => $v ) {



			



			if ( $valid[$k][0][1] == false ) {



				// Empty label field



				if ( empty($valid[$k][0][2]) ) {



					// then echo the form name of a field



					echo notice($valid[$k][0][2]);



				}



				else {



					echo notice($valid[$k][0][2]);



				}



			}



		}



		



	} else {



		$error = 0;



		if (valid_account($_POST['Id']) === true) {



					



			alerta('Error ID invalido o en uso');



			redirect("?M=3&mode=user&op=register");



		



		$error = 1;



		}



		if (valid_email($_POST['E_Mail']) === true) {



				



			alerta('Error Email invalido');



			redirect("?M=3&mode=user&op=register");



		



		$error = 1;



		}



		if (valid_NickName($_POST['nickname']) === true) {



		



			alerta('Error NickName invalido o en uso');



			redirect("?M=3&mode=user&op=register");



		



		$error = 1;



		}



		if($_POST['Ref']!=''){



		if (valid_NickName($_POST['Ref']) === false) {



		



			alerta('Error Referrido invalido');



			redirect("?M=3&mode=user&op=register");



		



		$error = 1;



		}



		}



		if ($config['reg_allow'] == 0 ) {



		



			alerta('Error el registro esta inhabilitado\nporfavor contacta al administrador\n'.$config["admin_mail"].'');



			redirect("index.php");



			



		$error = 1;



		}



	







		if ($_SESSION['CaptchaKey'] != md5($_POST['CaptchaKey'])) {



		



			alerta('Error codigo de verificacion invalido');



			redirect("?M=3&mode=user&op=register");



			



		$error = 1;



	



			



		}



		



		if ($error!=1) {



			if ($config['reg_mail_check'] == 1) {	



	    







		



				writeLog('Register Needs Activate: '. $_POST['Id'],'register');



				echo 



				notice('<br><h3>'. $_POST['Id']. 



					' was successfully validated with no errors!</h3>



						Un Email se te ha enviado a tu correo.



					You will need to activate your account via the Link that has been sent to you.



					You will not be able to play on the server if you do not activate the account',"Email Activation Needed");



			



			} else {







if($_POST['Gender'] == 0)



{







$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '98438', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));







$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '32902', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));



$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '163879', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));







$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '229558', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));



$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '204872', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));



}







if($_POST['Gender'] == 1)



{



$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '134', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));







$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '65674', '0', 'C', '1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));



$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '131111', '0', 'C','1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));







$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '204865', '0', 'C', '1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));



$result = $db->Execute("SELECT No FROM `chest` order by `No` desc LIMIT 1");



	                $Num = $result->GetArray();



					$NumMax = $Num[0]['No'];



	                        $NumMax++;



				



			$db->Execute("insert into `chest`(No, Item, Wearing, Acquisition, Volume, PlaceOrder, Owner, ExpireType) values (?, '229557', '0', 'C', '1', '0', ?, 'M')",



						array($NumMax, $_POST['Id']));



}







				if ($db->Affected_Rows() > 0) {







					$result = $db->Execute("SELECT TotalRank FROM `game` order by `TotalRank` desc LIMIT 1");



	                $rank = $result->GetArray();



					$rankmax = $rank[0]['TotalRank'];



	                        $rankmax++;



							



					$result2 = $db->Execute("SELECT CountryRank FROM `game` order by `CountryRank` desc LIMIT 1");



	                $rank2 = $result2->GetArray();



					$rankmax2 = $rank2[0]['CountryRank'];



	                        $rankmax2++;



	            



				$result = $db->Execute("insert into `game` (Id, NickName, Money, TotalScore, SeasonScore, TotalGrade, SeasonGrade, Country, TotalRank, CountryRank, SeasonRank, Referidor, RankAnterior) values (?, ?, ?, '1000', '1000', '-4', '-4', ?, ?, ?, ?, ?, ?)",



				 array($_POST['Id'], $_POST['nickname'], $config['user_gold'], $_POST['Country'], $rankmax, $rankmax2, $rankmax, $_POST['Ref'], $rankmax));



				if ($db->Affected_Rows() > 0) {







						 



	                      $result = $db->Execute("insert into `cash` (ID, Cash) values (?, ?)", array($_POST['Id'], $config['user_cash']));















	                        $db->Execute("insert into `user`(Id, user, Gender, NickName, Password, Status, Authority, Authority2, E_Mail, Country, Dia, Mes, Ano) values (?, ?, ?, ?, ?, '1', '1', '1', ?, ?, ?, ?, ?)",



array($_POST['Id'], $_POST['Id'], $_POST['Gender'], $_POST['nickname'], $_POST['Passwd'],$_POST['E_Mail'], $_POST['Country'], $_POST['birth_d'], $_POST['birth_m'], $_POST['birth_y']));











		                $db->Execute("insert into `gunwcuser`(Id, user, Gender, NickName, Password, Status, Authority, E_Mail, Country, Authority2, Dia, Mes, Ano) values (?, ?, ?, ?, ?, '1', '1', ?, ?, '1', ?, ?, ?)",



array($_POST['Id'], $_POST['Id'], $_POST['Gender'], $_POST['nickname'], $_POST['Passwd'],$_POST['E_Mail'], $_POST['Country'], $_POST['birth_d'], $_POST['birth_m'], $_POST['birth_y']));		



								



              



					$mail = "You Account Info is as Follows;\n\n Account Username: ". $_POST['Id'] ."\n\n Account Password: ". $_POST['RePasswd'];



					if (mailer($_POST['E_Mail'], "Registration Completed", $mail) == true) echo notice('Un Email se te ha enviado a tu correo');



					writeLog('Register: '. $_POST['Id'],'register');



					



					alerta('Felicitaciones '.$_POST['Id'].'\nTu cuenta ha sido creada con exito\Se te ha regalado el Set nyx hero \n'.$config['user_gold'].' Gold y '.$config['user_cash'].' Cash');



					



					redirect("?op=loginned");



					



				}



				} else {



				



					alerta('Database has encountered an Error.<br> Do not worry Database will be fixed.<br> Please try your registration again.');



					



					redirect("?op=loginned");					



					



					$db->Execute('ALTER TABLE `game` ADD `NickName` VARCHAR( 15 ) NOT NULL');



				



				}



			}







			



		} else { 



			echo reg_form();



		}



	



	}











}







}



















?>







<IFRAME src="about:blank" width="0" height="0" frameborder="0" scrolling="no" id="ifrm_chk_id" name="ifrm_chk_id"></IFRAME>



</TBODY></TABLE></TD>



          <TD width=4>&nbsp;</TD></TR>



        <TR bgColor=#517791>



          <TD colSpan=3 height=4></TD></TR></TBODY></TABLE>



          



          



</td>



                      









<?



}



?>







<? } ?>
























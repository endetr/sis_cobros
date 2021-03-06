<?php
/**
*@package pXP
*@file gen-MODCobroSimple.php
*@author  (admin)
*@date 31-12-2017 12:33:30
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
 *  ISSUE			FECHA		AUTOR					DESCRIPCION
 *   *1A			21/08/2018		EGS					Se aumentaron campos en las funciones listarCobroSimple() ,insertarCobroSimple(),modificarCobroSimple 

 * 
*/

class MODCobroSimple extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarCobroSimple(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='cbr.ft_cobro_simple_sel';
		$this->transaccion='CBR_PAGSIM_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion

		$this->setParametro('id_funcionario_usu','id_funcionario_usu','int4');
		$this->setParametro('tipo_interfaz','tipo_interfaz','varchar');		
		$this->setParametro('historico','historico','varchar');
		$this->setParametro('estado','estado','varchar');
				
		//Definicion de la lista del resultado del query
		$this->captura('id_cobro_simple','int4');
		$this->captura('estado_reg','varchar');
		$this->captura('id_depto_conta','int4');
		$this->captura('nro_tramite','varchar');
		$this->captura('fecha','date');
		$this->captura('id_funcionario','int4');
		$this->captura('estado','varchar');
		$this->captura('id_estado_wf','int4');
		$this->captura('id_proceso_wf','int4');
		$this->captura('obs','varchar');
		$this->captura('id_cuenta_bancaria','int4');
		$this->captura('id_depto_lb','int4');
		$this->captura('id_usuario_reg','int4');
		$this->captura('fecha_reg','timestamp');
		$this->captura('id_usuario_ai','int4');
		$this->captura('usuario_ai','varchar');
		$this->captura('id_usuario_mod','int4');
		$this->captura('fecha_mod','timestamp');
		$this->captura('usr_reg','varchar');
		$this->captura('usr_mod','varchar');
		$this->captura('desc_depto_conta','varchar');
		$this->captura('desc_funcionario','text');
		$this->captura('desc_cuenta_bancaria','varchar');
		$this->captura('desc_depto_lb','varchar');
		$this->captura('id_moneda','integer');
		$this->captura('id_proveedor','integer');
		$this->captura('desc_moneda','varchar');
		$this->captura('desc_proveedor','varchar');
		$this->captura('id_tipo_cobro_simple','integer');
		$this->captura('id_funcionario_pago','integer');
		$this->captura('desc_funcionario_pago','text');
		$this->captura('desc_tipo_cobro_simple','text');
		$this->captura('codigo_tipo_cobro_simple','varchar');
		$this->captura('nro_tramite_asociado','varchar');
		$this->captura('importe','numeric');
		$this->captura('id_obligacion_pago','integer');
		$this->captura('desc_obligacion_pago','varchar');
		$this->captura('id_caja','integer');
		$this->captura('desc_caja','varchar');
		$this->captura('id_gestion','integer');
		$this->captura('id_periodo','integer');
		
		
		$this->captura('tipo_cambio','numeric');
		$this->captura('tipo_cambio_mt','numeric');
		$this->captura('tipo_cambio_ma','numeric');
		$this->captura('id_config_cambiaria','integer');
		$this->captura('importe_mt','numeric');
		$this->captura('importe_mb','numeric');
		$this->captura('importe_ma','numeric');
		$this->captura('forma_cambio','varchar');
		$this->captura('id_int_comprobante','int4'); ////////////EGS-I-21/08/2018///    1A	
		$this->captura('nro_cbte','varchar');     ////////////EGS-I-21/08/2018///    1A	
		
        			
		// 1B 			13/09/2018		EGS	
        $this->captura('globalComun','varchar');
		$this->captura('globalRetgar','varchar');
		$this->captura('globalAnti','varchar');
		
		/// 1B 			13/09/2018		EGS	
		
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarCobroSimple(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='cbr.ft_cobro_simple_ime';
		$this->transaccion='CBR_PAGSIM_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('id_depto_conta','id_depto_conta','int4');
		$this->setParametro('nro_tramite','nro_tramite','varchar');
		$this->setParametro('fecha','fecha','date');
		$this->setParametro('id_funcionario','id_funcionario','int4');
		$this->setParametro('estado','estado','varchar');
		$this->setParametro('id_estado_wf','id_estado_wf','int4');
		$this->setParametro('id_proceso_wf','id_proceso_wf','int4');
		$this->setParametro('obs','obs','varchar');
		$this->setParametro('id_cuenta_bancaria','id_cuenta_bancaria','int4');
		$this->setParametro('id_depto_lb','id_depto_lb','int4');
		$this->setParametro('id_moneda','id_moneda','int4');
		$this->setParametro('id_proveedor','id_proveedor','int4');
		$this->setParametro('id_funcionario_pago','id_funcionario_pago','int4');
		$this->setParametro('id_tipo_cobro_simple','id_tipo_cobro_simple','int4');		
		$this->setParametro('importe','importe','numeric');
		$this->setParametro('id_obligacion_pago','id_obligacion_pago','int4');
		$this->setParametro('id_caja','id_caja','int4');
		
		$this->setParametro('id_int_comprobante','id_int_comprobante','int4');////////////EGS-I-21/08/2018///    1A	
		
		 
		$this->setParametro('tipo_cambio','tipo_cambio','numeric');
		$this->setParametro('tipo_cambio_ma','tipo_cambio_ma','numeric');
		$this->setParametro('tipo_cambio_mt','tipo_cambio_mt','numeric');
		$this->setParametro('id_config_cambiaria','id_config_cambiaria','integer');		
		$this->setParametro('forma_cambio','forma_cambio','varchar');
		

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarCobroSimple(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='cbr.ft_cobro_simple_ime';
		$this->transaccion='CBR_PAGSIM_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_cobro_simple','id_cobro_simple','int4');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('id_depto_conta','id_depto_conta','int4');
		$this->setParametro('nro_tramite','nro_tramite','varchar');
		$this->setParametro('fecha','fecha','date');
		$this->setParametro('id_funcionario','id_funcionario','int4');
		$this->setParametro('estado','estado','varchar');
		$this->setParametro('id_estado_wf','id_estado_wf','int4');
		$this->setParametro('id_proceso_wf','id_proceso_wf','int4');
		$this->setParametro('obs','obs','varchar');
		$this->setParametro('id_cuenta_bancaria','id_cuenta_bancaria','int4');
		$this->setParametro('id_depto_lb','id_depto_lb','int4');
		$this->setParametro('id_moneda','id_moneda','int4');
		$this->setParametro('id_proveedor','id_proveedor','int4');
		$this->setParametro('id_funcionario_pago','id_funcionario_pago','int4');
		$this->setParametro('id_tipo_cobro_simple','id_tipo_cobro_simple','int4');		
		$this->setParametro('importe','importe','numeric');
		$this->setParametro('id_obligacion_pago','id_obligacion_pago','int4');
		$this->setParametro('id_caja','id_caja','int4');
		
		$this->setParametro('id_int_comprobante','id_int_comprobante','int4'); ////////////EGS-I-21/08/2018///    1A
		
		$this->setParametro('tipo_cambio','tipo_cambio','numeric');
		$this->setParametro('tipo_cambio_ma','tipo_cambio_ma','numeric');
		$this->setParametro('tipo_cambio_mt','tipo_cambio_mt','numeric');
		$this->setParametro('id_config_cambiaria','id_config_cambiaria','integer');		
		$this->setParametro('forma_cambio','forma_cambio','varchar');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarCobroSimple(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='cbr.ft_cobro_simple_ime';
		$this->transaccion='CBR_PAGSIM_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_cobro_simple','id_cobro_simple','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}

	function siguienteEstado(){
        //Definicion de variables para ejecucion del procedimiento
        $this->procedimiento = 'cbr.ft_cobro_simple_ime';
        $this->transaccion = 'CBR_SIGEPS_INS';
        $this->tipo_procedimiento = 'IME';
   
        //Define los parametros para la funcion
        $this->setParametro('id_cobro_simple','id_cobro_simple','int4');
        $this->setParametro('id_proceso_wf_act','id_proceso_wf_act','int4');
        $this->setParametro('id_estado_wf_act','id_estado_wf_act','int4');
        $this->setParametro('id_funcionario_usu','id_funcionario_usu','int4');
        $this->setParametro('id_tipo_estado','id_tipo_estado','int4');
        $this->setParametro('id_funcionario_wf','id_funcionario_wf','int4');
        $this->setParametro('id_depto_wf','id_depto_wf','int4');		
        $this->setParametro('obs','obs','text');
        $this->setParametro('json_procesos','json_procesos','text');

        $this->setParametro('id_depto_lb','id_depto_lb','int4');
		$this->setParametro('id_cuenta_bancaria','id_cuenta_bancaria','int4');

        //Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();
        //Devuelve la respuesta
        return $this->respuesta;
    }


    function anteriorEstado(){
        //Definicion de variables para ejecucion del procedimiento
        $this->procedimiento='cbr.ft_cobro_simple_ime';
        $this->transaccion='CBR_ANTEPS_IME';
        $this->tipo_procedimiento='IME';                
        //Define los parametros para la funcion
        $this->setParametro('id_proceso_wf','id_proceso_wf','int4');
        $this->setParametro('id_estado_wf','id_estado_wf','int4');
		$this->setParametro('obs','obs','varchar');
		$this->setParametro('estado_destino','estado_destino','varchar');		
		//Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();

        //Devuelve la respuesta
        return $this->respuesta;
    }

    function agregarDocumentos(){
        //Definicion de variables para ejecucion del procedimiento
        $this->procedimiento='cbr.ft_cobro_simple_ime';
        $this->transaccion='CBR_PSAGRDOC_IME';
        $this->tipo_procedimiento='IME';                
        //Define los parametros para la funcion
        $this->setParametro('id_cobro_simple','id_cobro_simple','int4');
        $this->setParametro('id_usuario','id_usuario','int4');
		$this->setParametro('id_plantilla','id_plantilla','integer');
		//Ejecuta la instruccion
        $this->armarConsulta();
        $this->ejecutarConsulta();

        //Devuelve la respuesta
        return $this->respuesta;
    }
	function listarDetallePago(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='cbr.ft_cobro_simple_sel';
		$this->transaccion='CBR_DETPAG_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion	
		//Definicion de la lista del resultado del query
		$this->captura('id_doc_compra_venta','int4');
		$this->captura('id_funcionario','int4');
		$this->captura('desc_funcionario1','varchar');
		$this->captura('id_plantilla','int4');
		$this->captura('desc_plantilla','varchar');
		
		
		
		$this->captura('id_proveedor','int4');
		$this->captura('rotulo_comercial','varchar');
		$this->captura('importe_pago_liquido','numeric');
		$this->captura('importe_excento','numeric');
		$this->captura('fecha_compra_venta','date');
		$this->captura('fecha_cobro_simple','date');
		$this->captura('sw_pgs','varchar');
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
    function listarRepLCV(){
		  //Definicion de variables para ejecucion del procedimientp
		  $this->procedimiento='cbr.ft_cobro_simple_sel';
		  $this->transaccion='CBR_DEPASIMPLE_SEL';
		  $this->tipo_procedimiento='SEL';//tipo de transaccion
		  $this->setCount(false);	
		  //captura parametros adicionales para el count
		  $this->setParametro('id_cobro_simple','id_cobro_simple','int4');
		  //Definicion de la lista del resultado del query
		  
		  $this->captura('id_doc_compra_venta','int4');
		  $this->captura('tipo','VARCHAR');
		  $this->captura('fecha','DATE');
		  $this->captura('nit','VARCHAR');
		  $this->captura('razon_social','VARCHAR');
		  $this->captura('nro_documento','VARCHAR');
		  $this->captura('nro_dui','VARCHAR');
		  $this->captura('nro_autorizacion','VARCHAR');
		  $this->captura('importe_doc','NUMERIC');
		  $this->captura('total_excento','NUMERIC');
		  $this->captura('sujeto_cf','NUMERIC');
		  $this->captura('importe_descuento','NUMERIC');
		  $this->captura('subtotal','NUMERIC');
		  $this->captura('credito_fiscal','NUMERIC');
		  $this->captura('importe_iva','NUMERIC');
		  $this->captura('codigo_control','VARCHAR');
		  //$this->captura('tipo_doc','VARCHAR');
		  $this->captura('id_plantilla','INTEGER');
		  $this->captura('id_moneda','INTEGER');
		  $this->captura('codigo_moneda','VARCHAR');
		  $this->captura('id_periodo','INTEGER');
		  $this->captura('id_gestion','INTEGER');
		  $this->captura('periodo','INTEGER');
		  $this->captura('gestion','INTEGER');
		  $this->captura('venta_gravada_cero','NUMERIC');
          $this->captura('subtotal_venta','NUMERIC');
          $this->captura('sujeto_df','NUMERIC');
		  $this->captura('importe_ice','NUMERIC');
		  $this->captura('importe_excento','NUMERIC');
		  //Ejecuta la instruccion
		  $this->armarConsulta();
		  $this->ejecutarConsulta();
		
		  //Devuelve la respuesta
		  return $this->respuesta;
	}

			
}
?>
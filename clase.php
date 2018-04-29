<?php

/**
* Ficheiro coa definición da clase <b>Prestamo</b> .
*
* Define a clase Prestamo xunto coas súas propiedades, construtor e métodos.
*
* @package OFR
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
* @author Oscar Fernández Rodríguez <ue143504@edu.xunta.es>
* @version Version 1
*/
	/**
	 * Clase Circulo
	 *
	 * @package OFR
	 * @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
	 * @author Oscar Fernández Rodríguez <ue143504@edu.xunta.es>
	 * @version Version 1.0.1 Cambio comentarios */
	 
	class Prestamo{

		 
		 /**
		 * @var double $cantidad Indica a cantidade do prestamo
		 */
		 private $cantidad;
		 
		 /**
		 * @var integer $id Indica o numero de prestamo
		 */
		 public $id;

		 /**
		 * @var double INTERES indica el tipo de interes fijado
		 */
		 const INTERES = 0.23;
		 /**
		 * Construtor da clase Prestamo
		 *
		 * @param double $cantidad cantidade do prestamo
		 * @return void
		 */
		 public function __construct($cantidad){
		 $this->cantidad = $cantidad;
		 }
		  /**
		 * Getter da propiedade prestamo
		 *
		 * @return double a cantidade do prestamo
		 */
		 public function getCantidad(){
		 return $this->cantidad;
		 }

		 /**
		 * Setter da propiedade prestamo
		 *
		 * @param double indica a cantidade do prestamo
		 * @return void
		 */
		 public function setCantidad($cantidad){
		 $this->cantidad = $cantidad;
		 } 
		 
		/**
		* Función que calcula se unha palabra ou frase é palindroma
		*
		* @param string $cadena é a cadea coa que se vai calcular
		* @return String Unha cadea con texto plano co resultado se é palindromo ou non.
		*/
		
		 public function esPalindromo($cadena){
			$cadena2 = strrev($cadena);
			if (strcmp($cadena, $cadena2)==0){
				echo "La cadena ". $cadena . " es un palíndromo";
			}
			else{
				echo "La cadena ". $cadena ." no es un palíndromo";
			}
		 }
		/**
		* Función que calcula se un numero é primo.
		*
		* @param int $num é co numero que se va a calcular
		* @throws InvalidArgumentException si da un numero negativo o no entero
		* @return String Unha cadea con texto plano co resultado se é primo ou non.
		*/
		 public function esPrimo($num){
			 //La hago aquí para documentar un poco las pruebas con throws
			if (isset ($num)){
				if (!filter_var($num, FILTER_VALIDATE_INT)){
					throw new InvalidArgumentException (" O numero non é enteiro");
				}else if($num<0){
					throw new InvalidArgumentException (" O numero é menor que 0");
				}
			}
			 
			$cont=0;
			for($i=2;$i<=$num;$i++)
			{
				if($num%$i==0)
				{
					++$cont;
				}
			}
			if($cont>1){
				echo "El nº ".$num." no es primo";
			}else{
				echo "El nº ".$num." es primo";
			}
		 }
		 
		/**
		* Función que calcula se un numero é maior que outro
		*
		* @param int $num1 é o primeiro numero co que se vai a calcular
		* @param int $num2 é o segundo numero co que se va a calcular
		* @return String Unha cadea con texto plano co numero que é maior
		*/
		
		 public function esMayor($num1,$num2){

			echo "El nº  mayor es el ".max($num1,$num2);
		 }
		 
		/**
		* Función que calcula se un numero é maior que outro
		*
		* @param int $num1 é o primeiro numero co que se vai a calcular
		* @param int $num2 é o segundo numero co que se va a calcular
		* @return String Unha cadea con texto plano ca solución da ecuación
		*/
		
		 public function ecuacionPrimerGrado($num1,$num2){
			 $resultado=($num2/$num1)*-1;
			 echo "La solución es ".$resultado;
		 }
		 
		  /**
		* Función que calcula se un ano é bisiesto ou non
		*
		* @param int $ano é o ano co que se vai a calcular
		* @return String Unha cadea con texto plano co resultado se é bisiesto ou non
		*/
		
		 public function esBisiesto($ano){ 
			 if (($ano % 4 == 0) && (($ano % 100 != 0) || ($ano % 400 == 0))){
				echo "El año ".$ano." es bisiesto.";
			 }else{
				echo "El año ".$ano." no es bisiesto."; 
			 }
		}
		 
		 
	}
 
 





?>



<?php
define('RAI_RUTA',plugin_dir_path(__FILE__));


//  Plugin Name: Envios;
//  Plugin URI: "https://raiolanetworks.es" ;
//  Description: Plugin de actualizacion lightData valor un millon de dolares por que lo creo Sergio!!! ;
//  Version: 1.0;
//  Author: Sergio;
//  Author URI: "https://raiolanetworks.es";
//  Requires at least: 4.0
//  License: GPL2;
//  Text Domain: wpplugin-ejemplo
//   Domain path: /languages/






add_action($nombre_accion, "Envio", $prioridad, $numero_parametros);





 $nombre_accion ="plugin_lightdata";
 function Envio(){
     echo "hola";

 }


// $prioridad = 1;
// $numero_parametros = 1;





//  register_activation_hook(string  $archivo,    "ejemplo_activar" );




//   function ejemplo_activar()
//  {

//       echo "hola"
//       //A partir de aquí escribe todas las tareas que quieres realizar en la activación
// // //     //Vas a añadir una función nueva. La sintaxis de add_option es la siguiente:add_option($nombre,$valor,'',$cargaautomatica)
//       add_option('mi_opcion',255,'','yes');
//   }
//   register_activation_hook(__FILE__,'ejemplo_activar'); // registro de activacion de el hook de activacion




// register_deactivation_hook( string $file, callable $function )  // registro de desactivacion de el hook de desativacion


// function ejemplo_desctivar()
// {
//     //A partir de aqui escribe todas las tareas que quieres realizar en la desactivación
// }
// register_activation_hook(__FILE__,'ejemplo_desactivar');


?>
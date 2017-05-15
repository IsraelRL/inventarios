<?php

$lang['db_invalid_connection_str'] = 'No se puede determinar la configuración de la base de datos en función de la cadena de conexión enviada.';
$lang['db_unable_to_connect'] = 'No se puede conectar al servidor de base de datos con la configuración proporcionada..';
$lang['db_unable_to_select'] = 'No se puede seleccionar la base de datos especificada: %s';
$lang['db_unable_to_create'] = 'No se puede crear la base de datos especificada: %s';
$lang['db_invalid_query'] = 'La consulta que envió no es válida.';
$lang['db_must_set_table'] = 'Debe establecer la tabla de base de datos que se utilizará con la consulta.';
$lang['db_must_use_set'] = 'Debe utilizar el método "set" para actualizar una entrada.';
$lang['db_must_use_index'] = 'Debe especificar un índice para que coincida con el de las actualizaciones por lotes.';
$lang['db_batch_missing_index'] = 'Una o más filas enviadas para la actualización por lotes no tienen el índice especificado.';
$lang['db_must_use_where'] = 'Las actualizaciones no están permitidas a menos que contengan una cláusula "Dónde".';
$lang['db_del_must_use_where'] = 'Las supresiones no están permitidas a menos que contengan una cláusula "Dónde" o "Similar".';
$lang['db_field_param_missing'] = 'Para buscar campos se necesita el nombre de la tabla como parámetro.';
$lang['db_unsupported_function'] = 'Esta función no está disponible para la base de datos que está utilizando.';
$lang['db_transaction_failure'] = 'Error de transacción: Se realizó un Rollback';
$lang['db_unable_to_drop'] = 'No se puede eliminar la base de datos especificada.';
$lang['db_unsuported_feature'] = 'Función no admitida de la plataforma de base de datos que está utilizando.';
$lang['db_unsuported_compression'] = 'El formato de compresión de archivos elegido no es compatible con el servidor.';
$lang['db_filepath_error'] = 'No se pueden escribir datos en la ruta del archivo que has enviado.';
$lang['db_invalid_cache_path'] = 'La ruta de caché que envió no es válida ni puede escribirse.';
$lang['db_table_name_required'] = 'Se requiere un nombre de tabla para esa operación.';
$lang['db_column_name_required'] = 'Se requiere un nombre de columna para esa operación.';
$lang['db_column_definition_required'] = 'Se requiere una definición de columna para esa operación.';
$lang['db_unable_to_set_charset'] = 'No se puede establecer el conjunto de caracteres de conexión de cliente: %s';
$lang['db_error_heading'] = 'Ocurrió Un Error en la Base de Datos';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */
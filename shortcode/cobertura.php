<?php

if ( ! defined( 'ABSPATH' ) ) exit;

$id_shortcode = 1;

function bloque_cobertura( $atts, $content = null, $tag = '' ) {
	$a = shortcode_atts( array(
        'title' => 'Titulo',
        'imagen' => 'Imagen',
        'contenido' => 'Contenido',
        'final' => 'Final',
		'calidad' => '0',
		'narrativa' => '0',
		'rivalidad' => '0',
		'pro1' => 'Item1',
		'pro2' => 'Item2',
		'contra1' => 'Item3',
		'contra2' => 'Item4',
        'id' => 1,
	), $atts );

    $valores = [esc_attr( $a['calidad'] ), esc_attr( $a['narrativa'] ), esc_attr( $a['rivalidad'] )];

    $media = array_sum($valores)/count($valores);
    $promedio = bcdiv($media, '1', 1);
    
    global $id_shortcode;

        if( $id_shortcode > 0){
            $id_shortcode++;
        }

	$star = '<i class="fas fa-star"></i>';

	if($promedio == 10) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
	} else if ($promedio >= 9) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>';
	} else if ($promedio >= 8) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i></i><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i class="far fa-star"></i>';
	} else if ($promedio >= 7) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>';
	} else if ($promedio >= 6) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
	} else if ($promedio >= 5) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
	} else if ($promedio >= 4) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
	} else if ($promedio >= 3) {
		$star = '<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
	} else {
		$star = '<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
	}

	$bloque_contenedor = '<div class="contenedor-todo" id="' . $id_shortcode . '">' .
							'<div class="img-cobertura">' .
								'<img src="' . esc_attr( $a['imagen'] ) . '">' .
							'</div>' .
							'<div class="color-fondo">' .
								'<div class="contenedor-contenido">' .
									'<div class="contenido-principal">' .
										'<div class="title-principal">' .
											'<p class="title-final">' . get_the_title() . '</p>' .
											'<h3>' . esc_attr( $a['title'] ) . '</h3>' .
										'</div>' .
									
										'<div class="contenido-evento">' .
											esc_attr( $a['contenido'] ) .
										'</div>' .

										'<div class="contenedor-final">' . 
											'<p class="title-final">' . " El Final" . '</p>' . 
											'<div class="parrafo-con-icono">' . 
												'<p class="parrafo-final">' . esc_attr( $a['final'] ) . '</p>' . 
												'<i class="far fa-hand-rock"></i>' . 
											'</div>' .
										'</div>' . 
									'</div>' .

									'<div class="contenedor-valoracion">' .
										'<p class="title-valoracion">' . "Valoración" . '</p>' .
											'<div class="contenedor-estrellas">' .
												'<p class="promedio">' . $promedio . '</p>' .
												'<span>' . $star . '</span>' .
												'<i class="far fa-star icon"></i>' .
											'</div>' .
									'</div>' .

									'<div class="contenedor-estadisticas">' .
										'<div class="calidad">' .
											'<div class="calidad-' . $id_shortcode . '">' .
                                                '<input type="text" class="dato-calidad-' . $id_shortcode . '" hidden value="' . esc_attr( $a['calidad'] ) . '">' .
											'</div>' .
											'<p>' . "Calidad en el Ring" . '</p>' . 
										'</div>' .

										'<div class="narrativa">' .
											'<div class="narrativa-' . $id_shortcode . '">' .
                                                '<input type="text" class="dato-narrativa-' . $id_shortcode . '" hidden value="' . esc_attr( $a['narrativa'] ) . '">' .
											'</div>' .
											'<p>' . "Narrativa" . '</p>' . 
										'</div>' .

										'<div class="rivalidad">' .
											'<div class="rivalidad-' . $id_shortcode . '">' .
                                                '<input type="text" class="dato-rivalidad-' . $id_shortcode . '" hidden value="' . esc_attr( $a['rivalidad'] ) . '">' .
											'</div>' .
											'<p>' . "Intensidad" . '</p>' . 
										'</div>' .
									'</div>' .

									'<div class="contenedor-opinion">' .
										'<div class="contenedor-pro">' . 
											'<div class="iconos-titulo">' . 
												'<p>' . "Pros" . '</p>' . 
												'<i class="far fa-smile"></i>' . 
											'</div>' . 

											'<ul>' . 
												'<li>' . esc_attr( $a['pro1'] ) . '</li>' . 
												'<li>' . esc_attr( $a['pro2'] ) . '</li>' . 
											'</ul>' . 
										'</div>' . 

										'<div class="contenedor-contra">' . 
											'<div class="iconos-titulo">' . 
												'<p>' . "Contras" . '</p>' . 
												'<i class="far fa-frown-open"></i>' . 
											'</div>' . 

											'<ul>' . 
												'<li>' . esc_attr( $a['contra1'] ) . '</li>' . 
												'<li>' . esc_attr( $a['contra2'] ) . '</li>' . 
											'</ul>' . 
										'</div>' .
									'</div>' .
								'</div>' .
							'</div>' .
						'</div>' .
                        '<script>' .
                            'call_action(' . $id_shortcode . ');' .
                        '</script>';

                        
    return $bloque_contenedor;

}

add_shortcode( 'bloque', 'bloque_cobertura' );

?>
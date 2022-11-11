<?php

add_filter('the_content', 'censura_palabras_malsonantes');

function censura_palabras_malsonantes($content)
{
    //Palabras baneadas
    $palabrasMalsonantes = array('mierda', 'joder', 'hostia', 'pene', 'idiota');

    //Cambiamos las palabras por otras más politicamente correctas

    $Censura = array('popo', 'jolin', 'recorcholis', 'pito', 'bobo');
    $content = str_replace($palabrasMalsonantes, $Censura, $content);

    return $content;

    }
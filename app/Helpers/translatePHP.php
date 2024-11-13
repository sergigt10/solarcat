<?php

    function translatePHP($value, $type) 
    {
        switch ( app()->getLocale() ) {
            case 'es':
                if($type === 'titol'){
                    return $value->titol_esp;
                } else {
                    return $value->descripcio_esp;
                }
                break;
            case 'en':
                if($type === 'titol'){
                    return $value->titol_eng;
                } else {
                    return $value->descripcio_eng;
                }
                break;
            default:
                if($type === 'titol'){
                    return $value->titol_cat; 
                } else {
                    return $value->descripcio_cat;
                }
        }
    }
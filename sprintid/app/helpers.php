<?php

if(!function_exists('is_class_active')) {
  function is_class_active( $input, $comparison ){
    if($input == $comparison) {
      return 'class="active"';
    } else {
      return '';
    }
  }
}


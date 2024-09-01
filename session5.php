<?php

function namee1(){
    echo "hello World";
}

function namee2(){
    echo namee1();
    echo namee3();
}

function namee3(){
    echo namee2();
}
  
namee3();

?>
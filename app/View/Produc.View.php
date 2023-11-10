<?php

    class ProducView {
        function MostrarProduc($productos,$admin) {
            include_once './templates/listas/lista.phtml';
        }
        function MostrarLisT($list) {
            include_once './templates/listas/listaTotal.phtml';
        }
        function MostrarForm($categDisp) {
            include_once './templates/form/form.items.phtml';
        }
        function FormModItems($categDisp, $items) {
            include_once './templates/form/form.mod.items.phtml';
        }
        function showError($error) {
            include_once 'templates/Error.phtml';
        }
    }
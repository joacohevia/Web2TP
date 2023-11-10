<?php 
    class CategView {
        function MostrarCateg($categorias,$admin) {
            include_once './templates/listas/lista.categ.phtml';
        }
        function MostrarItemsCateg($categId) {
            include_once './templates/listas/list.categId.phtml';
        }
        function formCateg() {
            include_once './templates/form/form.categorias.phtml';
        }
        function formModCateg($categoria) {
            include_once './templates/form/form.mod.categ.phtml';
        }
        function showError($error=null) {
            require_once 'templates/Error.phtml';
        }
    }
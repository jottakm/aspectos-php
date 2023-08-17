<?php

$pagina = $_GET['pagina'] ?? 'inicio';

require './paginas/' . $pagina . '.php';
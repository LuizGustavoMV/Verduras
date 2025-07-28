<?php
    function conectar($params = "")
    {
        if ($params == "") 
            $params = "pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=postgres";
    
        try {
            $varConn = new PDO($params);
            return $varConn;
        } catch (PDOException $e){
            echo "nao conectado";
            exit;
        }
    }
?>
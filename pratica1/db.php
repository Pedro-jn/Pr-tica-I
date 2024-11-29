<?php
        
        $conn = new mysqli("localhost", "root", "root", "suporte");

       
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

       88888888
        $sql = "SELECT chamados.id, clientes.nome AS cliente, chamados.descricao, chamados.status 
                FROM chamados 
                JOIN clientes ON chamados.cliente_id = clientes.id";
        $result = $conn->query($sql);

        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['cliente']}</td>
                    <td>{$row['descricao']}</td>
                    <td>{$row['status']}</td>
                  </tr>";
        }

        $conn->close();
        ?>
<?php
class ListaPressao
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function lista()
    {
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
        // Check connection
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error();
        }
        // Defines query
        $query = "SELECT * FROM pressao where idPaciente = '$this->id'";
        // Select records
        $result = $conn->query($query);



        $items = '';
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $item = file_get_contents('view/Pages/pressao_item.html');
                $item = str_replace('#{valorDiastolico.pressao}', $row['valorDiastolico'], $item);
                $item = str_replace('#{valorSistolico.pressao}',      $row['valorSistolico'],      $item);
                $timestamp = strtotime($row['dataMedicao']);
                $item = str_replace('#{data.pressao}',      date("d-m-Y H:i:s", $timestamp),      $item);
                $items .= $item;
            }
        }



        // Close connection
        $conn->close();
        return $items;
    }
}

<?php
class ListaDiabete
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
        $query = "SELECT * FROM diabetes where idPaciente = '$this->id'";
        // Select records
        $result = $conn->query($query);



        $items = '';
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $item = file_get_contents('view/Pages/diabete_item.html');
                $item = str_replace('#{valor.diabete}', $row['valorMedido'], $item);
                $timestamp = strtotime($row['dataMedicao']);
                $item = str_replace('#{data.diabete}',      date("d-m-Y H:i:s", $timestamp),      $item);
                $items .= $item;
            }
        }



        // Close connection
        $conn->close();
        return $items;
    }
}

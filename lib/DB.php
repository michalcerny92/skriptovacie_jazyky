<?php

namespace photos\lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "photos_cerny";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if(!empty($host)) {
            $this->host = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($username)) {
            $this->username = $username;
        }

        if(!empty($password)) {
            $this->password = $password;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    //tu zacinaju funkcie pre menu
    public function insertMenuItem(string $menu_item, string $url, int $data_type): bool
    {
        $sql = "INSERT INTO menu(menu_item, url, data_type) VALUES ('" . $menu_item . "', '" . $url . "','" . $data_type . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT * FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $item) {
            $idmenu = $item['idmenu'];
            $menu_item = $item['menu_item'];
            $url = $item['url'];
            $data_type = $item['data_type'];
            $finalMenu[$idmenu] = [
                'menu_item' => $menu_item,
                'url' => $url,
                'data_type' => $data_type
            ];
        }

        return $finalMenu;
    }

    public function getMenu(): array
    {
        $sql = "SELECT * FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getMenuItem(int $idmenu): array
    {
        $sql = "SELECT * FROM menu WHERE idmenu = ".$idmenu;
        $query = $this->connection->query($sql);
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function deleteMenuItem(int $idmenu): bool
    {
        $sql = "DELETE FROM menu WHERE idmenu = ".$idmenu;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function updateMenuItem(int $idmenu, string $menu_item = "", string $url = "", int $data_type = NULL): bool
    {
        $sql = "UPDATE menu SET ";

        if(!empty($menu_item)) {
            $sql .= " menu_item = '" . $menu_item . "'";
        }

        if(!empty($url)) {
            $sql .= ", url = '" . $url . "'";
        }

        if(!empty($data_type)) {
            $sql .= ", data_type = '" . $data_type . "'";
        }

        $sql .= " WHERE idmenu = ". $idmenu;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    //tu zacinaju funkcie pre fotky
    
    public function insertPhoto(string $nazov, string $popis, string $photo_url, string $photo_url_tn): bool
    {
    $sql = "INSERT INTO photos(nazov, popis, photo_url, photo_url_tn) VALUES ('" . $nazov . "', '" . $popis . "', '" . $photo_url . "','". $photo_url_tn . "')";
    $stmt = $this->connection->prepare($sql);
    return $stmt->execute();
    }

    public function getAllPhotos(): array
    {
    $sql = "SELECT * FROM photos";
    $query = $this->connection->query($sql);
    $data = $query->fetchAll(\PDO::FETCH_ASSOC);
    $finalPhotos = [];

    foreach ($data as $item) {
        $idphotos = $item['idphotos'];
        $nazov = $item['nazov'];
        $popis = $item['popis'];
        $photo_url = $item['photo_url'];
        $photo_url_tn = $item['photo_url_tn'];
        $finalPhotos[$idphotos] = [
            'idphotos' => $idphotos,
            'nazov' => $nazov,
            'popis' => $popis,
            'photo_url' => $photo_url,
            'photo_url_tn' => $photo_url_tn
        ];
    }

    return $finalPhotos;
    }

    public function getPhoto(int $idphotos): array
    {
    $sql = "SELECT * FROM photos WHERE idphotos = " . $idphotos;
    $query = $this->connection->query($sql);
    $data = $query->fetch(\PDO::FETCH_ASSOC);

    return $data;
    }

    public function deletePhoto(int $idphotos): bool
    {
    $sql = "DELETE FROM photos WHERE idphotos = " . $idphotos;
    $stmt = $this->connection->prepare($sql);
    return $stmt->execute();
    }

    public function updatePhoto(int $idphotos, string $nazov = "", string $popis = "", string $photo_url = "", string $photo_url_tn = ""): bool
    {
    $sql = "UPDATE photos SET ";

    if (!empty($nazov)) {
        $sql .= " nazov = '" . $nazov . "'";
    }

    if (!empty($popis)) {
        $sql .= ", popis = '" . $popis . "'";
    }

    if (!empty($photo_url)) {
        $sql .= ", photo_url = '" . $photo_url . "'";
    }

    if (!empty($photo_url_tn)) {
        $sql .= ", photo_url_tn = '" . $photo_url_tn . "'";
    }

    $sql .= " WHERE idphotos = " . $idphotos;

    $stmt = $this->connection->prepare($sql);
    return $stmt->execute();
    }

}
?>
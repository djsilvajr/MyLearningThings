<?php

class Database {
    private $host = '185.213.81.205';  // Endereço do servidor MySQL
    private $db = 'u856874239_learningThings';  // Nome do banco de dados
    private $user = 'u856874239_learningThings';  // Nome do usuário do banco de dados
    private $pass = 'Douglas001@';  // Senha do usuário do banco de dados
    private $charset = 'utf8mb4';  // Conjunto de caracteres
    private $pdo;
    private $error;

    // Função para conectar ao banco de dados
    public function connect() {
        // DSN (Data Source Name) para a conexão PDO
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        
        // Opções para a conexão PDO
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            // Cria uma nova instância PDO
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
            //echo "Conexão estabelecida com sucesso!<br>";
            //return $this->pdo;
        } catch (\PDOException $e) {
            // Tratamento de erro
            $this->error = $e->getMessage();
            echo "Erro na conexão: " . $this->error;
            return null;
        }
    }

    // Função para realizar uma consulta e retornar todas as linhas
    public function query($sql) {
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    // Função para realizar uma consulta e retornar uma única linha
    public function querySingle($sql) {
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch();
    }

    // Função para executar comandos UPDATE, INSERT e DELETE
    public function execute($sql, $params) {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function close_connection() {
        unset($this->pdo);
        //return true;
    }


    // $database = new Database;
    // $connection = $database->connect();
    // $database->close_connection();

}




?>
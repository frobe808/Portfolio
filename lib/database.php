<?php 
class Database {

    protected $host = "localhost";      // database connection variables
    protected $db = "test";             // de database die je gemaakt hebt, niet de tabel!
    protected $user = "root";           // default van pypadmin als je die niet hebt aangepast
    protected $pw ="";                  // default van pypadmin als je die niet hebt aangepast
    protected $connection;              // de variable waar we onze connectie in gaan bewaren.

    public function __construct(){      // onze construct functie die dus eerst een connectie aanmaakt 
        $this->connection = new mysqli($this->host, $this->user, $this->pw, $this->db);
        if ($this->connection->connect_error) {                    // We checken of de verbinding er is. 
            throw new Exception("". $this->connection->connect_error); // ander geven we een fout
		}
    }

    public function query($query) {       // onze publieke methode query
        $rows = [];                       // we maken eerst een lege array aan voor ons resultaat.
        if ($result = $this->connection->query($query)) { // we voeren onze query uit
            while ($row = $result->fetch_assoc()){        // we lopen over onze resultaat rijen
                $rows[] = $row;                           // we steken onze data van de db in onze array
            }
        }
        return $rows;                     // we geven onze array terug aan ons modal
    }
}
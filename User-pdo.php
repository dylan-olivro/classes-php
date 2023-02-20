<?php
session_start();

class Userpdo
{

    private $id;
    public $login;
    private $password;
    public $email;
    public $firstname;
    public $lastname;

    protected $bdd;

    public function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        try {
            $this->bdd = new PDO("mysql:host=$servername;dbname=classes", $username, $password);

            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Connexion réussie';
        } catch (PDOException $e) {
            // echo "Erreur : " . $e->getMessage();
        }
    }

    public function register($login, $password, $email, $firstname, $lastname)
    {
        $insertUser = $this->bdd->prepare("INSERT INTO utilisateurs(login,password,email,firstname,lastname)VALUES(?,?,?,?,?)");
        $insertUser->execute([$login, $password, $email, $firstname, $lastname]);

        $recupUser = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $recupUser->execute([$_SESSION['login']]);
        $result = $recupUser->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function connect($login, $password)
    {
        $recupUser = $this->bdd->prepare("SELECT login,password FROM utilisateurs WHERE login = ? AND password = ?");
        $recupUser->execute([$login, $password]);

        if ($recupUser->rowCount() > 0) {
            echo 'utilisateurs trouvé<br>';
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            // return $login = $this->login;
            // $password = $this->password;
        } else {
            echo "Inconnu";
        }
    }

    public function disconnect()
    {
        session_destroy();
    }

    public function delete()
    {
        $deleteUser = $this->bdd->prepare("DELETE FROM utilisateurs WHERE login = ?");
        $deleteUser->execute([$_SESSION['login']]);
        session_destroy();
        echo 'utilisateurs supprimer';
    }

    public function update($login, $password, $email, $firstname, $lastname)
    {
        $updateUser = $this->bdd->prepare("UPDATE utilisateurs SET login=?, password=?, email=?, firstname=?, lastname=? WHERE login = ?");
        $updateUser->execute([$login, $password, $email, $firstname, $lastname, $_SESSION['login']]);
    }

    public function isConnected()
    {
        if (isset($_SESSION['login'])) {
            // echo "Bonjour " . $_SESSION['login'];
            return true;
        } else {
            return false;
        }
    }

    public function getAllinfos()
    {
        $recupUser = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $recupUser->execute([$_SESSION['login']]);
        $result = $recupUser->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getLogin()
    {

        $recupUser = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $recupUser->execute([$_SESSION['login']]);
        $result = $recupUser->fetchAll(PDO::FETCH_ASSOC);

        return $result[0]['login'];
    }

    public function getEmail()
    {
        $recupUser = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $recupUser->execute([$_SESSION['login']]);
        $result = $recupUser->fetchAll(PDO::FETCH_ASSOC);

        return $result[0]['email'];
    }
    public function getFirstname()
    {
        $recupUser = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $recupUser->execute([$_SESSION['login']]);
        $result = $recupUser->fetchAll(PDO::FETCH_ASSOC);

        return $result[0]['firstname'];
    }
    public function getLastname()
    {
        $recupUser = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $recupUser->execute([$_SESSION['login']]);
        $result = $recupUser->fetchAll(PDO::FETCH_ASSOC);

        return $result[0]['lastname'];
    }
}
$newUser = new Userpdo();

// $newUser->register("zazaz", "sqsqs", $test, $test, $test);
$newUser->connect("Update", "Update");

if ($newUser->isConnected()) {
    echo 'Bienvenue';
} else {
    echo 'ne sais pas';
}
// var_dump($newUser->getLastname());

// var_dump($newUser->connect("Update", "Update"));
// $newUser->update('Update', "Update", $test, $test, $test);
// $newUser->getLogin();
// $newUser->delete();
// $newUser->isConnected();
// $newUser->disconnect();
// var_dump($_SESSION);
// var_dump($this->login);
// var_dump($this->password);
// var_dump($login);

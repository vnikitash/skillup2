<?php

class User
{
    private $id;
    private $email;
    private $pass;
    private $isAdmin = 0;
    private $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setPass(string $pass): self
    {
        $this->pass = md5($pass);

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setAdmin(bool $isAdmin): self
    {
        $this->isAdmin = (int) $isAdmin;

        return $this;
    }

    public function getAdmin(): bool
    {
        return $this->isAdmin;
    }

    public function save(): bool
    {
        if ($this->id) {
            return $this->update();
        }
        return $this->create();
    }

    public function create(): bool
    {
        $this->db->query("INSERT INTO users SET email = '{$this->email}', pass = '{$this->pass}', is_admin={$this->isAdmin}");

        return (bool) ($this->id = $this->db->insert_id);
    }

    public function update()
    {
        $query = "UPDATE `users` SET ";

        if ($this->email) {
            $query .= "`email` = '$this->email',";
        }

        if ($this->pass) {
            $query .= "`pass` = '$this->pass',";
        }

        if (!is_null($this->isAdmin)) {
            $query .= "`is_admin` = $this->isAdmin,";
        }

        $query = substr($query, 0, -1);

        $query .= " WHERE id = {$this->id} LIMIT 1";

        $this->db->query($query);

        return (bool) $this->db->affected_rows;
    }

    public function getID()
    {
        return $this->id;
    }

    public static function findUserByEmail(string $email): ?self
    {
        $user = new self();

        $data = $user->db->query("SELECT * FROM users WHERE email = '$email' LIMIT 1")->fetch_assoc();

        if (!isset($data['id'])) {
            return null;
        }

        $user->id = $data['id'];
        $user->email = $data['email'];
        $user->isAdmin = $data['is_admin'];
        $user->pass = $data['pass'];

        return $user;
    }

    public function fillObjectByMysqlResultSearchViaEmail(string $email): ?self
    {
        $data = $this->db->query("SELECT * FROM users WHERE email = '$email' LIMIT 1")->fetch_assoc();

        if (!isset($data['id'])) {
            return null;
        }

        $this->id = $data['id'];
        $this->email = $data['email'];
        $this->isAdmin = $data['is_admin'];
        $this->pass = $data['pass'];

        return $this;
    }

    public function delete(): bool
    {
        if (!$this->id) {
            return false;
        }

        $this->db->query("DELETE FROM users WHERE id = {$this->id} LIMIT 1");

        return (bool) $this->db->affected_rows;
    }

}

function findUserByEmail(): ?User
{

}
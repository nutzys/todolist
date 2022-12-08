<?php

class Post {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function all($userid){
        $this->db->query('SELECT p.id, p.title, p.description, p.end, p.created, u.name FROM posts AS p INNER JOIN users AS u ON p.user_id = u.id WHERE u.id = :id ORDER BY p.end ASC');
        $this->db->bind(':id', $userid);

        $rows = $this->db->returnAll();
        return $rows;
    }

    public function getPost($id){
        $this->db->query('SELECT * FROM posts WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function store($data){
        $this->db->query('INSERT INTO posts (user_id, title, description, end) VALUES (:id, :title, :description, :end)');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':end', $data['end']);
        $this->db->execute();
    }

    public function update($data){
        $this->db->query('UPDATE posts SET title = :title, description = :description, end = :end WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':end', $data['end']);
        $this->db->execute();
    }

    public function delete($id){
        $this->db->query('DELETE FROM posts WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}
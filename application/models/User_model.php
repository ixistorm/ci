<?php 
class User_model extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT * FROM users";
        $users = $this->db->query($query);
        return $users;
    }
    public function insertUser($data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $tel = $data['tel'];
        $query = "INSERT INTO users (fullname, email, age ,tel) VALUES ('$fullname', '$email', '$age','$tel')";
        return $this->db->query($query);
    }
    public function getUserByID($userID)
    {
        $query = "SELECT * FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
    }
    public function update($userID, $data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $tel = $data['tel'];
        $query = "UPDATE users SET fullname = '$fullname', email = '$email', age = '$age',tel = '$tel' WHERE user_id = '$userID'";
        return $this->db->query($query);
    }
    public function delete($userID)
   {
       $query = "DELETE FROM users WHERE user_id = '$userID'";
       return $this->db->query($query);
   }

}

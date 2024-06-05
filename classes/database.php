<?php
class database
{
    function opencon(){
        return new PDO('mysql:host=localhost; dbname=reservation','root','');
    }
    function addPackage($service_name, $service_desc, $service_price){
        $con = $this->opencon();
        return $con->prepare("Insert into packages (service_name, service_desc, service_price) VALUES (?,?,?)")
        ->execute([ $service_name, $service_desc, $service_price]);

        return $stmt;
    }
    function viewServices(){
        $con = $this->opencon();
        return $stmt = $con->query("Select service_id, service_name, service_desc, service_price from packages") ->fetchAll(PDO::FETCH_ASSOC);
    }

    function check($username, $password) {
        // Open database connection
        $con = $this->opencon();
    
        // Prepare the SQL query
        $stmt = $con->prepare("SELECT * FROM user_admin WHERE admin_name = ?");
        $stmt->execute([$username]);
    
        // Fetch the user data as an associative array
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // If a user is found, verify the password
        if ($user && password_verify($password, $user['admin_pass'])) {
            return $user;
        }
    
        // If no user is found or password is incorrect, return false
        return false;
    }
    function signupUser($firstname, $lastname, $username, $password, $email)
    {
        $con = $this->opencon();
        // Save user data along with profile picture path to the database
        $con->prepare("INSERT INTO user_admin (admin_fname, admin_lname, admin_name, admin_pass, admin_email) VALUES (?,?,?,?,?)")
        ->execute([$firstname, $lastname, $username, $password, $email]);
        return $con->lastInsertId();
        }

        function deletePackage($service_id) {
            try{
                $con = $this->opencon();
                    $con->beginTransaction();
         
                    $query = $con->prepare("DELETE FROM packages WHERE service_id = ?");
                    $query->execute([$service_id]);
         
                    $con->commit();
                    return true;
         
            } catch (PDOException $e){
                $con->rollBack();
                return false;
        }
        }
    }
    
//     function viewdata($user_id){
//             try{
//             $con = $this->opencon();
//             $query = $con->prepare("SELECT user_admin.admin_fname, user_admin.admin_lname, user_admin.admin_id, user_admin.admin_name, user_admin.admin_pass, user_admin.admin_email WHERE user_admin.admin_id = ?");
//             $query->execute([$user_id]);
//             return $query->fetch();
//         }
// }
// function UpdateUser($user_id, $fname, $lname, $username, $password, $email) {
//     try{
//         $con = $this->opencon();
//         $query = $con->prepare("UPDATE user_admin SET admin_fname=?, admin_lname=?, admin_name=?, admin_pass=?, admin_email=? WHERE admin_id=?");
//         return $query->execute([$fname, $lname, $username, $password, $email, $user_id]);
// }
// }
// function delete($user_id) {
//     try{
//         $con = $this->opencon();
//             $con->beginTransaction();

//             $query = $con->prepare("DELETE FROM user_admin WHERE admin_id = ?");
//             $query->execute([$user_id]);

//             $con->commit();
//             return true;
//     } catch (PDOException $e){
//         $con->rollBack();
//         return false;
// }
// }

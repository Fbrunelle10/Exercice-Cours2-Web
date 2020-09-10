<?php
    require_once("dbModel.php");
    require_once("userDTO.php");

    class UserModel extends DbModel {
        const GET_ALL_USERS_PROC_NAME = "get_all_users";
        const GET_USER_WITH_ID_PROC_NAME = "get_user_by_id";

        public function get_all_users() {
            $result = $this->mysqli->query("CALL ".self::GET_ALL_USERS_PROC_NAME."()");
            $users = array();
            while ($row = $result->fetch_assoc()) {
                array_push($users, new UserDTO($row['id_user'], $row['first_name'], $row['last_name']));
            }

            return $users;
        }

        public function get_user_with_id($id_user) {
            $result = $this->mysqli->query("CALL ".self::GET_USER_WITH_ID_PROC_NAME."($id_user)");
            $users = array();
            while ($row = $result->fetch_assoc()) {
                array_push($users, new UserDTO($row['id_user'], $row['first_name'], $row['last_name']));
            }       
            return  $users;
        }
    }
?>
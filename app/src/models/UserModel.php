<?php
namespace models;
use mimbre\db\DbActiveRecord;
use mimbre\db\mysql\MySqlConnection;

class UserModel extends DbActiveRecord
{
    /**
     * Constructor.
     *
     * @param MySqlConnection $db Database connection
     * @param string          $id ID
     */
    public function __construct($db, $id = null)
    {
        parent::__construct($db, "user", $id);
    }

    /**
     * Searches an user by auth ID.
     *
     * @param MySqlConnection $db         Database connection
     * @param string          $authUserId Auth ID
     *
     * @return UserModel
     */
    public static function searchByAuthUserId($db, $authUserId)
    {
        $ret = null;

        $sql = "
        select
            id
        from user
        where auth_user_id = ?";
        $row = $db->query($sql, [$authUserId]);
        if (count($row) > 0) {
            $ret = new UserModel($db, $row["id"]);
        }

        return $ret;
    }
}

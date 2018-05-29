<?php
namespace models;
use mimbre\db\DbActiveRecord;

class UserModel extends DbActiveRecord
{
    public function __construct($db, $id = null)
    {
        parent::__construct($db, "user", $id);
    }

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

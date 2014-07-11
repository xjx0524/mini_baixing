<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-7-10
 * Time: 下午1:46
 */

class DAO {
    private $host = 'localhost';
    private $dbname = 'baixing';
    private $username = 'root';
    private $password = '';
    private $dbh;

    public function __construct() {
        $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->dbh->query('set names utf8');
    }

    public function getCategory() {
        $result = $this->dbh->query("select * from Category");
        $list = array();
        while ($row = $result->fetch()) {
            $list[$row['englishName']] = $row['name'];
        }
        return $list;
    }

    public function getList($category_name) {
        $result = $this->dbh->query("select * from $category_name");
        $list = array();
        while ($row = $result->fetch()) {
            $list[] = $row;
        }
        return $list;
    }

    public function getItemFields($category_name) {
        $result = $this->dbh->query("select fields from Category where englishName='$category_name'")->fetch();
        return explode(',', $result[0]);
    }

    public function getItem($category_name, $item_id) {
        $result = $this->dbh->query("select * from $category_name where id='$item_id'");
        return $result->fetch();
    }

    public function addItem($category_name, $args) {
        $sql = "insert into $category_name set ";
        $first = true;
        foreach ($args as $key => $value) {
            if ($first) {
                $first = false;
            } else {
                $sql .= ',';
            }
            $sql .= "$key='$value'";
        }
        if ($this->dbh->exec($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function delItem($category_name, $item_id) {
        $sql = "delete from $category_name where id = '$item_id'";
        if ($this->dbh->exec($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateItem($category_name, $item_id, $args) {
        $args_string = '';
        $first = true;
        foreach ($args as $key => $value) {
            if ($first) {
                $first = false;
            } else {
                $args_string .= ',';
            }
            $args_string .= "$key='$value'";
        }
        $sql = "update $category_name set $args_string where id = '$item_id'";
        if ($this->dbh->exec($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
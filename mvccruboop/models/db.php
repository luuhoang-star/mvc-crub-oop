<?php
require_once "env.php";
// tao ket noi tu project php sang mysql
class db extends env
{

    public function getConnectdb()
    {
       // $conn = new env();
        $this->DBNAME = ("php2");
        $this->DBUSER=("root");
        $this->DBPASS=("");
        $this->HOST=("127.0.0.1");
        $this->DBCHARSET=('utf8');
        return $this->getConnect();
    }

// new nhu dung de lay danh sach san pham thi se truyen vao true con
// truyen false thi se chay duoc cac cau lenh truy van them sua xoa

    public function getData($query, $getAll = true)
    {
        $conn = $this->getConnectdb();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}
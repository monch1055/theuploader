<?php
use Shuchkin\SimpleXLSX;
class contents extends dbClass{
    
    public function loginUser($details){
        $result = parent::query("SELECT * FROM ".$this->usersTable." WHERE email = ? AND password = ?",$details)->fetchArray();
        return $result;
    }

    public function addUser($params){
        $result = parent::query("INSERT INTO ".$this->usersTable." (name,email,password) VALUES(?,?,?)",$params);
    }

    public function listCustomerInfo(){
        $result = parent::query("SELECT * FROM ".$this->customersTable." ORDER BY cid ASC")->fetchAll();
        return $result;
    }

    public function addCustomer($details){
        $vals = [$details['lastname'],$details['firstname'],$details['middlename'],$details['add_street'],$details['add_brgy'],$details['add_city'],$details['add_province'],$details['contact_phone'],$details['contact_mobile'],$details['email']];
        $result = parent::query("INSERT INTO ".$this->customersTable." (lastname,firstname,middlename,add_street,add_brgy,add_city,add_province,contact_phone,contact_mobile,contact_email) VALUES(?,?,?,?,?,?,?,?,?,?)",$vals);
    }

    public function parseExcelFile($excelFile){
        $header_values = $rows = [];
        if ($xlsx = SimpleXLSX::parse($excelFile)):
            foreach ($xlsx->rows() as $k => $r):
                if ($k === 0):
                    $header_values = $r;
                    continue;
                endif;
                $rows[] = array_combine($header_values, $r);
            endforeach;
        endif;
        return $rows;
    }
}
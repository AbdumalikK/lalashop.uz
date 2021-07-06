<?php 

class Connect extends PDO {
    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=u562342975_lalakushop", 'u562342975_lalakushop', 'Abdumalik2001', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}


class API {
    function Select() {
        $db = new Connect;
        $users = array();
        $sql = 'SELECT * from lc_cart_items';
        $data = $db->prepare($sql);
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)) {
            $users[$OutputData['id']] = array(
                'id' => $OutputData['id'],
                'customer_id' => $OutputData['customer_id'],
                'cart_uid' => $OutputData['cart_uid'],
                'key' => $OutputData['key'],
                'quantity' => (int)$OutputData['quantity']
            );
        }
        return json_encode($users);
    }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();
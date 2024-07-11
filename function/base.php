<?php
class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table){
        $this->pdo=new PDO($this->dsn,'root','');
        $this->table=$table;
    }

    public function all(...$arg){
        $sql="select * from $this->table";
        // arg[0]所規範的是欄位條件
        if(!empty($arg[0])&& is_array($arg[0])){
            print_r($arg[0]);
            foreach($arg[0] as $key =>$value){
                
                $tmp[]="`$key`='$value'";
                print_r($tmp);
            }
            $sql=$sql." where ".join(" && ",$tmp);
        }
        // arg[1]所規範的是非欄位的條件，例如group by或order by等等
        if(!empty($arg[1])){
            $sql=$sql.$arg[1];
        }
        echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($arg){
        $sql="select * from `{$this->table}` where ";

        if(is_array($arg)){
            $tmp=$this->array2sql($arg);

            $sql.=join(" && ",$tmp);
        }else{
            $sql.=" `id`='{$arg}'";
        }
        echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    protected function array2sql($array){
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }
}

$Student=new DB('students');
echo "<pre>";
print_r($Student->find(['id' => '5']));
echo "</pre>";
echo "<pre>";
print_r($Student->all(['graduate_at'=> '14' ,'status_code'=>'001'],' order by `id` desc'));
echo "</pre>";
?>
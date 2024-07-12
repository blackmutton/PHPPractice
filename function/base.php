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
        $sql="select * from $this->table ";
        $sql=$this->select($sql,...$arg);
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
    function save($array){
        if(isset($array['id'])){
            // update
            $sql="update `{$this->table}` set ";

            // 使用迴圈將欄位名稱和值組合成字串
            $tmp=$this->array2sql($array);
            $sql.=join(",",$tmp);
            $sql.=" where `id` ='{$array['id']}'";
        }else{
            // insert
            $sql="insert into `{$this->table}`";
            $sql.="(`".join(`,`,array_keys($array))."`)";
            $sql.=" values('".join("','",$array)."')";
        }
        echo $sql;
        return $this->pdo->exec($sql);
    }

    function del($arg){
        $sql="delete from `{$this->table}` where ";

        if(is_array($arg)){
            $tmp=$this->array2sql($arg);
            $sql.=join(" && ",$tmp);
        }else{
            $sql.=" `id`='{$arg}'";
        }
        echo $sql;
        return $this->pdo->exec($sql);
    }

    function q($sql){
        return $this->pdo->query($sql)->fetchAll();
    }
    function count(...$arg){
        $sql="select count(*) from `{$this->table}`";

        $sql=$this->select($sql,...$arg);
        echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    function math($math,$col,...$arg){
        $sql="select $math(`$col`) from `{$this->table}`";
        $sql=$this->select($sql,...$arg);

        echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    protected function array2sql($array){
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }
    protected function select($sql,...$arg){
        // arg[0]所規範的是欄位條件
        if(!empty($arg[0])&& is_array($arg[0])){
            print_r($arg[0]);  
                // $tmp[]="`$key`='$value'";
                $tmp=$this->array2sql($arg[0]);
                print_r($tmp);
                $sql=$sql." where ".join(" && ",$tmp);
            }
        
        // arg[1]所規範的是非欄位的條件，例如group by或order by等等
        if(!empty($arg[1])){
            $sql=$sql.$arg[1];
        }
        return $sql;
    }

    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

$Student=new DB('students');
$Dept=new DB('dept');
echo "<pre>";
// print_r($Student->find(['id' => '5']));
echo "</pre>";
echo "<pre>";
// print_r($Student->all(['graduate_at'=> '14' ,'status_code'=>'001'],' order by `id` desc'));
// $Dept->del(21);
echo "</pre>";
// echo $Student->count(['dept'=>2]);
echo "<br>";

// echo $Student->math('max','graduate_at'); 
?>
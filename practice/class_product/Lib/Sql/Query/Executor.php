<pre>
<?php
class Lib_Sql_Query_Executor extends Lib_Sql_Connection{
    public function execute($sql)
    {
    	try {
    		return $this->connect()->query($sql);
            
    	} catch(Exception $e) {

    		var_dump($e->getMessage());
    	}
    }
    // public function fetchAssoc($result){
    //     $data=[];
    //         while($row = $result->fetch_assoc()){
    //             $data[]=$row;
    //         }
        // return count($data) > 1 ? $data :$data[0];
    //         // return $data;
    // }
    public function fetchAssoc($result)
    {
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        // return $data;
        return count($data) > 1 ? $data :$data[0];
    }
    public  function fetchRow($result){
        if($result->num_rows>0){
            $row=$result->fetch_assoc();
            return $row;

        }
    }
}
?>
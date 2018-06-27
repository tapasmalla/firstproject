<?php 
	require_once ('connection.php');
	abstract class helpers extends connection{
		function insert($table, $col, $values){
			$str = "insert into $table ($col) values ($values)";
			// echo $str;

			$result = $this->conn->query($str) or die ($this->conn->error);
			// var_dump($result);
		}
		function select($col, $table, $condition){
			$str = "select $col from $table where $condition";
			// echo $str;
			$result = $this->conn->query($str) or die ($this->conn->error);  
			// pre($result);

			if($result->num_rows > 0){
				// echo "ok";
				while($ans = $result->fetch_array(MYSQLI_ASSOC)){
				// pre($ans);
				$data[] = $ans;
				// pre($data);
				// return $data;
				}
				return $data;
			}
			else{
				return 0;
			}
		}
		function update($table, $records, $condition){
			$str = "update $table set $records where $condition";
			// echo $str;
			$result = $this->conn->query($str) or die ($this->conn->error);
			// var_dump($result);
		}
		function delete($table, $condition){
			$str = "delete from $table where $condition";
			// echo $str;
			$result = $this->conn->query($str) or die ($this->conn->error);
			// var_dump($result);
		}
	}
 ?>

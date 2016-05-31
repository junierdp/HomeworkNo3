<?php
	class table{
		private $arr_data = null;
		private $fields = array();
		function __construct($arr_data){
			$this->arr_data = $arr_data;

			if(count($arr_data) > 0){
				$row = $arr_data[0];
				foreach ($row as $field => $value) {
					$this->fields[] = $field;
				}
			}
		}

		function __toString(){
			$ths = implode('</th><th>', $this->fields);
			$final = "<table class=\"table table-bordered\">
			<thead>
				<tr class=\"info text-primary\">
					<th>{$ths}</th>
				</tr>
			</thead><tbody>";
			foreach ($this->arr_data as $row) {
				$final .= "<tr class=\"text-center\">";
					foreach ($row as $field => $value) {
						$final .= "<td>{$value}</td>";
					}
				$final .= "</tr>";
			}
			$final .= "</tbody>";
			$final .= "</table>";

			return $final;
		}

		function show(){
			echo __toString();
		}
	}
?>
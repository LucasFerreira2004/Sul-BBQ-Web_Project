<?php

	class Employee {
		public function addEmployee($emp_email, $emp_pass, $emp_name, $emp_wage, $emp_func) {
			$database_connect = new mysqli('localhost', 'root', '', 'storage_service');
			$query = "INSERT INTO employee(emp_email, emp_pass, emp_name, emp_wage, emp_func) values('$emp_email', '$emp_pass', '$emp_name', '$emp_wage', '$emp_func')";
			$database_connect->query($query);
			$database_connect->close();
		}

		public function removeEmployee($emp_email) {
			$database_connect = new mysqli('localhost', 'root', '', 'storage_service');
			$query = "DELETE FROM employee WHERE emp_email='$emp_email";
			$database_connect->query($query);
			$database_connect->close();
		}

		public function getEmployees() {
			$database_connect = mysqli_connect('localhost', 'root', '', 'storage_service');
			$query = "SELECT * FROM employee";
			$res = $database_connect->query($query);
			$employees = [];
			while($row = $res->fetch_assoc()) {
				$employees += $row;
			}
			mysqli_close($database_connect);
			return $employees;
		}
	}
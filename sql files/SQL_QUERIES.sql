/*SQL QUERIES:*/

		$query = 	"SELECT `LastName` 
					 FROM 	`rcs.customers` AS customer
					 WHERE 	`customer.LastName` = " . $userName . " 
					";

		SELECT 	LastName 
		FROM 	rcs.customers AS customer
		WHERE 	customer.LastName = '$userName' 
									


		SELECT 	CustomerID, LastName 
		FROM 	rcs.customers AS customer
		WHERE customer.LastName = 'Fontilea'
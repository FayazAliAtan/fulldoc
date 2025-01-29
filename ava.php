<?php 
       // Fetch doctor profiles with availability
           $query = "SELECT Status FROM doctor_profile WHERE id=2";
          
             $stmt = $conn->prepare($query);
             $stmt->execute();
             $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
 ?>
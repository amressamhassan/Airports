<?php
include 'include/header.php'; 
if(isset($_SESSION['manager'])&&($_SESSION['manager_type']==1)){
    echo"<meta http-equiv='Refresh' content='0;URL=AdminPanel.php' />";
}
elseif(isset($_SESSION['manager'])&&($_SESSION['manager_type']==2)){
    echo"<meta http-equiv='Refresh' content='0;URL=ManagerPanel.php' />";
}
elseif(isset($_SESSION['customer'])&&($_SESSION['Customer_Type']==1)){
    echo"<meta http-equiv='Refresh' content='0;URL=PassengerPanel.php' />";
}
elseif(isset($_SESSION['customer'])&&($_SESSION['Customer_Type']==2)){
    echo"<meta http-equiv='Refresh' content='0;URL=TravelPersonnelPanel.php' />";
}
elseif(isset($_SESSION['telebooker'])){
    echo"<meta http-equiv='Refresh' content='0;URL=TelebookerPanel.php' />";
}
else {
    echo"<meta http-equiv='Refresh' content='0;URL=index.php' />";
    
}
?>
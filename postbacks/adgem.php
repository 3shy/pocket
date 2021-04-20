<?php

  
	
	include_once("../admin/core/init.inc.php");
	
	// https://extreem-rewards.com/postbacks/adgem.php?user_id={player_id}&app_id={app_id}&offer_name={campaign_name}&transaction_id={transaction_id}&amount={amount}&payout={payout}
	
    $amount = $_REQUEST['amount'];

    $user_id = $_REQUEST['user_id'];
    
    $amount = intval($amount * 1);
    
    $timeCurrent = time();
    
    $configs = new functions($dbo);
    
    $type = "Adgem offerwall Credit";
    
    $account = new account($dbo, 1);
    $userdata = $account->getuserdata($user_id);
        
        // Checking whether the user exists
        if($userdata['username'] != $user_id){
            
            api::printError(ERROR_UNKNOWN, "Account Mismatch");
            
        }else{
            
            // User Exists, Getting user current points ..
            $newBalance = $userdata['points'] + $amount;
                
            // Updating user Points
            $sql = "UPDATE users SET points = '$newBalance' WHERE login = '$user_id'";
            $stmt = $dbo->prepare($sql);
            $stmt->execute();
                
            // Updating user Tracker
            $sql = "INSERT INTO tracker(username, points, type, date) values ('$user_id', '$amount', '$type', '$timeCurrent')";
            $stmt = $dbo->prepare($sql);
            $stmt->execute();
                
            echo "Postback Success";
            
        }

?>
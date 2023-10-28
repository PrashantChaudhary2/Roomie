<?php

    function connect(){
        return mysqli_connect("localhost", "sachinch_ecomu", "qwedsa@123", "sachinch_ecom");
    }

    //check if user is logged in or not
    function checkLoggedIn(){

        $user = selectOne("SELECT * FROM profiles WHERE id='".$_SESSION["profilesId"]."'");

        if($user){
        return $user;
        } else {
            header("location: index.php");
        }
    }

    function select($sql){
        $con = connect();
        $result = mysqli_query($con, $sql);
        $data = array(); 
        while($singleResult = mysqli_fetch_assoc($result)){
            $data[] = $singleResult;
        };

        return $data; 
    }


    function selectOne($sql){

        //connection
        $con = connect();
        $result = mysqli_query($con, $sql);
        //getting single result
        $singleResult = mysqli_fetch_assoc($result);

        return $singleResult;
    }

    //dynamic dropdown creator
    function buildDropDown($arrOptions, $selectedID)
    {
        foreach($arrOptions as $option)
        {
            $selectedState = ($selectedID == $option["id"]) ? "SELECTED" : "";
            echo '<option value="'.$option["id"].'" '.$selectedState.' >'.$option["name"].'</option>';
        }
                        
    }

    // insert into database
    function insert($sql){
        $con = connect();
        $result = mysqli_query($con, $sql);
        return $result;
    }

    // update values in database
    function update($sql){
        $con = connect();
        $result = mysqli_query($con, $sql);
        return $result;
    }

    // delete from database
    function delete($sql){
        $con = connect();
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>
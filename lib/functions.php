<?php 
    /**
     * Function to calculate the founded year to current year
     * @return string
     */
    function copyright($devDate)
    {
        // $devDate    = 2015;
        $currDate   = date('Y');
        if($devDate < $currDate){
            echo "Copyright &copy; {$devDate} - {$currDate}";
        }else{
            echo "Copyright &copy; {$currDate} ";
        }
    }
?>
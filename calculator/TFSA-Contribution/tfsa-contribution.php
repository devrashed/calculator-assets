<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  saving Account calculator class
 */

 class Tfsacontribution{

       function __construct()
        {
            add_shortcode('show_tfsa_contribution', [$this, 'Tfsalifetime']);

        }


function Tfsalifetime(){
?>

<h3 class="textalign clear"> Lifetime TFSA Contribution Room 2022 </h3>
    
   <div class="cgi_container">

         <div class="headline"> Inputs </div>

         <div class="cgi_col_1">
            <span class="text-blue">Age</span> 
            <input type="text" id="age" name="age" class="tffield">
         
            <span class="text-blue">Total TFSA Withdrawals before 2022</span> 
            <div class="Icon-inside">
            <input id="tfsawith" name="tfsawith" class="tffield">  
            <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>
            </div>
         </div>

         <div class="cgi_col_2">
           
            <span class="text-blue">Total TFSA Contributed</span> 
             <div class="Icon-inside">
             <input type="text" id="contri" name="contri" class="tffield"></br>
              <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>
            </div>
           

            <span class="text-blue">Amount Withdrawn in 2022</span> 
            <div class="Icon-inside">
              <input id="amountwith" name="amountwith" class="tffield"> 
            <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>   
           </div>
        </div>

        </div>

     <!-- result section -->


      <div class="cgi_container"> 
         <div class="result"> Results </div> 
           <div id="ytotal">

            <div class="cgi_col_1"> 
              <div class="result_title"> 2022 Contribution Room </div>    

              <div class="tfsa_bg">
                <div id="curenttotal"></div>    
             </div> 
          </div>    

          <div class="cgi_col_2"> 
            <div class="result_title">2023 Contribution Room</div> 

            <div class="tfsa_bg">
              <div id="nexttotal"></div> 
           </div> 
        </div>
   </div>


<?php 

   }
  } //end the class 
?>

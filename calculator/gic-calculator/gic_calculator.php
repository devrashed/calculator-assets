<?php 

if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  gic calculator class
 */

 class gicCalculator{

       function __construct()
        {
          add_shortcode('show_gic_calculator', [$this, 'gic_calculator']);
        }

 function gic_calculator(){

 ?>
    <h3 class="textalign">GIC Calculator</h3>

        <div class="cgi_container">

            <div class="headline"> Inputs </div>

            <div class="cgi_col_1">
                <span class="text-blue">Beginning Investment</span> 
                <div class="Icon-inside">
                    <input id="invest" name="invest" value="1000" class="textfield">
                    <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>
                </div>

                <span class="text-blue">Term Length</span> 
                <div class="Icon-inside">
                   <input id="term" id="term" value="10" class="textfield"></br>
                   
                </div>
            </div>

            <div class="cgi_col_2">

                <span class="text-blue">Rate of Return</span> 
                <div class="Icon-inside">
                    <input id="ratereturn" id="ratereturn" value="10" class="textfield">
                    <i class="fa fa-percent fa-lg fa-fw" aria-hidden="true" ></i>
                </div>

                <select id="duration" id="duration" class="textfield"> 
                  <option selected> Year</option>
                  <option> Month</option>  
              </select>
          </div>

        </div>



        <div class="cgi_container"> 
            <div class="result"> Results </div> 


            <div id="ytotal">

               <div class="cgi_col_1"> 
                <div class="result_title"> Closing Balance </div>    

                <div class="result_bg">
                    <span id="total"></span> 
                </div> 

            </div>    

            <div class="cgi_col_2"> 
                <div class="result_title"> Interest Earned </div> 

            <div class="result_bg">
                <span id="inter"></span> 
             </div> 

            </div>

        </div>    

        <div id="Mitotal"> 

          <div class="cgi_col_1">
            <div class="result_title"> Closing Balance </div>      

          <div class="result_bg">
            <span id="Mtotal"></span> 
           </div> 

        </div>    
        <div class="cgi_col_2"> 

           <div class="result_title"> Interest Earned </div>    

              <div class="result_bg">
               <span id="Minter"></span>
           </div> 

       </div>  
   </div>      
</div> 

<?php 

   } 
} //end the class

?>

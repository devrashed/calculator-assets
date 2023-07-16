<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  Roi calculator class
 */

 class roicalculator{

       function __construct()
        {
            add_shortcode('show_roi_calculator', [$this, 'roicalculatorinvest']);

        }


function roicalculatorinvest(){
?>

  <h3 class="textalign clear">ROI Calculator for Canadian Investments</h3>

<div class="roi-container-1 contain-color"> 

   <div class="roi-col-1"> Input</div>
   <div class="roi-col-2"> Results </div>

<div style="clear:both"></div>
</div>
 
    <div class="roi-container-2"> 

        <div class="roi-col-1"> 

            <div class="sub-col-1"> 
                <span>Amount Invested</span><br>
                <div class="Icon-inside">
                <input id="ivest" name="ivest" class="textfield" value="10000">
                <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>
                </div>
            </div>

            <div class="sub-col-1">   
                <span>Amount Returned</span><br>
                <div class="Icon-inside">
                 <input id="amountreturn" name="amountreturn" class="textfield" value="15000"> 
                <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>
                </div>
            </div>

            <div class="sub-col-1"> 
                <span>Length of Investment (Optional)</span><br>
                <input id="lengthIn" name="lengthIn" class="textfield" value="5"> 

                <select id="typedura" name="typedura" class="textfield">  
                    <option selected> Year</option>
                    <option> Month</option>  
                </select> 
            </div>

        </div>


        <div class="roi-col-2">

            <div class="roi-in"> 
                <div id="roi_result" class="clear">50%</div>
                <div id="roi-text">ROI (RETURN ON INVESTMENT)</div>     
            </div> 

            <div class="sm-col-1">      
                <span> Annualized ROI </span>   
                <div class="ycalculat">31.57 %</div> 
                <div class="mcalculat">98.95 %</div> 
            </div>

            <div class="sm-col-2">  
                <span> Investment Gain </span>
                <div class="calculat"> $5,000</div>
            </div>   

        </div>  
        <div style="clear:both"></div>
    </div>  
    
<?php 

   } 
 } //end the class  
<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  saving Account calculator class
 */

 class Savingcandaccount{

       function __construct()
        {
            add_shortcode('show_saving_accounts', [$this, 'savingsAccount']);

        }


function savingsAccount(){
?>

<h4 class="textalign clear">Best Savings Accounts in Canada</h4>
<div class="sb_wapper"> 

   <div class="sb_grid"> 

    <div class="sb_blance_name">Balance</div>
    <div class="sb_blance_input"> 

     <div class="Icon-inside">
       <input id="blance" name="blance" value="1000" class="textfield">
       <i class="fa fa-usd fa-lg fa-fw" aria-hidden="true" ></i>
      </div> 
    </div>
    <div class="clear"></div>
   </div>


   <div class="sb_top"> 

      <div class="sb-top-1 text-align"> Savings Accounts </div>
      <div class="sb-top-2 text-align"> Interest Rate </div>
      <div class="sb-top-3 text-align"> Minimum Balance</div>
      <div class="sb-top-4 text-align"> First Year Return</div>

  <div class="clear"></div>
   </div>
  

   <!-- Saven Financial -->    

   <div class="sb-grid">
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/saven-financial.webp'; ?>" class="imag"> </div>
    <div class="sb-col-1 text-align"><span>Saven Financial </span><br>
       High Interest Savings Account  </div>
    <div class="sb-col-2 text-align text-final"> 3.50% </div>
    <div class="sb-col-3 text-align text-final"> $0 </div>
    <div class="sb-col-4 text-align text-final" id="saving"> $350 </div>
  </div>


 <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/oaken.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Oaken </span><br>
       Savings Account </div>
      <div class="sb-col-2 text-align text-final"> 3.40% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="oaken"> $340 </div>
  </div>


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/peoples-bank.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Peoples Bank </span><br>
       e-Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 3.40% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="peobank"> $340 </div>
  </div>



  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/renaissance.webp'; ?>" class="imag2"> </div>
      <div class="sb-col-1 text-align"><span>Renaissance </span><br>
      High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 3.25% </div>
      <div class="sb-col-3 text-align text-final"> $50 </div>
      <div class="sb-col-4 text-align text-final" id="rena"> $325 </div>
  </div>


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/bridgewater.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Bridgewater Bank </span><br>
      Smart eSavings Account</div>
      <div class="sb-col-2 text-align text-final"> 3.00% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="bridbank"> $300 </div>
  </div>


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/hubert.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Hubert</span><br>
      Happy High-Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 3.00% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="hubert"> $300 </div>
  </div>


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/EQ-Bank.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>EQ Bank</span><br>
      Savings Plus Account</div>
      <div class="sb-col-2 text-align text-final"> 2.50% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="eqbank"> $2.50 </div>
  </div>


   <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/canadian-tire.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Canadian Tire</span><br>
      High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 2.40% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="canadian"> $2.40 </div>
  </div>


   <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/neo-financial.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Neo</span><br>
      Money Account</div>
      <div class="sb-col-2 text-align text-final"> 2.25% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="neo"> $2.25 </div>
  </div>


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/wyth2.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Wyth</span><br>
      High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 2.25% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="wyth"> $227 </div>
  </div>

   <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/alterna-savings.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Alterna Bank</span><br>
      High Interest ESavings Account</div>
      <div class="sb-col-2 text-align text-final"> 2.00% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="alter"> $201 </div>
  </div>   

  <div class="sb-grid">
      <div class="sb-col-5 text-align"> <img src=" <?php echo CALCULATOR_ASSETS_URL . 'assets/images/bmo.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>BMO</span><br> Amplifier Account</div>
      <div class="sb-col-2 text-align text-final"> 1.60% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="bmo"> $161 </div>
  </div> 


  <div class="sb-grid">  
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/scotiabank.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Scotiabank</span><br> Momentum PLUS</div>
      <div class="sb-col-2 text-align text-final"> 1.50% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="scotis"> $151 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/wealthsimple-logo.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Wealthsimple</span><br> High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 1.50% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="wealth"> $151 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/cibc-new.svg'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>CIBC</span><br> eAdvantage</div>
      <div class="sb-col-2 text-align text-final"> 1.40% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="cibic"> $140 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/hsbc.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>HSBC</span><br> Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 1.40% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="hsbc"> $130 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/rbc.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>RBC</span><br> Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 1.30% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="rbc"> $130 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/canadian-western-bank.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Canadian Western Bank</span><br> Summit Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 1.25% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="candawestern"> $130 </div>
  </div> 

  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/coast-capital.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Coast Capital</span><br> High-Interest Savings</div>
      <div class="sb-col-2 text-align text-final"> 1.25% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="coast"> $125 </div>
  </div> 

  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/koho.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>KOHO</span><br> High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final"> 1.20% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="koho"> $125 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/tangerine.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Tangerine</span><br> Savings Account</div>
      <div class="sb-col-2 text-align text-final">1.00% </div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="tanger"> $125 </div>
  </div> 


  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/bmo.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>BMO</span><br> Smart Saver Account</div>
      <div class="sb-col-2 text-align text-final">0.70%</div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="bmosmart"> $70 </div>
  </div> 



  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/simplii.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>Simplii Financial</span><br> High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final">0.40%</div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="simplefinan"> $70 </div>
  </div> 

  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/td.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>TD</span><br>High Interest Savings Account</div>
      <div class="sb-col-2 text-align text-final">0.05%</div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="tdhigh"> $2.5 </div>
  </div>

  <div class="sb-grid"> 
      <div class="sb-col-5 text-align"> <img src="<?php echo CALCULATOR_ASSETS_URL . 'assets/images/td.webp'; ?>" class="imag"> </div>
      <div class="sb-col-1 text-align"><span>TD</span><br>Every Day Savings Account</div>
      <div class="sb-col-2 text-align text-final">0.01%</div>
      <div class="sb-col-3 text-align text-final"> $0 </div>
      <div class="sb-col-4 text-align text-final" id="tdsaving"> $1 </div>
  </div> 

  <div class="clear"></div>
</div> <!-- END sb_wapper -->



<?php   
  } 
} /*end the class*/ 


?>
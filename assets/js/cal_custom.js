 //====== Start gic calculator ======
 
   $( document ).ready(function() {
            let invest = $('#invest').val();

            let ratereturn = $('#ratereturn').val();
            let term = $('#term').val();
            let duration = $('#duration').val();
            let interest = Math.pow((1+ratereturn/100),term); 
            let monthinterest = Math.pow((1+ratereturn/1200),term); 

            let total = invest * interest;
            let decitotal1 = total.toFixed(); 
            let intotal = thousands_separe(decitotal1);
            
            let mtotal = invest * monthinterest;
            console.log({mtotal})
            $('#total').html('$'+intotal);

            let ytotal = (total-invest).toFixed();                   
            $('#inter').html('$'+thousands_separe(ytotal));

            let mototal = mtotal.toFixed();  
            $('#Mtotal').html('$'+thousands_separe(mototal));

            let mth_inter =(mtotal-invest).toFixed();  
            $('#Minter').html('$'+thousands_separe(mth_inter));
        });

  function thousands_separe(num)
        {
          let number = num.toString().split(".");
          number[0] = number[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          return number.join(".");
        }

         $(function() {  //All number show input field 
        
            $("#invest, #ratereturn, #term").keypress(function (num) {    
              let numberFor = (num.what) ? num.what : event.keyCode    
              if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
                  return false; 
                                           
        });

   
       $("#invest, #ratereturn, #term").on("keyup", function(){ 

            let invest = $('#invest').val();

            let ratereturn = $('#ratereturn').val();
            let term = $('#term').val();
            let duration = $('#duration').val();
            let interest = Math.pow((1+ratereturn/100),term); 
            let monthinterest = Math.pow((1+ratereturn/1200),term); 

            let total = invest * interest;
            let decitotal1 = total.toFixed(); 
            let intotal = thousands_separe(decitotal1);
            
            let mtotal = invest * monthinterest;

            $('#total').html('$'+intotal);

            let ytotal = (total-invest).toFixed();                   
            $('#inter').html('$'+thousands_separe(ytotal));

            let mototal = mtotal.toFixed();  
            $('#Mtotal').html('$'+thousands_separe(mototal));

            let mth_inter =(mtotal-invest).toFixed();  
            $('#Minter').html('$'+thousands_separe(mth_inter));

        });
      }); 


        $(function() { 
        $("#Mitotal").hide();

        $("#duration").on("change", function(){ 
            let value = $(this).val();
        //console.log(value)
                    if(value === "Year") {
             console.log(value)
                $("#Mitotal").hide();
                $("#ytotal").show();
            }else{
                   console.log(value)
            $("#ytotal").hide();
            $("#Mitotal").show();
            }
        });
    }); 
    


//====== Start Savings Accounts in Canada =======   


$( document ).ready(function(){

      $('#blance').keypress(function (num) {        
       let numberFor = (num.what) ? num.what : event.keyCode    
       if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
       return false;                        
   });

      $('#blance').on("keyup", function(){ 

         let textbalance = Number($("#blance").val()); 


         let savenhigh = textbalance * 3.5/100;   
         let saveing1 = savenhigh.toFixed(2);
         $('#saving').html('$'+saveing1);


         let oaken = textbalance * 3.4/100;
         let oaken1 = oaken.toFixed(2);     
         $('#oaken').html('$'+oaken1);

         let peobank = textbalance * 3.4/100;
         let peobank1 = peobank.toFixed(2);        
         $('#peobank').html('$'+peobank1);

         let rena = textbalance * 3.25/100;
         let rena1 = rena.toFixed(2);     
         $('#rena').html('$'+rena1);

         let bridbank = textbalance * 3.0/100;
         let bridbank1 = bridbank.toFixed(2);     
         $('#bridbank').html('$'+bridbank1); 
         
         let hubert = textbalance * 3.0/100;
         let hubert1 = hubert.toFixed(2);     
         $('#hubert').html('$'+hubert1);         

         let eqbank = textbalance * 2.5/100;
         let eqbank1 = eqbank.toFixed(2);     
         $('#eqbank').html('$'+eqbank1);  

         let canadian = textbalance * 2.4/100;
         let canadian1 = canadian.toFixed(2);   
         $('#canadian').html('$'+canadian1); 

         let neo = textbalance * 2.25/100;
         let neo1 = neo.toFixed(2);     
         $('#neo').html('$'+neo1);  

         let wyth = textbalance * 2.25/100;
         let wyth1 = wyth.toFixed(2);      
         $('#wyth').html('$'+wyth1);

         let alter = textbalance * 2.00/100; 
         let alter1 = alter.toFixed(2);     
         $('#alter').html('$'+alter1);  

         let bmo = textbalance * 1.60/100;
         let bmo1 = bmo.toFixed(2);    
         $('#bmo').html('$'+bmo1);

         let scotis = textbalance * 1.50/100;
         let scotis1 = scotis.toFixed(2);    
         $('#scotis').html('$'+scotis1);

         let wealth = textbalance * 1.50/100; 
         let wealth1 = wealth.toFixed(2);   
         $('#wealth').html('$'+wealth1);

         let cibic = textbalance * 1.40/100;
         let cibic1 = cibic.toFixed(2); 
         $('#cibic').html('$'+cibic1);

         let hsbc = textbalance * 1.40/100;
         let hsbc1 = hsbc.toFixed(2);     
         $('#hsbc').html('$'+hsbc1);

         let rbc = textbalance * 1.30/100; 
         let rbc1 = rbc.toFixed();    
         $('#rbc').html('$'+rbc1);
   
         let candawestern = textbalance * 1.25/100; 
         let candawestern1 = candawestern.toFixed();
         $('#candawestern').html('$'+candawestern1);   

         let coast = textbalance * 1.25/100;
         let coast1 = coast.toFixed(2);     
         $('#coast').html('$'+coast1);   

         let koho = textbalance * 1.20/100;
         let koho1 = koho.toFixed(2);      
         $('#koho').html('$'+koho1);   

         let tanger = textbalance * 1.00/100; 
         let tanger1 = tanger.toFixed(2);   
         $('#tanger').html('$'+tanger1);   

         let bmosmart = textbalance * 0.70/100;
         let bmosmart1 = bmosmart.toFixed(2);     
         $('#bmosmart').html('$'+bmosmart1); 

         let simplefinan = textbalance * 0.40/100;
         let simplefinan1 = simplefinan.toFixed(2);       
         $('#simplefinan').html('$'+simplefinan1);   

         let tdhigh = textbalance * 0.05/100;
         let tdhigh1 = tdhigh.toFixed(2);     
         $('#tdhigh').html('$'+tdhigh1);     

         let tdsaving = textbalance * 0.01/100;
         let tdsaving1 = tdsaving.toFixed(2);     
         $('#tdsaving').html('$'+tdsaving1);    

      });
  });


//====== Start TFSA Contribution =======  

 $(document).ready(function(){


      $("#age, #contri, #tfsawith, #amountwith").on("keydown keyup", function(){  

      let age = Number($('#age').val());
      let contri = Number($('#contri').val());
      let tfsawith = Number($('#tfsawith').val());
      let amountwith = Number($('#amountwith').val());
      

      if(age <= "16"){

        $('#curenttotal').html('$'+'0');
        $('#nexttotal').html('$'+'0');
       
    }else if(age == 17){

        let nextvalue = 6000 - contri + tfsawith  + amountwith;     
        $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 18){
        
         let currentvalue = 6000 - contri + tfsawith;  
         let nextvalue = 12000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 19){
        
         let currentvalue = 12000 - contri + tfsawith;  
         let nextvalue = 18000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 20){
        
         let currentvalue = 18000 - contri + tfsawith;  
         let nextvalue = 24000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 21){
        
         let currentvalue = 24000 - contri + tfsawith;  
         let nextvalue = 30000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 22){
        
         let currentvalue = 29500 - contri + tfsawith;  
         let nextvalue = 35500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 23){
        
         let currentvalue = 35000 - contri + tfsawith;  
         let nextvalue = 41000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 24){
        
         let currentvalue = 40500 - contri + tfsawith;  
         let nextvalue = 46500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 25){
        
         let currentvalue = 50500 - contri + tfsawith;  
         let nextvalue = 56500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 26){
        
         let currentvalue = 56000 - contri + tfsawith;  
         let nextvalue = 62000 - contri + tfsawith  + amountwith;  
             $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 27){
        
         let currentvalue = 61500 - contri + tfsawith;  
         let nextvalue = 67500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 28){
        
         let currentvalue = 66500 - contri + tfsawith;  
         let nextvalue = 72500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 29){
        
         let currentvalue = 71500 - contri + tfsawith;  
         let nextvalue = 77500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 30){
        
         let currentvalue = 76500 - contri + tfsawith;  
         let nextvalue = 82500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age >= 30){
        
         let currentvalue = 81500 - contri + tfsawith;  
         let nextvalue = 87500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));
      }

   }); 


      /*END THE first calcultion*/

    $("#age, #contri, #tfsawith, #amountwith").keypress(function (num) {        
       let numberFor = (num.what) ? num.what : event.keyCode    
       if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
       return false;                        
   });   

  $("#age, #contri, #tfsawith, #amountwith").on("keydown keyup", function(){  

      let age = Number($('#age').val());
      let contri = Number($('#contri').val());
      let tfsawith = Number($('#tfsawith').val());
      let amountwith = Number($('#amountwith').val());
      

      if(age <= "16"){

        $('#curenttotal').html('$'+'0');
        $('#nexttotal').html('$'+'0');
       
    }else if(age == 17){

        let nextvalue = 6000 - contri + tfsawith  + amountwith;     
        $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 18){
        
         let currentvalue = 6000 - contri + tfsawith;  
         let nextvalue = 12000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 19){
        
         let currentvalue = 12000 - contri + tfsawith;  
         let nextvalue = 18000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 20){
        
         let currentvalue = 18000 - contri + tfsawith;  
         let nextvalue = 24000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 21){
        
         let currentvalue = 24000 - contri + tfsawith;  
         let nextvalue = 30000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 22){
        
         let currentvalue = 29500 - contri + tfsawith;  
         let nextvalue = 35500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 23){
        
         let currentvalue = 35000 - contri + tfsawith;  
         let nextvalue = 41000 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 24){
        
         let currentvalue = 40500 - contri + tfsawith;  
         let nextvalue = 46500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 25){
        
         let currentvalue = 50500 - contri + tfsawith;  
         let nextvalue = 56500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 26){
        
         let currentvalue = 56000 - contri + tfsawith;  
         let nextvalue = 62000 - contri + tfsawith  + amountwith;  
             $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 27){
        
         let currentvalue = 61500 - contri + tfsawith;  
         let nextvalue = 67500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 28){
        
         let currentvalue = 66500 - contri + tfsawith;  
         let nextvalue = 72500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 29){
        
         let currentvalue = 71500 - contri + tfsawith;  
         let nextvalue = 77500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age == 30){
        
         let currentvalue = 76500 - contri + tfsawith;  
         let nextvalue = 82500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));

      }else if(age >= 30){
        
         let currentvalue = 81500 - contri + tfsawith;  
         let nextvalue = 87500 - contri + tfsawith  + amountwith;  
         $("#curenttotal").html('$'+ thousands_separe(currentvalue)); 
         $("#nexttotal").html('$'+ thousands_separe(nextvalue));
      }

   }); 
 });


//====== END TFSA Contribution =======  



//====== Start ROI Calculator =======  

 $(document).ready(function(){  

   $("#ivest, #amountreturn, #lengthIn, #typedura").on("keydown keyup", function(){ 

         let ivest        = $('#ivest').val();
         let amountreturn = $('#amountreturn').val();
         let lengthIn     = $('#lengthIn').val();
         let typedura     = $('#typedura').val();

         let roiamount =  (amountreturn - ivest) / ivest * 100; 
         console.log (roiamount);
         $("#roi_result").html(roiamount.toFixed() + '%');
            
         let gaininvest = amountreturn - ivest;
         $(".calculat").html('$' + thousands_separe(gaininvest));

         let yanalyze = Math.pow((amountreturn/ivest),(1/lengthIn))-1;
         let yanalyze1 = yanalyze * 100;
         
         $(".ycalculat").html(yanalyze1.toFixed(2)+ '%');   

         let manalyze = Math.pow((amountreturn/ivest),(1/lengthIn*12))-1;
         let manalyze1 = manalyze * 100;

          $(".mcalculat").html(manalyze1.toFixed(2)+ '%');  

         });

        });

 $(document).ready(function(){  


      $("#ivest, #amountreturn, #lengthIn, #typedura").keypress(function (num) {    
        let numberFor = (num.what) ? num.what : event.keyCode    
        if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
         return false; 
                               
      });

   $("#ivest, #amountreturn, #lengthIn, #typedura").on("keydown keyup", function(){ 

         let ivest        = $('#ivest').val();
         let amountreturn = $('#amountreturn').val();
         let lengthIn     = $('#lengthIn').val();
         let typedura     = $('#typedura').val();

         let roiamount =  (amountreturn - ivest) / ivest * 100; 
         console.log (roiamount);
         $("#roi_result").html(roiamount.toFixed() + '%');
            
         let gaininvest = amountreturn - ivest;
         $(".calculat").html('$' + thousands_separe(gaininvest));

         let yanalyze = Math.pow((amountreturn/ivest),(1/lengthIn))-1;
         let yanalyze1 = yanalyze * 100;
         
         $(".ycalculat").html(yanalyze1.toFixed(2)+ '%');   

         let manalyze = Math.pow((amountreturn/ivest),(1/lengthIn*12))-1;
         let manalyze1 = manalyze * 100;

          $(".mcalculat").html(manalyze1.toFixed(2)+ '%');  

         });

        });

   $(function() { 
      $('.mcalculat').hide();
         $("#typedura").on("change", function(){          
         let anavalue = $(this).val();
            
            if(anavalue === "Year") {
             
                $(".mcalculat").hide();
                $(".ycalculat").show();
            }else{
             
                 $(".ycalculat").hide();
                 $(".mcalculat").show();
            }
         });      
   }); 

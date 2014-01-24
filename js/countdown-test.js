function remainingTime(){
   myD   = new Date();                             
   myNextYear = new Date(2011,7,21,18,0,0,0) ;     // PBP start date/time (7=Augsut)
   myMsec = (myNextYear.getTime()-myD.getTime()) - 60 * 60 * 2 * 1000;
   past = 0;

   if (myMsec < 0 ){
       myMsec = (-myMsec);
       past = 1;
   }
   if ( past == 1 ){
       myNextYear = new Date(2011,7,25,12,0,0,0) ;     // 90hr cutoff 
       myMsec = (myNextYear.getTime()-myD.getTime()) - 60 * 60 * 2 * 1000;
       if (myMsec < 0){
           past = 2;
           myMsec = -myMsec; 
       }
   }
   if (past == 0){
      myNextDay  = Math.floor(myMsec/(1000*60*60*24)); //
      myMsec     -= (myNextDay*(1000*60*60*24));       //
   }
   myNextHour = Math.floor(myMsec/(1000*60*60));    //
   myMsec     -= (myNextHour*(1000*60*60));         //
   myNextMin  = Math.floor(myMsec/(1000*60));       //
   myMsec     -= (myNextMin*(1000*60));             //
   myNextSec  = Math.floor(myMsec/1000);            //
   myDisp = "" ;

   if ( past == 0 ){
      myDisp += "T minus " 
      if (myNextDay == 1){
         myDisp+=myNextDay+" day "; 
      }else if (myNextDay == 0){
         ;
      }else{
         myDisp+=myNextDay+" days "; 
      }
   }else if (past >= 1){ 
      myDisp += "" 
   } 

   myDisp+=itoa2(myNextHour)+":"; 
   myDisp+=itoa2(myNextMin)+":"; 
   myDisp+=itoa2(myNextSec); 
   if ( past == 1 ){
      myDisp += " until 90-hour cutoff." 
   }else if ( past == 2 ){
      myDisp += " past 90-hour cutoff." 
   }else{
      myDisp += "" 
   }
   document.CountDownForm.CountDown.value = myDisp;       //
   setTimeout("remainingTime()",1000);                     // 
}

function itoa2 (n){
   if (n < 10 ){
     return "0"+n;
   }else{
     return n;
   }
}

//   myDisp+=itoa2(myNextHour)+":"; 

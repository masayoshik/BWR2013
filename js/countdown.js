function remainingTime(){
   AKDT_OFFSET= -8;    // Alaska Daylight Saving Timezone = UTC - 8

   CurrentTime   = new Date();                             
   CurrentTime_   = CurrentTime.getTime();
   StartTime = new Date("Jul 21, 2013 23:59:00") ;     // BWR start date/time in AKDT
   //alert(StartTime)
   StartTime_ = StartTime.getTime();

   offset=CurrentTime.getTimezoneOffset();
   myTzone= -offset/60;                                // browser's timezone relative to UTC in Hrs
   diff=AKDT_OFFSET - myTzone;                         // Timezone Difference (-1 means browser's timezone is 1 hour advanced from Alaska Timezone)

   StartTime_ -= (diff * 60 * 60 * 1000)               // StartTime in browser's timezone in microsec
   StartTime.setTime(StartTime_)
   StartTime.setTime(StartTime_)

   Cutoff = new Date("Jul 25, 2013 17:59:00") ;     // BWR cutoff in AKDT 
   Cutoff_ = Cutoff.getTime();                      // Cutoff in microsecconds
   Cutoff_ -= (diff * 60 * 60 * 1000)               // Cutoff in browser's timezone in microsec
   Cutoff.setTime(Cutoff_)                          // Cutoff in browser's timezone

   myMsec = (StartTime.getTime()-CurrentTime.getTime());
   past = 0;

   if (myMsec < 0 ){
       myMsec = (-myMsec);
       past = 1;
   }
   if ( past == 1 ){
       myMsec = (Cutoff.getTime()-CurrentTime.getTime());
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
      myDisp += "The ride will start in " 
      if (myNextDay == 1){
         myDisp+=myNextDay+" day and "; 
      }else if (myNextDay == 0){
         ;
      }else{
         myDisp+=myNextDay+" days and "; 
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

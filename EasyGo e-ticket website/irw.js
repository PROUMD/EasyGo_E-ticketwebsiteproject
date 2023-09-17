  /* ---------------------------------FAQS------------------------------*/
  const faqHeaders=document.querySelectorAll(".faqs-container .faq-header");
  faqHeaders.forEach((header, i) =>{
      header.addEventListener("click",()=>{
          header.nextElementSibling.classList.toggle("active");
      });
  });
  


let availablekeywords=["kigali", "muhanga", "huye", "gikongoro",
         "nyanza","kibuye" ,"cyangugu","gitarama","gisenyi","byumba","ruhengeri",
         "gatuna", "nyagatare","rwamagana", "kibungo", "rusumo","kayonza"];
       
        const resultsBox=document.querySelector(".result-box");
        const inputBox=document.getElementById("input-box");
        inputBox.onkeyup= function(){
            let result=[];
            let input=inputBox.value;
            if(input.length){
                result=availablekeywords.filter((keyword)=>{
                    return keyword.toLowerCase().includes(input.toLowerCase());
                });
                console.log(result);
            }
          display(result);
               if(!result.length){
                resultsBox.innerHTML="";
               }
            
        }


        function display(result){
            const content=result.map((list)=>{
                return "<li onclick=selectInput(this)>"+ list + "</li>";
               
            
            });
            resultsBox.innerHTML= "<ul>" + content.join("") + "</ul>";
        }
        function selectInput(list){
        inputBox.value=list.innerHTML;
        resultsBox.innerHTML="";

        }

        // going to
        let availablekeywords2=["kigali", "muhanga", "huye", "gikongoro",
        "nyanza","kibuye" ,"cyangugu","gitarama","gisenyi","byumba","ruhengeri",
        "gatuna", "nyagatare","rwamagana", "kibungo", "rusumo","kayonza", "musanze", "base"];
      
       const resultsBox2=document.querySelector(".result-box2");
       const inputBox2=document.getElementById("input-box2");
       inputBox2.onkeyup= function(){
           let result2=[];
           let input2=inputBox2.value;
           if(input2.length){
               result2=availablekeywords2.filter((keyword2)=>{
                   return keyword2.toLowerCase().includes(input2.toLowerCase());
               });
               console.log(result2);
           }
         display2(result2);
              if(!result2.length){
               resultsBox2.innerHTML="";
              }
           
       }


       function display2(result2){
           const content2=result2.map((list2)=>{
               return "<li onclick=selectInput2(this)>"+ list2 + "</li>";
              
           
           });
           resultsBox2.innerHTML= "<ul>" + content2.join("") + "</ul>";
       }
       function selectInput2(list2){
       inputBox2.value=list2.innerHTML;
       resultsBox2.innerHTML="";

       }
     
























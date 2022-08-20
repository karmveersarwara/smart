
        // let slideIndex = 0;
        // function plusDivs(n) {
        //     slideIndex += n;
        // }
        // showSlides();
        // function showSlides() {
        // let i;
        // let slides = document.getElementsByClassName("mySlides");
        // let dots = document.getElementsByClassName("dot");
        // for (i = 0; i < slides.length; i++) {
        //     slides[i].style.display = "none";  
        // }
        // slideIndex++;
        // if (slideIndex > slides.length) {slideIndex = 1}    
        // for (i = 0; i < dots.length; i++) {
        //     dots[i].className = dots[i].className.replace(" active", "");
        // }
        // slides[slideIndex-1].style.display = "block";  
        // dots[slideIndex-1].className += " active";
        // setTimeout(showSlides, 2000); 
        // }






        let Slidesc = 1;
        function plusDiv(n) {
            let Slides = document.getElementsByClassName("carSlides");
            for (let i = 0; i < Slides.length; i++) {
                Slides[i].className = Slides[i].className.replace(" lefthide", ""); 
                Slides[i].className = Slides[i].className.replace(" righthide", ""); 
            }
            Slidesc += n;

            // console.log(Slidesc);
            if (Slidesc > Slides.length-1) {Slidesc = 0;}
            if (Slidesc < 0) {Slidesc = Slides.length-1  } 
            let back =Slidesc-1;
            let next =Slidesc+1;
            if (Slidesc == Slides.length-1) {next=0;}
            if (Slidesc == 0) {back = Slides.length-1;}
            carSlides(Slidesc,next,back); 
            if(n>0){
                Slides[next].className += "lefthide ";
                Slides[Slidesc].className += "lefthide ";
                Slides[back].className += "lefthide ";
            }
            else{
                Slides[next].className += "righthide ";
                Slides[Slidesc].className += "righthide ";
                Slides[back].className += "righthide ";
            }
            
        }
        carSlides(1,2,0);
        function carSlides(Slidesc,next,back) {
        let carSlides = document.getElementsByClassName("carSlides");
        for (let i = 0; i < carSlides.length; i++) {
            carSlides[i].style.display = "none"; 
            carSlides[i].className = carSlides[i].className.replace(" lefthide", ""); 
            carSlides[i].className = carSlides[i].className.replace(" righthide", ""); 
        }
        // let back =Slidesc-1;
        // let next =Slidesc+1;
        // if (Slidesc == carSlides.length-1) {next=0;}
        // if (Slidesc == 0) {back = carSlides.length-1;} 
        // console.log(Slidesc);

        // if (Slidesc <= 1 ){document.getElementById("backbtn").disabled = true;}
        // else{document.getElementById("backbtn").disabled = false;}

        // if (Slidesc >=carSlides.length-2) {document.getElementById("nextbtn").disabled = true;}
        // else{document.getElementById("nextbtn").disabled = false;}

        // carSlides[back].style.display = "block";
        carSlides[Slidesc].style.display = "block";
        // carSlides[next].style.display = "block";
        }
        
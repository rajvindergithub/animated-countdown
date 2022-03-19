<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>1, 2, 3 Animated Count Down | MyFreeOnlineTools</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML, CSS & JavaScript code for Build & Learn 1, 2, 3 Animated Count Down. Best Learning platform for Front End Developers and Web Designers. MyFreeOnlineTools." />

	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
</head>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family='Poppins'&display=swap');
        *{ box-sizing: border-box; }
        body{ font-family: Poppins; margin: 0; height: 100vh; overflow: hidden; }
        .counter{ position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; }
        .counter.hide{  transform: translate(-50%, -50%) scale(0); animation: hide .2s ease-out; }
        .final{ position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0); text-align: center; }
        .final.show{
            transform: translate(-50%, -50%) scale(1); animation: show 0.2s ease-out;  
        }
        @keyframes hide{
            0%{ 
                transform: translate(-50%, -50%) scale(1); 
            }
            100%{
                transform: translate(-50%, -50%) scale(0); 
            }
        }
        
        @keyframes show{
              0%{ 
                transform: translate(-50%, -50%) scale(0); 
            }
            
             30%{
                transform: translate(-50%, -50%) scale(1.4); 
            }
            
            100%{
                transform: translate(-50%, -50%) scale(1); 
            }
            
        }
        
        .nums{
            color: #3498db; font-size: 50px; position: relative; overflow: hidden; width: 250px; height: 50px; 
        }
        
        .nums span{ position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(120deg); transform-origin: bottom center; }
        
        .nums span.in{ transform: translate(-50%, -50%) rotate(0deg); animation: goIn 0.5s ease-in-out; }
        
        .nums span.out{ animation: goOut 0.5s ease-in-out;  }
        
        @keyframes goIn{
            0%{
                transform: translate(-50%, -50%) rotate(120deg); 
            } 
            30%{
                 transform: translate(-50%, -50%) rotate(-20deg); 
            }
            60%{
                 transform: translate(-50%, -50%) rotate(10deg); 
            }
            100%{
                 transform: translate(-50%, -50%) rotate(0deg); 
            }
        }
        
    @keyframes goOut{
            0%{
                transform: translate(-50%, -50%) rotate(0deg); 
            } 
            60%{
                 transform: translate(-50%, -50%) rotate(20deg); 
            }
            100%{
                 transform: translate(-50%, -50%) rotate(-120deg); 
            }
        }
        
        h4{ font-size: 20px; margin: 5px; text-transform: uppercase; }
        
    </style>
    
<body>
    
    
<!-- nav bar developer code -->
    
    <style type="text/css">
        #navigationBar{ display: flex; justify-content: space-between; background-color: #FFF; padding: 20px 0px;  position: fixed; top: 0px; right: 0px; left: 0px; box-shadow: 0px 0px 10px rgba(0,0,0,0.05); max-width: 100%; margin: auto; padding: 0px 10%;  }
        .navBar ul{ list-style: none; display: flex; justify-content: center; align-content: center; }
        .navBar ul li{ padding: 10px 20px; }
        .navBar ul li a{ font-family: Poppins; font-size: 18px; color: #000; text-decoration: none; border-bottom: 2px solid #FFF; padding: 10px 0px; transition: all 0.25s;     }
        .navBar ul li a:hover{ text-decoration: none; color: #0178dc; border-bottom: 2px solid #0178dc; padding: 10px 0px;    }
        .navLogo img{ width: 300px; }
        .navLogo{ position: relative; top: 16px; }
        .footerDownloadBar-button{ position: fixed; bottom: 30px; right: 30px; }
        .footerDownloadBar-button a{ background-color: #0178dc; color: #FFF; border: 1px solid #0178dc; border-radius: 5px; padding: 15px 30px; text-decoration: none; transition: all 0.25s;   }
        
        .footerDownloadBar-button a:hover{ text-decoration: none; background-color: #FFF; color: #0178dc;  }
        
    </style>
    
    <section id="navigationBar">
        <div class="navLogo"><a href="http://myfreeonlinetools.com/"><img src="https://myfreeonlinetools.com/images/logo.png"></a></div>
        <div class="navBar">
            <ul>
                <li><a href="#">Online Free Tools</a></li>
                <li><a href="http://myfreeonlinetools.com/developer-code/">Developer Code</a></li>
                <li><a href="http://myfreeonlinetools.com/blog/">Blog</a></li>
                <li><a href="http://myfreeonlinetools.com/resource/">Resource</a></li>
                <li><a href="http://myfreeonlinetools.com/contact-us/">Contact Us</a></li>
            </ul>
        </div>
    </section>
    
    <section id="footerDownloadBar">
        <div class="footerDownloadBar-button"><a href="index.php" download="index.php">Download Code</a></div>
    </section>
    
    <!-- nav bar developer code -->
	
    <div class="counter">
        <div class="nums">
            <span class="in">3</span>
            <span>2</span>
            <span>1</span>
            <span>0</span>
        </div>
        <h4>Get Ready</h4>
    </div>
    <div class="final">
        <h1>Go</h1>
        <button id="replay">Replay</button>
    </div>
    
</body>
    
    <script type="text/javascript">
    
        const nums = document.querySelectorAll('.nums span');
        const counter = document.querySelector('.counter');
        const finalMessage = document.querySelector('.final');
        const replay = document.querySelector('#replay');
        
        runAnimation(); 
        
        function resetDOM(){
            counter.classList.remove('hide');
            finalMessage.classList.remove('show');
            
            nums.forEach((num) => {
                num.classList.value = ''; 
            });
            
            nums[0].classList.add('in');
        }
        
        function runAnimation(){
            nums.forEach((num, index) => {
                        const nextToLast = nums.length -1 ;    
                         
                         num.addEventListener('animationend', (e) => {
                                if(e.animationName === 'goIn' && index !== nextToLast){
                                    num.classList.remove('in');
                                    num.classList.add('out');
                                }else if(e.animationName === 'goOut' && num.nextElementSibling){
                                         num.nextElementSibling.classList.add('in');
                                    }else{
                                        counter.classList.add('hide');
                                        finalMessage.classList.add('show');
                                    }
                            });
                         
                }); 
        }
        
        replay.addEventListener('click', () => {
            resetDOM();
            runAnimation(); 
        });
        
    </script>

</html>
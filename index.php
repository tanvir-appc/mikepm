<?php include_once 'includes/header_top.php';?>


<title>Privé Fine Ocean Charters | Life Elevated</title>

<?php $title = "home"; ?>

<style>
.homepage-slider-caption>p{color:#fff;line-height:16px;text-shadow:1px 1px 2px #000}.homepage-slider-caption .heading{display:block;font-weight:700;margin-bottom:.65em}.homepage-slider-caption{top:2em;right:2em;width:60%;bottom:unset}.homepage-slider-caption .owl-item::after{content:' ';background:rgba(0,0,0,.1);display:block;position:absolute;width:100%;height:100%;left:0;top:0}.homepage-slider img{margin:0}.homepage-slider img{height:58vw;object-fit:cover;object-position:top center;overflow:hidden!important}.dancing-script{font-family:"Dancing Script",handwriting}.home-large-font{font-size:4.5em;line-height:1.2em;text-align:center;margin:1em 0 .5em;font-style:italic}.home-unique-text{font-size:3em;text-align:center;margin:.5em 0 2em;font-style:italic}@media (min-width:767px){.homepage-slider-caption .heading{font-size:1.2rem}.homepage-slider-caption>p{font-size:1rem;line-height:1.4}}.dialog{display:none;background:#48c5d6;margin:0;position:absolute;z-index:999999;max-width:768px!important;border:20px solid transparent;border-top:none;padding-top:20px;left:50%!important;transform:translateX(-50%)}@media (max-width:549px){.dialog{top:5rem!important}}@media (max-width:350px){.titlebar{font-size:1.5rem!important}.homepage-slider img{height:36vh}}@media (max-width:768px){.dialog{width:94%!important}}.title-close{display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem}.dialog .titlebar{color:#fff;text-align:left;text-shadow:0 0 0 rgb(2 2 2 / 23%);font-family:inherit;font-weight:400;font-size:2rem;line-height:1.4em;width:auto!important}.dialog .content{overflow:auto;font-size:1em;width:100%!important;height:auto!important;margin:0!important}.covid-popup-content{background:#fff;padding:1.5em;box-shadow:1px 1px 3px 0 rgb(2 2 2 / 23%) inset}.covid-popup-content *{color:#333}button.close-popup{font-size:1em;color:#fff;padding:8px;font-weight:400;display:block;border:1px none #fff;box-shadow:1px 1px 3px 0 rgb(2 2 2 / 23%);text-shadow:0 0 0 rgb(0 0 0 / 23%);background-color:#2c2e3d;height:3.7em}.covid-popup-content>h2{font-size:1.625rem;font-weight:500;line-height:1.4}.covid-popup-content>p{font-size:1rem;font-weight:400;line-height:1.4;color:#6d6d6d}
</style>
<script>
    function DialogBox(t,e){var n,o,i,l,r,s,d,a,c,g,p,u,h,m,w,f,y,x,v,b,I=100,E=1,H=!!window.addEventListener,W=!1,C=!1,X=!1,Y=!1,S="",L=!1,M=function(t,e,n){null!=t&&null!=typeof t&&(H?t.addEventListener(e,n,!1):t.attachEvent?t.attachEvent("on"+e,n):t["on"+e]=n)},_=function(t){if(t.stopPropagation&&t.stopPropagation(),!t.preventDefault)return t.returnValue=!1,!1;t.preventDefault()},z=function(t){return(t=t||window.event).target===o?m[m.length-1].focus():m[0].focus(),_(t)},B=function(t){return(t=t||window.event).target.classList.add("focus"),_(t)},D=function(t){return(t=t||window.event).target.classList.remove("focus"),_(t)},T=function(t){return t=t||window.event,v(t.target),_(t)},q=function(t){if(t=t||window.event,L=!0,t.target===n||t.target===o||t.target===m[0]){var e=_getOffset(n);r=Math.max(document.documentElement.clientWidth,document.body.scrollWidth,document.documentElement.scrollWidth,document.body.offsetWidth,document.documentElement.offsetWidth),s=Math.max(document.documentElement.clientHeight,document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight),e.right>r&&(r=e.right),e.bottom>s&&(s=e.bottom),d=t.pageX,a=t.pageY,c=n.clientWidth,g=n.clientHeight,p=e.left,u=e.top,Y?(h.classList.remove("focus"),h.classList.add("active"),Y=!1,X=!0):t.target===o&&""==S?(x("move"),W=!0):""!=S&&(C=!0);n.getBoundingClientRect();return _(t)}},k=function(t){if((t=t||window.event).target===n||t.target===o||t.target===m[0]||W||""!=S){if(W){var e=d-t.pageX,i=a-t.pageY,l=p-e,w=u-i,f=Math.max(document.body.scrollLeft,document.documentElement.scrollLeft),y=Math.max(document.body.scrollTop,document.documentElement.scrollTop);e<0&&l+c>r&&(l=r-c),e>0&&l<0&&(l=0),i<0&&w+g>s&&(w=s-g),i>0&&w<0&&(w=0),n.style.left=l+"px",n.style.top=w+"px",t.clientY>window.innerHeight-32?y+=32:t.clientY<32&&(y-=32),t.clientX>window.innerWidth-32?f+=32:t.clientX<32&&(f-=32),w+g==s?y=s-window.innerHeight+20:0==w&&(y=0),l+c==r?f=r-window.innerWidth+20:0==l&&(f=0),g>window.innerHeight&&(y=t.clientY<window.innerHeight/2?0:s-window.innerHeight+20),c>window.innerWidth&&(f=t.clientX<window.innerWidth/2?0:r-window.innerWidth+20),window.scrollTo(f,y)}else if(C){var v,H,L,M;"w"==S?(v=d-t.pageX,p-v<0&&(v=p),(L=c+v)<I&&(v=(L=I)-c),n.style.width=L+"px",n.style.left=p-v+"px"):"e"==S?(v=t.pageX-d,p+c+v>r&&(v=r-p-c),(L=c+v)<I&&(L=I),n.style.width=L+"px"):"n"==S?(H=a-t.pageY,u-H<0&&(H=u),(M=g+H)<E&&(H=(M=E)-g),n.style.height=M+"px",n.style.top=u-H+"px"):"s"==S?(H=t.pageY-a,u+g+H>s&&(H=s-u-g),(M=g+H)<E&&(M=E),n.style.height=M+"px"):"nw"==S?(v=d-t.pageX,H=a-t.pageY,p-v<0&&(v=p),u-H<0&&(H=u),(L=c+v)<I&&(v=(L=I)-c),(M=g+H)<E&&(H=(M=E)-g),n.style.width=L+"px",n.style.height=M+"px",n.style.left=p-v+"px",n.style.top=u-H+"px"):"sw"==S?(v=d-t.pageX,H=t.pageY-a,p-v<0&&(v=p),u+g+H>s&&(H=s-u-g),(L=c+v)<I&&(v=(L=I)-c),(M=g+H)<E&&(M=E),n.style.width=L+"px",n.style.height=M+"px",n.style.left=p-v+"px"):"ne"==S?(v=t.pageX-d,H=a-t.pageY,p+c+v>r&&(v=r-p-c),u-H<0&&(H=u),(L=c+v)<I&&(L=I),(M=g+H)<E&&(H=(M=E)-g),n.style.width=L+"px",n.style.height=M+"px",n.style.top=u-H+"px"):"se"==S&&(v=t.pageX-d,H=t.pageY-a,p+c+v>r&&(v=r-p-c),u+g+H>s&&(H=s-u-g),(L=c+v)<I&&(L=I),(M=g+H)<E&&(M=E),n.style.width=L+"px",n.style.height=M+"px"),b()}else if(!X){var z,B="";if(t.target===n||t.target===o||t.target===m[0]){var D=_getOffset(n);t.pageY<D.top+5?B="n":t.pageY>D.bottom-5&&(B="s"),t.pageX<D.left+5?B+="w":t.pageX>D.right-5&&(B+="e")}""!=B&&S!=B?("n"==B||"s"==B?z="ns-resize":"e"==B||"w"==B?z="ew-resize":"ne"==B||"sw"==B?z="nesw-resize":"nw"!=B&&"se"!=B||(z="nwse-resize"),x(z),S=B):""==B&&""!=S&&(x(""),S=""),t.target!=m[0]&&"button"==t.target.tagName.toLowerCase()||t.target===m[0]&&""==B?(!Y||Y&&t.target!=h)&&(h=t.target,Y=!0):Y&&(Y=!1)}return _(t)}};return _onMouseUp=function(t){if(t=t||window.event,L?(n.style.zIndex=y+1,L=!1):n.style.zIndex=y,t.target===n||t.target===o||t.target===m[0]||W||""!=S)return W?(x(""),W=!1):C?(x(""),C=!1,S=""):X&&(h.classList.remove("active"),X=!1,v(h)),_(t)},v=function(t){n.style.display="none",f&&f(t.name)},_getOffset=function(t){var e=t.getBoundingClientRect(),n=window.scrollX||document.documentElement.scrollLeft,o=window.scrollY||document.documentElement.scrollTop;return{left:e.left+n,top:e.top+o,right:e.right+n,bottom:e.bottom+o}},x=function(t){n.style.cursor=t,o.style.cursor=t,m[0].style.cursor=t},b=function(){var t,e,r=getComputedStyle(i);m.length>1&&(t=getComputedStyle(l),e=getComputedStyle(l,":before"));var s=n.clientWidth-parseInt(r.left)-16,d=n.clientHeight-(parseInt(r.top)+16+(m.length>1?+parseInt(e.borderBottom)-parseInt(e.top)+parseInt(t.height)+parseInt(t.bottom):0));i.style.width=s+"px",i.style.height=d+"px",l&&(l.style.width=s+"px"),o.style.width=s-16+"px"},_showDialog=function(){n.style.display="block",m[1]?m[1].focus():m[0].focus()},_init=function(t,e){n=document.getElementById(t),f=e,n.style.visibility="hidden",n.style.display="block",o=n.querySelector(".titlebar"),i=n.querySelector(".content"),l=n.querySelector(".buttonpane"),m=n.querySelectorAll("button");var r,s,d,a=getComputedStyle(n),c=(getComputedStyle(o),getComputedStyle(i));m.length>1&&(r=getComputedStyle(l),s=getComputedStyle(l,":before"),d=getComputedStyle(m[1])),I=Math.max(n.clientWidth,I,+(m.length>1?+(m.length-1)*parseInt(d.width)+16*(m.length-1-1)+16*(m.length-1-1)/2:0)),n.style.width=I+"px",E=Math.max(n.clientHeight,E,+parseInt(c.top)+2*parseInt(a.border)+16+12+12+12+(m.length>1?+parseInt(s.borderBottom)-parseInt(s.top)+parseInt(r.height)+parseInt(r.bottom):0)),n.style.height=E+"px",b(),n.style.left=(window.innerWidth-n.clientWidth)/2+"px",n.style.top=(window.innerHeight-n.clientHeight)/2+"px",n.style.display="none",n.style.visibility="visible",o.tabIndex="0",(w=document.createElement("div")).tabIndex="0",n.appendChild(w),M(n,"mousedown",q),M(document,"mousemove",k),M(document,"mouseup",_onMouseUp),""==m[0].textContent&&(m[0].innerHTML="&#x2716;");for(var g=0;g<m.length;g++)M(m[g],"click",T),M(m[g],"focus",B),M(m[g],"blur",D);M(o,"focus",z),M(w,"focus",z),y=n.style.zIndex},_init(t,e),this.showDialog=_showDialog,this}
</script>
<!-- initiate popup -->
<script>
    jQuery(document).ready(function(){
        dialog = new DialogBox('covid-popup');
        dialog.showDialog();
    });
</script>

<?php include_once 'includes/header_bottom.php';?>
<div id="covid-popup" class="dialog">
    <div class="title-close">
        <div class="titlebar">COVID-SECURE</div>
        <button name="close" class="close-popup">close</button>     
    </div>
    <div class="content">
        <div class="covid-popup-content">
            <h2 style="padding-top: 10px;">PRIVÉ S.A.F.E.</h2>
            <p>Our commitment to our guests’ safety is our first priority.</p>
            <p>Privé introduces fogging applications in every space, with the world’s leading decontamination products, Decon 7 products distributed by D7 Caribbean.</p>
            <p><strong style="font-size: 20px;">S</strong>ocial Distancing – Safe Practice Protocols<br>
                <strong style="font-size: 20px;">A</strong>pplication – Decontaminant and Disinfectant<br>
                <strong style="font-size: 20px;">F</strong>ood and Beverage – Zero Contact Preparation<br>
            <strong style="font-size: 20px;">E</strong>quipment – Disinfectanted After Every Use</p>
        </div>
    </div>
    <!-- <div class="buttonpane">
        <div class="buttonset">
            <button name="ok">OK</button>
            <button name="cancel">Cancel</button>
        </div>
    </div> -->
</div>

<div class="all-elements">

<?php include_once 'includes/nav.php';?>

          
        <div class="slider-container">
            <div class="homepage-slider" data-snap-ignore="true">                
                <div>
                    <div class="homepage-slider-caption">
                        <p><span class="heading">PRIVÉ Fine Ocean Charters</span>Luxury Private Yacht Charters offer All Inclusive packages where guests can experience the beauty of the archipelago aboard the finest fleet of vessels available for charter in the country.</p>
                    </div>
                    <img src="images/general-nature/PRIVE-HERO0.webp" class="responsive-image" alt="img">
                </div>
                <div>
                    <div class="homepage-slider-caption">
                        <p><span class="heading">PRIVÉ Fine Ocean Charters </span>Luxury Private Yacht Charters offer All Inclusive packages where guests can experience the beauty of the archipelago aboard the finest fleet of vessels available for charter in the country.</p>
                    </div>
                    <img src="images/general-nature/PRIVE-HERO1.webp" class="responsive-image" alt="img">
                </div>
                <div>
                    <div class="homepage-slider-caption">
                        <p><span class="heading">PRIVÉ Fine Ocean Charters </span>Luxury Private Yacht Charters offer All Inclusive packages where guests can experience the beauty of the archipelago aboard the finest fleet of vessels available for charter in the country.</p>
                    </div>
                    <img src="images/general-nature/PRIVE-HERO2.webp" class="responsive-image" alt="img">
                </div>
                <div>
                    <div class="homepage-slider-caption">
                        <p><span class="heading">PRIVÉ Fine Ocean Charters </span>Luxury Private Yacht Charters offer All Inclusive packages where guests can experience the beauty of the archipelago aboard the finest fleet of vessels available for charter in the country.</p>
                    </div>
                    <img src="images/general-nature/PRIVE-HERO3.webp" class="responsive-image" alt="img">
                </div>
                <div>
                    <div class="homepage-slider-caption">
                        <p><span class="heading">PRIVÉ Fine Ocean Charters </span>Luxury Private Yacht Charters offer All Inclusive packages where guests can experience the beauty of the archipelago aboard the finest fleet of vessels available for charter in the country.</p>
                    </div>
                    <img src="images/general-nature/PRIVE-HERO4.webp" class="responsive-image" alt="img">
                </div>
                <div>
                    <div class="homepage-slider-caption">
                        <p><span class="heading">PRIVÉ Fine Ocean Charters </span>Luxury Private Yacht Charters offer All Inclusive packages where guests can experience the beauty of the archipelago aboard the finest fleet of vessels available for charter in the country.</p>
                    </div>
                    <img src="images/general-nature/PRIVE-HERO6.webp" class="responsive-image" alt="img">
                </div>
            </div>

            <div class="homepage-slider-controls">
                <a href="#" class="next-home"></a>
                <a href="#" class="prev-home"></a>
            </div>
        </div>
        
            <h2 class="dancing-script black-ribbon">Enjoy the experience for a day or a week</h2>    
        <div class="container white no-bottom">
            <div class="content">
                <h2 class="dancing-script home-large-font">Life Elevated</h2>
                <p>
                    PRIVÉ Fine Ocean Charters is dedicated to bringing the very finest vessels, product and services to its discerning guests. We offer our guests a variety of exclusive services and by this will best serve their individual requirements, desires, expectations and any limitations.
                </p>
                <h3 class="dancing-script home-unique-text">Uniquely Privé</h3>
            </div>
            
        </div>
        <p class="black-ribbon br-internal">SEE A GLIMPSE OF THE EXCLUSIVE SERVICES AND AMENITIES OFFERED</p>
             
        <div class="content alt">
            
            
            <div class="container no-bottom">
                <div class="one-half-responsive">
                    <p class="thumb-left no-bottom">
                        <a href="snorkel.php">
                           <img src="images/general-nature/snorkel-bubble.webp" alt="img"> 
                        </a>
                        
                        <a href="snorkel.php">
                            <strong>SNORKELING</strong>
                        </a>
                        <em><br>The world’s third largest Barrier Reef awaits you!</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration hide-if-responsive"></div>
                <div class="one-half-responsive last-column">        
                    <p class="thumb-right no-bottom">
                        <a href="scuba.php">
                            <img src="images/general-nature/diving-bubble.webp" alt="img">
                        </a>
                        <a href="scuba.php">
                            
                            <strong>DIVING</strong>
                        </a>
                        <em><br>Our highly qualified and experienced instructors look forward to diving with you in the very best locations.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration"></div>
                <div class="one-half-responsive">
                    <p class="thumb-left no-bottom">
                        <a href="fishing.php">
                            <img src="images/general-nature/fishing-bubble.webp" alt="img">
                            <strong>FISHING</strong>
                        </a>
                        
                        <em><br>Deep waters are just moments away. Marlin, Tuna, Mahi Mahi and Wahoo are all available in our fishing grounds.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration hide-if-responsive"></div>
                <div class="one-half-responsive last-column">
                    <p class="thumb-right no-bottom">
                        <a href="beach-escape.php">
                            <img src="images/general-nature/beach-escape-bubble.webp" alt="img">
                        </a>
                        <a href="beach-escape.php">
                            
                        <strong>BEACH ESCAPE</strong>
                        </a>
                        <em><br>Cruise the shoreline and visit secluded private islands, see the native iguanas or explore distant destinations.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>

            </div>
             <a href="book-now.php" class="button-big button-blue section-button">BOOK NOW</a>
            <!-- gourment-Food -->
            <div class="container no-bottom">
                <div class="one-half-responsive">
                    <p class="thumb-left no-bottom">
                        <a href="gourmet-fine-food.php">
                            <img src="images/general-nature/fine-food-bubble.webp" alt="img">
                            <strong>GOURMET FOOD</strong>
                        </a>
                        <em><br>Our experienced private chefs will prepare sumptuous gourmet cuisine for your enjoyment.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration hide-if-responsive"></div>
                <div class="one-half-responsive last-column"> 
                    <p class="thumb-right no-bottom">
                        <a href="beverage.php">
                            <img src="images/general-nature/beverage-bubble.webp" alt="img">
                        </a>
                        <a href="beverage.php">
                            
                        <strong>BEVERAGES</strong>
                        </a>
                        <em><br>Selections of fine beverages are inclusive. Still and sparkling water, juices, sodas, beers, wines and rum.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration"></div>
                <div class="one-half-responsive">
                    <p class="thumb-left no-bottom">
                        <a href="jet-ski.php">
                             <img src="images/general-nature/jet-ski-bubble.webp" alt="img">
                            <strong>JET SKI</strong>
                        </a>
                        <em><br>Our Azimut luxury motor yacht houses two (2) Yamaha GP1300R jet skis inside her stern garages.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration hide-if-responsive"></div>
                <div class="one-half-responsive last-column">  
                    <p class="thumb-right no-bottom">
                        <a href="seabob.php">
                            <img src="images/general-nature/seabob-bubble.webp" alt="img">
                        </a>
                        <a href="seabob.php">
                            
                            <strong>SEABOB</strong>
                        </a>
                        <em><br>Try a spin on a fun and exhilarating Seabob personal propulsion aqua scooter.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <a href="book-now.php" class="button-big button-blue section-button">BOOK NOW</a>
                <div class="one-half-responsive">
                    <p class="thumb-left no-bottom">
                        <a href="azimut.php">
                            <img src="images/general-nature/azimut.webp" alt="img">
                        <strong>AZIMUT</strong>
                        </a>
                        <em><br>This beautiful yacht combines space and functionality with the fine finishes one would expect of an Italian designed motor yacht.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration hide-if-responsive"></div>
                <div class="one-half-responsive last-column">
                    <p class="thumb-right no-bottom">
                        <a href="hydrasports.php">
                            <img src="images/general-nature/hydrasports.webp" alt="img">
                        </a>
                        <a href="hydrasports.php">
                            
                            <strong>HYDRASPORTS</strong>
                        </a>
                        <em><br>Unique naval architecture design gives a strength and quality to the vessel that other companies simply cannot compete with.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>
                <div class="decoration"></div>
                <div class="one-half-responsive">

                    <p class="thumb-left no-bottom">
                        <a href="intrepid.php">
                            <img src="images/general-nature/intrepid.webp" alt="img">
                        <strong>INTREPID</strong>
                        </a>
                        <em><br>Intrepid is one of the World's Leaders in manufacturing high quality center consoles.</em>
                    </p>
                    <div class="thumb-clear"></div>
                </div>

            </div>
             <a href="book-now.php" class="button-big button-blue section-button">BOOK NOW</a>
            </div>
            <p class="black-ribbon" style="padding: .2em; font-size: 2.3em; line-height: normal;">BESPOKE SERVICE</p>
                <img class="responsive-image" src="images/general-nature/Prive-yacht-bespoke-1.3-min.webp" alt="img" style="margin-bottom: 0;">
            <div class="container no-bottom" style="background: white;">
                <div class="content no-bottom">
                    <p style="margin-top: 20px;">Experience unsurpassed luxury and services aboard the Privé Fleet. Enjoy bespoke inclusions. Venture to remote destinations on daily or extended term charters.</p>
                </div> 
            
<?php include_once 'includes/home_footer.php';?>
$(document).ready(function(){
let $btns=$('.project-area .button-group button');
$btns.click(function(e){
    $('.project-area .button-group button').removeClass('active');
    e.target.classList.add('active')
    let selector=$(e.target).attr('data-filter');
    $('.project-area .grid').isotope({
        filter:selector
    });
return false;
})
$('.project-area .button-group #btn1').trigger('click');


$('.project-area .grid .test-popup-link').magnificPopup({
    type: 'image',
    gallery:{enabled:true}
  });
  
  $(".owl-carousel").owlCarousel({
      loop:true,
      autoplay:true,
      dots:true,
      responsive:{
          0:{
              items:1
          },
          544:{
             items:2
          }
      }
  });

  //sticky navogation bar:
  let nav_offset_top=$('.header_area').height()+50;
  function navbarFixed(){
if($('.header_area').length){
$(window).scroll(function(){
    let scroll=$(window).scrollTop();
    if(scroll>=nav_offset_top){
$('.header_area .main-menu').addClass('fixed_Nav');
    }
    else {
        $('.header_area .main-menu').removeClass('fixed_Nav');
    }
})
}
  }
  navbarFixed();
  // language switching
  let fr=document.getElementById("fr");
  let en=document.getElementById("en");
  let wel=document.getElementById("wel");
  let home=document.getElementById("home");
  let about=document.getElementById("about");
  let projects=document.getElementById("projects");
  let name=document.getElementById("name");
  let prestation=document.getElementById("prestation");
  let contacter=document.getElementById("contacter");
  let contacterr=document.getElementById("contacterr");
  let contacterrr=document.getElementById("contacterrr");
  let abb=document.getElementById("abb");
  let abbb=document.getElementById("abbb");
  let abbbb=document.getElementById("abbbb");
  let ab1=document.getElementById("ab1");
  let ab2=document.getElementById("ab2");
  let master=document.getElementById("master");
  let call=document.getElementById("call");
  let ours=document.getElementById("ours");
  let oursi=document.getElementById("oursi");
  let s1=document.getElementById("s1");
  let s2=document.getElementById("s2");
  let s3=document.getElementById("s3");
  let s4=document.getElementById("s4");
  let lp=document.getElementById("lp");
  let cs=document.getElementById("cs");
  let cs1=document.getElementById("cs1");
  let cu=document.getElementById("cu");
  let cud=document.getElementById("cud");
  let em=document.getElementById("em");
  let fff=document.getElementById("fff");
  let in1=document.getElementById("in1").placeholder;
  let in2=document.getElementById("in2").placeholder;
  let in3=document.getElementById("in3").placeholder;
  let alll=document.getElementById("btn1");
  let ws=document.getElementById("ws");
  let des=document.getElementById("des");
  let best=document.getElementById("best");
  let and=document.getElementById("and");
  fr.onclick=()=>{
    setlanguage("french");
    localStorage.setItem("Lang","french");
  };
  en.onclick=()=>{
    setlanguage("english");
    localStorage.setItem("Lang","english");
};
onload=()=>{
    setlanguage(localStorage.getItem("Lang"));
}
function setlanguage(language){
if(language === "french"){
wel.innerHTML="Bienvenue";
home.innerHTML="Accueil";
about.innerHTML="A PROPOS";
projects.innerHTML="Projets";
name.innerHTML="c'est deboub halim";
prestation.innerHTML="Agence web pour";
contacter.innerHTML="Contacter";
contacterr.innerHTML="Contacter";
contacterrr.innerHTML="Contacter";
cv.innerHTML="Obtenir le CV";
abb.innerHTML="A";
abbb.innerHTML="Propos";
abbbb.innerHTML="sur Hdeb";
ab1.innerHTML="Chez Hdeb, nous développons des produits et services innovants et créatifs qui fournissent des solutions globales de communication et d'information. Parmi une pléthore de services, conception et développement web, applications sur mesure, ERP, CRM, solutions e-commerce.";
ab2.innerHTML="La philosophie d'entreprise de Hdeb est d'assurer le produit de la plus haute qualité, la satisfaction totale du client, la livraison rapide des solutions et le meilleur rapport qualité / prix de l'industrie.";
master.innerHTML="Master Acadimique Engenierié Des systèmes d'informations et des logiciels";
call.innerHTML="Appeler";
ours.innerHTML="NOS SERVICES";
oursi.innerHTML="Vous voulez lancer un projet ? Vous savez pas par où commencer ? Hdeb vous apporte la solution ! Nous vous accompagnons dans toutes les étapes de mise en place de votre projet de A-Z.";
s1.innerHTML="si vous n'avez pas une idée claire sur un sujet nous vous aidons à exprimer les spécifications de vos besoins, nous vous aidons à etudier la faisubalité de votre projets";
s2.innerHTML="Nous fournissons une implémentation de solution complète en respectant toutes les phases de votre cahier de charge dans les délais prévus";
s3.innerHTML="Nous pouvons également vous aider à promouvoir votre entreprise en vous suggérant une stratégie de marketing qui vous aide à améliorer votre SEO";
s4.innerHTML="Après l'implantation de vos projets Hdeb vous accompagne lors de la formation et le transfert des connaissances, la maintenance et la mise à niveau de vos services";
lp.innerHTML="DERNIERS PROJETS";
cs.innerHTML="CLIENTS DISENT DE NOUS";
cs1.innerHTML="Voici quelques clients qui nous ont fait confiance, comme vous pouvez le constater les réponses ont été très positives. Votre satisfaction est notre objectif !";
cu.innerHTML="CONTACTER NOUS";
cud.innerHTML="Vous êtes intéressé ? remplissez le formulaire, Nous vous répondrons au plus vite !";
em.innerHTML="ENVOYER VOTRE MESSAGE";
in1.innerHTML=" Nom et Prénom";
in2.innerHTML=" Email";
in3.innerHTML=" Entrer votre message";
fff.innerHTML="SUIVEZ NOUS SUR";
alll.innerHTML="TOUS";
ws.innerHTML="SITE WEB";
des.innerHTML="DESKTOP";
and.innerHTML="APPLICATION MOBILE";
best.innerHTML="MEILLEURES";
var typed= new Typed(".typing",{
    strings:["DEVELOPPEMENT WEB","E-MARKETING","APPLICATION MOBILE","CONCEPTION GRAPHIC","AUDIT DES SI","DATA ANALYTIC"],
    typeSpeed:100,
    backSpeed:60,
    loop:true
});
}
else if(language === "english"){
    wel.innerHTML="Welcome";
    home.innerHTML="Home";
    about.innerHTML="About Us";
    projects.innerHTML="Projects";
    name.innerHTML="it's deboub halim";
    prestation.innerHTML="WEB AGENCY FOR";
    contacter.innerHTML="Contact";
    contacterr.innerHTML="Contact";
    contacterrr.innerHTML="Contact";
    cv.innerHTML="get CV";
    abb.innerHTML="About Hdeb";
    abbb.innerHTML="";
    abbbb.innerHTML="";
    ab1.innerHTML="At Hdeb, we develop innovative and creative products and services that provide total communication and information solutions. Among a plethora of services, web design and development, tailor made applications, ERPs, CRMs, e-commerce solutions";
    ab2.innerHTML="Hdeb's business philosophy is to assure the highest quality product, total client satisfaction, timely delivery of solutions and the best quality/price ratio found in the industry";
    master.innerHTML="Academic Master in Information Systems and Software Engineering";
    call.innerHTML="Call";
    ours.innerHTML="our services";
    oursi.innerHTML="Do you want to start a project? Don't know where to start? Hdeb brings you the solution! We support you in all stages of setting up your project from A-Z";
    s1.innerHTML="if you do not have a clear idea on a subject we help you to express the specifications of your needs and we help you to study the feasibility of your projects in the marquet";
    s2.innerHTML="We provide the complete website/software solution implementation of your systems respecting all the phases of your specifications in short time                                                     ";
    s3.innerHTML="Hdeb also help you promote your business by suggesting a complete marketing strategy that helps you improve your SEO to get in touch with bigger audience";
    s4.innerHTML="After the implementation of your projects Hdeb supports you during the training and the transfer of knowledge, the maintenance and the upgrade of your services";
    lp.innerHTML="LATEST PROJECTS";
    cs.innerHTML="CUSTOMERS SAY ABOUT US";
    cs1.innerHTML="Here are some customers who have trusted us, as you can see the responses have been very positive. Your satisfaction is our goal !";
    cu.innerHTML="CONTACT US";
    cud.innerHTML="You are interested ? fill out the form, we will get back to you as soon as possible!";
    em.innerHTML="SEND YOUR MESSAGE";
    fff.innerHTML="FOLLOW US ON";
    alll.innerHTML="ALL";
    ws.innerHTML="WEBSITE";
    des.innerHTML="DESKTOP";
    and.innerHTML="MOBILE APPLICATION";
    best.innerHTML="BEST";
	var typedd= new Typed(".typing",{
    strings:["WEB DEVELOPPEMENT ","E-MARKETING","MOBILE APPLICATION "," GRAPHIC CONCEPTION","SI AUDIT","DATA ANALYTICS"],
    typeSpeed:100,
    backSpeed:60,
    loop:true
});
}

}
// hidding alert
$("#success-alert").fadeTo(3000, 500).slideUp(500, function() {
$("#success-alert").slideUp(500);
})
    
// animated typing 


//preloader animation
$('.main-menu').preloader({
      // loading text
      text:'Loading...',
      // from 0 to 100
      percent:'45',
      // duration in ms
      duration:'4000',
      // z-index property
      zIndex:'1',
      // sets relative position to preloader's parent
      setRelative:false
    });
});
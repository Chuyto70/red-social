<style lang="">
  body {
    padding: 0px 0px 0 0px !important;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  #miModal{
    display: none;
    position: fixed;
    z-index:110;
    overflow: auto;
    left: 0;
    top:0;
    width: 100%;
    height:100%;
    background: rgba(0, 0, 0, 0.607);
  }
  #flex{
    width: 100%;
    height:100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .contenido-modal{
    position: relative;
    background-color: #fefefe00;
    margin: auto;
    width: 0%;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, .4);
    animation-name: modal;
    animation-duration: 1s;
  }
  .emergente-containercom{
    font-size: 18px;
    font-family: 'open sans',sans-serif;
    display: grid;
    justify-content: center;
    align-items: center;
    min-height: 10%;
    color: rgb(235, 235, 235);
    position: relative;
}
.public-emer-container{
    background-color:#404040;
    padding: 50px 30px;
    max-width: 800px;
    width: 100vw;
    border-radius: 10px;
    -webkit-border-radius: 20px;
    -ms-border-radius:10px;
    -o-border-radius: 10px;
}
 #close{
    color: #f2f2f2;
    font-size:30px;
    font-weight: bold;
  }
  #close:hover{
    color:#7f8c8d;
    text-decoration: none;
    cursor: pointer;
  }
  #user-profile{
  display: flex;
  align-items: center;
}

#user-profile a{
  text-decoration: none;
}
#user-profile img{
  width: 45px;
  border-radius: 50%;
  margin-right: 10px;
}

#user-profile p{
  margin-bottom: -5px;
  font-weight: 500;
  color: #fff;
}

#user-profile small{
  font-size: 12px;
}

.vinculo-e {
  color: #aaaaaa;
}

.public-area{
    position: relative;
    overflow-y: scroll;
    scrollbar-width: none;
}
.placeholder{
    position: absolute;
    top: -0.2rem;
    font-size: 130%;
    color: rgb(165, 165, 165);
    pointer-events: none;
    background-color: transparent;
}
.input-editable{
    outline: none;
    color: rgb(255, 255, 255);
    font-size: 100%;
    height: 10vh;
}

.emergente-yr12{
    display: flex;
    align-items: center;
    justify-content: center;
    background: #404040;
}
.wrapper-s12{
    background: #404040;
    padding: 30px;
    width: 500px;
    border-radius: 5px;
}
.wrapper-s12 form {
    height: 167px;
    display: flex;
    margin: 30px 0;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    border-radius: 5px;
    border: 2px dashed #ffffff;
}
.public-btn{
    background-color: rgb(52, 52, 52);
    color: rgb(255, 255, 255);
    cursor: pointer;
    padding: 10px 20px;
    border-radius: 20px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    border: transparent;
    font-size: 100%;
    opacity: 0.5;
}

.progress-area .row .content{
    width: 100%;
    margin-left: 15px;
  }
  .progress-area .details{
    display: flex;
    align-items: center;
    margin-bottom: 7px;
    justify-content: space-between;
  }
  .progress-area .content .progress-bar{
    height: 6px;
    width: 100%;
    margin-bottom: 4px;
    background: #fff;
    border-radius: 30px;
  }
.uploaded-area{
    max-height: 130px;
    overflow-y: scroll;
  }
  .uploaded-area.onprogress{
    max-height: 150px;
  }
  .uploaded-area::-webkit-scrollbar{
    width: 0px;
  }
  .uploaded-area .row .content{
    display: flex;
    align-items: center;
  }
  .uploaded-area .row .details{
    display: flex;
    margin-left: 15px;
    flex-direction: column;
  }
  .uploaded-area .row .details .size{
    color: #ffffff94;
    font-size: 11px;
  }
  .uploaded-area i.fa-check{
    font-size: 16px;
  }

  .privacy{
    margin-top: 20px;
    font-size: 90%;
    transition: 0.5s;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -ms-transiton: 0.5s;
    -o-transition: 0.5s;
    padding: 5px 10px;
    width: 50%;
    cursor: pointer;
}
.footer-box{
    border-top: 1px solid #737476;
    margin: 20px 5px;
}
.footer-icons{
    display: flex;
    list-style: none;
}

.footer-icons li{
    margin: 20px 5px;
    position: relative;
    right: 8px;
    font-size: 100%;
    border-radius: 60%;
    -webkit-border-radius: 60%;
    -moz-border-radius: 60%;
    -ms-border-radius: 60%;
    -o-border-radius: 60%;
    cursor: pointer;
   
}

.footer-icons li i{
    padding: 10px;
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3ms;
    -ms-trasition: 0.3s;
    -o-transition: 0,3s;
}

.footer-icons li i:hover{
    background-color: #00000038;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
}

.puclic-limits{
    float: right;
    transform: translateY(-4.3rem);
    -webkit-transform: translateY(-4.3rem);
    -moz-transform: translateY(-4.3rem);
    -ms-transform: translateY(-4.3rem);
    -o-transform: translateY(-4.3rem);

}

.puclic-limits .counter-limit{
    border-right: 1px solid rgb(255, 255, 255);
    padding: 0 18px;
    margin: 0 15px;
    font-size: 100%;
    color: #ffffff;
    visibility: hidden;
}

.form_modal:where(i, p){
    color: #ffffff;
  }
  .form_modal i{
    font-size: 50px;
  }
  .form_modal p{
    margin-top: 15px;
    font-size: 16px;
  }
  .form_modal i {
    font-size: 50px;
}

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  /*==Scroll==*/

  .contenedor-scroll::-webkit-scrollbar {
    width: 7px;
    background: rgba(70, 70, 70, 0.393);
  }

  .contenedor-scroll::-webkit-scrollbar-thumb {
    background: rgba(166, 166, 166, 0.716);
    border-radius: 10px;
    border-right: 2px solid rgba(138, 138, 138, 0.382);
  }


  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


  /*==Header y sus movimientos==*/

  header {
    left: 0;
    width: 100%;
    height: 110px;
    justify-content: space-between;
    background: black;
    text-align: center;
    position: fixed;
    top: 0;
    overflow: hidden;
    transition: all 0.5s ease;
    z-index: 100;
    margin: 0;
    box-shadow: 0 0 12px rgb(0, 0, 0);
  }

  header h1 {
    font-size: 20px;
    color: white;
    line-height: 60px;
    font-weight: 300;
    transition: all 0.3s ease;
  }

  header h1 i {
    font-weight: bold;
    text-transform: uppercase;
  }

  header nav {
    position: absolute;
    bottom: 0;
    height: 50px;
    line-height: 39px;
    width: 100%;
    background: #404040;
    padding: 5px 5%;

  }

  header nav a {
    color: white;
    display: inline-block;
    padding: 10px 15px;
    line-height: 1;
    text-decoration: none;
    border-radius: 15px;
  }


  header nav a:hover {
    background: rgba(0, 0, 0, 0.2);
  }



  body.sticky-header {
    padding-top: 100px;
  }

  body.sticky-header header {
    height: 55px;
    background: #404040;
  }

  body.sticky-header header h1 {
    transform: scale(0, 0);
  }

  /*==Buscador==*/
  .buscar {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    left: 84%;
    top: 50%;
    transform: translate(-50%, -50%);
    background: rgb(82, 82, 82);
    padding: 19px;
    height: 5px;
    border-radius: 40px;
  }

  .buscar_texto {
    border: none;
    background: none;
    outline: none;
    color: rgb(255, 255, 255);
    font-size: 15px;
    float: left;
    line-height: 20px;
  }

  .boton {
    width: 30px;
    height: 40px;
    text-decoration: none;
    color: rgb(118, 118, 118);
    font-size: 20px;
  }

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  /*==Barra izquierda==*/

  .nav {
    position: fixed;
    top: 60px;
    left: -100%;
    height: 100vh;
    padding: 16px 16px 0;
    background: #1c1c1c;
    box-shadow: 5px 0 0 rgba(22, 8, 43, 0.1);
    z-index: 100;
    transition: 0.5s;
    border-right: 1px solid black;

  }

  .nav_container {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding-bottom: 48px;
    overflow: auto;
    scrollbar-width: none;
  }

  .nav_container::-webkit-scrollbar {
    display: none;
  }


  .logo_name {
    display: flex;
  }

  .logo_name i {
    font-size: 70;
    margin-right: 1px;
    color: #afafaf;
    width: 30px;
    height: 30px;
  }

  .nav_link {
    display: flex;
    align-items: center;
    color: #fff;
  }

  .nav_link:hover {
    color: #494949;
    border-bottom: 1px solid #ccc;
  }

  .nav_icon {
    width: 20px;
    font-size: 19px;
  }


  .nav_subititle {
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #a5a1aa;
  }

  .nav_link {
    border-bottom: 1px solid #ccc;
  }

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

  /*==Left-Sidebar==*/
  .logo-barra img {
    width: 30px;
    height: 30px;
  }

  .container {
    display: flex;
    justify-content: space-between;
    padding: 13px 5%;
  }

  .left-sidebar {
    flex-basis: 25%;
    position: sticky;
    top: 32px;
    align-self: flex-start;
  }

  .right-sidebar {
    flex-basis: 25%;
    position: sticky;
    top: 70px;
    align-self: flex-start;
    background: #404040;
    padding: 20px;
    border-radius: 4px;
    color: #9c9c9c;
  }

  .main-content {
    flex-basis: 45%;
  }

  .imp-links a,
  .shortcut-links a {
    text-decoration: none;
    display: flex;
    text-align: center;
    margin-bottom: 30px;
    color: white;
    width: fit-content;
  }

  .imp-links a img {
    width: 20px;
    height: 20px;
    margin-right: 15px;
  }

  .imp-links a:last-child {
    color: #757474;
  }

  .imp-links {
    border-bottom: 1px solid #ccc;
  }

  .shortcut-links a img {
    width: 25px;
    border-radius: 4px;
    margin-right: 15px;
  }

  .shortcut-links p {
    margin: 25px 0px;
    color: #aaaaaa;
  }


  /*==Right-Sidebar==*/

  .sidebar-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
  }

  .right-sidebar h4 {
    font-weight: 600;
    font-size: 16px;
  }

  .sidebar-title a {
    text-decoration: none;
    color: #1876f2;
    font-size: 16px;
  }

  .event {
    display: flex;
    font-size: 14px;
    margin-bottom: 20px;
  }

  .left-event {
    border-radius: 10px;
    height: 65px;
    width: 65px;
    margin-right: 15px;
    padding-top: 10px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
  }

  .event p {
    font-size: 12px;
  }

  .event a {
    font-size: 12px;
    text-decoration: none;
    color: #1876f2;
  }

  .left-event span {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #1876f2;
    color: #fff;
    font-size: 10px;
    padding: 4px 0;
  }

  .sidebar-title {
    border-bottom: 1px solid #ccc;
  }

  .sidebar-ads {
    width: 100%;
    margin-bottom: 20px;
    border-radius: 4px;
  }

  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


  /*====Barra derecha=====*/


  .sidebar-2 {
    border-left: 1px solid black;

    right: 0%;
    width: 75px;
    height: 100vh;
    background-color: #1c1c1c;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 100;
    top: 60px;
    position: fixed;

  }


  .brand,
  .list-item-text {
    display: none;
  }


  .sidebar-top,
  .sidebar-center {
    display: flex;
    align-items: center;
    width: 80%;
    border-bottom: 1px solid #4b4b4b;
    padding: 10px 0;
    margin-bottom: 10px;
  }

  .sidebar-center {
    padding: 0;
  }

  .sidebar-bottom {
    justify-content: center;
    border: none;
  }

  .logoL {
    font-size: 35px;
    margin-right: 10px;
    cursor: pointer;
    padding-left: 10px;
  }

  .brand {
    font-weight: bold;
    cursor: pointer;
  }

  .list {
    list-style: none;
    padding: 0;
    width: 100%;
  }

  .list-item {
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    padding: 20px;
    border-radius: 10px;
  }

  .sidebar-2 a {
    text-decoration: none;
    color: white;
  }

  .list-item-icon {
    width: 10px;
    font-size: 15px;
  }

  .list-item:hover,
  .list-item.active {
    background-color: rgba(0, 0, 0, 0.2);
  }


  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/



  /*==Main perfil==*/


  .perfil-usuario {
    background: linear-gradient(#7a797944, transparent);
    color: rgb(255, 255, 255);
  }

  .perfil-usuario .sombra {
    position: absolute;
    display: block;
    background: linear-gradient(transparent, rgba(0, 0, 0, .5));
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
  }

  .perfil-usuario .portada-perfil,
  .perfil-usuario .sombra {
    border-radius: 0 0 20px 20px;
  }

  .perfil-usuario img {
    width: 100%;
    height: 100%;
  }

  .contenedor-perfil {
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;

  }

  .perfil-usuario .contenedor-perfil {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 70%;
  }

  .perfil-usuario .portada-perfil {
    display: block;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 20rem;
    margin-bottom: .5rem;
  }

  .perfil-usuario .avatar-perfil {
    display: block;
    width: 230px;
    height: 230px;
    background-color: #D9DCF1;
    position: absolute;
    bottom: -65px;
    left: 4rem;
    border-radius: 50%;
    overflow: hidden;
    border: 8px solid #FFFFFF;
    box-shadow: 0 0 12px 2px rgba(0, 0, 0, .2);

  }

  .perfil-usuario .cambiar-foto {
    position: absolute;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, .5);
    height: 57%;
    bottom: 0;
    left: 0;
    color: #fff;
    text-decoration: none;
    transform: translateY(50%);
    opacity: 0;
    transition: all ease-in 200ms;
  }

  .perfil-usuario .cambiar-foto i {
    margin-bottom: .5rem;
    font-size: 2rem;
  }

  .perfil-usuario .avatar-perfil:hover .cambiar-foto {
    transform: translateY(0);
    opacity: 1;
  }

  .perfil-usuario .datos-perfil {
    position: absolute;
    display: block;
    width: calc(100% - 230px - 8rem);
    right: 0;
    bottom: 0;
    color: #fff;
    text-shadow: 0 0 5px rgba(0, 0, 0, .2);
    padding-bottom: 1rem;
    padding-right: 1rem;
  }

  .perfil-usuario .titulo-usuario {
    font-size: 2.3rem;
    white-space: nowrap;
    margin-bottom: .5rem;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .perfil-usuario .bio-usuario {
    font-size: 1em;
    margin-bottom: .75rem;
  }

  .perfil-usuario .lista-perfil {
    list-style: none;
  }

  .perfil-usuario .lista-perfil li {
    display: inline-block;
    font-size: 1em;
    margin-right: 1rem;
  }

  .perfil-usuario .opcciones-perfil {
    display: block;
    position: absolute;
    right: 2rem;
    top: 1rem;
  }

  .perfil-usuario .opcciones-perfil button {
    border: 0;
    padding: 8px 20px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
  }

  .perfil-usuario .menu-perfil ul {
    display: flex;
    list-style: none;
    margin-left: calc(200px + 8rem);
    width: calc(100% - 200px - 8rem);
  }

  .perfil-usuario .menu-perfil ul li {
    margin-right: 1rem;
  }

  .perfil-usuario .menu-perfil a {
    display: block;
    text-decoration: none;
    color: inherit;
    padding: 10px 10px;
    font-weight: bold;
    border-radius: 8px;
    transition: all ease-in 100ms;
  }

  .perfil-usuario .menu-perfil a:hover {
    background-color: #a5a5a5;
    color: #fff;
  }

  .perfil-usuario .icono-perfil {
    display: none;
    margin-right: .75rem;
  }

  /*==Main-Datos==*/



  .seccion-perfil-usuario .perfil-usuario-footer,
  .seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 2rem 2rem;
    box-shadow: 0 0 12px rgb(0, 0, 0);
    background-color: rgb(53, 53, 53);
    border-radius: 10px;
    width: 100%;

  }

  .seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
  }

  .seccion-perfil-usuario .lista-datos li {
    padding: 10px 0;
  }

  .seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1.5rem;
    font-size: 1rem;
    vertical-align: middle;
  }



  /*======main biografica==========*/


  .seccion-perfil-publicacion .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: rem;
    text-align: center;

  }

  .seccion-perfil-publicacion .perfil-usuario-body .texto {
    color: #b5b5b5;
    font-size: 0.95em;
  }

  .seccion-perfil-publicacion .perfil-usuario-footer,
  .seccion-perfil-publicacion .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.544);
    background-color: rgb(75, 75, 75);
    border-radius: 10px;
    width: 100%;

  }


  /*======main publicacion==========*/

  .container2 {
    display: flex;
    justify-content: center;
    padding: 30px 0%;
    position: relative;
    width: 100%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

  }



  .main-content {
    flex-basis: 100%;
    width: 60%;
  }


  .write-post-container {
    width: 100%;
    background: #404040;
    border-radius: 6px;
    padding: 20px;
    color: rgb(165, 165, 165);
  }

  .user-profile {
    display: flex;
    align-items: center;
  }

  .user-profile img {
    width: 45px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .user-profile p {
    margin-bottom: -5px;
    font-weight: 500;
    color: #fff;
  }

  .user-profile small {
    font-size: 12px;
  }

  .post-input-container {
    padding-left: 55px;
    padding-top: 20px;

  }

  .post-input-container textarea {
    width: 100%;
    border: 0;
    outline: 0;
    border-bottom: 1px solid #ccc;
    background: transparent;
    resize: none;
  }

  .add-post-links {
    display: flex;
    margin-top: 10px;
  }

  .add-post-links a {
    text-decoration: none;
    display: flex;
    align-items: center;
    color: rgb(192, 192, 192);
    margin-right: 30px;
    font-size: 13px;
  }

  .add-post-links a img {
    width: 20px;
    margin-right: 10px;
  }

  .post-container {
    width: 100%;
    background: #404040;
    border-radius: 6px;
    padding: 20px;
    color: #aaaaaa;
    margin: 20px 0;
  }

  .user-profile span {
    font-size: 13px;
    color: #9c9c9c;
  }

  .post-text {
    color: #fff;
    margin: 15px 0;
    font-size: 15px;
  }

  .post-text span {
    color: forestgreen;
    font-weight: 500;
  }

  .post-text a {
    color: #1876f2;
    text-decoration: none;
  }

  .post-img {
    width: 100%;
    border-radius: 4px;
    margin-bottom: 5px;
  }

  .post-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .activity-icons div img {
    width: 18px;
    margin-right: 10px;
  }

  .activity-icons div {
    display: inline-flex;
    align-items: center;
    margin-right: 30px;
  }

  .post-row a {
    color: rgb(201, 198, 198);
  }




  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/




  /*==Footer==*/

  .footer {
    text-align: center;
    color: rgb(122, 121, 121);
    padding: 10px 0 20px;
    font-size: 13px;
  }


  /*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/



  /*==Media de Barra1==*/



  @media screen and (min-width:768px) {
    body {
      padding: 110px 0px 0 0px;
    }




    .nav {
      left: 0;
      padding: 19px 22px 0;
      width: 75px;
    }

    main {
      padding-top: 50px;
      padding-left: 0;
    }

    .nav:hover {
      width: 265px;
    }

    .nav .nav_subititle,
    .nav .logo_name,
    .nav .nav_dropdown-icon,
    .nav .navtop .nav_link:nth-child(4),
    .nav .subscribe-contain {
      opacity: 0;
      transition: 0.5s;
    }

    .nav:hover .nav_subititle,
    .nav:hover .logo_name,
    .nav:hover .nav_dropdown-icon,
    .nav:hover .navtop .nav_link:nth-child(4),
    .nav:hover .subscribe-contain {
      opacity: 1;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
    }
  }

  @media screen and (max-width:420px) {
    header .search {
      width: 70%;
    }

    header .none,
    header .user {
      display: none;
    }

    .grid {
      grid-template-columns: repeat(1, 1fr);
    }

    main {
      padding-top: 20px;
      padding-left: 50px;
    }
  }

  @media screen and (min-width:1080px) {
    .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
    }
  }


  /*==Media de perfil==*/


  @media (max-width: 780px) {
    .perfil-usuario .contenedor-perfil {
      width: 100%;
    }

    .perfil-usuario .avatar-perfil {
      left: calc(50% - 115px)
    }

    .perfil-usuario .datos-perfil {
      bottom: 200px;
      left: 0;
      width: 100%;
      padding: 15px;
      text-align: center;
    }

    .perfil-usuario .bio-usuario {
      font-size: 1em;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .perfil-usuario .titulo-usuario {
      font-size: 2.1rem;
    }

    .perfil-usuario .portada-perfil {
      height: 28rem;
    }

    .perfil-usuario .menu-perfil ul {
      flex-direction: column;
    }

    .perfil-usuario .lista-perfil {
      display: block;
    }

    .perfil-usuario .menu-perfil {
      margin-top: 2rem;
    }

    .perfil-usuario .menu-perfil ul {
      display: flex;
      list-style: none;
      margin-left: auto;
      margin-right: auto;
      padding-top: 2.5rem;
      width: 70%;
      background-color: rgb(147, 142, 142);
      border-radius: 12px;
      box-shadow: 0 0 12px 2px rgba(0, 0, 0, .1);
    }

    .perfil-usuario .icono-perfil {
      display: inline-block;
    }

    .seccion-perfil-usuario .lista-datos {
      width: 100%;
    }

  }
  /* .noshow_navbar{
    display: none;
  } */
  #modificarInput{
    max-width: 270px !important;
  }


  .unfollowbtn, .followbtn{
    cursor: pointer;
    background: transparent;
    border: none;
    padding: 0 16px;
    display: flex;
    gap: 5px;
    color: #212529;
  }
  .unfollowbtn:hover, .followbtn:hover{
    color: #1e2125;
    background-color: #e9ecef;
  }
  .background_bubble_chat{
    background-color: #6e6b6b75 !important;
  }

  .write-post-container {
    width: 100%;
    background: #404040;
    border-radius: 6px;
    padding: 20px;
    color: rgb(165, 165, 165);
  }
   .user-profile {
    display: flex;
    align-items: center;
  }

  .user-profile img {
    width: 45px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .user-profile p {
    margin-bottom: -5px;
    font-weight: 500;
    color: #fff;
  }

  .user-profile small {
    font-size: 12px;
  }
  #post_textarea{
    outline: none !important;
    box-shadow: none !important;
    caret-color: white;
    color: white;
    border-bottom: 1px solid rgb(213 193 193 / 50%)  !important;
    resize: none;
  }

  #select_post_img{
    display: none !important;
    cursor: pointer;
  }
  .cursor {
    cursor: pointer;
  }
  .imagen_post{
    cursor: pointer !important;
  }
  #modal_contenido{
    background-color: #191919;
    color: white    ;
  }

  .text_size_small{
    font-size: 12px !important;
  }
  .background_bubble_chat{
    background-color: #6e6b6b75 !important;
  }
  #button-addon2:hover{
    background-color: #0d6efd !important;
  }
 ::-webkit-scrollbar {
 width: 7px;
  background: rgba(70, 70, 70, 0.393);
}
::-webkit-scrollbar-thumb{
  background: rgba(166, 166, 166, 0.716);
  border-radius: 10px;
  border-right: 2px solid rgba(138, 138, 138, 0.382);
}
#primera_nav{
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100;
}
#segunda_nav{
  position: fixed;
  top: 43px;
  width: 100%;
  z-index: 100;
}
</style>


<?php
global $profile;
global $profile_post;
global $user;
?>




  <!--    Barra izquierda     -->

  <section  
  style="margin-top:95px;"
  class="nav position-fixed top-0" id="navbar">
    <a
    style="width: 100%;"
     href="social.html" class="nav_link nav_logo ">
      <i class="fa-solid fa-bars nav_icon"></i>
      <span class="logo_name">
        <i class="logo-barra"><img src="assets/images/home/logo.png" alt=""></i>
        NavHer
      </span>
    </a>
    <nav class="nav_container">
      <div class="left-sidebar">
        <div class="imp-links">
         <!-- <a href="#"><img src="assets/images/home/play.png"> Videos</a>-->

          <a href="#"><img src="assets/images/home/logo.png"> Noticias</a>

          <!-- <a href="#"><img src="assets/images/home/stream.png"> Stream</a>-->

          <a href="amigos.html"><img src="assets/images/home/amigos.png"> Amigos</a>

          <!-- <a href="game.html"><img src="assets/images/home/juegos.png"> Games</a>-->

          <a href="#">Mas Categorias</a>
        </div>
        <div class="shortcut-links">
         <!-- <p>Conectados</p>-->

         <!--  <a href="#"><img src="assets/images/home/tiktok.png"> TikTok </a>

          <a href="#"><img src="assets/images/home/youtube.png"> Youtube </a>

          <a href="#"><img src="assets/images/home/face.png"> Facebook </a>

          <a href="#"><img src="assets/images/home/twitter.png"> Twitter </a>-->
          <p>Informacion</p>
          <a href="fundadores.html"><img src="assets/images/home/logo.png"> Fundadores </a>
        </div>

      </div>
    </nav>
  </section>

  <!--    Main     -->

  <section class="perfil-usuario">
    <div class="contenedor-perfil">
      <div 
      class="portada-perfil" style="background-image: url(assets/images/frontpage/<?= $profile['frontpage_pic'] ?>);margin-top: 100px;">
        <div class="sombra"></div>
        <div class="avatar-perfil">
          <img style="object-fit: cover;" src="assets/images/profile/<?= $profile['profile_pic'] ?>" alt="Profile pic">
          <form id="form_file_profile" method="post" action="assets/php/actions.php?updateprofile" enctype="multipart/form-data">

            <input hidden type="text" name="first_name" value="<?= $profile['first_name'] ?>">
            <input hidden type="text" name="last_name" value="<?= $profile['last_name'] ?>">
            <input hidden type="text" name="username" value="<?= $profile['username'] ?>">
            <label for="formFile" style="cursor: pointer;" class="cambiar-foto">
              

              <i class="fas fa-camera"></i>
              <span >Cambiar foto</span>
             <input hidden class="form-control" type="file" name="profile_pic" id="formFile">
            </label>
          </form>
         

          <script>

            let inputFile = document.querySelector('#formFile')
            let form_file_profile =document.querySelector('#form_file_profile')
            inputFile.addEventListener('change', (e)=>{
              e.preventDefault()
              form_file_profile.submit()
              
            })
        </script>

        </div>
        <div class="datos-perfil">
          <h4 class="titulo-usuario"><?= $profile['first_name'] ?> <?= $profile['last_name'] ?>
          <?php if($profile['id'] == $user['id']){ ?>
            <a href="?editprofile" style="cursor: pointer;"
           class="bi bi-three-dots-vertical text-white"></a>
          <?php }?>
         

          </h4>
          <p class="bio-usuario"><i>INSTITUCION:</i> UAM-1</p>
          <ul class="lista-perfil">
          <?php
if(!checkBS($profile['id'])){
    ?>
            <li><?=count($profile['followers'])?> Seguidores</li>
            <li> <?=count($profile['following'])?> Siguiendo</li>
            <li><?=count($profile_post)?> Publicaciones</li>
            <?php
}
?>

            <li>
              <?php
              if ($user['id'] != $profile['id']) {
              ?>
                <div class="dropdown">
                  <span class="" style="font-size:xx-large" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#chatbox" onclick="popchat(<?= $profile['id'] ?>)"><i class="bi bi-chat-fill"></i> Message</a></li>
                    <li><a class="dropdown-item " href="assets/php/actions.php?block=<?= $profile['id'] ?>&username=<?= $profile['username'] ?>"><i class="bi bi-x-circle-fill"></i> Block</a></li>

                    <li>       
                        <?php 
                          
                        ?>            
                            <?php  

                              if(in_array($user['id'], array_column($profile['followers'], 'follower_id'))){
                                
                              
                            ?>
                             <button class="unfollowbtn" data-user-id='<?= $profile['id'] ?>'>
                             <i class="bi bi-dash-circle-fill"></i>Unfollow</button>  
                             
                            <?php } else{ ?>
                              <button class=" followbtn" data-user-id='<?= $profile['id'] ?>'>  
                              <i class="bi bi-plus-square-fill"></i>Follow</button>  
                              <?php } ?>


                    </li>
                  </ul>
                </div>
              <?php
              }
              ?>
            </li>

          </ul>
        </div>
        <div class="opcciones-perfil">
          <?php if( $user['username'] == $profile['username'] ){?>
          <form id="form_file_profile" method="post" action="assets/php/actions.php?updateFrontpage" enctype="multipart/form-data">
            <label style="
                background: #343a40;
                padding: 4px 14px;
                border-radius: 8px;" for="frontpage_pic">Cambiar portada </label>
            <input type="file" hidden name="frontpage_pic" id="frontpage_pic">
            <button type="submit"><i class="fas fa-wrench"></i></button> 
          </form>

          <?php }?>
        </div>
      </div>
      <div class="menu-perfil">
        <ul>
         
          <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
        </ul>
      </div>

      <section class="seccion-perfil-usuario">
        <div style="flex-wrap: nowrap !important;" class="perfil-usuario-footer">

          <ul class="lista-datos">
            <li ><i class="icono fas fa-map-signs"></i>Direccion de usuario:</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
            <li><i class="icono fas fa-phone-alt"></i>Telefono:</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
            <li><i class="icono fas fa-briefcase"></i>Trabaja en: CEO de NAVHER, NEZZ, AVADISK</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
            <li><i class="icono fas fa-building"></i>Cargo: CEO</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
          </ul>
          <ul class="lista-datos">
            
            <li><i class="icono fas fa-map-marker-alt"></i>Ubicacion:</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
            <li id="valorAModificar"><i class="icono fas fa-calendar-alt"></i>Fecha nacimiento: 09/09/2003</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
            <li><i class="icono fas fa-user-check"></i>Registro: 19/12/2022</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
            <li><i class="icono fas fa-share-alt"></i>Redes sociales:</li>
            <input class="form-control" id="modificarInput" type="text" value="" style="display: none;">
          </ul>
          <div style="align-self: flex-end;">

            <button id="guardarPerfil" style="background-color:rgb(38 38 38); border:1px solid black; border-radius:16px; display:none;" class="py-2 px-4 text-white">Guardar</button>

            <button id="modificarPerfil" style="background-color:rgb(38 38 38); border:1px solid black; border-radius:16px;" class="py-2 px-4 text-white">Modificar</button>
          </div>

        </div>
      </section>




      <section class="seccion-perfil-publicacion">
        <div class="perfil-usuario-footer">
          <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
              <h3 class="titulo">Biografia</h3>
              <p class="texto">
                
                Las redes sociales son plataformas digitales formadas por comunidades de individuos con intereses, actividades o relaciones en común (como amistad, parentesco, trabajo). Las redes sociales permiten el contacto entre personas y funcionan como un medio para comunicarse e intercambiar información.

                Los individuos no necesariamente se tienen que conocer antes de entrar en contacto a través de una red social, sino que pueden hacerlo a través de ella, y ese es uno de los mayores beneficios de las comunidades virtuales.



                Fuente: https://concepto.de/redes-sociales/#ixzz7qVpVPdoC</p>
                
            </div>
          </div>
      </section>


      <!--    Main publicaciones     -->


      <div class="container2">

        <div class="main-content">
          <div class="write-post-container">
            <div class="user-profile">
              <img 
              style="height: 45px;
                    object-fit: cover;"
               src="assets/images/profile/<?=$user['profile_pic'] ?> " alt="">

              <div>
                <p><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></p>
                <small>CEO <i class="fas fa-caret-down"></i></small>
              </div>
            </div>

            <form class="post-input-container " 
                  method="post" 
                  action="assets/php/actions.php?addpost">

              <textarea 
              name="post_text"
              id="post_textarea"
              rows="3" placeholder="Cuentanos Tu Vida!"></textarea>

              <div class="add-post-links">
                <a href="#"><img src="assets/images/home/compartir.png" alt="">Informar</a>
              </div>

              <div class="add-post-links">
                <a href="#"><img src="assets/images/home/compartir.png" alt="" />Pasear</a>
              </div>
            </form>

          </div>

       </div>
                         <!-------- modal ------->

              
        </div>
        
          <!-- <div class="post-container">
    <div class="post-row">
        <div class="user-profile">
            <img src="imagenes/pollolen.jfif" alt="">

            <div>
            <a href="perfil.html">
                <p>Yoshi Manuel</p>
                <small>CEO <i class="fas fa-caret-down"></i></small>

                <span>ceo</span></a>
            </div>
        </div>
        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
    </div>

    <p class="post-text">Trabajando Pa</a></p>

    <img src="imagenes/yosh.jpeg" class="post-img">

    <div class="post-row">
        <div class="activity-icons">
            <div><img src="imagenes/corazon.png" alt="">0</div>

            <div><img src="imagenes/mensaje.png" alt="">0</div>

            <div><img src="imagenes/compartir.png" alt="">0</div>
        </div>
        
    </div>

</div> -->
          <?php

          foreach ($profile_post as $post) {
            $likes = getLikes($post['id']);
            $comments = getComments($post['id']);
          ?>

            <div class="post-container">
              <div class="post-row">
                <div class="user-profile">
                  <img
                  style="height: 45px; object-fit: cover;" 
                  src="assets/images/profile/<?= $profile['profile_pic'] ?>" alt="">

                  <div>
                    <p><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></p>
                    <small>Empresa <i class="fas fa-caret-down"></i></small>

                    <span>ceo</span>
                  </div>
                </div>
                <div class="p-2">
                        <?php
                        if ($post['user_id'] == $user['id']) {
                        ?>

                            <div class="dropdown">

                                <i class="bi bi-three-dots-vertical" id="option<?= $post['id'] ?>" data-bs-toggle="dropdown" aria-expanded="false"></i>

                                <ul class="dropdown-menu" aria-labelledby="option<?= $post['id'] ?>">
                                    <li><a class="dropdown-item text-secondary" href="assets/php/actions.php?deletepost=<?= $post['id'] ?>"><i class="bi bi-trash-fill"></i> Delete Post</a></li>
                                </ul>
                            </div>
                        <?php
                        }?>
                          
                    </div>
              </div>

              <p class="post-text"><?= $post['post_text'] ?></p>

              <img src="assets/images/posts/<?= $post['post_img'] ?>">
              
               <div style="font-size: x-larger" class="p-2 d-flex align-items-center justify-content-between">
                

                <div class="d-flex align-items-center">
                  <span>
                        <?php
                        if (checkLikeStatus($post['id'])) {
                            $like_btn_display = 'none';
                            $unlike_btn_display = '';
                        } else {
                            $like_btn_display = '';
                            $unlike_btn_display = 'none';
                        }
                        ?>
                       
                        <svg 
                            style="display:<?= $unlike_btn_display ?>"
                            data-post-id='<?= $post['id'] ?>'
                            xmlns="http://www.w3.org/2000/svg" 
                            width="16" 
                            height="16" 
                            fill="currentColor" 
                            class="bi bi-heart-fill unlike_btn text-danger" 
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>


                        <svg 
                            style="display:<?= $like_btn_display ?>" data-post-id='<?= $post['id'] ?>'
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                            fill="currentColor" 
                            width="16" 
                            height="16" 
                            class="bi bi-heart like_btn" 
                            viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                         <span
                         style="font-size: small;" 
                         id="likecount<?= $post['id'] ?>"><?= count($likes) ?>
                        </span>
                    </span> 
                    &nbsp;&nbsp;
                    
                    <svg 
                        class="bi bi-chat-left d-flex align-items-center mt-1" 
                        style="font-size:small"
                        data-bs-toggle="modal" 
                        data-bs-target="#postview<?= $post['id'] ?>"
                        xmlns="http://www.w3.org/2000/svg" 
                        width="16" 
                        height="16" 
                        fill="currentColor" 
                        viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <span class="mx-2 text-small" style="font-size:small" data-bs-toggle="modal" data-bs-target="#postview<?= $post['id'] ?>"><?= count($comments) ?></span>
                    </svg>
                    
                 <div>
                </div>
               
            </div>

            <span style="font-size:small" class="text-muted"> <?= show_time($post['created_at']) ?></span>
            </div>
                        
               <?php if(count($comments) > 0){
                ?>    
            
                
            <div id="contenedo_principal_comentarios" style="height:160px; max-height:100%; overflow-y: scroll; ">
                 <?php foreach ($comments as $comment) {
                                        $cuser = getUser($comment['user_id']);
                                    ?>
                                        <div class="d-flex align-items-center p-1 gap-1">
                                            <div class="align-self-start pt-2">
                                                <img 
                                                style="width: 30px; height:30px;"
                                                src="assets/images/profile/<?= $cuser['profile_pic'] ?>" alt=""  class="rounded-circle border">
                                            </div>
                                       
                                            <div class="d-flex flex-column justify-content-start align-items-start col-10 px-1 rounded background_bubble_chat " style="overflow-wrap: break-word;">

                                                <h6 style="margin: 0px;">
                                                    <a href="?u=<?= $cuser['username'] ?>" class="text-decoration-none text-dark text-muted text_size_small">@<?= $cuser['username'] ?></a> 
                                                </h6>
                                                
                                                <p 
                                                class="text_size_small" 
                                                style=" color: #aaaaaa;
                                                        padding: 10px 15px;
                                                        display: inline-block;
                                                        max-width: 100%;
                                                        margin-bottom: 0.25rem;
                                                        font-size: 0.9rem;
                                                        position: relative;
                                                        padding-right: 1.65rem;" ><?= $comment['comment'] ?></p> 
                                              
                                            </div>
                                        </div>
                                        <div id="bubbleChatPadre" class="d-flex justify-content-end align-items-center gap-2 px-1 mb-2">
                                            <div style="display: inline-block;
                                                        border: 0;
                                                        padding: 3px 8px;
                                                        font-size: .8rem;
                                                        border-radius: 8px;
                                                        cursor: pointer;
                                                        background: #38383878; ">
                                                <i class="bi bi-hand-thumbs-up-fill"></i>   
                                                5
                                            </div>
                                            <button
                                             id="responder_chat"
                                             style="display: inline-block;
                                                    border: 0;
                                                    padding: 3px 8px;
                                                    font-size: .8rem;
                                                    border-radius: 8px;
                                                    cursor: pointer;
                                                    background: #38383878;"
                                             class="text-white text_size_small" >responder</button>

                                            <p style="margin:0px;" class="text-muted">(<?= show_time($comment['created_at']) ?>)</p>
                                        </div>

                                    <?php
                                    }
                                    ?>
            </div>
               <?php }else{
                
               ?>
                <div style="height:0; max-height:100%; overflow-y: scroll; ">
                </div>
                <?php } ?>
                
                <div class="input-group p-2 gap-2 align-items-center">

                     <img 
                     style="width: 30px !important; height: 30px !important;"
                     src="assets/images/profile/<?= $user['profile_pic'] ?>" alt="" class="rounded-circle border">
                        
                    <input
                    style="outline:none;
                           height: 30px;
                           background-color: #515151;
                           flex-grow: 1;
                           flex-basis: 0;
                           padding: 8px 10px;
                           font-size: .9rem;
                           border-radius: 8px;
                           margin-right: 0.5rem;
                           margin-left: 0.5rem;
                           color:#aaaaaa;"
                     type="text" class="form-control  rounded border-0 shadow-none comment-input"  aria-label="Recipient's username" aria-describedby="button-addon2">

                    <button 
                     style="width:20%;
                            background-color: #515151;" 
                    class="btn btn-outline-primary rounded-0 border-0 add-comment" data-page='wall' data-cs="comment-section<?= $post['id'] ?>" data-post-id="<?= $post['id'] ?>" type="button" id="button-addon2"><i class="bi bi-send-fill text-light"></i></button>
                </div>
            </div>
          <?php
          }
          ?>

        </div>



      </div>
  </section>



  <!--    Barra-Derecha      -->

  <div
  style="    margin-top: 95px;"
   class="sidebar-2 position-fixed top-0" >

    <a 
    href="/facebook99">
      <div class="sidebar-top">
        <i class="logoL fa-solid fa-house"> </i>
        <span class="brand">Inicio</span>
    </a>
  </div>
  </a>

  <div class="sidebar-center">
    <ul class="list">

      <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-user"></i>
          <span class="list-item-text">Perfil</span>
        </li>
      </a>

      <a href="Eventos.html">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-calendar"></i>
          <span class="list-item-text">envetos</span>
        </li>
      </a>

      <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-user-group"></i>
          <span class="list-item-text">Amigos</span>
        </li>
      </a>

      <!-- <a href="#">
        <li class="list-item">
          <i class="list-item-icon fa-solid fa-bomb"></i>
          <span class="list-item-text">P</span>
        </li>
      </a> -->


    </ul>
  </div>
  </div>

  <div class="footer">
    <p>Copyright 2022 AvaDisk</p>
  </div>

  <div id="miModal" class="modal">
            <div class="flex" id="flex">
                <div class="contenido-modal">
                    
                    <div class="emergente-containercom">
                        <div class="public-emer-container">
                            <span class="close" id="close">&times;</span>


                            <div class="user-profile" id="user-profile">
                                <img src="avatars/" alt="">
            
                                    <div>
                                        <a href="perfil.html">
                                        <p></p></a>
                                        <div>
                                        <a href="perfil.html" class="vinculo-e">
                                        <small></small></a></div>
                                    </div>
                                </div>


                            <div class="public-area">
                                
                                <span class="placeholder">Cuentanos tu dia </span>
                                <div class="input-editable" contenteditable="true"></div>            
                            </div>
                
                
                    <div class="emergente-yr12">
                
                    <div class="wrapper-s12">
                        <form class="form-file form_modal" id="posteo_imagen"  method="post"  enctype="multipart/form-data"
                        action="assets/php/actions.php?addpost" >
                        <input type="text" name="post_text" id="post_textarea" hidden />
                        <input type="file"  name="post_img" id="select_post_img" 
                        class="file-input" hidden>
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Browse File To upload</p>
                        </form>
                        <section class="progress-area"></section>
                        <section class="uploaded-area"></section>
                    </div>
                
                </div>
                
                
                <div class="privacy">
                    <i class="fas fa-globe-asia"></i>
                    <span>Every can reply</span>
                </div>
                <div class="footer-box">
                    <ul class="footer-icons">
                        <li><i class="far fa-file-image"></i></li>
                        <li><i class="fas fa-map-marker-alt"></i></li>
                        <li><i class="far fa-grin"></i></li>
                        <li><i class="far fa-calendar"></i></li>
                        <li><i class="fas fa-user"></i></li>
                    </ul>
                </div>
                <div class="puclic-limits">
                    <span class="counter-limit">400</span>
                    <button type="submit" form="posteo_imagen" class="public-btn ">Publicar</button>
                </div>
                </div>
                <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
         
                </div>
                </div>
                </div>
                </div>
                
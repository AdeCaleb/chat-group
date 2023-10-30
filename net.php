<?php


include 'db_connect.php';

session_start();
if(isset($_SESSION['username'])){
   
}else{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESEAUX SOCIAUX</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>

  <main>


    <div class="content-left">
      <div class="content-left-nav">
        <label>New Groupe</label>
        <svg id="btn_addGroup" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
          class="w-6 h-6">
          <path fill-rule="evenodd"
            d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
            clip-rule="evenodd" />
        </svg>


        <svg id="btn_close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>

      <div class="content-left-main">
        <form action="" method="POST">
          <svg class="search_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6">
            <path fill-rule="evenodd"
              d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
              clip-rule="evenodd" />
          </svg>

          <input type="search" name="message" id="message" placeholder="search...">

        </form>

        
        <?php
        
        $requet = $conn->query("SELECT * FROM groupall");
          $requet = $requet->fetch();
          $group=$requet['name_groupAll'];
          $sch_groupe=explode(" ",$requet['name_groupAll']);

          if(count($sch_groupe)>2){ $sch_groupe_=$sch_groupe[0][0];$sch_groupe_=$sch_groupe_."".$sch_groupe[1][0];}else{$sch_groupe_=$sch_groupe[0][0];$sch_groupe_=$sch_groupe[0][1]."".$sch_groupe_;}
          $sch_groupe_=strtoupper($sch_groupe_);
          $group_=strtoupper($group);
          echo "<div class=\"name_group atif_group\">
                <span><label>$sch_groupe_</label> $group</span>
                </div>";
        
        
        
        ?>
        
        
        <div class="name_group">
          <span><label>G2</label> GROUPE 2</span>
        </div>
        <div class="name_group">
          <span><label>G3</label> GROUPE 3</span>
        </div>


      </div>

      <div class="param">
        <div class="d-flex">
          <img src="/image/6noSHuprqylAI-s_8GqFIA.webp" alt="profil">

          <p style="margin-left: 20px;width:72px; overflow:hidden; cursor:pointer;">...<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{header("location:login.php");}    ?></p>

        </div>

        <svg class="iconPar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>


      </div>

      <div class="par_m">
        <a href="deconnexion.php">Deconnexion</a>
      </div>
    </div>

    <div class="content-right">
      <div class="content-right-nav">
        <svg width="90px" height="90px" style="color:white;" id="menu_responsive" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>

        <span>GROUPE 1</span>
      </div>


      <div class="contener">
        <div class="message">
          <div class="message-content">

            <div class="message-amis">
              <img src="image/6noSHuprqylAI-s_8GqFIA.webp" alt="profil">
              <div class="message-amis-right">
                <span>adelinhounhoui1@gmail.com</span> <span class="messageDate">29 juillet 2023</span><br>
                <p class="messagePublie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat impedit
                  necessitatibus quae excepturi possimus animi quidem, numquam fugit omnis, odit in iste, veniam
                  dignissimos dolorum ea tempore eum atque inventore.</p>
              </div>
            </div>

            <div class="message-amis">
              <img src="image/a-beautiful-girl-with-gray-hair-and-lucxy-neckless-generated-by-Fotor-AI.webp"
                alt="profil">
              <div class="message-amis-right">
                <span>adelinhounhoui2@gmazil.com</span> <span class="messageDate">29 juillet 2023</span><br>
                <p class="messagePublie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat impedit
                  necessitatibus quae excepturi possimus animi quidem, numquam fugit omnis, odit in iste, veniam
                  dignissimos dolorum ea tempore eum atque inventore.</p>
              </div>
            </div>


            <div class="separ">
              <hr class="hrLeft">Aout
              <hr>
            </div>


            <div class="message-amis">
              <img src="image/6noSHuprqylAI-s_8GqFIA.webp" alt="profil">
              <div class="message-amis-right">
                <span>adelinhounhoui1@gmazil.com</span> <span class="messageDate">28 Aout 2023</span><br>
                <p class="messagePublie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat impedit
                  necessitatibus quae excepturi possimus animi quidem, numquam fugit omnis, odit in iste, veniam
                  dignissimos dolorum ea tempore eum atque inventore.</p>
              </div>
            </div>

            <div class="message-amis">
              <img src="image/a-beautiful-girl-with-gray-hair-and-lucxy-neckless-generated-by-Fotor-AI.webp"
                alt="profil">
              <div class="message-amis-right">
                <span>adelinhounhoui2@gmazil.com</span> <span class="messageDate">28 Aout 2023</span><br>
                <p class="messagePublie">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat impedit
                  necessitatibus quae excepturi possimus animi quidem, numquam fugit omnis, odit in iste, veniam
                  dignissimos dolorum ea tempore eum atque inventore. Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Laudantium distinctio et illum! Tenetur iusto sunt iure unde alias neque natus consectetur hic,
                  nesciunt nemo sint placeat cumque, saepe rerum sequi? Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quas iste sed fugiat dignissimos unde commodi aliquam praesentium et ullam, expedita
                  cumque quisquam numquam? Error nesciunt saepe, facere at soluta est.</p>
              </div>
            </div>

            <div>
            </div>
            <div class="champ_input input_desktop">
              <form action="" id="message" method="POST">

                <input type="text" name="message" id="message">
                <svg id="send_message" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-6 h-6">
                  <path
                    d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                </svg>



              </form>



            </div>
          </div>



        </div>




        <section class="boite_add_group">
          <form action="" method="POST" id="form_add_group">
            <div class="contener_form_add_group">
              <input type="text" name="nameGroup" placeholder="Nom du group">
              <input type="submit" value="Enregistrer">
            </div>
          </form>
        </section>
        <div class="input_mobile">
          <form action="" id="message" method="POST">

            <textarea name="message" id="message" placeholder="Entrer un message..."></textarea>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path
                d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
            </svg>



          </form>
        </div>

  </main>



  <script>
    let iconPar = document.querySelector(".iconPar")
    let par_m = document.querySelector(".par_m")
    let content_left_main = document.querySelector(".content-left-main")
    let content_right = document.querySelector(".content-right")
    let btn_addGroup = document.querySelector("#btn_addGroup")

    iconPar.onclick = () => {

      par_m.style.display = "inherit"


    }


    par_m.onblur = () => {
      par_m.style.display = "none"

    }

    content_left_main.onclick = () => {
      par_m.style.display = "none"
    }

    content_right.onclick = () => {
      par_m.style.display = "none"
    }

    btn_addGroup.onclick = () => {
      document.querySelector("section.boite_add_group").style.display = "flex";
    }

    /*document.querySelector("section").onclick = () => {
      document.querySelector("section.boite_add_group").style.animation = "closeaddGroup 0.2s linear";
      setTimeout(() => {
        document.querySelector("section.boite_add_group").style.display = "none";
        document.querySelector("section.boite_add_group").style.animation = "oppenaddGroup 0.2s linear";
      }, 200);
    }*/

    document.querySelector("section.boite_add_group form div input").onblur = () => {
      document.querySelector("section.boite_add_group").style.animation = "closeaddGroup 0.2s linear";
      setTimeout(() => {
        document.querySelector("section.boite_add_group").style.display = "none";
        document.querySelector("section.boite_add_group").style.animation = "oppenaddGroup 0.2s linear";
      }, 200);

    }




  </script>
  <script src="main.js"></script>
</body>

</html>
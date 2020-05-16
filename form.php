<!DOCTYPE html>
<html>
<?php 
$pageTitle="Formulář"; 
$description="Tvorba dynamického formuláře."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<body>
    <?php require_once("login-db.php") ?>
    <?php require_once("login.php") ?>
    <?php require_once("roles.php") ?>
    <?php require("block-header.php"); ?>
    <?php require("functions.php") ?>

  <div class="container">
    
    <main>
      
      <div class="container">

        <h2>Dynamický formulář</h2>
        <form id="formular" name="formular" action="vp_dynamicky_formular.php" method="post" accept-charset="utf-8">
          <input type="text" id="pevny_input_text" name="pevny_input_text" value="Toto je hodnota pevny_input_text." />
          <input type="button" id="tlacitko_vytvorit_pole_text" name="tlacitko_vytvorit_pole_text" value="Vytvořit textové pole" onclick="VytvoritPoleTextove();" />
          <input type="button" id="tlacitko_vytvorit_pole_cislo" name="tlacitko_vytvorit_pole_cislo" value="Vytvořit číselní pole" onclick="VytvoritPoleCiselne();" />
          <input type="button" id="tlacitko_obebrat_pole" name="tlacitko_obebrat_pole" value="Odebrat pole" onclick="OdstraniPosledniPole();" />
          <input type="submit" id="tlacitko_odeslat" name="tlacitko_odeslat" value="Odeslat" />
        </form>



        <script>
        var DYNAMICKE_POLE_PORADI = 0;

        function VytvoritPoleTextove() {
          //alert ("Vytvářím textové vytvořené pole " + DYNAMICKE_POLE_PORADI + "...");
          var input = document.createElement('input');
          input.setAttribute("name", "dynamicky_vytvorene_pole_" + DYNAMICKE_POLE_PORADI);
          input.setAttribute("id", "dynamicky_vytvorene_pole_" + DYNAMICKE_POLE_PORADI);
          input.setAttribute("class", "text");
          input.setAttribute("placeholder", "Zadejte název textového pole(" + DYNAMICKE_POLE_PORADI + ").");
          input.setAttribute("type", "text");
          var form = document.getElementById("formular");
          form.appendChild(input);
          DYNAMICKE_POLE_PORADI ++;
        }

        function VytvoritPoleCiselne() {
          //alert ("Vytvářím číselné pole " + DYNAMICKE_POLE_PORADI + "...");
          var input = document.createElement('input');
          input.setAttribute("name", "dynamicky_vytvorene_pole_" + DYNAMICKE_POLE_PORADI);
          input.setAttribute("id", "dynamicky_vytvorene_pole_" + DYNAMICKE_POLE_PORADI);
          input.setAttribute("class", "cislo");
          input.setAttribute("placeholder", "Zadejte název číselného pole (" + DYNAMICKE_POLE_PORADI + ").");
          input.setAttribute("type", "text");
          var form = document.getElementById("formular");
          form.appendChild(input);
          DYNAMICKE_POLE_PORADI ++;
        }

        function OdstraniPosledniPole() {
          DYNAMICKE_POLE_PORADI --;
          alert ("Odstraňuji dynamicky vytvořené pole " + DYNAMICKE_POLE_PORADI + "...");
          var input = document.getElementById("dynamicky_vytvorene_pole_" + DYNAMICKE_POLE_PORADI);
          input.parentNode.removeChild(input);
        }
        </script>


        <?php

        if (isset($_POST["pevny_input_text"]) and strlen ($_POST["pevny_input_text"]) > 0) {
          echo "<h2>Seznam předaných hodnot \$_POST</h2><ol>";
          foreach ($_POST as $index => $hodnota) {
            echo "<li>{$index} => {$hodnota}</li>";
          }
          echo "</ol>";
        }
        ?>
      </div>     
    </main>
  </div>
  <?php require("block-footer.php") ?>
  
</body>
</html>
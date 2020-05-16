<!DOCTYPE html>
<html>
<?php 
$pageTitle="Přesměrování | CRM"; 
$description="Přesměrování na dočasný CRM systém firmy MEDICAL & PHARMA PROMOTION, s.r.o."; 
?>
<?php require("prompts.php"); ?>
<?php require("block-head.php"); ?>
<meta http-equiv="refresh" content="1;url=http://crm.mampocitace.cz">
<script src='https://www.google.com/recaptcha/api.js'></script><script>
    setTimeout(function(){location.href="http://crm.mampocitace.cz"} , 3000);
</script>
<body>
  <div class="page">
    <?php require("check-perm.php"); ?>
    <?php require_once("login-db.php") ?>
    <?php require_once("login.php") ?>
    <?php require("block-header-old.php"); ?>
    <?php require("block-menu-user.php"); ?>
    <div class="container">
        <!--<h1 class="center">Informační systém na ukládání reportů z promoakcí</h1>-->
        <section class="per30">
          <div class="post">    
              <h2 class="title">Za 3 sekundy budete přesměrováni na dočasný systém <a class="red" href="http://crm.mampocitace.cz">crm.mampocitace.cz</a></h2>
          </div>

        </section>
      </div>    
    </main>
    <?php require("block-footer.php") ?>
  </div>
</body>
</html>
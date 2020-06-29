<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style/vitrine.css">
        <title>ISCC</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
        <?php 
        $navigation="contacts";
        include 'header.php'; ?>
        </header>
        <main>
            <h2>Contact</h2>
            <div class="formulaire">
                    <form action="action_page.php">
                  
                      <label for="fname"></label>
                      <input type="text" id="name" name="Name" placeholder="Votre nom">
                  
                      <label for="lname"></label>
                      <input type="text" id="mail" name="e-mail" placeholder="votre email">
                
                      <label for="subject"></label>
                      <textarea id="subject" name="subject" placeholder="Comment améliorer notre site ?" style="height:200px"></textarea>
                  
                      <input type="submit" value="envoyer">
                  
                    </form>
                  </div>
            </div>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>
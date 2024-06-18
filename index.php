<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-moi</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/> <!-- pour le responsive-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="http://fonts.googelsapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/script.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="" role="form"> <!-- htmlspecialchars : eviter le hack XSS -->
                        <div class="row">

                            <div class="col-md-6">
                                <label for="firstname">Prénom<span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre Prénom" value="">
                                <p class="comment"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom<span class="blue"> *</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre Nom">
                                <p class="comment"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email<span class="blue"> *</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Votre Email">
                                <p class="comment"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre Téléphone">
                                <p class="comment"></p>
                            </div>


                            <div class="col-md-12">
                                <label for="message">Message<span class="blue"> *</span></label>
                                <textarea name="message" id="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                                <p class="comment"></p>
                            </div>


                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>

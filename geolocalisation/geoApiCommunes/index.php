<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geoapi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container" id="container">
        <div class="starter-template">

            <form action="" method="post">

                <div class="form-group">
                    <label for="zipcode">Code Postal</label>
                    <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Code postal">
                    <div id="error-message" style="display:none; color:#F55;"></div>
                </div>
                <div class="form-group">
                    <label for="city">Ville</label>
                    <select name="city" id="city" class="form-control">
                        
                    </select>
                </div>
                <button type="sub" class="btn btn-primaty">Envoyer</button>
            </form>
        </div>
    </div><!-- /.container -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="geoApi.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/css/add-article.css">
  <script refer src="./public/js/index.js"></script>
</head>

<body>
  <div class="container">
    <?php require_once 'includes/header.php' ?>
    <div class="content">
      <div class="block p-20 form-container">
        <h1>Ecrire un article</h1>
        <form action="./add-article.php" method="POST">
          <div class="form-control">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title">
            <!-- <p class="text-error"></p> -->
          </div>
          <div class="form-control">
            <label for="image">Image</label>
            <input type="text" name="image" id="image">
            <!-- <p class="text-error"></p> -->
          </div>
          <div class="form-control">
            <label for="title">Catégorie</label>
            <select name="category" id="category" class="category">
              <option value="technology">technologie</option>
              <option value="nature">nature</option>
              <option value="politic">politique</option>
            </select>
            <!-- <p class="text-error"></p> -->
          </div>
          <div class="form-control">
            <label for="title">Contenu</label>
            <textarea name="content" id="content"></textarea>
            <!-- <p class="text-error"></p> -->
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-secondary">Annuler</button>
            <button type="button" class="btn btn-primary">Sauvegarder</button>
          </div>
        </form>
      </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
  </div>
</body>

</html>
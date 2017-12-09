<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../normalize.css" />
        <link rel="stylesheet" type="text/css" href="../../main.css"/>
        <link rel="stylesheet" type="text/css" href="../innernavbar/navbar.css"/>
        <link rel="stylesheet" type="text/css" href="../footer/footer.css"/>
        <?php $currentPage = 'addupdaterecipe.php';?>
    </head>
    <body>    
        <section>
            <div class="content">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <?php include '../innernavbar/navbar.php'?>
                <article>
                    <h1 class="pageTitle">Add Recipes</h1>
                    <form method="post" action="io_submit.php">
                        <fieldset id="personalInformation">
                            <legend>Cocktail Recipe:</legend>
                            <label for="title">Title*:</label>
                            <input id="title" type="text" name="title" placeholder="Cocktail Title" required><p id="title" class="errorMessage" hidden>Recipe Title is not valid.</p><br>
                            <label for="category">Category*:</label>
                            <select id="category" name="category">
                                <option class="default" value="categoryId">Category</option>
                            </select>
                            <br>  
                            <label for="description">Description*:</label>
                            <input id="description" type="text" name="description" placeholder="Describe the drink">
                            <br>
                            <label for="recipe">Recipe*:</label>
                            <br>
                            <textarea id="recipe" type="text" name="recipe" placeholder="Details of the recipe. Include ingredients and amounts where needed." rows="10" cols="30"></textarea>
                        </fieldset>
                        <fieldset id="formSubmission">
                            <input type="submit" value="Save">
                            <label for="resetInput" hidden>Reset</label>
                            <input id="resetInput" type="reset">  
                            <label for="orderTime" hidden>Time</label>
                            <input id="orderTime" type='time' name="time" hidden>
                            <label for="orderDate" hidden>Date</label>
                            <input id="orderDate" type='date' name="date" hidden>
                        </fieldset>
                    </form>
                </article>
                <?php include '../footer/footer.php'?>
            </div>
        </section>
    </body>
</html>
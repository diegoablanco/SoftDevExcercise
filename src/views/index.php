<!DOCTYPE html>
<html lang="es">
<head>
	<title>Software development test</title>
	<meta charset="utf-8">
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
</head>
<body>
	<header>
		<h1>Top 100 Tolkien's books</h1>
	</header>
    <section>
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <form  method="POST">
            <div class="form-group">
                <label for="searchInput">Find by title</label>
                <input type="text" name="search" id="searchInput"class="form-control" aria-describedby="enter title" placeholder="Enter title here">
            </div>
            <button type="submit" class="btn btn-primary">Find</button>
        </form>
        </div>
    </section>
	<section>
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">First Publish Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($model as $book):?>
                        <tr>
                        <th scope="row"><?= $book->id;?></th>
                        <td><?= $book->author;?></td>
                        <td><?= $book->title;?></td>
                        <td><?= $book->publish_year;?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
	</section>
 
</body>
</html>
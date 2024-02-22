<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List 2: PHP ft. JSon edition</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- axios -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js' integrity='sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==' crossorigin='anonymous'></script>

    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- my js -->
    <script src="js/script.js" defer></script>
</head>
<body>

    <div id="app" class="container-cs">
        <h1 class="text-center py-3">Todo List</h1>
        <form action="" method="POST" class="input-group.text">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" placeholder="Inserisci nuovo task...">
                <span class="input-group-text" id="basic-addon2">Inserisci</span>
            </div>
        </form>
        <ul class="rounded p-2">
            <li v-for="task in tasks" key="task.id">{{task.text}}</li>
        </ul>
    </div>

</body>
</html>
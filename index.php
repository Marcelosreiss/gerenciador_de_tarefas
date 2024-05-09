<!-- Comentei essa parte do código por não ter o banco de dados criado -->
<!-- <?php
        // require_once('database/conn.php');
        // $tasks = [];
        // $sql = $pdo->query("SELECT * FROM task ORDER BY id ASC");
        // if ($sql->rowCount() > 0) {
        // $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
        // }
        ?> -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <title>To-do list</title>
    <script src="/src/javascript/animate.js" defer></script>
    <script src="/src/javascript/switchMode.js" defer></script>
</head>

<body class="dark-mode">
    <img src="/src/icons/time.svg" data-animate="icon" class="icon-left-up" alt="">
    <img src="/src/icons/calendar.svg" data-animate="icon" class="icon-right-up" alt="">
    <img src="/src/icons/watch.svg" data-animate="icon" class="icon-left-down" alt="">
    <img src="/src/icons/bell.svg" data-animate="icon" class="icon-right-down" alt="">
    <div id="to_do" data-animate="main">
        <h1 data-animate>Lista de Tarefas</h1>

        <form action="actions/create.php" method="POST" class="to-do-form">
            <input type="text" name="description" placeholder="Escreva sua Tarefa aqui" data-animate="main" required>
            <button type="submit" class="form-button" data-animate="main">
                <div class="button-bg"></div>
                Adicionar
                <i class="fa-solid fa-plus"></i>
            </button>
        </form>

        <div id="tasks">
            <!-- Comentei essa parte do código por não ter o banco de dados criado -->
            <!-- <?php foreach ($tasks as $task) : ?> -->
            <div class="task" data-animate="main">
                <input type="checkbox" name="progress" class="progress <?= $task['completed'] ? 'done' : '' ?>" data-task-id="<?= $task['id'] ?>" <?= $task['completed'] ? 'checked' : '' ?>>

                <p class="task-description">
                    <?= $task['description'] ?>
                </p>

                <div class="task-actions">
                    <a class="action-button edit-button">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>

                    <a href="actions/delete.php?id=<?= $task['id'] ?>" class="action-button delete-button">
                        <i class="fa-regular fa-trash-can"></i>
                    </a>
                </div>

                <form action="actions/update.php" method="POST" class="to-do-form edit-task hidden">
                    <input type="text" class="hidden" name="id" value="<?= $task['id'] ?>">
                    <input type="text" name="description" placeholder="Edit your task here" value="<?= $task['description'] ?>">
                    <button type="submit" class="form-button confirm-button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                </form>
            </div>
            <!-- Comentei essa parte do código por não ter o banco de dados criado -->
            <!-- <?php endforeach ?> -->
        </div>
    </div>
    <div class="mode-switch">
        <div class="mode-selected">
        <img src="/src/icons/dark-mode.svg" class="dark-mode-icon" width="28" alt="">
        <img src="/src/icons/light-mode.svg" class="light-mode-icon" hidden width="28" alt="">
        </div>
        <label>
            <input type="radio" name="mode" id="dark-mode" checked hidden>
        </label>
        <label>
            <input type="radio" name="mode" id="light-mode" hidden>
        </label>
    </div>

    <script src="src/javascript/script.js"></script>
</body>

</html>
<?php
function searchAbstract($abstract, $keyword) {
    return stripos($abstract, $keyword) !== false ? "Keyword '$keyword' found" : "Keyword '$keyword' not found";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keyword Search</title>
</head>
<body>
    <h2>Keyword Search in Research Abstracts</h2>
    <form method="post">
        Abstract: <textarea name="abstract"></textarea><br>
        Keyword: <input type="text" name="keyword"><br>
        <input type="submit" name="search" value="Search">
    </form>
    <?php
    if (isset($_POST['search'])) {
        echo searchAbstract($_POST['abstract'], $_POST['keyword']);
    }
    ?>
</body>
</html>
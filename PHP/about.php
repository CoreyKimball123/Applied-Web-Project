<?php
require_once 'settings.php';
$conn = new mysqli($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$contributions = mysqli_query($conn, "SELECT * FROM member_contributions");
$rows = [];
while ($row = mysqli_fetch_assoc($contributions)) {
    $rows[] = $row;
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/about-layout.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About us. Cool Kids Medical group project">
    <meta name="keywords" content="Cool Kids Medical, about us, group project, member contributions">
    <meta name="author" content="Jay, Corey, Awer, Emma">

    <title>About Us</title>
</head>


<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="jobs.html">Jobs</a></li>
            <li><a href="apply.html">Apply</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>
    <h1 style="text-align: center;">About Us</h1>
    <header>
        <nav>
            <a href="#MC">Member Contributions</a>
            <a href="#tables">Fun Facts Table</a>
            <a href="#AOC">Acknowledgement of Country</a>
        </nav>
        <hr />
    </header>

    <h2 style="text-align: center;">Cool Kids Medical</h2>
    <ul style="text-align: center;"></ul>
    <li style="text-align: center;">Thursday</li>
    <ul style="text-align: center;"></ul>
    <li style="text-align: center;">10:30 AM</li>
    </ul>
    </li>
    </ul>

    <h3 style="text-align: center;">Quote</h3>
    <p style="text-align: center;">Seeing is Believing. 百聞は一見にしかず-Jay</p>
    <p style="text-align: center;">Believe in yourself, anything is possible. Credi in te stesso, tutto è possibile-Corey</p>
    <p style="text-align: center;">Everything has beauty, but not everyone sees it. كل شيء فيه جمال، لكن ليس كل شخص يراه-Awer</p>
    <p style="text-align: center;">Simply lovely. Gewoonweg heerlijk-Emma</p>

    <h3 id="MC">Member Contributions</h3>
    <dl>
        <dt id="NM">Jay</dt>
        <dd id="SI">Student ID: 1065Xxxxxx</dd>
        <dd id="PG">Apply.html</dd>
        <dt id="NM">Corey</dt>
        <dd id="SI">Student ID: 106505190</dd>
        <dd id="PG">Index.html</dd>
        <dt id="NM">Awer</dt>
        <dd id="SI">Student ID: 105840395</dd>
        <dd id="PG">Jobs.html</dd>
        <dt id="NM">Emma</dt>
        <dd id="SI">Student ID: 106512064</dd>
        <dd id="PG">About.html</dd>
        <dt id="NM">All members</dt>
        <dd id="PG">Participated in the design and CSS of the website</dd>
    </dl>

    <figure>
        <img src="images/group-photo.png" alt="Photo of our group" title="Filesize 222kb " />
        <figcaption>Our group photo</figcaption>
    </figure>


    <table id="tables">
        <caption><strong>
                <h3>Fun Facts Table</h3>
            </strong></caption>
        <thead>
            <tr>
                <th rowspan="2" scope="col">Questions</th>
                <th colspan="4" scope="col">Names</th>
            </tr>
            <tr>
                <th scope="row">Jay</th>
                <th scope="row">Corey</th>
                <th scope="row">Awer</th>
                <th scope="row">Emma</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="name" scope="row">Favourite_movie</th>
                <?php foreach ($rows as $row) {
                    if ($row['Favourite_Movie'] === 'NULL') { ?>
                        <td><?php echo htmlspecialchars($row['favourite_movie']); ?></td>
                <?php }
                } ?>
            </tr>
            <tr>
                <th class="name" scope="row">Favourite_video_game</th>
                <?php foreach ($rows as $row) {
                    if ($row['Favourite_Video_Game'] === 'NULL') { ?>
                        <td><?php echo htmlspecialchars($row['favourite_video_game']); ?></td>
                <?php }
                } ?>
            </tr>
            <tr>
                <th class="name" scope="row">Favourite music genre</th>
                <?php foreach ($rows as $row) {
                    if ($row['Favourite_Music_Genre'] === 'NULL') { ?>
                        <td><?php echo htmlspecialchars($row['favourite_music_genre']); ?></td>
                <?php }
                } ?>
            </tr>
    </table>

    <table>
        <caption><strong>
                <h3>Member contributions</h3>
            </strong></caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Student ID</th>
                <th>Page</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($column = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($column['name']); ?></td>
                    <td><?php echo htmlspecialchars($column['student_id']); ?></td>
                    <td><?php echo htmlspecialchars($column['page']); ?></td>
                    <td><?php echo htmlspecialchars($column['details']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <hr />
    <footer id="AOC">
        <h3>Acknowledgement of Country</h3>
        <p>We would like to acknowledge the traditional custodians of the land on which we learn, work and live, the Wurundjeri people of the Kulin Nation. We pay our respects to their Elders past, present and emerging and extend our respect to all Aboriginal and Torres Strait Islander peoples.</p>
    </footer>
</body>

</html>
</php>
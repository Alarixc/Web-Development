<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marina Mall Online Ticket Booking</title>
</head>
<body>
            <h2 class="title">Book your show today!</h2>
            <form action="validate_store.php" method="post" class="form">
                <div class="input-field">
                    <label for="full_name" class="input-label">Movie Name</label>
                    <br>
                    <input type="text" name="movie_name" class="input" id="movie_name" placeholder="Enter your the movie name">
                </div>
                <div class="input-field">
                    <label for="show1" class="input-label">Show Timings</label>
                    <br>
                    <input type="radio" name="show1" class="input" id="show1" >FN
                    <input type="radio" name="show1[]" class="input" id="show1">AN
                </div>
                <div class="input-field">
                    Email <br>
                    <input type="text" name="email"  id="email" placeholder="Enter your email">
                </div>
                <div class="input-field">
                Date <br>
                <input type="text" name="date" id = "date">
                </div>
                <div class="input-field">
                    Number of tickets <br>
                   <input type="text" id="no" name="no">
                </div>
                <input type="submit" name="submit" value="Book">
            </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../views/assets/CSS/Feedback.css">
</head>

<body>
    <div class="vid-container">
        <div class="inner-container">
            <div class="box">
                <h1>FeedBack</h1>
                <form action="../models/WebFeedback.php" method="POST">
                    <input type="hidden" name="sender_id" value="sender_id_goes_here" />             
                    <input type="number" id="rating" name="rating" min="1" max="5" placeholder="Rate" />
                    <input type="text" name="message" placeholder="Message" />
                    <button type="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>



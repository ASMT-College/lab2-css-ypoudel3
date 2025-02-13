<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marty's Ultimate Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            background-color:lightgreen;
        }

        .header {
            background: lightgreen;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .news, .events {
            width: 15%;
            padding: 10px;
            font-weight: bold;
        }
        .news{
            text-align:center;
        }

        .news p{
            background: yellow;
           
        }

        .events {
            background: lightblue;
            text-align: center;
        }

        .main-content {
            flex-grow: 1;
            background: lightgreen;
            padding: 10px;
        }

        .main-content p {
            margin: 10px 0;
            border-bottom: 1px solid black;
            padding-bottom: 5px;
        }

        .highlight {
            color: black;
            padding: 2px 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">Marty's Ultimate Page</div>
        
        <div class="content-wrapper">
            <!-- Left Sidebar -->
            <div class="news">
                <h1>News</h1>
                <p>Ultimate frisbee declared an Olympic sport</p>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <p>Welcome to my ultimate page! Here we have news,</p>
                <p><span class="highlight">2008 College and HS Westerns</span></p>
                <p><span class="highlight">College</span> Championships will be in Boulder, CO...</p>
                <p><span class="highlight">Annual Members Meeting</span></p>
                <p><span class="highlight">The</span> Annual Members...</p>
            </div>

            <!-- Right Sidebar -->
            <div class="events">
                <h1>Events</h1>
                <p>January</p>
                <p>February</p>
                <p><span class="highlight">December</span></p>
            </div>
        </div>
    </div>

</body>
</html>
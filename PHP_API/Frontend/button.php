<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <button class="btn btn-success" onclick="getdata()">Data</button>
        <div id="button">
            <ul>

            </ul>

        </div>
    </div>


    <script>
        async function getdata() {
            const response = await fetch("http://localhost/php/Work/PHP_API/Backend/data");
            console.log(response)
            const data = await response.json();
            console.log(data.Data);
            let Htmllist = ""
            data.Data.forEach(element => {
                console.log(element);
                Htmllist += `<li>${element.username}</li>
                <li>${element.email}</li>
                <li>${element.mobileno}</li>`





            });
            document.getElementById("button").innerHTML = Htmllist

        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
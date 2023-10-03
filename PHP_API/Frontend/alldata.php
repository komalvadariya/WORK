<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table>
            <h3>Alldata</h3>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobileno</th>
                    <th>Gender</th>
                    <th>Hobby</th>
                </tr>
            </thead>
            <tbody id="alldata">

            </tbody>
        </table>


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
                Htmllist += `<tr><td>${element.username}</td>
                <td>${element.email}</td>
                <td>${element.mobileno}</td>
                <td>${element.gender}</td>
                <td>${element.hobby}</td>

    
                
                </tr>`


            });
            document.getElementById("alldata").innerHTML = Htmllist

        }
        getdata();
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Adri's to do list</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div id="myDIV" class="header">
    <h2>TO DO LIST</h2>
    <input type="text" id="myInput" placeholder="Task...">
    <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
    <li>Acheter du pain</li>
    <li>Payer les factures</li>
    <li>Allez courir</li>
    <li>Faire les courses</li>
    <li>Lire un livre</li>
    <li>Comprendre php</li>
</ul>

<div class="container">
    <div class="row">
        <div class="col-9">
Inscription à la newsletter pour voir mes soudains progrès :
<form action="writer.php" method="post">
    Pseudo  <input type="text" name="pseudo" > </br>
    Email  <input type="email" name="email" > </br>
    Mot de passe<input type="password" name="password" > </br>
    Vérification de mot de passe<input type="password" name="password_retype"> </br>
    <input type="submit" name="connexion">
</form>
        </div>
    </div>
</div>
<?php
if (isset($erreur)) echo '<br /> erreur <br />',$erreur;
?>


<script>
    var myNodelist = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
    }

    // Click on a close button to hide the current list item
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
        }
    }

    // Add a "checked" symbol when clicking on a list item
    var list = document.querySelector('ul');
    list.addEventListener('click', function(ev) {
        if (ev.target.tagName === 'LI') {
            ev.target.classList.toggle('checked');
        }
    }, false);

    // Create a new list item when clicking on the "Add" button
    function newElement() {
        var li = document.createElement("li");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something!");
        } else {
            document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
    }
</script>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        /* Style the close button */
        .topright {
            float: right;
            cursor: pointer;
            font-size: 28px;
        }

        .topright:hover {color: red;}
    </style>
</head>
<body>



<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'contacts')" id="defaultOpen">Contacts</button>
    <button class="tablinks" onclick="openCity(event, 'lead')">Leads</button>
    <button class="tablinks" onclick="openCity(event, 'accaunt')">Accaunts</button>
    <button class="tablinks" onclick="openCity(event, 'opportunities')">Opportunities</button>
    <button class="tablinks" onclick="openCity(event, 'users')">Users</button>
    <button class="tablinks" onclick="openCity(event, 'tasks')">Tasks</button>
    <button class="tablinks" onclick="openCity(event, 'notes')">Notes</button>
</div>

<div id="contacts" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>



    <?php include 'contacts.php'; ?>


</div>

<div id="lead" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <?php include 'lead.php'; ?>
</div>

<div id="accaunt" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
 <?php include 'accaunt.php' ?>
</div>

<div id="opportunities" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <?php include 'opportunities.php' ?>
</div>

<div id="users" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <?php include 'users.php' ?>
</div>

<div id="tasks" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <?php include 'tasks.php' ?>
</div>

<div id="notes" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <?php include 'notes.php' ?>
</div>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>
